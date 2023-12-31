<?php

namespace Incevio\Package\FacebookLogin\Http\Controllers;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\User as OAuthTwoUser;

class FacebookLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
        $this->middleware('guest:web')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function socialLogin($provider)
    public function redirectToProvider()
    {
        $socialite = Socialite::driver('facebook');

        return $socialite->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            $socialUser = $this->getSocialUser('facebook');
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            Log::info($e);

            $response = json_decode($e->getResponse()->getBody()->getContents(), true);

            $msg = ['msg' => $response['error']['message'] ?? $response['error'] ?? 'Error'];

            return redirect()->route('customer.login')
                ->withErrors(trans('theme.notify.authentication_failed', $msg));
        }

        $customer = $this->getLocalUser($socialUser);

        Auth::guard('customer')->login($customer);

        return redirect()->intended('/')
            ->with('success', trans('theme.notify.logged_in_successfully'));
    }

    /**
     * Return the socialite user from the $provider
     *
     * @param $provider
     * @return void
     */
    protected function getSocialUser($facebook, $token = null)
    {
        $socialite = Socialite::driver('facebook');

        // If the the token is set then get the user from token
        if ($token) {
            return $socialite->userFromToken($token);
        }

        return $socialite->stateless()->user();
    }

    /**
     * @param OAuthTwoUser $socialUser
     * @return User|null
     */
    protected function getLocalUser(OAuthTwoUser $socialUser): ?Customer
    {
        $user = Customer::where('email', $socialUser->email)->first();

        if (!$user) {
            $user = $this->registerSocialUser($socialUser);
        }

        return $user;
    }

    /**
     * @param OAuthTwoUser $socialUser
     * @return User|null
     */
    protected function registerSocialUser(OAuthTwoUser $socialUser): ?Customer
    {
        $customer = new Customer;
        $customer->name = $socialUser->getName() ?? request()->fullName ?? 'Social User';
        $customer->nice_name = $socialUser->getNickname();
        $customer->email = $socialUser->getEmail();
        $customer->active = 1;
        $customer->save();

        // Get avatar if possible
        $avatar = $socialUser->avatar_original ?? $socialUser->getAvatar();
        if ($avatar) {
            $customer->saveImageFromUrl($avatar);
        }

        return $customer;
    }
}
