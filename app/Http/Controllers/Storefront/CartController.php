<?php

namespace App\Http\Controllers\Storefront;

use App\Models\Cart;
use App\Models\ShippingRate;
use App\Models\State;
use App\Models\Country;
use App\Common\ShoppingCart;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    use ShoppingCart;

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $expressId = null)
    {
        $carts = $this->getShoppingCarts();

        $carts->load([
            'shop' => function ($q) {
                $q->with('config')->active();

                if (is_incevio_package_loaded('packaging')) {
                    $q->with(['packagings' => function ($query) {
                        $query->active();
                    }]);
                }
            },
            'state:id,name', 'country:id,name', 'inventories.image',
        ]);

        if (is_incevio_package_loaded('coupons')) {
            $carts->load('coupon:id,shop_id,name,code,value,min_order_amount,type');
        }

        // Load related models
        //        if (is_incevio_package_loaded('coupons') && is_incevio_package_loaded('packaging')){
        //            $carts->load([
        //                'shop' => function ($q) {
        //                    $q->with(['config', 'packagings' => function ($query) {
        //                        $query->active();
        //                    }])->active();
        //                },
        //                'coupon:id,shop_id,name,code,value,min_order_amount,type',
        //                'state:id,name', 'country:id,name', 'inventories.image', 'shippingPackage',
        //            ]);
        //
        //            // Get platform's default packaging
        //            $platformDefaultPackaging = getPlatformDefaultPackaging();
        //
        //        } else if(is_incevio_package_loaded('coupons')){
        //            $carts->load([
        //                'shop' => function ($q) {
        //                    $q->with('config')->active();
        //                },
        //                'coupon:id,shop_id,name,code,value,min_order_amount,type',
        //                'state:id,name', 'country:id,name', 'inventories.image',
        //            ]);
        //
        //        } else if(is_incevio_package_loaded('packaging')){
        //            $carts->load([
        //                'shop' => function ($q) {
        //                    $q->with(['config', 'packagings' => function ($query) {
        //                        $query->active();
        //                    }])->active();
        //                },
        //                'state:id,name', 'country:id,name', 'inventories.image', 'shippingPackage',
        //            ]);
        //
        //            // Get platform's default packaging
        //            $platformDefaultPackaging = getPlatformDefaultPackaging();
        //
        //        } else {
        //            $carts->load([
        //                'shop' => function ($q) {
        //                    $q->with('config')->active();
        //                },
        //                'state:id,name', 'country:id,name', 'inventories.image',
        //            ]);
        //        }

        $business_areas = Country::select('id', 'name', 'iso_code')->orderBy('name', 'asc')->get();

        $geoip = geoip(get_visitor_IP());

        $geoip_country = $business_areas->where('iso_code', $geoip->iso_code)->first();

        $geoip_state = State::select('id', 'name', 'iso_code', 'country_id')
            ->where('iso_code', $geoip->state)
            ->where('country_id', $geoip_country->id)
            ->first();

        $shipping_zones = [];
        $shipping_options = [];

        // Prepare shipping info
        foreach ($carts as $cart) {
            $country_id = $cart->ship_to_country_id ?? $geoip_country->id;
            $state_id = $cart->ship_to_state_id ?? optional($geoip_state)->id;

            $shipping_zones[$cart->id] = get_shipping_zone_of($cart->shop_id, $country_id, $state_id);
            $shipping_options[$cart->id] = isset($shipping_zones[$cart->id]->id) ? getShippingRates($shipping_zones[$cart->id]->id) : 'NaN';

            // Update cart if needed
            if (!$cart->ship_to_country_id) {

                $cart->ship_to_country_id = $country_id;
                $cart->ship_to_state_id = $state_id;
                $cart->shipping_zone_id = isset($shipping_zones[$cart->id]->id) ? $shipping_zones[$cart->id]->id : null;

                if ($shipping_options[$cart->id] != 'NaN') {
                    $cart->shipping_rate_id = $cart->is_free_shipping() ? null : optional($shipping_options[$cart->id]->first())->id;
                }

                if ($cart->shipping_zone_id) {
                    $cart->taxrate = optional($cart->shippingZone->tax)->taxrate;
                    $cart->taxes = $cart->get_tax_amount();
                }

                $cart->save();
            }

            if ($cart->shipping_rate_id) {
                $shippingRate = ShippingRate::select('id', 'rate')->where([
                    ['id', '=', $cart->shipping_rate_id],
                    ['shipping_zone_id', '=', $cart->shipping_zone_id],
                ])->first();

                // abort_unless($shippingRate, 403, trans('theme.notify.seller_doesnt_ship'));

                if ($shippingRate) {
                    $cart->shipping_rate_id = $shippingRate->id;
                    $cart->shipping = $shippingRate->rate;

                    // if ($cart->handling == 0) {
                    // $cart->handling = getShopConfig($cart->shop_id, 'order_handling_cost');
                    // }
                } elseif ($cart->is_free_shipping()) {
                    $cart->shipping_rate_id = null;
                    $cart->shipping = 0;
                    // $cart->handling = 0;
                }
                // $cart->save();
            }

            $cart->handling = $cart->get_handling_cost();
            $cart->taxes = $cart->get_tax_amount();
            $cart->discount = $cart->get_discounted_amount();
            $cart->grand_total = $cart->calculate_grand_total();
            $cart->save();
        }

        if (is_incevio_package_loaded('packaging')) {
            $platformDefaultPackaging = getPlatformDefaultPackaging();

            return view('theme::cart', compact('carts', 'business_areas', 'shipping_zones', 'shipping_options', 'platformDefaultPackaging', 'expressId'));
        }

        return view('theme::cart', compact('carts', 'business_areas', 'shipping_zones', 'shipping_options', 'expressId'));
    }

    /**
     * Update the cart and redirected to checkout page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart    $cart
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        if (!crosscheckCartOwnership($request, $cart)) {
            return response(trans('theme.notify.please_login_to_checkout'), 401);
        }

        $cart = crosscheckAndUpdateOldCartInfo($request, $cart);

        return response(trans('theme.notify.cart_updated'), 200);
    }

    /**
     * Remove item from cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {
        $cart = Cart::findOrFail($request->cart);

        $item = DB::table('cart_items')->where([
            'cart_id' => $request->cart,
            'inventory_id' => $request->item,
        ])->delete();

        // Delete item from cart_items table
        if ($item) {
            // Update or delate cart
            if ($item_count = $cart->inventories->count()) {
                $cart->fill([
                    'quantity' => $cart->inventories->sum('quantity'),
                    'item_count' => $item_count,
                ])->save();
            } else {
                $cart->forceDelete();
            }

            return response('Item removed', 200);
        }

        return response('Item remove failed!', 404);
    }

    /**
     * validate coupon.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validateCoupon(Request $request)
    {
        $coupon = \Incevio\Package\Coupons\Models\Coupon::active()->where([
            ['code', $request->coupon],
            ['shop_id', $request->shop],
        ])->withCount(['orders', 'customerOrders'])->first();

        if (!$coupon) {
            return response('Coupon not found', 404);
        }

        if (!$coupon->isLive() || !$coupon->isValidCustomer()) {
            return response('Coupon not valid', 403);
        }

        if (!$coupon->isValidZone($request->zone)) {
            return response('Coupon not valid for shipping area', 443);
        }

        if (!$coupon->hasQtt()) {
            return response('Coupon qtt limit exit', 444);
        }

        // Get the cart
        $cart = Cart::find($request->cart);

        if (!$cart) {
            return response('Cart not found', 445);
        }

        if ($coupon->min_order_amount && $cart->total < $coupon->min_order_amount) {
            return response()
                ->json([
                    'message' => trans('coupons::lang.coupon_min_order_value')
                ], 403);
        }

        // Set coupon_id to the cart
        $cart->coupon_id = $coupon->id;

        // Get discounted amount
        $cart->discount = $cart->get_discounted_amount();

        // When the coupon value is bigger/equal of cart total
        if ($cart->discount >= $cart->total) {
            $cart->discount = $cart->total;
            $coupon->value = $cart->total;
        }

        // Update cart
        $cart->grand_total = $cart->calculate_grand_total();
        $cart->save();

        // Unset some un-importrant values
        unset($coupon->description, $coupon->quantity, $coupon->quantity_per_customer, $coupon->starting_time, $coupon->ending_time, $coupon->active);

        return response()->json($coupon->toArray());
    }
}
