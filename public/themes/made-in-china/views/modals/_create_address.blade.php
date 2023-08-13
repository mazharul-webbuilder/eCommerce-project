<div class="modal-bg modal-exit"></div>
<div class="modal-container">
  <div class="modal-header">
    <h3 style="line-height: 36px;">
      {{ trans('theme.button.add_new_address') }}
    </h3>
    <button class="modal-close modal-exit"><span class="lnr lnr-cross"></span></button>
  </div>
  <div class="modal-body">
    {!! Form::open(['route' => 'my.address.save', 'data-toggle' => 'validator']) !!}
    @if (isset($address_types))
      <div class="form-group">
        {!! Form::select('address_type', $address_types, null, ['class' => 'form-control flat', 'placeholder' => trans('theme.placeholder.address_type') . '*', 'required']) !!}
        <div class="help-block with-errors"></div>
      </div>
    @endif

    @include('theme::partials.address_form')

    <button type="submit" class='btn btn-default btn-sm flat pull-right'><i class="fas fa-save"></i> {{ trans('theme.button.save') }}</button>
    {!! Form::close() !!}
    <small class="help-block text-muted">* {{ trans('theme.help.required_fields') }}</small>
  </div><!-- /.modal-body -->
</div><!-- /.modal-content -->
