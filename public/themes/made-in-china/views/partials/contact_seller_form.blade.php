{!! Form::open(['route' => ['seller.contact', $vendor], 'data-toggle' => 'validator']) !!}
<div class="zcart-form-row d-flex form-item">
  <div class="zcart-form-label"><span>*</span>{{ trans('theme.from') }}:</div>
  <div class="zcart-form-field">
    {!! Form::email('email', null, ['class' => 'form-text', 'placeholder' => trans('theme.placeholder.email'), 'maxlength' => '100', 'required']) !!}
    <div class="help-block with-errors"></div>
  </div>
</div>
<div class="zcart-form-row d-flex form-item">
  <div class="zcart-form-label"><span>*</span>{{ trans('theme.subject') }}:</div>
  <div class="zcart-form-field">
    {!! Form::text('subject', null, ['class' => 'form-text flat', 'placeholder' => trans('theme.placeholder.contact_us_subject'), 'required']) !!}
    <div class="help-block with-errors"></div>
  </div>
</div>

<div class="zcart-form-row d-flex form-item">
  <div class="zcart-form-label"><span>*</span>{{ trans('theme.message') }}:</div>
  <div class="zcart-form-field">
    {!! Form::textarea('message', null, ['class' => 'form-textarea', 'rows' => '2', 'placeholder' => trans('theme.placeholder.message'), 'required']) !!}
    <div class="help-block with-errors"></div>
  </div>
</div>

<div class="zcart-form-row d-flex form-item">
  <div class="zcart-form-label"></div>
  <div class="zcart-form-field">
    @if (config('services.recaptcha.key'))
      <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
    @endif
    <div class="help-block with-errors"></div>
  </div>
</div>

<div class="zcart-form-row d-flex">
  <div class="zcart-form-label"></div>
  <div class="zcart-form-field d-flex align-items-center">
    <button type="submit" class='btn btn-main'><i class="fas fa-paper-plane"></i> {{ trans('theme.button.send_message') }}</button>
  </div>
</div>
{!! Form::close() !!}
