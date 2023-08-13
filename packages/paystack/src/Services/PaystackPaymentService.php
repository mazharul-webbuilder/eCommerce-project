<?php

namespace Incevio\Package\Paystack\Services;

use App\Services\Payments\PaymentService;
use App\Exceptions\PaymentConfigInvalid;
use Illuminate\Http\Request;
use Yabacon\Paystack\Exception\ApiException;

class PaystackPaymentService extends PaymentService
{
    private $secret;
    private $payload;
    public $redirectUrl;

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->secret = config('paystack.secret');
        $this->sandbox = config('paystack.sandbox');
    }

    public function charge()
    {
        $paystack = new \Yabacon\Paystack($this->secret);

        try {
            $tranx = $paystack->transaction->initialize($this->payload);
        } catch (ApiException $e) {
            // print_r($e->getResponseObject());
            // die($e->getMessage());
            throw new PaymentConfigInvalid($e->getMessage());
        }

        return redirect()->to($tranx->data->authorization_url);
    }

    public function setConfig()
    {
        $this->setCallbackUrl();

        // Get the vendor configs
        if ($this->receiver == 'merchant') {
            $vendorConfig = $this->order->shop->config->paystack;

            $this->secret = $vendorConfig->secret;
            $this->sandbox = $vendorConfig->sandbox;
        }

        $meta = [];
        $quantity = 1;

        if ($this->order) {
            if (is_array($this->order)) {
                $quantity = array_sum(array_column($this->order, 'quantity'));
                $order_number = implode('-', array_column($this->order, 'order_number'));
                $shipping_address = $this->order[0]->shipping_address;
            } else {
                $quantity = $this->order->quantity;
                $order_number = $this->order->order_number;
                $shipping_address = $this->order->shipping_address;
            }

            $meta = [
                'order_number' => $order_number,
                'custom_fields' => [
                    [
                        'display_name' => "Order Number",
                        'variable_name' => "order_number",
                        'value' => $order_number
                    ], [
                        'display_name' => "Shipping Address",
                        'variable_name' => "shipping_address",
                        'value' => strip_tags($shipping_address)
                    ]
                ]
            ];
        }

        $this->payload = [
            'email' => $this->request->email ?? $this->payee->email ?? $this->order->email,
            'amount' => get_cent_from_doller($this->amount),
            'quantity' => $quantity,
            'orderID' => $this->order ? $this->getOrderId() : null,
            'callback_url' => $this->redirectUrl,
            'metadata' => json_encode($meta),
        ];

        return $this;
    }

    private function setCallbackUrl()
    {
        if ($this->order) {
            $this->redirectUrl = route('paystack.order.success', $this->getOrderId());
        } else {
            $this->redirectUrl = route('wallet.deposit.paystack.success');
        }

        return $this;
    }

    /**
     * Verify Paid Payment
     */
    public function verifyPaidPayment()
    {
        if ($this->request->reference) {
            $paystack = new \Yabacon\Paystack($this->secret);

            $response = $paystack->transaction->verify(['reference' => $this->request->reference]);

            if ($response->status) {
                $this->status = self::STATUS_PAID;
                $this->amount = get_doller_from_cent($response->data->amount);
            } else {
                $this->status = self::STATUS_ERROR;
            }
        }

        return $this;
    }
}
