<?php

namespace Incevio\Package\Paystack\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Events\Order\OrderCreated;
use App\Http\Controllers\Controller;
use App\Services\Payments\PaymentService;
use Incevio\Package\Paystack\Services\PaystackPaymentService;


class PaystackPaymentController extends Controller
{
    public function success(Request $request, PaystackPaymentService $payment, $order)
    {
        if ($request->has('trxref') && $request->has('reference')) {

            $receiver = vendor_get_paid_directly() ? 'merchant' : 'platform';

            $response = $payment->setReceiver($receiver)->setOrderInfo($order)
                ->setConfig()->verifyPaidPayment();

            if ($response->status == PaymentService::STATUS_PAID) {
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

                return view('theme::order_complete', compact('order'))
                    ->with('success', trans('theme.notify.order_placed'));
            }
        }

        return redirect()->route('payment.failed', $order)
            ->withErrors(['payment_error' => trans('theme.notify.payment_failed')]);
    }
}
