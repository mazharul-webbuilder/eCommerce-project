<?php

namespace Incevio\Package\PaypalMarketplace\Services;

use Illuminate\Http\Request;
use PaypalMerchant\Requests\VerifyWebhookSignatureRequest;
use Incevio\Package\PaypalMarketplace\Http\Requests\PaypalClientRequest;

class WebhookHandlerService
{
    /**
     * Verify this webook actually sent by Paypal.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return bool
     * @throws \Exception
     */
    public function verify(Request $request)
    {
        $paypalRequest = new VerifyWebhookSignatureRequest();
        $paypalClient = new PaypalClientRequest();
        $paypalRequest->setRequiredParameters($request);
        $response = $paypalClient->execute($paypalRequest);

        return $response->result->verification_status == "SUCCESS";
    }
}
