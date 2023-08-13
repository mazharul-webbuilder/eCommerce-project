<?php


namespace Incevio\Package\PaypalMarketplace\Http\Requests;


use Illuminate\Http\Request;
use PayPalHttp\HttpRequest;

class VerifyWebhookSignatureRequest extends HttpRequest
{
    /**
     * @var array
     */
    protected $requiredHeaders = [
        'PAYPAL-AUTH-ALGO',
        'PAYPAL-CERT-URL',
        'PAYPAL-TRANSMISSION-ID',
        'PAYPAL-TRANSMISSION-TIME',
        'PAYPAL-TRANSMISSION-SIG',
    ];

    public function __construct()
    {
        parent::__construct('/v2/notifications/verify-webhook-signature', 'POST');

        $this->headers["Content-Type"] = "application/json";
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return $this
     * @throws \Exception
     */
    public function setRequiredParameters(Request $request)
    {
        $headers = array_change_key_case($request->headers->all(), CASE_UPPER);
        if (count(array_intersect_key(array_flip($this->requiredHeaders), $headers)) !== count($this->requiredHeaders)) {
            throw new \Exception('One or more security headers missing. Webhook must contains all of the security parameters.');
        }

        $this->body['auth_algo'] = $headers['PAYPAL-AUTH-ALGO'][0];
        $this->body['cert_url'] = $headers['PAYPAL-CERT-URL'][0];

        $this->body['transmission_id'] = $headers['PAYPAL-TRANSMISSION-ID'][0];
        $this->body['transmission_time'] = $headers['PAYPAL-TRANSMISSION-TIME'][0];
        $this->body['transmission_sig'] = $headers['PAYPAL-TRANSMISSION-SIG'][0];

        $this->body['webhook_id'] = config('paypalMarketplace.webhook_id');
        $this->body['webhook_event'] = $request->all();

        return $this;
    }
}
