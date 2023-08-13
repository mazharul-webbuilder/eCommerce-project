{{-- <div class="modal modal-md" id="modal-login"> --}}
<div class="modal-bg modal-exit"></div>
<div class="modal-container">
  <div class="modal-header">
    <h3 style="line-height: 36px;">
      {{ $address->address_type . ' ' . trans('theme.address') }}
    </h3>
    <button class="modal-close modal-exit"><span class="lnr lnr-cross"></span></button>
  </div>
  <div class="modal-body">
    {!! Form::model($address, ['route' => ['my.address.update', $address], 'method' => 'PUT', 'data-toggle' => 'validator']) !!}
    @if (isset($address_types))
      <div class="form-item">
        {!! Form::select('address_type', $address_types, null, ['class' => 'form-select flat', 'placeholder' => trans('theme.placeholder.address_type') . '*', 'required']) !!}
        <div class="help-block with-errors"></div>
      </div>
    @endif

    @include('theme::partials.address_form')

    <button type="submit" class='btn btn-default btn-sm flat pull-right'><i class="fas fa-save"></i> {{ trans('theme.button.save') }}</button>
    {!! Form::close() !!}
    <small class="help-block text-muted">* {{ trans('theme.help.required_fields') }}</small>
  </div><!-- /.modal-body -->
</div><!-- /.modal-content -->
{{-- </div><!-- /.modal-dialog --> --}}
