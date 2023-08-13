<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Events\Order\OrderUpdated;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\OrderResource;
use App\Http\Resources\OrderLightResource;
use App\Http\Requests\Validations\OrderDetailRequest;

class OrderController extends Controller
{
    //use Authorizable;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = Order::mine()->withCount(['inventories']);

        $filter = $request->get('filter');

        // When the orders need to filter
        switch ($filter) {
            case 'unfulfilled':
                $orders = $orders->unfulfilled();
                break;

            case 'unpaid':
                $orders = $orders->unpaid();
                break;

            case 'paid':
                $orders = $orders->paid();
                break;

            case 'archived':
                $orders = $orders->archived();
                break;
        }

        $orders = $orders->paginate(config('mobile_app.view_listing_per_page', 8));

        return OrderLightResource::collection($orders);
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function show(OrderDetailRequest $request, Order $order)
    {
        return new OrderResource($order);
    }

    /**
     * Update order status
     *
     * @param OrderDetailRequest $request
     * @param Order $order
     * @return \Illuminate\Http\Response
     */
    public function update_status(OrderDetailRequest $request, Order $order)
    {
        // Check permission

        try {
            $order->order_status_id = $request->input('status_id');
            $order->save();

            event(new OrderUpdated($order, $request->filled('notify_customer')));
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return new OrderResource($order);
    }

    /**
     * Mark the order as paid
     *
     * @param OrderDetailRequest $request
     * @param Order $order
     * @return \Illuminate\Http\Response
     */
    public function mark_as_paid(OrderDetailRequest $request, Order $order)
    {
        if (Auth::user()->isFromMerchant() && !vendor_get_paid_directly()) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 403);
        }

        // Check permission

        try {
            $order->markAsPaid();
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.order_updated_successfully')], 200);
    }

    /**
     * Mark the order as unpaid
     *
     * @param OrderDetailRequest $request
     * @param Order $order
     * @return \Illuminate\Http\Response
     */
    public function mark_as_unpaid(OrderDetailRequest $request, Order $order)
    {
        if (Auth::user()->isFromMerchant() && !vendor_get_paid_directly()) {
            return $this->error(trans('api.something_went_wrong'));
        }

        // Check permission

        try {
            $order->markAsUnpaid();
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.order_updated_successfully')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Order   $order
     * @return \Illuminate\Http\Response
     */
    public function invoice(OrderDetailRequest $request, Order $order)
    {
        $order->invoice('D'); // Download the invoice
    }

    /**
     * Add admin notes to an order
     *
     * @param OrderDetailRequest $request
     * @param Order $order
     * @return void
     */
    public function add_note(OrderDetailRequest $request, Order $order)
    {
        // Check permission

        try {
            $order->admin_note = $request->input('admin_note');
            $order->save();
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.order_updated_successfully')], 200);
    }

    /**
     * Archive order
     *
     * @param OrderDetailRequest $request
     * @param Order $order
     * @return \Illuminate\Http\Response
     */
    public function archive(OrderDetailRequest $request, Order $order)
    {
        // Check permission

        try {
            $order->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.order_updated_successfully')], 200);
    }

    /**
     * Restore the order from archive
     *
     * @param Request $request
     * @param Order $id
     * @return \Illuminate\Http\Response
     */
    public function unarchive(Request $request, $id)
    {
        // Check permission

        try {
            Order::onlyTrashed()->findOrFail($id)->restore();
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.order_updated_successfully')], 200);
    }

    /**
     * Restore the order from archive
     *
     * @param Request $request
     * @param Order $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        // Check permission

        try {
            Order::onlyTrashed()->findOrFail($id)->forceDelete();
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.order_updated_successfully')], 200);
    }
}
