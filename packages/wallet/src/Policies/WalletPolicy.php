<?php

namespace Incevio\Package\Wallet\Policies;

use App\Helpers\Authorize;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class WalletPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can setting the wallet.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function setting(User $user)
    {
        return (new Authorize($user, 'setting_wallet'))->check();
    }

    /**
     * Determine whether the user can setting the wallet.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function payout(User $user)
    {
        return (new Authorize($user, 'payout_wallet'))->check();
    }

    public function report(User $user)
    {
        return (new Authorize($user, 'report_wallet'))->check();
    }

}
