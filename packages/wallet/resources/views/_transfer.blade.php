<div class="modal-dialog modal-sm">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      {{ trans('wallet::lang.transfer_balance') }}
    </div>
    {!! Form::open(['route' => 'merchant.wallet.transfer', 'id' => 'form', 'data-toggle' => 'validator']) !!}
    <div class="modal-body">

      @include('wallet::_transfer_form')

    </div>
    <div class="modal-footer">
      {!! Form::submit(trans('wallet::lang.transfer'), ['class' => 'btn btn-flat btn-new']) !!}
    </div>
    {!! Form::close() !!}
  </div> <!-- / .modal-content -->
</div> <!-- / .modal-dialog -->
