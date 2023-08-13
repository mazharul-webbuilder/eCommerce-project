<?php

namespace Incevio\Package\PaypalMarketplace\Services;

// use PayPalHttp\HttpException;
use Incevio\Package\PaypalMarketplace\Http\Requests\PaypalHttp;

class OnboardingStatus
{
    /**
     * @var string
     */
    protected $tracking_id;

    public function __construct($tracking_id)
    {
        $this->tracking_id = $tracking_id;
    }

    /**
     * Check onboarding status
     * 
     * @return \PayPalHttp\HttpResponse
     */
    public function check()
    {
        $merchantId = config('paypalMarketplace.partner_merchant_id');

        $request = new PaypalHttp("/v2/customer/{$merchantId}/merchant-integrations?tracking_id={$this->tracking_id}", 'GET');

        return $request->execute();
    }
}
