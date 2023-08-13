<?php

namespace Incevio\Package\Razorpay\Http\Controllers;

use App\Common\ShoppingCart;
use App\Models\Cart;
use App\Http\Controllers\Controller;
use Incevio\Package\Razorpay\Http\RazorpayHttpClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
	use ShoppingCart;

	/**
	 * Make payment request to get transection id
	 */
	public function request(Request $request, $cart = Null)
	{
		$receiver = 'platform';
		$amount = 0;

		if ($cart) {
			if ('all_checkout' == $cart) {
				$carts = $this->getShoppingCarts();

				$amount = $this->getTotalPayable($carts);
			} else {
				if (!$cart instanceof Cart) {
					$cart = Cart::findOrFail($cart);
				}

				$amount = $cart->calculate_grand_total();
			}

			if (vendor_get_paid_directly()) {
				$receiver = 'merchant';
			}
		} elseif ($request->amount) {
			$amount = $request->amount;
		}

		try {
			$razorHttp = new RazorpayHttpClient($request);

			// Set vendor API when verndor get paid
			if ($cart && $receiver == 'merchant') {
				$razorHttp->setVendorAPIKey($cart->shop);
			}

			$razorOrder = $razorHttp->createOrder($amount);

			$data = [
				'key' => $razorHttp->api_key,
				'name' => get_platform_title(),
				'amount' => $razorOrder->amount,
				// 'currency' => $razorOrder->currency,
				'order_id' => $razorOrder->id,
			];

			// Fill customer info
			if (Auth::guard('customer')->check()) {
				$customer = Auth::guard('customer')->user();
			} elseif (Auth::guard('api')->check()) {
				$customer = Auth::guard('api')->user();
			}

			// Fill customer info
			if (isset($customer) && $customer) {
				$data = array_merge([
					'prefill' => [
						'name' => $customer->getName(),
						'email' => $customer->email,
						'contact' => $customer->primaryAddress->phone,
					]
				], $data);
			}

			// Store razorpay_order_id into database
			if (isset($carts)) {
				// oneCheckout plugin orders
				foreach ($carts as $cart) {
					$cart->forceFill([
						'razorpay_order_id' => $razorOrder->id,
					])->save();
				}
			} elseif ($cart) {
				// Normal order Checkout
				$cart->forceFill([
					'razorpay_order_id' => $razorOrder->id,
				])->save();
			} else {
				// Wallet deposite
				DB::table('razorpay_wallet_transection')->insert([
					'amount' => intval($amount * 100),
					'razorpay_order_id' => $razorOrder->id,
				]);
			}

			return response($data, 200);
		} catch (\Exception $e) {
			Log::error($e);

			$msg = $e->getMessage();

			$data = [
				'message' => $msg,
				'code' => $e->getCode(),
			];

			return response($data);
		}
	}
}
