<?php

namespace Incevio\Package\Inspector\Policies;

use App\Helpers\Authorize;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Incevio\Package\Inspector\Models\InspectorModel;

class InspectorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can setting the Inspector.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function setting(User $user)
    {
        return (new Authorize($user, 'setting_inspector'))->check();
    }


    /**
     * Determine whether the user can view Inspectable .
     *
     */
    public function index(User $user)
    {
        return (new Authorize($user, 'view_inspector'))->check();
    }


    /**
     * Determine whether the user can view the Inspectable.
     */
    public function view(User $user, InspectorModel $inspector)
    {
        return (new Authorize($user, 'view_inspector', $inspector))->check();
    }


    /**
     * Determine whether the user can approve the Inspectable.
     */
    public function approve(User $user)
    {
        return (new Authorize($user, 'approve_inspector'))->check();
    }


    /**
     * Determine whether the user can update the Inspectable.
     *
     */
    public function edit(User $user)
    {
        return (new Authorize($user, 'edit_inspector'))->check();
    }


    /**
     * Determine whether the user can delete the Inspectable.
     */
    public function delete(User $user)
    {
        return (new Authorize($user, 'delete_inspector'))->check();
    }


}
