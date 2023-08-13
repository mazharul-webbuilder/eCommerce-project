<?php
return [

  "apple" => [
    'client_id' => env('APPLE_CLIENT_ID'),
    'client_secret' => env('APPLE_CLIENT_SECRET'),
    'redirect' => env('APP_URL') . '/socialite/customer/apple/callback',
  ],
];
