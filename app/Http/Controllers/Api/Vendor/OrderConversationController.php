<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Order;
use App\Models\Reply;
use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ConversationResource;
use App\Http\Requests\Validations\OrderDetailRequest;

class OrderConversationController extends Controller
{
    /**
     * Display order conversation page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Order   $order
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OrderDetailRequest $request, Order $order)
    {
        $order->load(['customer', 'conversation.replies', 'conversation.replies.attachments']);

        if (!$order->conversation) {
            return response()->json([
                'message' => trans('api_vendor.contact_customer'),
            ]);
        }

        return new ConversationResource($order->conversation);
    }

    /**
     * Start/Replay a order conversation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Order   $order
     *
     * @return \Illuminate\Http\Response
     */
    public function respond(OrderDetailRequest $request, Order $order)
    {
        $user_id = Auth::guard('vendor_api')->user()->id;

        if ($order->conversation) {
            $msg = new Reply;
            $msg->reply = $request->input('message');
            $msg->user_id = $user_id;

            $order->conversation->replies()->save($msg);
        } else {
            $msg = new Message;
            $msg->message = $request->input('message');
            $msg->shop_id = $order->shop_id;
            $msg->user_id = $user_id;

            $order->conversation()->save($msg);
        }

        if ($request->has('attachments')) {
            $attachments = create_file_from_base64($request->get('attachments'));
            $msg->saveAttachments($attachments);
        }

        $order->load(['customer', 'conversation.replies', 'conversation.replies.attachments']);

        return new ConversationResource($order->conversation);
    }
}
