<?php

namespace Incevio\Package\FlutterWave\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use App\Services\Payments\PaymentService;
use App\Exceptions\PaymentFailedException;
use App\Http\Requests\Validations\DisputeDetailRequest;

class FlutterWavePaymentService extends PaymentService
{
    private $sec_key;
    private $base_url;
    protected $redirect_url;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->sec_key = config('flutterwave.secret_key');
        $this->base_url = config('flutterwave.base_url');
    }

    public function charge()
    {
        $meta = [];
        $order = $this->order;

        if (is_array($this->order)) {
            $order = $this->order[0];
        }

        if ($order) {
            $cutomerName = $order->customer->name;
            $cutomerEmail = $order->customer_id ? $order->customer->email : $order->email;
            $meta = [
                'price' => $this->amount,
                // 'order_id' => $this->order->id
            ];
        } else {
            $cutomerName = $this->payee->getName();
            $cutomerEmail = $this->payee->email;
        }

        $payload = [
            'tx_ref' => uniqid(),
            'amount' => $this->amount,
            'currency' => get_currency_code(),
            // 'payment_options' => 'card',
            'customer' => [
                'email' => $cutomerEmail,
                'name' => $cutomerName
            ],
            'meta' => $meta,
            'customizations' => [
                'title' => $this->description ?? 'Paying for a sample product',
                'description' => 'sample'
            ],

            'redirect_url' => $this->redirect_url,
        ];

        $response = Http::withToken($this->sec_key)->post($this->base_url . "/payments", $payload)->object();

        if ($response->status == 'success') {
            return Redirect::to($response->data->link);
        }

        return $this;
    }

    public function setConfig()
    {
        if ($this->order) {
            // When vendor get paid
            if ($this->receiver == 'merchant') {
                $vendorConfig = $this->order->shop->config->flutterwave;

                // Set vendor's API credentials
                $this->sec_key = $vendorConfig->sec_key;
            }

            $this->redirect_url = route('flutterwave.order.redirect', ['order' => $this->getOrderId()]);
        } else {
            // For deposite payment
            $this->redirect_url = route('wallet.deposit.flutterwave.redirect');
        }

        return $this;
    }

    /**
     * Verify Payment
     */
    public function verifyPaidPayment()
    {
        $url = $this->base_url . "/transactions/" . $this->request->transaction_id . '/verify';

        $response = Http::withToken($this->sec_key)->get($url)->object();

        if ($response->status == 'success') {
            $this->status = self::STATUS_PAID;
            $this->amount = $response->data->amount;
        } else {
            $this->status = self::STATUS_ERROR;
        }

        return $this;
    }
}
