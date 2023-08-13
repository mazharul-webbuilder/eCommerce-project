<?php

namespace Incevio\Package\LiveChat\Http\Controllers;;

//use App\Common\Authorizable;
use App\Events\Chat\NewMessageEvent;
use App\Http\Controllers\Controller;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Incevio\Package\LiveChat\Http\Requests\SaveChatConversationRequest;
use Incevio\Package\LiveChat\Http\Requests\ViewChatConversationRequest;
use Incevio\Package\LiveChat\Models\ChatConversation;

class AdminChatController extends Controller
{
    //use Authorizable;

    /**
     * Show feedback form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Order   $order
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Gate::authorize('index', ChatConversation::class);
        $chats = \Incevio\Package\LiveChat\Models\ChatConversation::mine()->get();

        return view('liveChat::index', compact('chats'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\ChatConversation   $chat
     *
     * @return \Illuminate\Http\Response
     */
    public function show(ViewChatConversationRequest $request, ChatConversation $chat)
    {
        $chat->markAsRead();

        return view('liveChat::_chat_conversation', compact('chat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function reply(SaveChatConversationRequest $request, ChatConversation $chat)
    {
        Gate::authorize('reply', ChatConversation::class);

        $reply = $chat->replies()->create([
            'customer_id' => $request->customer_id,
            'user_id' => $request->user_id,
            'reply' => $request->message,
        ]);

        event(new NewMessageEvent($reply, $request->message));

        if ($request->ajax()) {
            return response(trans('responses.success'), 200);
        }

        return back();
    }
}
