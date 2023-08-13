<?php

namespace Incevio\Package\PaypalMarketplace\Http\Requests;

use Illuminate\Support\Facades\Auth;

class OnboardingRequest extends PaypalHttp
{
  /**
   * OnboardingRequest constructor.
   */
  public function __construct($tracking_id = null)
  {
    parent::__construct("/v2/customer/partner-referrals", "POST");

    $tracking_id = $tracking_id ?? Auth::user()->merchantId();

    // $this->headers["Content-Type"] = "application/json";

    $this->body['tracking_id'] = (string) $tracking_id;

    // An array of operations to perform for the customer while they share their data.
    $this->body['operations'] = [
      [
        'operation' => 'API_INTEGRATION',
        'api_integration_preference' => [
          'rest_api_integration' => [
            'integration_method' => 'PAYPAL',
            'integration_type' => 'THIRD_PARTY',
            'third_party_details' => [
              'features' => [
                "PAYMENT",
                "REFUND",
              ],
            ],
          ],
        ],
      ],
    ];

    // An array of PayPal products to which the partner wants to onboard the customer.
    $this->body['products'] = [
      'EXPRESS_CHECKOUT',
    ];

    // All consents that the partner has received from this seller. 
    $this->body['legal_consents'] = [
      [
        // If SHARE_DATA_CONSENT is not granted, PayPal does not store customer data.
        'type' => 'SHARE_DATA_CONSENT',
        'granted' => true,
      ],
    ];

    $this->body['partner_config_override'] = [
      // Set Logo
      'partner_logo_url' => get_logo_url('system', 'full'),

      // The URL to which to redirect the vendor upon completion of the onboarding process.
      'return_url' => config('paypalMarketplace.partner_redirect_url'),

      // The description of the return URL.
      'return_url_description' => trans('paypalMarketplace::lang.redirect_text'),
    ];
  }

  /**
   * setOperations
   * 
   * @param $configurations
   * 
   * @return $this
   */
  public function setOperations(array $configurations): self
  {
    $this->body['operations'] = array_merge($this->body['operations'], $configurations);

    return $this;
  }

  /**
   * @param array $products
   *
   * @return self
   */
  public function setProducts(array $products): self
  {
    $this->body['products'] = $products;

    return $this;
  }

  /**
   * Available options are
   *
   * @param array $configurations
   *
   * @return $this
   */
  public function partnerConfiguration(array $configurations)
  {
    $this->body['partner_config_override'] = $configurations;

    return $this;
  }
}
