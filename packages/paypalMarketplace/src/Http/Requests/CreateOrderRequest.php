<?php

namespace Incevio\Package\PaypalMarketplace\Http\Requests;

use App\Models\Order;
use Incevio\Package\PaypalMarketplace\Models\ConfigPaypalMarketplace;

class CreateOrderRequest extends PaypalHttp
{
  protected $fee;
  protected $order;
  protected $orderId;
  protected $purchaseUnit = [];

  /**
   * CreateOrderRequest constructor.
   *
   * @param string $payPalPartnerAttributionId
   */
  public function __construct(Order $order, $orderRouteId)
  {
    parent::__construct("/v2/checkout/orders?", "POST");

    $this->headers["PayPal-Partner-Attribution-Id"] = config('paypalMarketplace.partner_merchant_id');

    $this->body["intent"] = "CAPTURE";

    $this->order = $order;

    $this->orderId = $orderRouteId;
  }

  public function prepare($referenceId = null)
  {
    // Set reference_id
    $this->purchaseUnit['reference_id'] = $referenceId ?? $this->order->order_number;

    // Set seller
    $config = ConfigPaypalMarketplace::find($this->order->shop_id);
    $this->purchaseUnit['payee'] = [
      'email_address' => $config->account_email,
      'merchant_id' => $config->merchant_id,
    ];

    // Set payment instruction
    $this->purchaseUnit['payment_instruction']['disbursement_mode'] = 'INSTANT';

    // if (empty($this->purchaseUnit)) {
    //     throw new \Exception('Please set amount, sellers first');
    // }

    $this->body['purchase_units'][] = $this->purchaseUnit;

    $paymentMethod = is_array($this->order) ? $this->order[0]->paymentMethod : $this->order->paymentMethod;

    $this->body['application_context'] = [
      "cancel_url" => route("payment.failed", ['order' => $this->orderId]),
      "return_url" => route("paypalMarketplace.orderPaymentsuccess", ['order' => $this->orderId])
    ];

    return $this;
  }

  // Set amount
  public function setAmount($amount)
  {
    $this->purchaseUnit['amount'] = [
      'currency_code' => get_currency_code(),
      'value' => $amount
    ];
  }

  // Set Platform Fee
  public function setPlatformFee($fee = 0)
  {
    $this->purchaseUnit['payment_instruction']['platform_fees'] = [
      [
        'amount' => [
          'value' => $fee,
          'currency_code' => $this->purchaseUnit['amount']['currency_code'] ?? get_currency_code()
        ],
      ],
    ];

    return $this;
  }
}
