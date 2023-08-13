<?php

// SSLCommerz configuration

return [
    'sandboxUrl' => "https://sandbox.sslcommerz.com",
    'liveUrl' => "https://securepay.sslcommerz.com",

    'api' => [
        'store_id' => env("SSLCOMMERZ_STORE_ID"),
        'store_password' => env("SSLCOMMERZ_STORE_PASSWORD"),
        'sandbox' => env("SSLCOMMERZ_SANDBOX", true),
    ],

    'apiUrl' => [
        'make_payment' => "/gwprocess/v4/api.php",
        'transaction_status' => "/validator/api/merchantTransIDvalidationAPI.php",
        'order_validate' => "/validator/api/validationserverAPI.php",
        'refund_payment' => "/validator/api/merchantTransIDvalidationAPI.php",
        'refund_status' => "/validator/api/merchantTransIDvalidationAPI.php",
    ],

    // Below code not in use

    // 'projectPath' => env('PROJECT_PATH'),
    //    // For Sandbox, use "https://sandbox.sslcommerz.com"
    //    // For Live, use "https://securepay.sslcommerz.com"
    'apiDomain' => env("SSLCOMMERZ_SANDBOX") ? "https://sandbox.sslcommerz.com" : "https://securepay.sslcommerz.com",
    // 'apiDomain' => env("API_DOMAIN_URL", "https://sandbox.sslcommerz.com"),
    // 'api' => [
    //     'store_id' => env("STORE_ID"),
    //     'store_password' => env("STORE_PASSWORD"),
    // ],
    // 'apiUrl' => [
    //     'make_payment' => "/gwprocess/v4/api.php",
    //     'transaction_status' => "/validator/api/merchantTransIDvalidationAPI.php",
    //     'order_validate' => "/validator/api/validationserverAPI.php",
    //     'refund_payment' => "/validator/api/merchantTransIDvalidationAPI.php",
    //     'refund_status' => "/validator/api/merchantTransIDvalidationAPI.php",
    // ],
    'connect_from_localhost' => env("SSLCOMMERZ_SANDBOX", true), // For Sandbox, use "true", For Live, use "false"
    'success_url' => '/success',
    'failed_url' => '/fail',
    'cancel_url' => '/cancel',
    'ipn_url' => '/ipn',
];
