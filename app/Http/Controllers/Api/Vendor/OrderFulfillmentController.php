<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Order;
use App\Helpers\ListHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Validations\OrderDetailRequest;

class OrderFulfillmentController extends Controller
{
  /**
   * Buyer confirmed goods received
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  App\Models\Order   $order
   *
   * @return \Illuminate\Http\Response
   */
  public function fulfill(OrderDetailRequest $request, Order $order)
  {
    // Check permission

    try {
      $order->fulfill($request);
    } catch (\Exception $e) {
      return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
    }

    return response()->json(['message' => trans('api_vendor.order_updated_successfully')], 200);
  }

  /**
   * Buyer confirmed goods received
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  App\Models\Order   $order
   *
   * @return \Illuminate\Http\Response
   */
  public function delivered(OrderDetailRequest $request, Order $order)
  {
    try {
      $order->mark_as_goods_received();
    } catch (\Exception $e) {
      return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
    }

    return response()->json(['message' => trans('api_vendor.order_updated_successfully')], 200);
  }

  /**
   * Return list of delivery boys
   *
   * @param Order $order
   * @return \Illuminate\Http\Response
   */
  public function delivery_boys(Order $order)
  {
    return ListHelper::deliveryBoys($order->shop_id);
  }

  /**
   * Assign a delivery boy
   *
   * @param Request $request
   * @param Order $order
   * @return \Illuminate\Http\Response
   */
  public function assign_delivery_boy(Request $request, Order $order)
  {
    try {
      $order->delivery_boy_id = $request->input('delivery_boy_id');
      $order->save();
    } catch (\Exception $e) {
      return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
    }

    return response()->json(['message' => trans('api_vendor.order_updated_successfully')], 200);
  }
}
