@extends('theme::layouts.main')

@section('content')
  @php
  $geoip = geoip(get_visitor_IP());
  $geoip_country = $business_areas->where('iso_code', $geoip->iso_code)->first();

  $shipping_country_id = $cart->ship_to_country_id ?? optional($geoip_country)->id;

  if (!$cart->shipping_state_id) {
      $geoip_state = \DB::table('states')
          ->select('id', 'name', 'iso_code')
          ->where([['country_id', '=', $shipping_country_id], ['iso_code', '=', $geoip->state]])
          ->first();
  }

  $shipping_state_id = $cart->ship_to_state_id ?? optional($geoip_state)->id;

  // $shipping_zone = get_shipping_zone_of($cart->shop_id, $shipping_country_id, $shipping_state_id);
  // $shipping_options = isset($shipping_zone->id) ? getShippingRates($shipping_zone->id) : 'NaN';

  $packaging_options = optional($cart->shop)->packagings;

  $default_packaging =
      $cart->shippingPackage ??
      (optional($cart->shop->packagings)
          ->where('default', 1)
          ->first() ??
          $platformDefaultPackaging);
  @endphp

  <div class="main-container zcart-light-bg">
    <div class="container">
      {{-- <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
          <div class="zcart-breadcrumb">
            <a href="#">Home</a><span class="lnr lnr-chevron-right"></span>
            <a href="#">Checkout</a>
          </div>
        </div>
      </div> --}}

      <div class="zcart-checkout-area">
        @if (Session::has('error'))
          <div class="notice notice-danger notice-sm">
            <strong>{{ trans('theme.error') }}</strong> {{ Session::get('error') }}
          </div>
        @endif

        <div class="notice notice-warning notice-sm space20" id="checkout-notice" style="display: {{ $cart->shipping_rate_id || $cart->is_free_shipping() ? 'none' : 'block' }};">
          <strong>{{ trans('theme.warning') }}</strong>
          <span id="checkout-notice-msg">@lang('theme.notify.seller_doesnt_ship')</span>
        </div>

        {!! Form::open(['route' => ['order.create', $cart], 'id' => 'formId' . $cart->id, 'name' => 'checkoutForm', 'files' => true, 'data-toggle' => 'validator', 'autocomplete' => 'off', 'novalidate']) !!}

        {{ Form::hidden('cart_id', $cart->id, ['id' => 'checkout-id']) }}
        {{ Form::hidden('cart_weight', $cart->shipping_weight, ['id' => 'cartWeight' . $cart->id]) }}
        {{ Form::hidden('free_shipping', $cart->is_free_shipping(), ['id' => 'freeShipping' . $cart->id]) }}
        {{ Form::hidden('shop_id', $cart->shop->id, ['id' => 'shop-id' . $cart->id]) }}
        {{ Form::hidden('tax_id', isset($shipping_zones[$cart->id]->i) ? $shipping_zones[$cart->id]->tax_id : null, ['id' => 'tax-id' . $cart->id]) }}
        {{ Form::hidden('taxrate', $cart->taxrate, ['id' => 'cart-taxrate' . $cart->id]) }}
        {{ Form::hidden('packaging_id', $cart->packaging_id ?? $default_packaging->id, ['id' => 'packaging-id' . $cart->id]) }}
        {{ Form::hidden('zone_id', $cart->shipping_zone_id, ['id' => 'zone-id' . $cart->id]) }}
        {{ Form::hidden('shipping_rate_id', $cart->shipping_rate_id, ['id' => 'shipping-rate-id' . $cart->id]) }}
        {{ Form::hidden('ship_to_country_id', $cart->ship_to_country_id, ['id' => 'shipto-country-id' . $cart->id]) }}
        {{ Form::hidden('ship_to_state_id', $cart->ship_to_state_id, ['id' => 'shipto-state-id' . $cart->id]) }}
        {{ Form::hidden('coupon_raw', json_encode($cart->coupon), ['id' => 'coupon-raw' . $cart->id]) }}
        {{-- {{ Form::hidden('discount_id', $cart->coupon_id, ['id' => 'discount-id' . $cart->id]) }} --}}
        {{ Form::hidden('handling_cost', $cart->handling_cost > 0 ? $cart->handling_cost : optional($cart->shop->config)->order_handling_cost, ['id' => 'handling-cost' . $cart->id]) }}

        <div class="row shopping-cart-table-wrap space30" id="cartId{{ $cart->id }}" data-cart="{{ $cart->id }}">
          <div class="col-lg-4">
            <div class="zcart-card mb-20">
              <div class="text-muted small mb-3">
                <i class="far fa-store"></i> {{ trans('theme.sold_by') }}
              </div>

              <a href="{{ route('show.store', $shop->slug) }}" class="seller-info-name mr-3">
                <img src="{{ get_storage_file_url(optional($shop->logoImage)->path, 'thumbnail') }}" class="seller-info-logo img-sm" title="{{ $shop->name }}" alt="{{ trans('theme.logo') }}">
              </a>

              <a href="{{ route('show.store', $shop->slug) }}" class="seller-info-name">
                <span class="text-primary">{{ $shop->name }}</span>
              </a>

              <div class="zcart-coupon mt-20">
                <!-- <h2>Apply Coupon Code</h2>  -->
                <div class="form-item d-flex">
                  <input name="coupon" value="{{ $cart->coupon ? $cart->coupon->code : null }}" id="coupon{{ $cart->id }}" class="form-control flat" type="text" placeholder="@lang('theme.coupon_code')">
                  <button class="btn btn-default flat apply_seller_coupon" type="button" data-cart="{{ $cart->id }}">@lang('theme.button.apply_coupon')</button>
                </div>
              </div>

              <div class="zcart-summary">
                <h2>{{ trans('theme.order_info') }}</h2>
                <div class="cart-summary-box">
                  <table class="zcart-table">
                    <tbody>
                      <tr>
                        <th width="50%">{{ trans('theme.item_count') }}</th>
                        <td><span class="cart-price">{{ $cart->inventories_count }}</span></td>
                      </tr>
                      <tr>
                        <th width="50%">{{ trans('theme.quantity') }}</th>
                        <td><span class="cart-price">{{ $cart->quantity }}</span></td>
                      </tr>
                      <tr>
                        <th width="50%">{{ trans('theme.subtotal') }}</th>
                        <td>
                          <span class="cart-price">{{ get_currency_prefix() }}
                            <span id="summary-total{{ $cart->id }}" class="item-total{{ $cart->id }}">{{ number_format($cart->total, 2, '.', '') }}</span>{{ get_currency_suffix() }}
                          </span>
                        </td>
                      </tr>

                      <tr>
                        <th width="50%">
                          <div class="cart-hoverable">
                            <a class="dynamic-shipping-rates" data-toggle="popover" data-cart="{{ $cart->id }}" data-options="{{ $shipping_options[$cart->id] }}" id="shipping-options{{ $cart->id }}" title="{{ trans('theme.shipping') }}">
                              <span class="summery-title">{{ trans('theme.shipping') }}</span>
                            </a>
                            <span id="summery-label summary-shipping-name{{ $cart->id }}"></span>

                            {{-- <span class="summery-title">Shipping</span> --}}
                            {{-- <span class="summery-label">Fast Shipping</span> --}}
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
                          <span>{{ get_currency_prefix() }}
                            <span class="cart-price" id="summary-shipping{{ $cart->id }}">{{ number_format($cart->get_shipping_cost(), 2, '.', '') }}</span>{{ get_currency_suffix() }}
                          </span>
                        </td>
                      </tr>

                      @unless(empty(json_decode($packaging_options)))
                        <tr>
                          <th width="50%">
                            <div class="cart-hoverable">
                              <span class="summery-title">
                                <a class="packaging-options" data-toggle="popover" data-cart="{{ $cart->id }}" data-options="{{ $packaging_options }}" title="{{ trans('theme.packaging') }}">
                                  <u>{{ trans('theme.packaging') }}</u>
                                </a>
                              </span>

                              <span class="summery-label" id="summary-packaging-name{{ $cart->id }}">
                                {{ optional($default_packaging)->name }}
                              </span>

                              {{-- <span class="summery-title">Packaging</span> --}}
                              {{-- <span class="summery-label">Free Basic Packaging</span> --}}
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
                            <span>{{ get_currency_prefix() }}
                              <span class="cart-price" id="summary-packaging{{ $cart->id }}">
                                {{ number_format($default_packaging ? $default_packaging->cost : 0, 2, '.', '') }}
                              </span>{{ get_currency_suffix() }}
                            </span>
                          </td>
                        </tr>
                      @endunless

                      <tr id="discount-section-li{{ $cart->id }}" style="display: {{ $cart->discount > 0 ? 'block' : 'none' }};">
                        <th width="50%">
                          <span class="summery-title">
                            {{ trans('theme.discount') }}
                          </span>
                          <span class="summery-label" id="summary-discount-name{{ $cart->id }}">
                            {{ $cart->coupon ? $cart->coupon->name . ' (' . $cart->coupon->getFormatedAmountText() . ')' : '' }}
                          </span>
                        </th>
                        <td>
                          <span class="cart-price">
                            -{{ get_currency_prefix() }}
                            <span id="summary-discount{{ $cart->id }}">{{ $cart->coupon ? number_format($cart->discount, 2, '.', '') : number_format(0, 2, '.', '') }}</span>{{ get_currency_suffix() }}
                          </span>
                        </td>
                      </tr>

                      <tr id="tax-section-li{{ $cart->id }}" style="display: {{ $cart->taxes > 0 ? 'block' : 'none' }};">
                        <th width="50%">
                          <span class="summery-title">
                            {{ trans('theme.taxes') }}
                          </span>
                          <span class="summery-label">
                            {{ get_currency_prefix() }}
                            <span id="summary-taxes{{ $cart->id }}">{{ number_format($cart->taxes, 2, '.', '') }}</span>{{ get_currency_suffix() }}
                          </span>
                        </th>
                        <td>
                          <span class="cart-price">
                            -{{ get_currency_prefix() }}
                            <span id="summary-discount{{ $cart->id }}">{{ $cart->coupon ? number_format($cart->discount, 2, '.', '') : number_format(0, 2, '.', '') }}</span>{{ get_currency_suffix() }}
                          </span>
                        </td>
                      </tr>

                      <tr>
                        <th width="50%">{{ trans('theme.total') }}</th>
                        <th class="text-right">
                          <span class="cart-price">
                            {{ get_currency_prefix() }}
                            <span id="summary-grand-total{{ $cart->id }}">{{ number_format($cart->calculate_grand_total(), 2, '.', '') }}</span>{{ get_currency_suffix() }}
                          </span>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5 pl-0">
            <div class="zcart-card">
              <h2>
                {{ trans('theme.ship_to') }}
              </h2>

              <div class="checkout-form">
                @if (isset($customer))
                  <div class="row customer-address-list">
                    @php
                      $pre_select = null;
                    @endphp

                    @foreach ($customer->addresses as $address)
                      @php
                        $ship_to_this_address = null;
                        
                        // If any address not selected yet
                        if ($pre_select == null) {
                            // Has onely address
                            if ($customer->addresses->count() == 1) {
                                $pre_select = 1;
                                $ship_to_this_address = true;
                            }
                            // Just created this address
                            elseif (Request::has('address')) {
                                if (Request::get('address') == $address->id) {
                                    $pre_select = 1;
                                    $ship_to_this_address = true;
                                }
                            }
                            // Zone selected at cart page
                            elseif ($cart->ship_to_country_id == $address->country_id && $cart->ship_to_state_id == $address->state_id) {
                                $pre_select = 1;
                                $ship_to_this_address = true;
                            }
                            // Customer's shipping address
                            elseif ($cart->ship_to == null && $address->address_type === 'Shipping') {
                                $pre_select = 1;
                                $ship_to_this_address = true;
                            }
                        }
                      @endphp

                      <div class="col-sm-12 col-md-6 nopadding-{{ $loop->iteration % 2 == 1 ? 'right' : 'left' }}">
                        <div class="address-list-item {{ $ship_to_this_address == true ? 'selected' : '' }}">
                          {!! $address->toHtml('<br/>', false) !!}
                          <input type="radio" class="ship-to-address" name="ship_to" value="{{ $address->id }}" {{ $ship_to_this_address == true ? 'checked' : '' }} data-country="{{ $address->country_id }}" data-state="{{ $address->state_id }}" required>
                        </div>
                      </div>

                      @if ($loop->iteration % 2 == 0)
                        <div class="clearfix"></div>
                      @endif
                    @endforeach
                  </div>

                  <small id="ship-to-error-block" class="text-danger pull-right"></small>

                  <div class="space20"></div>

                  <div class="col-sm-12 space20">
                    <a href="{{ route('my.address.create') }}" class="modalAction btn btn-default btn-sm flat pull-right">
                      <i class="fas fa-address-card-o"></i> @lang('theme.button.add_new_address')
                    </a>
                  </div>

                @else
                  @if (isset($one_checkout_form))
                    @include('theme::partials.address_form')
                  @else
                    @include('theme::partials.address_form', ['countries' => $business_areas->pluck('name', 'id')])
                  @endif

                  <div class="form-item">
                    {!! Form::email('email', null, ['class' => 'form-text', 'placeholder' => trans('theme.placeholder.email'), 'maxlength' => '100', 'autocomplete' => 'new-customer-email', 'required']) !!}
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="checkbox">
                    {{-- <label>
                      {!! Form::checkbox('create-account', null, null, ['id' => 'create-account-checkbox', 'class' => 'i-check']) !!} {!! trans('theme.create_account') !!}
                    </label> --}}
                  </div>

                  <div class="checkout-registration">
                    <div class="form-item zcart-checkbox">
                      <label>
                        {!! Form::checkbox('create-account', null, null, ['id' => 'create-account', 'class' => 'create-account']) !!}
                        {!! trans('theme.create_account') !!}
                      </label>
                    </div>
                    <div class="create-account-fields">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-item">
                            {!! Form::password('password', ['class' => 'form-text', 'id' => 'acc-password', 'placeholder' => trans('theme.placeholder.password'), 'autocomplete' => 'new-customer-password', 'data-minlength' => '6']) !!}
                            <div class="help-block with-errors"></div>
                            {{-- <label for="password">Password<span class="req">*</span></label> --}}
                            {{-- <input name="password" id="password" class="form-text" type="password" placeholder="Password"> --}}
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-item">
                            {!! Form::password('password_confirmation', ['class' => 'form-text', 'placeholder' => trans('theme.placeholder.confirm_password'), 'autocomplete' => 'new-customer-password', 'data-match' => '#acc-password']) !!}
                            <div class="help-block with-errors"></div>
                            {{-- <label for="cpassword">Confirm Password<span class="req">*</span></label> --}}
                            {{-- <input name="cpassword" id="cpassword" class="form-text" type="password" placeholder="Confirm Password"> --}}
                          </div>
                        </div>
                      </div>

                      @if (config('system_settings.ask_customer_for_email_subscription'))
                        <div class="form-item zcart-checkbox">
                          {{-- <div class="checkbox"> --}}
                          <label>
                            {!! Form::checkbox('accepts_marketing', null, null, ['class' => '']) !!}
                            {!! trans('theme.input_label.subscribe_to_the_newsletter') !!}
                          </label>
                          {{-- </div> --}}

                          {{-- <input type="checkbox" name="newsletter" id="newsletter" class="newsletter" value="1"> --}}
                          {{-- <label for="newsletter">Subscribe to the Newsletter</label> --}}
                        </div>
                      @endif

                      <p class="text-info small">
                        <i class="fas fa-info-circle"></i>
                        {!! trans('theme.help.create_account_on_checkout', ['link' => get_page_url(\App\Models\Page::PAGE_TNC_FOR_CUSTOMER)]) !!}
                      </p>
                    </div>
                  </div>
                @endif

                @if (is_incevio_package_loaded('pharmacy'))
                  @include('pharmacy::checkout_form')
                @endif

                <div class="form-item">
                  {!! Form::label('buyer_note', trans('theme.leave_message_to_seller')) !!}
                  {!! Form::textarea('buyer_note', null, ['class' => 'form-textarea flat summernote-without-toolbar', 'placeholder' => trans('theme.placeholder.message_to_seller'), 'rows' => '2', 'maxlength' => '250']) !!}
                  <div class="help-block with-errors"></div>
                </div>

                <small class="help-block text-muted pull-right">* {{ trans('theme.help.required_fields') }}</small>
              </div>
            </div>
          </div>

          <div class="col-lg-3 pl-0">
            <div class="zcart-card px-3 mb-20">
              @include('partials.payment_options')

              {{-- <div class="payment-card-info">
                <div class="form-item">
                  <!-- <label for="cardholder">Cardholder Name<span class="req">*</span></label> -->
                  <input name="cardholder" id="cardholder" class="form-text" type="text" placeholder="Cardholder name">
                </div>
                <div class="form-item">
                  <!-- <label for="cardno">Card Number<span class="req">*</span></label> -->
                  <input name="cardno" id="cardno" class="form-text" type="number" placeholder="Card number">
                </div>
                <div class="form-item">
                  <!-- <label for="cvc">CVC<span class="req">*</span></label> -->
                  <input name="cvc" id="cvc" class="form-text" type="number" placeholder="CVC">
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-item zcart-select position-relative">
                      <select name="" id="" class="form-select">
                        <option selected="selected" value="">Expiration month</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-item zcart-select position-relative">
                      <select name="expyear" class="form-select">
                        <option selected="selected" value="">Expiration Year</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row cart-action-buttons">
                  <div class="col-md-6">
                    <a href="#" class="btn btn-main btn-black w-100 text-center">Continue Shopping</a>
                  </div>
                  <div class="col-md-6">
                    <a href="checkout.html" class="btn btn-main w-100 text-center">Click To Checkout</a>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('scripts.checkout')
  @include('theme::scripts.dynamic_checkout')
@endsection
