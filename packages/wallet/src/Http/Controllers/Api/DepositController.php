<?php

namespace Incevio\Package\Wallet\Http\Controllers\Api;

use App\Models\PaymentMethod;
use App\Http\Controllers\Controller;
use App\Http\Resources\PaymentMethodResource;
use Incevio\Package\Wallet\Http\Requests\DepositRequest;
use App\Contracts\PaymentServiceContract;
use Illuminate\Http\RedirectResponse;
use App\Services\Payments\PaymentService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Incevio\Package\Wallet\Models\Transaction;
use Incevio\Package\Wallet\Notifications\Deposit;
use Incevio\Package\Wallet\Jobs\PayoutJob;

class DepositController extends Controller
{

    /**
     * @param DepositRequest $request
     * @param PaymentServiceContract $paymentService
     * @return RedirectResponse
     */
    public function deposit(DepositRequest $request, PaymentServiceContract $paymentService)
    {
        try {
            // When the order has been paid on the app end
            if ($request->input('payment_status') == 'paid' && $request->has('payment_meta')) {
                $response = $paymentService->verifyPaidPayment();
            } else {
                $response = $paymentService->setReceiver('platform')
                    ->setAmount($request->amount)
                    ->setDescription(trans('wallet::lang.deposit_description', [
                        'marketplace' => get_platform_title()
                    ]))
                    ->setConfig()
                    ->charge();
            }
        } catch (\Exception $e) {
            Log::error('Payment failed:: ');
            Log::info($e);

            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }

        // Payment succeed
        if ($response->status == PaymentService::STATUS_PAID) {
            $meta = [
                'type' => Transaction::TYPE_DEPOSIT,
                'description' => trans('wallet::lang.deposit_description', ['marketplace' => get_platform_title(), 'payment' => $request->payment_method])
            ];

            $wallet = Auth::guard('api')->user();

            $trans = $wallet->deposit($request->amount, $meta, true);

            PayoutJob::dispatch($trans, Deposit::class);

            return response()->json([
                'message' => trans('wallet::lang.payment_success')
            ], 200);
        }

        return response()->json([
            'message' => trans('wallet::lang.payment_failed')
        ], 400);
    }

    /**
     * Geting active payment methods for customer
     *
     * @return \Illuminate\Http\Response
     */
    public function getPaymentMethods()
    {
        $paymentMethods = PaymentMethod::find(get_from_option_table('wallet_payment_methods', []));

        return PaymentMethodResource::collection($paymentMethods);
    }
}
