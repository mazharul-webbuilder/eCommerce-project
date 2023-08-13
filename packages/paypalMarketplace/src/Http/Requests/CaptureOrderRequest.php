<?php

namespace Incevio\Package\PaypalMarketplace\Http\Requests;

class CaptureOrderRequest extends PaypalHttp
{
    /**
     * SellerOrderCaptureRequest constructor.
     */
    public function __construct($orderId)
    {
        parent::__construct("/v2/checkout/orders/$orderId/capture", 'POST');
    }
}
