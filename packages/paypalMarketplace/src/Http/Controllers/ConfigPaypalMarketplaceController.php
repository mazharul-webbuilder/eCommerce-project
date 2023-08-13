<?php

namespace Incevio\Package\PaypalMarketplace\Http\Controllers;

// use App\Common\Authorizable;
use App\Http\Controllers\Controller;
use Incevio\Package\PaypalMarketplace\Models\ConfigPaypalMarketplace;
use Incevio\Package\PaypalMarketplace\Http\Requests\OnboardingRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ConfigPaypalMarketplaceController extends Controller
{
    // use Authorizable;

    private $model_name;

    private $config;

    /**
     * construct
     */
    public function __construct()
    {
        parent::__construct();

        $this->model_name = trans('app.model.payment_method');
    }

    /**
     * Activate the Paypal Express checkout gateway
     *
     * @return \Illuminate\Http\Response
     */
    public function initiate()
    {
        $config = $this->getPayPalConfig();

        if ($config->merchant_id) {
            return view('paypalMarketplace::update', compact('config'));
        }

        $request = new OnboardingRequest(Auth::user()->merchantId());

        $actionUrl = $request->execute()->getActionUrl('action_url');

        return view('paypalMarketplace::connect', compact('actionUrl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * 
     * @return \Illuminate\Http\Response
     */
    public function connect(Request $request)
    {
        $config = $this->getPayPalConfig();

        $config->update(['account_email' => $request->input('account_email')]);

        return redirect()->to($request->input('action_url'));
    }

    /** 
     * Redirected from PayPal
     * 
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function redirect(Request $request)
    {
        if (
            $request->has('merchantIdInPayPal') &&
            $request->input('permissionsGranted') === 'true'
        ) {
            ConfigPaypalMarketplace::where('shop_id', $request->merchantId)
                ->update(['merchant_id' => $request->merchantIdInPayPal]);

            return redirect()->route('admin.setting.config.paymentMethod.index')
                ->with('success', trans('messages.payment_method_activation_success'));
        }

        return redirect()->route('admin.setting.config.paymentMethod.index')
            ->with('error', trans('messages.payment_method_activation_failed'));
    }

    /**
     * Update the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $config = $this->getPayPalConfig();

        $config->update(['account_email' => $request->input('account_email')]);

        return back()->with('success', trans('messages.updated', ['model' => $this->model_name]));
    }

    /**
     * Deactivate the Paypal Express checkout gateway
     *
     * @return \Illuminate\Http\Response
     */
    public function deactivate()
    {
        $config = $this->getPayPalConfig();

        $config->delete();

        return back()->with('success', trans('messages.updated', ['model' => $this->model_name]));
    }

    private function getPayPalConfig()
    {
        if (Auth::check()) {
            $shop = Auth::user()->merchantId();

            return ConfigPaypalMarketplace::firstOrCreate(['shop_id' => $shop]);
        }

        return null;
    }
}
