<div class="form-group">
  {!! Form::label('email', trans('wallet::lang.transfer_to')) !!}
  <div class="input-group">
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => trans('wallet::lang.transfer_to_wallet'), 'required']) !!}
    <span class="input-group-addon">
      <i class="fa fa-info-circle" data-toggle="tooltip" title="{!! trans('wallet::lang.transfer_to_help_text') !!}" data-placement="left"></i>
    </span>
  </div>
  <div class="help-block with-errors"></div>
</div>

<div class="form-group space30">
  {!! Form::label('order', trans('wallet::lang.amount')) !!}
  <div class="input-group">
    @if (get_currency_prefix())
      <span class="input-group-addon">
        {{ get_currency_prefix() }}
      </span>
    @endif

    {!! Form::number('amount', null, ['class' => 'form-control', 'step' => 'any', 'placeholder' => trans('wallet::lang.amount'), 'max' => $wallet->balance, 'required']) !!}

    @if (get_currency_suffix())
      <span class="input-group-addon">
        {{ get_currency_suffix() }}
      </span>
    @endif
  </div>
  <div class="help-block with-errors">{{ trans('wallet::lang.max_tarnfer_amount', ['amount' => get_formated_currency($wallet->balance, 2)]) }}</div>
</div>
