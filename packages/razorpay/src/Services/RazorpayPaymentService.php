<?php

namespace Incevio\Package\Razorpay\Services;

use App\Services\Payments\PaymentService;
use App\Exceptions\PaymentFailedException;
use Incevio\Package\Razorpay\Http\RazorpayHttpClient;
use Razorpay\Api\Errors\SignatureVerificationError;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class RazorpayPaymentService extends PaymentService
{
	public $razorClient;

	public function __construct(Request $request)
	{
		$this->razorClient = new RazorpayHttpClient($request);

		parent::__construct($request);
	}

	public function charge()
	{
		if ($this->order) {
			// Order payment
			if (is_array($this->order)) {
				$razorpay_order_id = $this->order[0]->razorpay_order_id;
			} else {
				$razorpay_order_id = $this->order->razorpay_order_id;
			}
		} else {
			// Wallet deposite 
			$razorpay_order_id = $this->request->razorpay_order_id;
		}

		try {
			if ($this->razorClient->verifySignature($razorpay_order_id)) {
				// Payment is successful
				$this->status = self::STATUS_PAID;

				$payment_info = [
					'razorpay_payment_id' => $this->request->razorpay_payment_id,
					'razorpay_signature' => $this->request->razorpay_signature,
				];

				// Store razorpay_payment_id and razorpay_signature into database
				if ($this->order) {
					if (is_array($this->order)) {
						// OneCheckout plugin used
						foreach ($this->order as $order) {
							$order->forceFill($payment_info)->save();
						}
					} else {
						// Normal checkout
						$this->order->forceFill($payment_info)->save();
					}
				} else {
					// Wallet deposit
					$transection = DB::table('razorpay_wallet_transection')
						->where('razorpay_order_id', $razorpay_order_id);

					if ($transection->first()) {
						$transection->delete();
					} else {
						throw new PaymentFailedException(trans('razorpay::lang.razorpay_order_id_didnt_match'));
					}
				}
			} else {
				$this->status = self::STATUS_ERROR;
			}
		} catch (SignatureVerificationError $e) {
			Log::error($e);

			$this->status = self::STATUS_ERROR;

			$response = $e->getMessage();

			throw new PaymentFailedException($response);

			return response('Failed', $e->getStatusCode());
		}

		return $this;
	}

	public function setConfig()
	{
		// When vendor get paid
		if ($this->order && $this->receiver == 'merchant') {
			$this->razorClient->setVendorAPIKey($this->order->shop);
		}

		return $this;
	}

	function setAmount($amount)
	{
		// $amount = get_formated_decimal($amount, true, 2);

		$this->amount = intval($amount * 100);

		return $this;
	}

	/**
	 * Verify Paid Payment
	 */
	public function verifyPaidPayment()
	{
		$payment_meta = json_decode($this->request->input('payment_meta'));

		if ($payment_meta->order_id && $payment_meta->payment_id && $payment_meta->signature) {
			// Push some important data into the request
			$this->request->merge([
				'razorpay_payment_id' => $payment_meta->payment_id,
				'razorpay_signature' => $payment_meta->signature
			]);

			// Verify razorpay signature 
			if ($this->razorClient->verifySignature($payment_meta->order_id)) {
				$this->status = self::STATUS_PAID;
			} else {
				$this->status = self::STATUS_ERROR;
			}
		}

		return $this;
	}
}
