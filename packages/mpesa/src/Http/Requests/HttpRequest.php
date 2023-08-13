<?php

namespace Incevio\Package\MPesa\Http\Requests;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Exceptions\PaymentConfigInvalid;

class HttpRequest
{
    private $base_url;

    public $consumer_key;

    public $consumer_secret;

    public $lipa_na_mpesa;

    public $mpesa_passkey;

    private $callback_url;

    private $access_token;

    public $reference;

    public $sandbox;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->sandbox = config('mpesa.api.sandbox');

        // Set payment API credentials
        $this->consumer_key = config('mpesa.api.consumer_key');
        $this->consumer_secret = config('mpesa.api.consumer_secret');

        // Lipa Na Mpesa online checkout
        $this->lipa_na_mpesa = config('mpesa.lipa_na_mpesa');

        // Lipa Na Mpesa online checkout password
        $this->mpesa_passkey = config('mpesa.mpesa_passkey');

        // Set callback URL
        $test_callback_url = config('app.callback_base_url');
        if ($this->sandbox && $test_callback_url != '') {
            $this->callback_url = $test_callback_url . '/payment/response/callback';
        } else {
            $this->callback_url = url('payment/response/callback');
        }

        $this->setApiEndPoint();
    }

    /**     
     * Set the reference of the payment
     */
    public function setReference($reference = 'order')
    {
        $this->reference = $reference;

        return $this;
    }

    /**     
     * Set vendor API credentials when the receiver is the vendor
     */
    public function setVendorAPIKey(Shop $shop)
    {
        $config = $shop->config->mpesa;

        if ($config) {
            $this->consumer_key = $config->consumer_key;
            $this->consumer_secret = $config->consumer_secret;
            $this->lipa_na_mpesa = $config->lipa_na_mpesa;
            $this->mpesa_passkey = $config->mpesa_passkey;
            $this->sandbox = $config->sandbox;

            // Refresh API endpoint
            $this->setApiEndPoint();
        }

        return $this;
    }

    /**
     * Set payment API end point
     *
     * @return void
     */
    private function setApiEndPoint()
    {
        $mode = $this->sandbox ? 'sandbox' : 'api';

        $this->base_url = "https://{$mode}.safaricom.co.ke";
    }

    /**
     * Process the Transaction
     */
    public function processTransaction($amount, $description = '')
    {
        if (!$this->reference) {
            $this->setReference();
        }

        $timestamp = date('YmdHis');

        // Custommer's MSISDN (12 digits Mobile Number)
        $phone = $this->get_phone_number();

        $body = [
            'TransactionType' => 'CustomerPayBillOnline',
            'BusinessShortCode' => config('mpesa.short_code'),
            'Timestamp' => $timestamp,
            'Password' => base64_encode($this->lipa_na_mpesa . $this->mpesa_passkey . $timestamp),
            'Amount' => $amount,
            'PartyA' => $phone,
            'PartyB' => $this->lipa_na_mpesa, // Shortcode of the receiver
            'PhoneNumber' => $phone,
            'CallBackURL' => $this->callback_url,
            'AccountReference' => $this->reference,
            'TransactionDesc' => $description ?? trans('app.purchase_from', ['marketplace' => get_platform_title()]),
        ];

        $response = $this->makeHttpCall('/mpesa/stkpush/v1/processrequest', $body);

        return $response;
    }

    /**
     * Verify the transaction
     *
     * @param str $transaction
     * @return response
     */
    public function verifyTransaction($transaction)
    {
        $timestamp = date('YmdHis');

        $body = [
            'BusinessShortCode' => config('mpesa.short_code'),
            'CheckoutRequestID' => $transaction,
            'Timestamp' => $timestamp,
            'Password' => base64_encode($this->lipa_na_mpesa . $this->mpesa_passkey . $timestamp),
        ];

        $response = $this->makeHttpCall('/mpesa/stkpushquery/v1/query', $body);

        return $response;
    }

    /**
     * Make Http Call
     */
    public function makeHttpCall($url, $body)
    {
        if (!$this->access_token) {
            $this->setAccessToken();
        }

        Log::info('Making Http Call To:: ' . $this->base_url . $url);
        Log::info($body);

        $curl = curl_init();
        curl_setopt_array(
            $curl,
            [
                CURLOPT_URL => $this->base_url . $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $this->access_token
                ],
                CURLOPT_POSTFIELDS => json_encode($body)
            ]
        );

        $response = curl_exec($curl);
        $response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($response_code == 200) {
            return $response;
        }

        Log::error('Error response From MPESA:: ');
        Log::error($response);

        $response_data = json_decode($response);
        $error_message = $response_data->errorMessage ?? trans('mpesa::lang.error_response');
        // Log::info($response_data->Envelope->Body->Fault->faultstring);

        throw new PaymentConfigInvalid($error_message, $response_code);

        curl_close($curl);

        return $response;
    }

    /**
     * Get the access token from M-Pesa
     *
     * @return access_token
     */
    public function setAccessToken()
    {
        $credentials = base64_encode($this->consumer_key . ':' . $this->consumer_secret);

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $this->base_url . '/oauth/v1/generate?grant_type=client_credentials',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_HTTPHEADER => [
                'Authorization: Basic ' . $credentials,
                'Content-Type: application/json; charset=utf8'
            ],
        ]);

        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        $response = json_decode($response);

        if ($info["http_code"] == 200) {
            $this->access_token = $response->access_token;

            Log::info('MPESA token created:: ' . $response->access_token);

            return $response->access_token;
        }

        throw new PaymentConfigInvalid("Invalid Consumer key or secret");

        return $response;
    }

    /**
     * Valicdate and return phone number
     */
    private function get_phone_number()
    {
        $phone = $this->request->mpesa_number;

        if (substr($phone, 0, 1) == "+") {
            $phone = str_replace("+", "", $phone);
        }

        // When the prefix code is missing
        if (substr($phone, 0, 1) == "0") {
            $phone = preg_replace("/^0/", "254", $phone);
        }

        // When the prefix code is missing
        if (substr($phone, 0, 1) == "7") {
            $phone = "254{$phone}";
        }

        return $phone;
    }
}
