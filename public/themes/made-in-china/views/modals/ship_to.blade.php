<div class="modal" id="shipToModal">
  <div class="modal-bg modal-exit"></div>
  <div class="modal-container">
    <div class="modal-header">
      <h3 class="pt-2">
        {{ trans('theme.choose_delivery_location') }}
      </h3>
      <button class="modal-close modal-exit"><span class="lnr lnr-cross"></span></button>
    </div>
    <div class="modal-body">
      <div class="modal-form">
        {!! Form::open(['route' => ['register'], 'data-toggle' => 'validator', 'id' => 'shipToForm']) !!}
        {{ Form::hidden('cart', null, ['id' => 'cartinfo']) }} {{-- For the carts page --}}

        <div class="form-item">
          <label for="shipTo_country">{{ trans('theme.country') }}:</label>
          <div class="zcart-select position-relative">
            <select name="ship_to" id="shipTo_country" class="form-select" required="required">
              @foreach ($business_areas as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
              @endforeach
            </select>
            <div class="help-block with-errors"></div>
          </div>
        </div>

        <div class="form-item" id="state_id_select_wrapper">
          <label for="state_id">{{ trans('theme.placeholder.state') }}:</label>
          <div class="zcart-select position-relative">
            <select name="state_id" id="shipTo_state" class="form-select"></select>
          </div>
          <div class="help-block with-errors"></div>
        </div>

        <p class="space20 small"><i class="fas fa-info-circle"></i> {!! trans('theme.delivery_locations_info') !!}</p>

        <div class="form-item">
          <input class="btn btn-main" type="submit" value="{{ trans('theme.button.submit') }}">
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
