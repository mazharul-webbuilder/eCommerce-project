<div class="modal-dialog modal-sm">
  <div class="modal-content">
    {!! Form::open(['route' => ['admin.setting.paypalMarketplace.connect'], 'method' => 'post', 'id' => 'form', 'data-toggle' => 'validator']) !!}
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      {{ trans('app.form.config') . ' PayPal Marketplace' }}
    </div>
    <div class="modal-body">
      <p class="text text-info">
        {!! trans('paypalMarketplace::lang.will_redirect_to_paypal_connect') !!}
      </p>

      {!! Form::hidden('action_url', $actionUrl) !!}

      @include('paypalMarketplace::_form')

    </div>
    <div class="modal-footer">
      {!! Form::submit(trans('paypalMarketplace::lang.connect_paypal_account'), ['class' => 'btn btn-flat btn-new']) !!}
    </div>
    {!! Form::close() !!}
  </div> <!-- / .modal-content -->
</div> <!-- / .modal-dialog -->
