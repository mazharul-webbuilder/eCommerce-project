<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Events\Shop\ShopCreated;
use App\Http\Requests\Validations\RegisterMerchantRequest;
use App\Http\Resources\MerchantResource;
use App\Jobs\CreateShopForMerchant;
use App\Jobs\SubscribeShopToNewPlan;
use App\Models\System;
use App\Models\User;
use App\Events\Customer\Registered;
use App\Http\Controllers\Controller;
use App\Http\Requests\Validations\RegisterCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Notifications\Auth\CustomerResetPasswordNotification as SendPasswordResetEmail;
use App\Notifications\Auth\SendVerificationEmail as EmailVerificationNotification;
use App\Notifications\Customer\PasswordUpdated as PasswordResetSuccess;
use App\Notifications\SuperAdmin\VerdorRegistered as VerdorRegisteredNotification;
use http\Env\Response;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

// use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Carbon\Carbon;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class AuthController extends Controller
{
    public function register(RegisterMerchantRequest $request)
    {
        $merchant = $this->create($request->all());

        DB::beginTransaction();

        try {
            $merchant->generateToken();
            // Dispatching Shop create job
            CreateShopForMerchant::dispatch($merchant, $request->all());

            Auth::guard()->login($merchant);

            if (is_subscription_enabled()) {
                SubscribeShopToNewPlan::dispatch($merchant, $request->input('plan'));
            }
        } catch (\Exception $e) {

            // rollback the transaction and log the error
            DB::rollback();
            Log::error('Vendor Registration Failed: ' . $e->getMessage());

            // Set error messages:
            $error = new MessageBag();
            $error->add('errors', trans('responses.vendor_config_failed'));

            return response()->json($error);
        }


        // Everything is fine. Now commit the transaction
        DB::commit();

        // Trigger after registration events
        $this->triggerAfterEvents($merchant);

        // Send notification to Admin
        if (config('system_settings.notify_when_vendor_registered')) {
            $system = System::orderBy('id', 'asc')->first();
            $system->superAdmin()->notify(new VerdorRegisteredNotification($merchant));
        }

        return new MerchantResource($merchant);

    }


    /**
     * for login api
     */

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if (Auth::guard('vendor')->attempt($credentials)) {

            $merchant = Auth::guard('vendor')->user();

            $merchant->generateToken();

            return new MerchantResource($merchant);
        }

        return response()->json(['message' => trans('api.auth_failed')], 401);
    }

    /**
     *  log the user out of the application
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {

    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verification_token' => Str::random(40),
        ]);
    }

    /**
     * Trigger some events after a valid registration.
     *
     * @param User $merchant
     * @return void
     */
    protected function triggerAfterEvents(User $merchant)
    {
        // Trigger the systems default event
        event(new \Illuminate\Auth\Events\Registered($merchant));

        // Trigger shop created event
        event(new ShopCreated($merchant->owns));

        // Send email verification notification
        $merchant->notify(new EmailVerificationNotification($merchant));
    }


}
