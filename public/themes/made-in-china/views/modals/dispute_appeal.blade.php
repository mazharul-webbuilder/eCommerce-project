<div class="modal" id="disputeAppealModal">
  <div class="modal-bg modal-exit"></div>
  <div class="modal-container">
    <div class="modal-header">
      <h3 style="line-height: 36px;">
        {{ trans('theme.appeal_dispute') }}
      </h3>
      <button class="modal-close modal-exit"><span class="lnr lnr-cross"></span></button>
    </div>
    <div class="modal-body">
      {!! Form::model($order->dispute, ['method' => 'POST', 'route' => ['dispute.appeal', $order->dispute], 'files' => true, 'id' => 'form', 'data-toggle' => 'validator']) !!}

      @include('theme::partials._reply')

      <button type="submit" class='btn btn-black btn-sm flat pull-right'>{{ trans('theme.button.submit') }}</button>
      {!! Form::close() !!}
      <small class="help-block text-muted">* {{ trans('theme.help.required_fields') }}</small>
    </div><!-- /.modal-body -->
    <div class="modal-footer">
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal -->
