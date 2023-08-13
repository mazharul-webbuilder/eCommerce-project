<?php

namespace Incevio\Package\Instamojo\Services;

use App\Services\Payments\PaymentService;
use Illuminate\Http\Request;
use Incevio\Package\Instamojo\Library\Instamojo;
use Exception;

class InstamojoPaymentService extends PaymentService
{
    private $api_key;
    private $auth_token;
    private $baseUrl;
    private $redirectUrl;

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->api_key = config('instamojo.api_key');
        $this->auth_token = config('instamojo.auth_token');
        $this->sandbox = (bool) config('instamojo.sandbox');
    }

    public function setAmount($amount)
    {
        $this->amount = number_format($amount, 2, '.', '');

        return $this;
    }

    public function setConfig()
    {
        // Set redirect Url
        if ($this->order) {
            $this->redirectUrl = route('instamojo.order.redirect', $this->getOrderId());
        } else {
            $this->redirectUrl = route('wallet.deposit.instamojo.success');
        }

        // Get the vendor configs
        if ($this->receiver == 'merchant') {
            $vendorConfig = $this->order->shop->config->instamojo;

            $this->api_key = $vendorConfig->api_key;
            $this->auth_token = $vendorConfig->auth_token;
            $this->sandbox = $vendorConfig->sandbox;
        }

        // Set endpoint
        if ($this->sandbox) {
            $this->baseUrl = 'https://test.instamojo.com/api/1.1/';
        } else {
            $this->baseUrl = 'https://instamojo.com/api/1.1/';
        }


        return $this;
    }

    public function charge()
    {
        try {
            $instamojo = new Instamojo($this->api_key, $this->auth_token, $this->baseUrl);

            $response = $instamojo->paymentRequestCreate([
                'purpose' => $this->description,
                'amount' => $this->amount,
                'buyer_name' => $this->payee ? $this->payee->getName() : $this->request->address_title,
                'email' =>  $this->payee ? $this->payee->email : $this->request->email,
                'phone' => $this->payee ? '' : $this->request->phone,
                'redirect_url' => $this->redirectUrl,
                'send_email' => true,
            ]);
        } catch (Exception $e) {
            return $e;
        }

        return redirect()->to($response['longurl']);
    }

    public function verifyPaidPayment()
    {
        $instamojo = new Instamojo($this->api_key, $this->auth_token, $this->baseUrl);

        $response = $instamojo->paymentRequestPaymentStatus($this->request->payment_request_id, $this->request->payment_id);

        if (is_array($response) && $response['status'] == "Completed") {
            $this->status = self::STATUS_PAID;
            $this->amount = $response['amount'];
        } else {
            $this->status = self::STATUS_ERROR;
        }

        return $this;
    }
}
