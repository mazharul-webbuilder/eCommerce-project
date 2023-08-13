<?php

return [

  /*-----------------------------------------
    |The M-Pesa API Credentials
    |------------------------------------------
    */
  'api' => [
    'consumer_key'   => env('MPESA_CONSUMER_KEY'),
    'consumer_secret' => env('MPESA_CONSUMER_SECRET'),
    'sandbox' => env('MPESA_SANDBOX', true),
  ],

  /*-----------------------------------------
    |Lipa Na Mpesa Online Shortcode
    |------------------------------------------
    */
  'short_code'  => env('MPESA_SHORT_CODE', '174379'),

  /*-----------------------------------------
    |Lipa Na Mpesa
    |------------------------------------------
    */
  'lipa_na_mpesa' => env('MPESA_LIPA_NA', '174379'),

  /*-----------------------------------------
    |Lipa Na Mpesa Online Passkey
    |------------------------------------------
    */
  'mpesa_passkey' => env('MPESA_PASSKEY'),

];
