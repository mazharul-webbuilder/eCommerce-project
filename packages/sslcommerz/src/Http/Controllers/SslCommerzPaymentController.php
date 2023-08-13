<?php

namespace Incevio\Package\SslCommerz\Http\Controllers;

use App\Models\Order;
use App\Events\Order\OrderCreated;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Incevio\Package\SslCommerz\Services\SslCommerzPaymentService;
use Incevio\Package\SslCommerz\Http\Library\SslCommerz\SslCommerzNotification;

class SslCommerzPaymentController extends Controller
{
    public function success(Request $request, SslCommerzPaymentService $paymentService, $order)
    {
        $orders = explode('-', $order);
        $order = count($orders) > 1 ? $orders : $order;

        // $paymentService = new SslCommerzPaymentService($request);

        if (!is_array($order)) {
            $receiver = vendor_get_paid_directly() ? 'merchant' : 'platform';
            $paymentService->setReceiver($receiver);

            $order = Order::findorfail($order);
            $paymentService->setOrderInfo($order)->setConfig();
        }

        if ($paymentService->verifyPaidPayment()) {
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
