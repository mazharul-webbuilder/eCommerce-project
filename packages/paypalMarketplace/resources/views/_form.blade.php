<div class="form-group">
  {!! Form::label('account_email', trans('paypalMarketplace::lang.paypal_business_email') . '*', ['class' => 'with-help']) !!}
  {!! Form::email('account_email', null, ['class' => 'form-control input-lg', 'placeholder' => trans('paypalMarketplace::lang.paypal_business_email'), 'required']) !!}
  <div class="help-block with-errors"></div>
</div>
