<?php

namespace Incevio\Package\PaypalMarketplace\Http\Requests;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalHttp\HttpRequest;

class PaypalHttp extends HttpRequest
{
    /**
     * @var \PayPalHttp\HttpResponse
     */
    public $response;

    /**
     * PaypalClientRequest constructor.
     */
    public function __construct($endpoint, $verb = "POST")
    {
        parent::__construct($endpoint, $verb);

        $this->headers["Content-Type"] = "application/json";

        // minimal or representation
        $this->headers["Prefer"] = "return=representation";
    }

    /**
     * Execute the call
     * 
     * @return \PayPalHttp\HttpResponse
     */
    public function execute()
    {
        $id = config('paypalMarketplace.api.client_id');
        $secret = config('paypalMarketplace.api.secret');

        $env = config('paypalMarketplace.api.sandbox', true) ?
            new SandboxEnvironment($id, $secret) :
            new ProductionEnvironment($id, $secret);

        $this->response = (new PayPalHttpClient($env))->execute($this);

        return $this;
    }

    /**
     * Get the action URL from the response.
     *
     * @return string|bool
     * @throws \Exception
     */
    public function getActionUrl($type = 'capture')
    {
        if (empty($this->response)) {
            throw new \Exception('Please call execute before calling getActionUrl method.');
        }

        foreach ($this->response->result->links as $link) {
            if ($link->rel === $type) {
                return $link->href;
            }
        }

        throw new \Exception('Sorry something is wrong with API request. ' . $this->response->statusCode);

        return false;
    }
}
