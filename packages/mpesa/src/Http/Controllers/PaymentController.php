<?php

namespace Incevio\Package\MPesa\Http\Controllers;

use App\Models\Order;
use App\Events\Order\OrderCreated;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Incevio\Package\MPesa\Services\MPesaPaymentService;

class PaymentController extends Controller
{
  /**
   * M-Pesa request confirmation callback
   */
  public function showConfirmationForm(Request $request, Order $order)
  {
    // Log::info("M-PESA show Confirmation Form");
    // Log::info($order);

    return view('mpesa::payment_confirmation_form', compact('order'));
  }

  /**
   * Confirm order payment
   *
   * @param Request $request
   * @param Order $order
   * @return response
   */
  public function confirm(Request $request, Order $order)
  {
    $mpesa = new MPesaPaymentService($request);

    $response = $mpesa->verifyPayment($order->payment_ref_id);

    $json = json_decode($response);

    if ($json->ResultCode == 0) {
      // Successful
      $order->markAsPaid();

      // Trigger the Event
      event(new OrderCreated($order));

      return view('theme::order_complete', compact('order'))
        ->with('success', trans('theme.notify.order_placed'));
    }

    Log::info($response);

    return redirect()->route('payment.failed', $order)
      ->withErrors(['payment_error' => $json->ResultDesc]);
  }
}
