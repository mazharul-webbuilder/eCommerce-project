<?php

namespace Incevio\Package\Eventy\Policies;

use App\Models\User;
use App\Helpers\Authorize;
use Incevio\Package\Eventy\Models\Event;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view Events.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Event  $event
     * @return mixed
     */
    public function index(User $user)
    {
        return (new Authorize($user, 'view_utility'))->check();
    }

    /**
     * Determine whether the user can view the Event.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Event  $event
     * @return mixed
     */
    public function view(User $user, Event $event)
    {
        return (new Authorize($user, 'view_utility', $event))->check();
    }

    /**
     * Determine whether the user can create Events.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return (new Authorize($user, 'add_utility'))->check();
    }

    /**
     * Determine whether the user can update the Event.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Event  $event
     * @return mixed
     */
    public function update(User $user, Event $event)
    {
        return (new Authorize($user, 'edit_utility', $event))->check();
    }

    /**
     * Determine whether the user can delete the Event.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Event  $event
     * @return mixed
     */
    public function delete(User $user, Event $event)
    {
        return (new Authorize($user, 'delete_utility', $event))->check();
    }

    /**
     * Determine whether the user can delete the Product.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function massDelete(User $user)
    {
        return (new Authorize($user, 'delete_utility'))->check();
    }

}