<?php

namespace Incevio\Package\SslCommerz\Services;

use App\Models\System;
use App\Services\Payments\PaymentService;
use App\Exceptions\PaymentFailedException;
use Incevio\Package\SslCommerz\Http\HttpClient;
use Illuminate\Http\Request;

class SslCommerzPaymentService extends PaymentService
{
    protected $baseUrl;
    protected $apiUrl;
    protected $storeId;
    protected $storePassword;
    protected $apiUrls;
    protected $apiDomain;
    public $sslClient;

    public function __construct(Request $request)
    {
        $this->sslClient = new HttpClient($request);
        $this->post_data = $request->all();

        parent::__construct($request);
    }

    public function charge()
    {
        $order = $this->order;
        if (is_array($this->order)) {
            $order = $this->order[0];
        }

        if ($order) {
            $cutomerName = $order->customer->name;
            $cutomerEmail = $order->customer_id ? $order->customer->email : $order->email;
            $customerPhone = $order->customer_id ? $order->customer->address->phone : $order->customer_phone_number;
            $customerCountry = $order->shipTo->country->name ?? 'Bangladesh';
            $shippingAddress = $order->shipping_address;
            $shippingCity = $this->request->city ?? $order->shipTo->city ?? 'No';
            $shippingState = $order->shipTo->state->name ?? 'No';
            $shippingZipCode = $this->request->zip_code ?? $order->shipTo->zip_code ?? 'No';
            $shippingPhone = $this->request->phone ?? $order->shipTo->phone ?? 'No';
            $shippingName = $order->shop->name;
            $shippingMethod = optional($order->shippingRate)->name;
            $productName = $order->inventories->first()->title;
        } else {
            $cutomerName = $this->payee->getName();
            $cutomerEmail = $this->payee->email;
            $customerPhone = $this->payee->address->phone;
            $system = System::orderBy('id', 'asc')->first();
            //dd($system->primaryAddress);
            $shippingAddress = $system->primaryAddress->address_line_1;
            $shippingCity = $system->primaryAddress->city;
            $shippingZipCode = $system->primaryAddress->zip_code;
        }

        $requestData = [
            # You cant not pay less than 10
            'total_amount' => $this->amount,
            'currency' => get_currency_code(),
            // tran_id must be unique
            'tran_id' => uniqid(),

            # CUSTOMER INFORMATION

            'cus_name' => $cutomerName ?? 'Customer',
            'cus_email' => $cutomerEmail ?? 'test@test.com',
            'cus_add1' => $shippingAddress ?? 'Default Address',
            'cus_add2' => "",
            'cus_city' => "",
            'cus_state' => "",
            'cus_postcode' => "",
            'cus_country' => $customerCountry ?? 'Bangladesh',
            'cus_phone' => $customerPhone ?? "4345343",
            'cus_fax' => "",

            # SHIPMENT INFORMATION
            'ship_name' => $shippingName ?? 'Default',
            'ship_add1' => $shippingAddress ?? 'Default Address',
            'ship_add2' => "",
            'ship_city' => $shippingCity ?? 'Dhaka',
            'ship_state' => $shippingState ?? 'No',
            'ship_postcode' => $shippingZipCode ?? '1207',
            'ship_phone' => $shippingPhone ?? '435334543',
            'ship_country' => $customerCountry ?? 'Bangladesh',

            'shipping_method' => $shippingMethod ?? 'No',
            'product_name' => $productName ?? 'No',
            'product_category' => "Goods",
            'product_profile' => "physical-goods",

            //            # OPTIONAL PARAMETERS
            //            'value_a' => "ref001",
            //            'value_b' => "ref002",
            //            'value_c' => "ref003",
            //            'value_d' => "ref004",
        ];

        $this->sslClient->setParams($requestData);

        // Now, call the Gateway API
        $response = $this->sslClient->callToApi();

        // Here we will define the response pattern
        $formattedResponse = $this->sslClient->formatResponse($response, 'hosted', 'json');
        if (
            isset($formattedResponse['GatewayPageURL']) &&
            $formattedResponse['GatewayPageURL'] != ''
        ) {
            return redirect()->to($formattedResponse['GatewayPageURL']);
        }

        throw new PaymentFailedException($formattedResponse['failedreason']);

        return;
    }

    public function setConfig()
    {
        if ($this->order) {
            // When vendor get paid
            if ($this->receiver == 'merchant') {
                $vendorConfig = $this->order->shop->config->sslcommerz;

                // Set API end point
                $baseUrl = $vendorConfig->sandbox ? config('sslcommerz.sandboxUrl') : config('sslcommerz.liveUrl');

                $this->sslClient->setBaseUrl($baseUrl);
                $this->sslClient->setEnv($vendorConfig->sandbox);

                // Set vendor's API credentials
                $this->sslClient->setStoreId($vendorConfig->store_id);
                $this->sslClient->setStorePassword($vendorConfig->store_password);
            }

            $successUrl = route('sslCommerz.order.success', ['order' => $this->getOrderId()]);
            $failedUrl = route('payment.failed', ['order' => $this->getOrderId()]);
        } else {
            // For deposite payment
            $successUrl = route('wallet.deposit.sslcommerz.success');
            $failedUrl = route('wallet.deposit.failed');
        }

        $this->sslClient->setSuccessUrl($successUrl);
        $this->sslClient->setfailedUrl($failedUrl);
        $this->sslClient->setCancelUrl($failedUrl);

        return $this;
    }

    /**
     * Verify Payment
     */
    public function verifyPaidPayment()
    {
        return $this->sslClient->validatePayment();
    }
}
