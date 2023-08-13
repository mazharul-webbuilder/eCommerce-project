{{-- <div class="form-item zcart-has-error"> --}}
<div class="form-item">
  {{-- <label for="name">{{ trans('theme.placeholder.address_title') }}<span class="req">*</span></label> --}}
  {!! Form::text('address_title', null, ['id' => 'name', 'class' => 'form-text', 'placeholder' => trans('theme.placeholder.address_title') . '*', 'required']) !!}
  {{-- <div class="zcart-error-text">First name can not be empty.</div> --}}
  <div class="zcart-error-text with-errors"></div>
</div>

<div class="form-item">
  {{-- <label for="address_line_1">{{ trans('theme.placeholder.address_line_1') }}<span class="req">*</span></label> --}}
  {!! Form::text('address_line_1', null, ['id' => 'address_line_1', 'class' => 'form-text', 'placeholder' => trans('theme.placeholder.address_line_1') . '*', 'required']) !!}
  <div class="help-block with-errors"></div>
</div>

<div class="form-item">
  {{-- <label for="address_line_2">{{ trans('theme.placeholder.address_line_2') }}</label> --}}
  {!! Form::text('address_line_2', null, ['id' => 'address_line_2', 'class' => 'form-text', 'placeholder' => trans('theme.placeholder.address_line_2')]) !!}
  <div class="help-block with-errors"></div>
</div>

<div class="row">
  <div class="col-md-8">
    <div class="form-item">
      {{-- <label for="country">{{ trans('theme.country') }}<span class="req">*</span></label> --}}
      @if (is_address_autocomplete_on())
        {!! Form::text('country_id', isset($cart) ? $cart->country->name : null, ['id' => 'address_country', 'class' => 'form-text', 'placeholder' => trans('theme.country') . '*', 'required']) !!}
        <div class="help-block with-errors"></div>
      @elseif (isset($one_checkout_form))
        {!! Form::text('country_id', $cart->country->name, ['id' => 'address_country', 'class' => 'form-text', 'disabled' => 'true']) !!}
        <div class="help-block with-errors small text-warning">{{ trans('checkout::lang.make_changes_on_cart_page') }}</div>
      @else
        <div class="zcart-select position-relative">
          {!! Form::select('country_id', $countries, isset($address) ? null : (isset($cart) ? $cart->ship_to_country_id : config('system_settings.address_default_country')), ['id' => 'address_country', 'id' => 'address_country', 'class' => 'form-select', 'placeholder' => trans('theme.country') . '*', 'required']) !!}
          <div class="help-block with-errors"></div>
        </div>
      @endif
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-item">
      {{-- <label for="postcode">Zip Code<span class="req">*</span></label> --}}
      {!! Form::text('zip_code', null, ['id' => 'postcode', 'class' => 'form-text', 'placeholder' => trans('theme.placeholder.zip_code') . '*', 'required']) !!}
      <div class="help-block with-errors"></div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="form-item">
      {{-- <label for="phone">Phone Number<span class="req">*</span></label> --}}
      {!! Form::text('city', null, ['id' => 'address_city', 'class' => 'form-text', 'placeholder' => trans('theme.placeholder.city') . '*', 'required']) !!}
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-item">
      {{-- <label for="email">Email Address<span class="req">*</span></label> --}}
      @if (is_address_autocomplete_on())
        {!! Form::text('state_id', isset($cart) ? $cart->state->name : null, ['id' => 'address_state', 'class' => 'form-text', 'placeholder' => trans('theme.placeholder.state') . '*', 'required']) !!}
        <div class="help-block with-errors"></div>
      @elseif (isset($one_checkout_form))
        {!! Form::text('state_id', $cart->state->name, ['id' => 'address_state', 'class' => 'form-text', 'disabled' => 'true']) !!}
        <div class="help-block with-errors small text-warning">{{ trans('checkout::lang.make_changes_on_cart_page') }}</div>
      @else
        <div class="zcart-select position-relative">
          {!! Form::select('state_id', isset($states) ? $states : [], isset($cart) ? $cart->ship_to_state_id : (isset($address) ? null : config('system_settings.address_default_state')), ['id' => 'address_state', 'id' => 'address_state', 'class' => 'form-select', 'placeholder' => trans('theme.placeholder.state') . '*', empty($states) ? '' : 'required']) !!}
          <div class="help-block with-errors"></div>
        </div>
      @endif
    </div>
  </div>
</div>

<div class="form-item">
  {!! Form::text('phone', null, ['id' => 'address_phone', 'class' => 'form-text', 'placeholder' => trans('theme.placeholder.phone_number')]) !!}
  <div class="help-block with-errors"></div>
</div>

{{-- GOOGLE PLACE API --}}
@if (is_address_autocomplete_on())

  @include('scripts.google_place')

@endif
