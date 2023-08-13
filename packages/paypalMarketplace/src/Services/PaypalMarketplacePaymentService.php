<?php

namespace Incevio\Package\PaypalMarketplace\Services;

use App\Models\Order;
use App\Models\Customer;
use App\Services\Payments\PaymentService;
// use App\Exceptions\PaymentFailedException;
use Incevio\Package\PaypalMarketplace\Http\Requests\CreateOrderRequest;
use Illuminate\Http\Request;

class PaypalMarketplacePaymentService extends PaymentService
{

	public $httpClient;

	public $paypalHttp;

	public function __construct(Request $request)
	{
		parent::__construct($request);
	}

	public function charge()
	{
		$response =	$this->paypalOrderHttp->execute();

		$statusCode = $response->response->statusCode;
		if ($statusCode == 201) {
			return redirect()->to($response->getActionUrl('approve'));
		}

		throw new \Exception('Sorry something is wrong with API request. ' . $statusCode);
	}

	/**
	 * Set payment configurations
	 *
	 * @return $this
	 */
	public function setConfig()
	{
		// When vendor get paid
		if ($this->order && $this->receiver == 'merchant' && $this->payee instanceof Customer) {
			$this->paypalOrderHttp->setPlatformFee(getPlatformFeeForOrder($this->order));
		}

		$this->paypalOrderHttp->prepare();

		return $this;
	}

	/**
	 * Set order information
	 *
	 * @param $order
	 * @return void
	 */
	public function setOrderInfo(Order $order)
	{
		$this->order = $order;

		$this->paypalOrderHttp = new CreateOrderRequest($this->order, $this->getOrderId());

		return $this;
	}

	function setAmount($amount)
	{
		$this->amount = format_price_for_paypal($amount);

		$this->paypalOrderHttp->setAmount($this->amount);

		return $this;
	}
}
