<?php

namespace Incevio\Package\Razorpay\Http;

use App\Models\Shop;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class RazorpayHttpClient
{
    public $api_key;
    public $secret;
    public $request;
    public $amount;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->api_key = config('razorpay.merchant.api_key');
        $this->secret = config('razorpay.merchant.secret');
    }

    /**     
     * Set vendor API credentials when the receiver is the vendor
     */
    public function setVendorAPIKey(Shop $shop)
    {
        $config = $shop->config->razorpay;

        if ($config) {
            $this->api_key = $config->api_key;
            $this->secret = $config->secret;
        }

        return $this;
    }

    /**
     * Create Razorpay order
     */
    public function createOrder($amount = 0, $currency = Null)
    {
        // Formate the amount value if needed
        if (!is_int($amount)) {
          //  $amount = get_formated_decimal($amount, true, 2);
            $amount = intval($amount * 100);
        }

        $payload = [
            'amount' => $amount,
            'currency' => $currency ?? get_currency_code(),
        ];

        $api = $this->getHttpClient();

        return $api->order->create($payload);
    }

    /** 
     * Vertify the payment
     */
    public function verifySignature($razorpay_order_id)
    {
        try {
            $attributes = array(
                'razorpay_order_id' => $razorpay_order_id,
                'razorpay_payment_id' => $this->request->razorpay_payment_id,
                'razorpay_signature' => $this->request->razorpay_signature
            );

            $client = $this->getHttpClient();

            $client->utility->verifyPaymentSignature($attributes);

            return True;
        } catch (SignatureVerificationError $e) {
            throw new SignatureVerificationError($e->getMessage());
        }

        return False;
    }

    private function getHttpClient()
    {
        return new Api($this->api_key, $this->secret);
    }
}
