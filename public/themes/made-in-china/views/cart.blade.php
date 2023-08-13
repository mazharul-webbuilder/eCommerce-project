@extends('theme::layouts.main')

@section('content')
    <div class="main-container zcart-light-bg">
        <div class="container">
            {{-- <div class="row align-items-center justify-content-center">
              <div class="col-md-12">
                <div class="zcart-breadcrumb">
                  <a href="#">Home</a><span class="lnr lnr-chevron-right"></span>
                  <a href="#">Cart</a>
                </div>
              </div>
            </div> --}}

            @if ($carts->count() > 0)
                @foreach ($carts as $cart)
                    @php
                        $cart_total = 0;
                        $packaging_options = optional($cart->shop)->packagings;

                        if ($cart->shop) {
                            $default_packaging =
                                $cart->shippingPackage ??
                                (optional($cart->shop->packagings)
                                    ->where('default', 1)
                                    ->first() ??
                                    $platformDefaultPackaging);
                        } else {
                            $default_packaging = $cart->shippingPackage ?? $platformDefaultPackaging;
                        }
                    @endphp

                    <div class="zcart-cart-section zcart-white-bg zcart-multicart-section">
                        <div class="row shopping-cart-table-wrap {{ $expressId == $cart->id ? 'selected' : '' }}" id="cartId{{ $cart->id }}" data-cart="{{ $cart->id }}">
                            <div class="col-xl-9 col-lg-12">
                                {!! Form::model($cart, ['method' => 'PUT', 'route' => ['cart.checkout', $cart->id], 'id' => 'formId' . $cart->id]) !!}
                                {{ Form::hidden('cart_id', $cart->id, ['id' => 'cart-id' . $cart->id]) }}
                                {{ Form::hidden('shop_id', $cart->shop->id, ['id' => 'shop-id' . $cart->id]) }}
                                {{ Form::hidden('tax_id', isset($shipping_zones[$cart->id]->id) ? $shipping_zones[$cart->id]->tax_id : null, ['id' => 'tax-id' . $cart->id]) }}
                                {{ Form::hidden('taxrate', null, ['id' => 'cart-taxrate' . $cart->id]) }}
                                {{ Form::hidden('packaging_id', $default_packaging ? $default_packaging->id : null, ['id' => 'packaging-id' . $cart->id]) }}
                                {{ Form::hidden('ship_to', $cart->ship_to, ['id' => 'ship-to' . $cart->id]) }}
                                {{ Form::hidden('zone_id', isset($shipping_zones[$cart->id]->id) ? $shipping_zones[$cart->id]->id : null, ['id' => 'zone-id' . $cart->id]) }}
                                {{ Form::hidden('shipping_rate_id', $cart->shipping_rate_id, ['id' => 'shipping-rate-id' . $cart->id]) }}
                                {{ Form::hidden('ship_to_country_id', $cart->ship_to_country_id, ['id' => 'shipto-country-id' . $cart->id]) }}
                                {{ Form::hidden('ship_to_state_id', $cart->ship_to_state_id, ['id' => 'shipto-state-id' . $cart->id]) }}
                                {{ Form::hidden('coupon_raw', json_encode($cart->coupon), ['id' => 'coupon-raw' . $cart->id]) }}
                                {{ Form::hidden('handling_cost', optional($cart->shop->config)->order_handling_cost, ['id' => 'handling-cost' . $cart->id]) }}

                                <div class="cart-table-section">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1>
                                                <span class="store-label">@lang('theme.store'):</span>
                                                @if ($cart->shop->slug)
                                                    <a href="{{ route('show.store', $cart->shop->slug) }}"> {{ $cart->shop->name }}</a>
                                                @else
                                                    @lang('theme.store_not_available')
                                                @endif
                                            </h1>
                                        </div>
                                        <div class="col-6">
                      <span class="pull-right">
                        @lang('theme.ship_to'):
                        <a href="javascript:void(0)" id="shipTo{{ $cart->id }}" class="ship_to" data-cart="{{ $cart->id }}" data-country="{{ $cart->ship_to_country_id }}" data-state="{{ $cart->ship_to_state_id }}">
                          {{ $cart->ship_to_state_id ? $cart->state->name : $cart->country->name }}
                        </a>
                      </span>
                                        </div>
                                    </div>

                                    <table class="zcart-table" id="table{{ $cart->id }}">
                                        <thead>
                                        {{-- <tr class="cart-action-col">
                                          <th colspan="2">
                                            <label><input class="select-all" type="checkbox" name="selectProduct" value="1"> Select All</label>
                                          </th>
                                          <th colspan="6">
                                            <div class="cart-action-btns">
                                              <a href="#" class="cart-add-to-favorites"><i class="fas fa-star"></i>Add to Favorites</a>
                                              <a href="compare.html" class="cart-item-compare"><i class="fas fa-exchange-alt"></i>Compare</a>
                                              <a href="#" class="cart-item-delete"><i class="far fa-trash-alt"></i>Delete</a>
                                            </div>
                                          </th>
                                        </tr> --}}
                                        <tr>
                                            {{-- <th width="30px">&nbsp;</th> --}}
                                            <th width="100px">{{ trans('theme.image') }}</th>
                                            <th width="40%" class="hidden-sm hidden-xs">{{ trans('theme.description') }}</th>
                                            <th>{{ trans('theme.price') }}</th>
                                            <th>{{ trans('theme.quantity') }}</th>
                                            <th>{{ trans('theme.total') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($cart->inventories as $item)
                                            @php
                                                $unit_price = $item->current_sale_price();
                                                $item_total = $unit_price * $item->pivot->quantity;
                                                $cart_total += $item_total;
                                            @endphp

                                            <tr class="cart-item-tr">
                                                {{-- <td>
                                                  <input type="checkbox" name="selectProduct" value="1">
                                                </td> --}}
                                                <td>
                                                    <input type="hidden" class="freeShipping{{ $cart->id }}" value="{{ $item->free_shipping }}">

                                                    <input type="hidden" id="unitWeight{{ $item->id }}" value="{{ $item->shipping_weight }}">

                                                    {{ Form::hidden('shipping_weight[' . $item->id . ']', $item->shipping_weight * $item->pivot->quantity, ['id' => 'itemWeight' . $item->id, 'class' => 'itemWeight' . $cart->id]) }}

                                                    <img src="{{ get_product_img_src($item, 'mini') }}" class="cart-prod-img" alt="{{ $item->slug }}" title="{{ $item->slug }}" />
                                                </td>
                                                <td>
                                                    <a href="{{ route('show.product', $item->slug) }}" class="product-info-title">
                                                        {{ $item->pivot->item_description }}
                                                    </a>

                                                    <div class="cart-action-btns cart-single-item-action">
                                                        <a class="wishlist add-to-wishlist" href="javascript:void(0)" data-link="{{ route('wishlist.add', $item) }}">
                                                            <i class="fas fa-heart"></i> {{ trans('theme.button.add_to_wishlist') }}
                                                        </a>
                                                        {{-- <a href="compare.html" class="cart-item-compare"><i class="fas fa-exchange-alt"></i>Compare</a> --}}
                                                        <a href="javascript:void(0)" class="cart-item-remove" data-cart="{{ $cart->id }}" data-item="{{ $item->id }}">
                                                            <i class="far fa-trash-alt"></i> {{ trans('theme.remove_item') }}
                                                        </a>
                                                    </div>
                                                </td>

                                                <td class=" shopping-cart-item-price">
                            <span class="cart-price">
                              {{ get_currency_prefix() }}
                              <span id="item-price{{ $cart->id . '-' . $item->id }}" data-value="{{ $unit_price }}">
                                {{ number_format($unit_price, 2, '.', '') }}
                              </span>
                              {{ get_currency_suffix() }}
                            </span>
                                                </td>
                                                <td>
                                                    <div class="product-qty-inc-dec">
                                                        <button class="product-qty-btn product-qty-minus product-info-qty-minus">-</button>

                                                        <input name="quantity[{{ $item->id }}]" id="itemQtt{{ $item->id }}" class="product-info-qty-input product-qty" data-cart="{{ $cart->id }}" data-item="{{ $item->id }}" data-min="{{ $item->min_order_quantity }}" data-max="{{ $item->stock_quantity }}" type="text" value="{{ $item->pivot->quantity }}">

                                                        <button class="product-qty-btn product-qty-plus product-info-qty-plus">+</button>
                                                    </div>
                                                </td>

                                                <td>
                            <span class="cart-price">
                              {{ get_currency_prefix() }}
                              <span id="item-total{{ $cart->id . '-' . $item->id }}" class="item-total{{ $cart->id }}">
                                {{ number_format($item_total, 2, '.', '') }}
                              </span>
                              {{ get_currency_suffix() }}
                            </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        {{-- <tfoot>
                                          <tr class="cart-action-col">
                                          </tr>
                                        </tfoot> --}}
                                    </table>
                                </div>

                                <div class="zcart-coupon">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <h2>@lang('theme.coupon')</h2>
                                            <p class="m-0">@lang('theme.placeholder.have_coupon_from_seller')</p>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="#">
                                                <div class="form-item d-flex m-0">
                                                    <input name="coupon" value="{{ $cart->coupon ? $cart->coupon->code : null }}" id="coupon{{ $cart->id }}" class="form-text" type="text" placeholder="@lang('theme.coupon_code')">

                                                    {{-- <input name="coupon" class="form-text" type="text" placeholder="Coupon Code"> --}}
                                                    <input class="btn btn-main apply_seller_coupon" type="submit" value="@lang('theme.button.apply_coupon')" data-cart="{{ $cart->id }}">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::close() !!}

                                <div class="notice notice-warning notice-sm hidden" id="shipping-notice{{ $cart->id }}">
                                    <strong>{{ trans('theme.warning') }}</strong> @lang('theme.notify.seller_doesnt_ship')
                                </div>

                                <div class="notice notice-danger notice-sm hidden" id="store-unavailable-notice{{ $cart->id }}">
                                    <strong>{{ trans('theme.warning') }}</strong> @lang('theme.notify.store_not_available')
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-12">
                                <div class="zcart-summary">
                                    <h2>
                                        {{ trans('theme.cart_summary') }}
                                    </h2>
                                    <div class="cart-summary-box" id="cart-summary{{ $cart->id }}">
                                        <table class="zcart-table">
                                            <tbody>
                                            <tr>
                                                <th width="50%">{{ trans('theme.subtotal') }}</th>
                                                <td>
                            <span class="cart-price">
                              {{ get_currency_prefix() }}
                              <span id="summary-total{{ $cart->id }}">
                                {{ number_format($cart_total, 2, '.', '') }}
                              </span>
                              {{ get_currency_suffix() }}
                            </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th width="50%">
                                                    <div class="cart-hoverable">
                              <span class="summery-title">
                                <a class="dynamic-shipping-rates" href="javascript:void(0)" data-toggle="popover" data-cart="{{ $cart->id }}" data-options="{{ $shipping_options[$cart->id] }}" id="shipping-options{{ $cart->id }}" title="{{ trans('theme.shipping') }}">
                                  <u>{{ trans('theme.shipping') }}</u>
                                </a>
                                <em id="summary-shipping-name{{ $cart->id }}" class="summery-label"></em>
                              </span>
                                                        {{-- <div class="cart-hover-option shipping-hover">
                                                          <div class="cart-hover-title">Shipping</div>
                                                          <table class="zcart-table">
                                                            <tbody>
                                                              <tr>
                                                                <td><input type="radio" name="ship" id=""></td>
                                                                <td>Free Shipping</td>
                                                                <td>USPS</td>
                                                                <td><span class="shipping-time">8-12 days</span></td>
                                                                <td>$0.00</td>
                                                              </tr>
                                                              <tr>
                                                                <td><input type="radio" name="ship" id=""></td>
                                                                <td>Fast Shipping</td>
                                                                <td>USPS</td>
                                                                <td><span class="shipping-time">4-5 days</span></td>
                                                                <td>$4.00</td>
                                                              </tr>
                                                              <tr>
                                                                <td><input type="radio" name="ship" id=""></td>
                                                                <td>Super Fast</td>
                                                                <td>USPS</td>
                                                                <td><span class="shipping-time">1-3 days</span></td>
                                                                <td>$10.00</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                        </div> --}}
                                                    </div>
                                                </th>
                                                <td>
                            <span class="cart-price">
                              {{ get_currency_prefix() }}
                              <span id="summary-shipping{{ $cart->id }}">{{ number_format(0, 2, '.', '') }}</span>{{ get_currency_suffix() }}
                            </span>
                                                </td>
                                            </tr>

                                            @unless(empty(json_decode($packaging_options)))
                                                <tr>
                                                    <th width="50%">
                                                        <div class="cart-hoverable">
                                <span class="summery-title">
                                  <a class="packaging-options" href="javascript:void(0)" data-toggle="popover" data-cart="{{ $cart->id }}" data-options="{{ $packaging_options }}" title="{{ trans('theme.packaging') }}">
                                    <u>{{ trans('theme.packaging') }}</u>
                                  </a>
                                </span>
                                                            <span class="summery-label" id="summary-packaging-name{{ $cart->id }}">
                                  {{ $default_packaging ? $default_packaging->name : '' }}
                                </span>
                                                            {{-- <div class="cart-hover-option packaging-hover">
                                                            <div class="cart-hover-title">Packaging</div>
                                                            <table class="zcart-table">
                                                              <tbody>
                                                                <tr>
                                                                  <td><input type="radio" name="pack" id=""></td>
                                                                  <td>Free Packaging</td>
                                                                  <td>$0.00</td>
                                                                </tr>
                                                                <tr>
                                                                  <td><input type="radio" name="pack" id=""></td>
                                                                  <td>Signature Packaging</td>
                                                                  <td>$4.00</td>
                                                                </tr>
                                                                <tr>
                                                                  <td><input type="radio" name="pack" id=""></td>
                                                                  <td>Corporate Packaging</td>
                                                                  <td>$10.00</td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </div> --}}
                                                        </div>
                                                    </th>
                                                    <td>
                              <span class="cart-price">
                                {{ get_currency_prefix() }}
                                <span id="summary-packaging{{ $cart->id }}">
                                  {{ number_format($default_packaging ? $default_packaging->cost : 0, 2, '.', '') }}
                                </span>{{ get_currency_suffix() }}
                              </span>
                                                    </td>
                                                </tr>
                                            @endunless

                                            <tr id="discount-section-li{{ $cart->id }}" style="display: {{ $cart->coupon ? 'block' : 'none' }};">
                                                <th width="50%">
                                                    {{ trans('theme.discount') }}
                                                    <span id="summary-discount-name{{ $cart->id }}" class="summery-label">{{ $cart->coupon ? $cart->coupon->name . ' (' . $cart->coupon->getFormatedAmountText() . ')' : '' }}</span>
                                                    </span>
                                                </th>
                                                <td>
                            <span class="cart-price">
                              -{{ get_currency_prefix() }}
                              <span id="summary-discount{{ $cart->id }}">{{ $cart->coupon ? number_format($cart->discount, 2, '.', '') : number_format(0, 2, '.', '') }}</span>{{ get_currency_suffix() }}
                            </span>
                                                </td>
                                            </tr>

                                            <tr id="tax-section-li{{ $cart->id }}" style="display: none;">
                                                <th width="50%">{{ trans('theme.taxes') }}</th>
                                                <td>
                            <span class="cart-price">
                              {{ get_currency_prefix() }}
                              <span id="summary-taxes{{ $cart->id }}">{{ number_format(0, 2, '.', '') }}</span>{{ get_currency_suffix() }}
                            </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th width="50%">{{ trans('theme.total') }}</th>
                                                <td>
                            <span class="cart-price">
                              {{ get_currency_prefix() }}
                              <span id="summary-grand-total{{ $cart->id }}">{{ number_format(0, 2, '.', '') }}</span>{{ get_currency_suffix() }}
                            </span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="cart-action-buttons d-flex justify-content-between">
                                    @if (allow_checkout())
                                        <button type="submit" form="formId{{ $cart->id }}" id="checkout-btn{{ $cart->id }}" class="btn btn-primary btn-sm flat pull-right">
                                            <i class="fa fa-shopping-cart"></i> {{ trans('theme.button.buy_from_this_seller') }}
                                        </button>
                                    @else
                                        <a href="#nav-login-dialog" data-toggle="modal" data-target="#loginModal" class="btn btn-primary btn-sm flat pull-right">
                                            <i class="fa fa-shopping-cart"></i> {{ trans('theme.button.buy_from_this_seller') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="row">
                        <div class="col-6 nopadding-right ">
                            <a href="{{ url('/') }}" class="btn btn-black flat">{{ trans('theme.button.continue_shopping') }}</a>
                        </div>
                        <div class="col-6 nopadding-left text-right">
                            @if (is_incevio_package_loaded('checkout'))
                                @include('checkout::_checkout_button')
                            @endif
                        </div>
                    </div>
            @else
                <p class="lead text-center my-5">
                    {{ trans('theme.empty_cart') }}<br /><br />
                    <a href="{{ url('/') }}" class="btn btn-primary flat">
                        <i class="fa fa-shopping-cart"></i> @lang('theme.button.shop_now')
                    </a>
                </p>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    @include('theme::modals.ship_to')
    @include('theme::scripts.cart')
    @include('theme::scripts.dynamic_checkout')
@endsection
