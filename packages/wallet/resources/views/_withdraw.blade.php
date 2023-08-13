<div class="modal-dialog modal-sm">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      {{ trans('wallet::lang.payout_request') }}
    </div>

    <div class="modal-body">
      <p class="lead">
        {{ trans('wallet::lang.available_balance') }}:
        <strong>{{ get_formated_currency($balance, config('system_settings.decimals', 2)) }}</strong>
      </p>

      @if ($balance < $minimum)
        <div class="alert alert-default" role="alert">
          <h4><i class="fa fa-warning"></i> {{ trans('wallet::lang.alert') }}!</h4>
          {!! trans('wallet::lang.minimum_withdrawal_limit_amount', ['amount' => get_formated_currency($minimum, true, 2)]) !!}
        </div>
      @else
        {!! Form::open(['route' => 'merchant.wallet.withdraw', 'files' => true, 'id' => 'form', 'data-toggle' => 'validator']) !!}
        <div class="form-group">
          {{-- {!! Form::label('order', trans('wallet::lang.amount')) !!} --}}
          <div class="input-group">
            @if (get_currency_prefix())
              <span class="input-group-addon" id="basic-addon1">
                {{ get_currency_prefix() }}
              </span>
            @endif

            {!! Form::number('amount', null, ['class' => 'form-control input-lg', 'step' => 'any', 'min' => $minimum, 'max' => $balance, 'placeholder' => trans('wallet::lang.amount')]) !!}

            @if (get_currency_suffix())
              <span class="input-group-addon" id="basic-addon1">
                {{ get_currency_suffix() }}
              </span>
            @endif
          </div>
          <div class="help-block with-errors">
            {!! trans('wallet::lang.minimum_withdrawal_limit_amount', ['amount' => get_formated_currency($minimum, true, 2)]) !!}
          </div>
        </div>

        <p class="text-info">
          <i class="fa fa-info-circle"></i>
          {!! trans('wallet::lang.payout_fee_may_apply', ['platform' => get_platform_title()]) !!}
        </p>

        {!! Form::submit(trans('wallet::lang.submit'), ['class' => 'btn btn-flat btn-new pull-right']) !!}
        {!! Form::close() !!}
      @endif
    </div><!-- / .modal-body -->
    <div class="modal-footer">
    </div>
  </div> <!-- / .modal-content -->
</div> <!-- / .modal-dialog -->
