<?php

namespace Incevio\Package\Subscription\Commands;

use Exception;
use Carbon\Carbon;
use App\Models\Subscription;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Incevio\Package\Subscription\Jobs\SubscriptionJob;
use Incevio\Package\Subscription\Notifications\ExpireSoonNotice;
use Incevio\Package\Subscription\Notifications\InsufficientBalance;
use Incevio\Package\Subscription\Notifications\SubscriptionBillingFailedNotice;

// use Incevio\Package\Subscription\Models\Wallet;
// use Incevio\Package\Subscription\Services\DbService;

/**
 * Class RefreshBalance.
 */
class ChargeSubscriptionFee extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:recheck';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check all subscriptions and charge expired one';

    /**
     * @return void
     * @throws
     */
    public function handle(): void
    {
        $now = Carbon::now();
        $fake_expiry_time = config('subscription.default.charge_minute_before_expiry');

        // Get all subscription plans
        $subsc_plans = DB::table('subscription_plans')->select('cost', 'plan_id')->get();

        Subscription::query()->each(
            static function (Subscription $subscription) use ($now, $fake_expiry_time, $subsc_plans) {
                if ($subscription->provider == 'wallet') {
                    $owner = $subscription->owner;
                    $cost = 0;
                    $real_expiry_time = null;
                    $billing_time = $now->addMinutes($fake_expiry_time);

                    if ($owner) {
                        Log::info('Checking subscription for shop: ' . $subscription->owner->name);
                    } else {
                        Log::error('Checking subscription FAILED! The shop is not found in the database. Shop ID= ' . $subscription->shop_id);

                        return; // Skip this iteration
                    }

                    if ($subscription->onTrial()) {
                        Log::info('Subscription onTrial');
                        $real_expiry_time = $subscription->trial_ends_at;
                    } elseif ($subscription->onGracePeriod()) {
                        Log::info('Subscription onGracePeriod');
                        $real_expiry_time = $subscription->ends_at;
                    } elseif ($subscription->ended()) {
                        Log::info('Subscription ended');
                        $real_expiry_time = $subscription->ends_at;
                    } elseif ($subscription->trial_ends_at && $subscription->trial_ends_at->isPast()) {
                        Log::info('Subscription trial ended');
                        $real_expiry_time = $subscription->trial_ends_at;
                    } elseif ($subscription->ends_at->isPast()) {
                        Log::info('Subscription ended');
                        $real_expiry_time = $subscription->ends_at;
                    }

                    if ($real_expiry_time) {
                        Log::info('Subscription ending at: ' . $real_expiry_time);
                    }

                    // Charge vendor wallet if the expiry time arrived
                    if ($real_expiry_time && $real_expiry_time->lte($billing_time)) {
                        try {
                            Log::info('Billing: ' . $subscription->shop_id ?? 'Shop Not Found');

                            // For successful charges this will be the next billing time
                            $next_billing_at = $real_expiry_time->addMonth();

                            // Check the the shop has custom fee set for subs
                            $cost = $owner->custom_subscription_fee;
                            Log::info('Custom subscription fee: ' . $cost);

                            // When no custom subscription fee set for the vendor
                            // Get subscription fee amount
                            if ($cost === null) {
                                $cost = $subsc_plans->where('plan_id', $subscription->stripe_id)
                                    ->first()->cost;

                                Log::info('Cost of the subscription plan: ' . $cost);
                            }

                            if ($cost == 0) {
                                Log::info('cost 0: ' . $cost);
                                // The vendor set for free subscription, just update the end date
                                $subscription->ends_at = $next_billing_at;
                                $subscription->trial_ends_at = null;
                            } else {
                                // Check balance
                                if ($owner->balance < $cost) {
                                    Log::info('Subscription charges (shop:: ' . $subscription->shop_id . ') failed beacuse of insufficient balance.');

                                    // SubscriptionJob::dispatch($owner, SubscriptionBillingFailedNotice::class, $real_expiry_time);
                                    // Send notice to vendor
                                } else {
                                    $meta = [
                                        'type' => trans('app.subscription_fee'),
                                        'subscription_id' => $subscription->stripe_id,
                                        'description' => trans('subscription::lang.subscription_fee_for', ['subscription' => $subscription->name, 'from' => $real_expiry_time, 'to' => $next_billing_at])
                                    ];

                                    $owner->withdraw($cost ? $cost : 0, $meta);

                                    // Payment success, update end time
                                    $subscription->ends_at = $next_billing_at;
                                    $subscription->trial_ends_at = null;
                                }
                            }

                            $subscription->save();
                        } catch (Exception $e) {

                            // Set end time if on trial
                            // if ($subscription->onTrial()) {
                            //     $subscription->ends_at = $subscription->trial_ends_at;
                            //     $subscription->save();
                            // }

                            Log::info('Subscription charges (shop:: ' . $subscription->shop_id . ') failed because of ' . $e->getMessage());
                        }
                    }

                    // Check notification settings
                    $send_notice_before_days_of_expiry = config('subscription.default.send_notice_before_days_of_expiry');

                    // Send notifications
                    if (
                        $cost > 0 &&
                        $real_expiry_time &&
                        is_array($send_notice_before_days_of_expiry) &&
                        in_array($real_expiry_time->diffInDays($now), $send_notice_before_days_of_expiry)
                    ) {
                        Log::info('Sending subscription notifications.....');

                        try {
                            // Read the notification logs
                            $notification_sent_at = $subscription->notification_sent_at ? Carbon::parse($subscription->notification_sent_at)->toDateString() : null;

                            // Check if notification already sent today
                            if (
                                !$notification_sent_at ||
                                $notification_sent_at !== $now->toDateString()
                            ) {
                                SubscriptionJob::dispatch($owner, ExpireSoonNotice::class, $real_expiry_time);

                                if ($owner->balance < $cost) {
                                    SubscriptionJob::dispatch($owner, InsufficientBalance::class, $real_expiry_time);
                                }

                                // Update the notification_sent_at now
                                $subscription->notification_sent_at = $now;
                                $subscription->save();
                            }
                        } catch (\Exception $e) {
                            Log::info('Subscription notification sending Error: ' . $e->getMessage());
                            Log::info($e);
                        }

                        // Send expiring soon notification with number of days and also add warning of low balance
                        // Make sure the notification sent only one time in a day
                    }
                }
            }
        );
    }
}
