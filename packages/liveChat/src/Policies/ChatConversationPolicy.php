<?php

namespace Incevio\Package\LiveChat\Policies;

use App\Common\Authorizable;
use App\Helpers\Authorize;
use App\Models\User;
use Incevio\Package\LiveChat\Models\ChatConversation;

class ChatConversationPolicy
{

    /**
     * Determine whether the user can view ChatConversations.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChatConversation  $conversation
     * @return mixed
     */
    public function index(User $user)
    {

        return (new Authorize($user, 'view_chat_conversation'))->check();
    }


    /**
     * Determine whether the user can create ChatConversations.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function reply(User $user)
    {
        return (new Authorize($user, 'reply_chat_conversation'))->check();
    }

}
