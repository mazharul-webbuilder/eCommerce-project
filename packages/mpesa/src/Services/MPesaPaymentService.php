<?php

namespace Incevio\Package\MPesa\Services;

use App\Models\Order;
use App\Services\Payments\PaymentService;
use App\Exceptions\PaymentFailedException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Incevio\Package\MPesa\Http\Requests\HttpRequest as PaymentHttpClient;

class MPesaPaymentService extends PaymentService
{
	public $httpClient;

	public function __construct(Request $request)
	{
		// \Log::info('Request:: ');
		// \Log::info($request->all());

		$this->httpClient = new PaymentHttpClient($request);

		parent::__construct($request);
	}

	/**
	 * Execute the payment
	 */
	public function charge()
	{
		$response = $this->httpClient->processTransaction($this->amount, $this->description);

		Log::info('M-PESA process Transaction:: ');
		Log::info($response);

		$response = json_decode($response);

		// payment_ref_id
		if ($response->CheckoutRequestID) {
			$this->order->payment_ref_id = $response->CheckoutRequestID;
			$this->order->order_status_id = Order::STATUS_WAITING_FOR_PAYMENT;
			$this->order->payment_status = Order::PAYMENT_STATUS_PENDING;
			$this->order->save();

			return redirect()->route('mpesa.order.confirmation', $this->order);
		}

		$this->status = self::STATUS_ERROR;

		throw new PaymentFailedException($response);

		return $this;
	}

	/**
	 * Set the payable amount
	 * return $this
	 */
	public function setAmount($amount)
	{
		$this->amount = intval($amount);

		return $this;
	}

	/**
	 * Set the payment configurations
	 * @return self
	 */
	public function setConfig()
	{
		// When vendor get paid
		if ($this->order && $this->receiver == 'merchant') {
			$this->httpClient->setVendorAPIKey($this->order->shop);
		}

		// Set the reference
		$ref = $this->order ? 'order' : 'deposit';
		$this->httpClient->setReference($ref);

		// Check the values
		if (!$this->amount || !is_numeric($this->amount) || $this->amount < 1) {
			throw new PaymentFailedException("Invalid Amount.");
		} else if (!$this->request->mpesa_number || !is_numeric($this->request->mpesa_number)) {
			throw new PaymentFailedException("Invalid MPESA Number.");
		}

		return $this;
	}

	/**
	 * Verify Paid Payment
	 */
	public function verifyPayment($transaction)
	{
		$response = $this->httpClient->verifyTransaction($transaction);

		return $response;
	}
}
