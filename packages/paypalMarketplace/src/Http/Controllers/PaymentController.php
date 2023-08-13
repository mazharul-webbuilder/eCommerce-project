<?php

namespace Incevio\Package\PaypalMarketplace\Http\Controllers;

use App\Models\Order;
use App\Events\Order\OrderCreated;
use App\Http\Controllers\Controller;
use Incevio\Package\PaypalMarketplace\Http\Requests\CaptureOrderRequest;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
	/**
	 * Make payment request to get transection id
	 */
	public function paymentSuccess(Request $request, $order = null)
	{
		if ($request->has('token') && $request->has('PayerID')) {
			try {
				$capture = new CaptureOrderRequest($request->input('token'));
				$capture->execute();

				if ($capture->response->statusCode == 201) {
					// OneCheckout plugin
					$orders = explode('-', $order);
					$order = count($orders) > 1 ? $orders : $order;
					if (is_array($order)) {
						foreach ($order as $id) {
							$temp = Order::findOrFail($id);

							$temp->markAsPaid();
						}

						$order = $temp;
					} else {
						// Single order
						if (!$order instanceof Order) {
							$order = Order::findOrFail($order);
						}

						$order->markAsPaid();
					}

					// Trigger the Event
					event(new OrderCreated($order));

					return view('theme::order_complete', compact('order'))->with('success', trans('theme.notify.order_placed'));
				}
			} catch (\Exception $e) {
				\Log::error('Paypal payment failed on execution step:: ');
				\Log::info($e->getMessage());
			}
		}

		return redirect()->route('payment.failed', $order);
	}
}
