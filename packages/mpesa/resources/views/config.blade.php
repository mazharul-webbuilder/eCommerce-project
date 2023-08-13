<div class="modal-dialog modal-sm">
  <div class="modal-content">
    {!! Form::model($config, ['method' => 'PUT', 'route' => ['admin.setting.mpesa.update', $config], 'id' => 'form', 'data-toggle' => 'validator']) !!}
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      {{ trans('app.form.config') . ' mpesa' }}
    </div>
    <div class="modal-body">
      <div class="form-group">
        {!! Form::label('sandbox', trans('app.form.environment') . '*', ['class' => 'with-help']) !!}
        <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.config_payment_environment') }}"></i>
        {!! Form::select('sandbox', ['1' => trans('app.test'), '0' => trans('app.live')], null, ['class' => 'form-control select2-normal', 'required']) !!}
        <div class="help-block with-errors"></div>
      </div>

      <div class="form-group">
        {!! Form::label('consumer_key', trans('mpesa::lang.consumer_key') . '*', ['class' => 'with-help']) !!}
        {{-- <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.config_consumer_key') }}"></i> --}}
        {!! Form::text('consumer_key', null, ['class' => 'form-control', 'placeholder' => trans('mpesa::lang.consumer_key'), 'required']) !!}
        <div class="help-block with-errors"></div>
      </div>

      <div class="form-group">
        {!! Form::label('consumer_secret', trans('mpesa::lang.consumer_secret') . '*', ['class' => 'with-help']) !!}
        {!! Form::text('consumer_secret', null, ['class' => 'form-control', 'placeholder' => trans('mpesa::lang.consumer_secret'), 'required']) !!}
        <div class="help-block with-errors"></div>
      </div>

      <div class="form-group">
        {!! Form::label('short_code', trans('mpesa::lang.short_code') . '*', ['class' => 'with-help']) !!}
        {!! Form::text('short_code', null, ['class' => 'form-control', 'placeholder' => trans('mpesa::lang.short_code'), 'required']) !!}
        <div class="help-block with-errors"></div>
      </div>

      <div class="form-group">
        {!! Form::label('mpesa_passkey', trans('mpesa::lang.mpesa_passkey') . '*', ['class' => 'with-help']) !!}
        {!! Form::text('mpesa_passkey', null, ['class' => 'form-control', 'placeholder' => trans('mpesa::lang.mpesa_passkey'), 'required']) !!}
        <div class="help-block with-errors"></div>
      </div>

      <div class="form-group">
        {!! Form::label('lipa_na_mpesa', trans('mpesa::lang.lipa_na_mpesa') . '*', ['class' => 'with-help']) !!}
        {!! Form::text('lipa_na_mpesa', null, ['class' => 'form-control', 'placeholder' => trans('mpesa::lang.lipa_na_mpesa'), 'required']) !!}
        <div class="help-block with-errors"></div>
      </div>

    </div>
    <div class="modal-footer">
      {!! Form::submit(trans('app.update'), ['class' => 'btn btn-flat btn-new']) !!}
    </div>
    {!! Form::close() !!}
  </div> <!-- / .modal-content -->
</div> <!-- / .modal-dialog -->
