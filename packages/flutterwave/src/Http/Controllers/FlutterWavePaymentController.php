<?php

namespace Incevio\Package\FlutterWave\Http\Controllers;

use App\Models\Order;
use App\Events\Order\OrderCreated;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Incevio\Package\FlutterWave\Services\FlutterWavePaymentService;


class FlutterWavePaymentController extends Controller
{
    public function redirect(Request $request, FlutterWavePaymentService $flutter, $order)
    {
        $orders = explode('-', $order);
        $order = count($orders) > 1 ? $orders : $order;

        if (!is_array($order)) {
            $receiver = vendor_get_paid_directly() ? 'merchant' : 'platform';
            $flutter->setReceiver($receiver);

            $order = Order::findorfail($order);
            $flutter->setOrderInfo($order)->setConfig();
        }

        if ($request->status == 'successful' && $flutter->verifyPaidPayment()) {
            // Transaction was successful
            if (is_array($order)) {
                // OneCheckout plugin
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

        return redirect()->route('payment.failed', $order)
            ->withErrors(['payment_error' => trans('theme.notify.payment_failed')]);
    }
}
