<div class="modal-dialog modal-sm">
  <div class="modal-content">
    {!! Form::model($config, ['method' => 'PUT', 'route' => ['admin.setting.sslcommerz.update', $config], 'id' => 'form', 'data-toggle' => 'validator']) !!}
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      {{ trans('app.form.config') . ' sslcommerz' }}
    </div>
    <div class="modal-body">
      <div class="form-group">
        {!! Form::label('sandbox', trans('app.form.environment') . '*', ['class' => 'with-help']) !!}
        <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.config_payment_environment') }}"></i>
        {!! Form::select('sandbox', ['1' => trans('app.test'), '0' => trans('app.live')], null, ['class' => 'form-control select2-normal', 'required']) !!}
        <div class="help-block with-errors"></div>
      </div>

      <div class="form-group">
        {!! Form::label('store_id', trans('sslcommerz::lang.sslcommerz_store_id') . '*', ['class' => 'with-help']) !!}
        {{-- <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.config_razorpay_api_key') }}"></i> --}}
        {!! Form::text('store_id', null, ['class' => 'form-control', 'placeholder' => trans('sslcommerz::lang.sslcommerz_store_id'), 'required']) !!}
        <div class="help-block with-errors"></div>
      </div>

      <div class="form-group">
        {!! Form::label('store_password', trans('sslcommerz::lang.sslcommerz_store_password') . '*', ['class' => 'with-help']) !!}
        {{-- <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.config_razorpay_secret') }}"></i> --}}
        {!! Form::text('store_password', null, ['class' => 'form-control', 'placeholder' => trans('sslcommerz::lang.sslcommerz_store_password'), 'required']) !!}
        <div class="help-block with-errors"></div>
      </div>

    </div>
    <div class="modal-footer">
      {!! Form::submit(trans('app.update'), ['class' => 'btn btn-flat btn-new']) !!}
    </div>
    {!! Form::close() !!}
  </div> <!-- / .modal-content -->
</div> <!-- / .modal-dialog -->
