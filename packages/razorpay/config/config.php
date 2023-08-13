<?php
return [

    /**
     * Merchant credentials
     */
    'merchant' => [
        'api_key' => env('RAZORPAY_API_KEY'),
        'secret' => env('RAZORPAY_SECRET'),
        'sandbox' => env('RAZORPAY_SANDBOX'),
    ],

    /**
     * Package name routes
     */
    'routes' => [
        // 'payment_request' => 'razorpay.payment.request',
        // 'payment_confirm' => 'razorpay.payment.confirm',
    ],

];
