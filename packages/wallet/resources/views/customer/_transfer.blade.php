<div class="col-md-6 col-md-offset-2 my-5">
  <div class="panel panel-default">
    <div class="panel-heading">{{ trans('wallet::lang.transfer_balance') }}</div>
    <div class="panel-body">
      {!! Form::open(['route' => 'customer.account.wallet.transfer', 'id' => 'form', 'data-toggle' => 'validator']) !!}

      @include('wallet::_transfer_form')

      <button id="pay-now-btn" class="btn btn-primary btn-lg btn-block" type="submit">
        <small><i class="fa fa-shield"></i>
          <span id="pay-now-btn-txt">@lang('wallet::lang.transfer')</span>
        </small>
      </button>
      {!! Form::close() !!}
    </div>
  </div>
</div>
