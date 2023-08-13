<?php

namespace Incevio\Package\Wishlist\Policies;

use App\Models\Customer;
use Illuminate\Auth\Access\HandlesAuthorization;
use Incevio\Package\Wishlist\Models\Wishlist;

class WishlistPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the Customer can remove the Wishlist.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Wishlist  $wishlist
     * @return bool
     */
    public function remove(Customer $customer, Wishlist $wishlist)
    {
        return $wishlist->customer_id === $customer->id;
    }
}
