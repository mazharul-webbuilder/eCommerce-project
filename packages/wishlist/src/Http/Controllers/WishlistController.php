<?php

namespace Incevio\Package\Wishlist\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Incevio\Package\Wishlist\Models\Wishlist;

class WishlistController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request, Inventory $item)
    {
        $wishlist = new Wishlist;
        $add = $wishlist->updateOrCreate([
            'inventory_id'   =>  $item->id,
            'product_id'   =>  $item->product_id,
            'customer_id' => $request->user()->id,
        ]);

        if ($add) {
            return response()->json($wishlist->toArray(), 200);
        }

        return response()->json(null, 404);
        //return back()->with('success',  trans('theme.notify.item_added_to_wishlist'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request, Wishlist $wishlist)
    {
        $wishlist->forceDelete();

        return back()->with('success', trans('theme.notify.item_removed_from_wishlist'));
    }
}
