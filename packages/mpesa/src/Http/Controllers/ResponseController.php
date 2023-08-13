<?php

namespace Incevio\Package\MPesa\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Incevio\Package\MPesa\Http\Requests\HttpRequest;
use App\Common\ShoppingCart;

class ResponseController extends Controller
{
	use ShoppingCart;

	/**
	 * M-Pesa request confirmation callback
	 */
	public function callback(Request $request)
	{
		Log::info("M-PESA confirmation Webhook Hits:");
		Log::info($request->getContent());

		$response = $request->getContent();
		// $response = json_decode($request->getContent());

		$order = Order::where('payment_ref_id', $response->CheckoutRequestID)->first();

		if ($order) {
			if ($response->ResultCode == 0) {
				// Successful
				$order->markAsPaid();
			} else {
				// Error
				$order->payment_status = Order::PAYMENT_STATUS_PENDING;
				$order->order_status_id = Order::STATUS_PAYMENT_ERROR;
				$order->save();
			}
		}

		return [
			'ResultCode' => 0,
			'ResultDesc' => 'Accept Service',
			'ThirdPartyTransID' => Str::random(13)
		];
	}
}
