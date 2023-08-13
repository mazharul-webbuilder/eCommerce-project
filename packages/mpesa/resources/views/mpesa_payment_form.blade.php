<div id="mpesa-form" class="mpesa-form" style="display: none;">
  <hr class="style4 muted">
  <div id="mpesa-errors" class="hide"></div>
  <div class="form-group">
    {!! Form::text('mpesa_number', null, ['id' => 'mpesa-account', 'class' => 'form-control mpesa-request-field flat', 'placeholder' => trans('mpesa::lang.mpesa_number')]) !!}
    <div class="help-block with-errors"></div>
  </div>
</div> <!-- #mpesa-account-form -->
