<div class="modal" id="disputeResponseModal">
  <div class="modal-bg modal-exit"></div>
  <div class="modal-container">
    <div class="modal-header">
      <h3 style="line-height: 36px;">
        {{ trans('theme.dispute') }}
      </h3>
      <button class="modal-close modal-exit"><span class="lnr lnr-cross"></span></button>
    </div>
    <div class="modal-body">
      {!! Form::model($order->dispute, ['method' => 'POST', 'route' => ['dispute.response', $order->dispute], 'files' => true, 'id' => 'form', 'data-toggle' => 'validator']) !!}
      {{-- <div class="row select-box-wrapper">
                    <div class="form-group col-md-12">
                        {!! Form::label('status', trans('theme.status').'*') !!}
                        {!! Form::select('status', \App\Helpers\ListHelper::dispute_statuses() , Null, ['class' => 'selectBoxIt', 'required']) !!}
                        <div class="help-block with-errors"></div>
                    </div>
                </div> --}}

      @include('theme::partials._reply')

      <div class="form-group">
        <label>
          {!! Form::checkbox('solved', null, null, ['class' => 'form-checkbox']) !!} {{ trans('theme.mark_as_solved') }}
        </label>
      </div>

      <button type="submit" class='btn btn-black btn-sm flat pull-right'>{{ trans('theme.button.submit') }}</button>

      {!! Form::close() !!}
    </div><!-- /.modal-body -->
    <div class="modal-footer">
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal -->
