<div class="modal modal-sm" id="loginModal">
  <div class="modal-bg modal-exit"></div>
  <div class="modal-container">
    <div class="modal-header">
      <h3>
        {{ trans('theme.account_login') }}
      </h3>
      <button class="modal-close modal-exit"><span class="lnr lnr-cross"></span></button>
    </div>
    <div class="modal-body">
      <div class="modal-form">
        {!! Form::open(['route' => 'customer.login.submit', 'id' => 'loginForm', 'data-toggle' => 'validator', 'novalidate']) !!}
        <div class="form-item">
          <input name="email" id="email" class="form-text" type="email" placeholder="{{ trans('theme.placeholder.your_email') }}" required />
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-item">
          <input name="password" id="password" class="form-text" type="password" placeholder="{{ trans('theme.placeholder.password') }}" required />
          <div class="help-block with-errors"></div>
        </div>
        <div class="row">
          <div class="col-7">
            <div class="form-item">
              <label>
                <input name="remeber" id="remeber" class="i-check-blue" type="checkbox" /> {{ trans('theme.remember_me') }}
              </label>
            </div>
          </div>
          <div class="col-5">
            <input class="btn btn-block btn-lg flat btn-primary" type="submit" value="{{ trans('theme.button.login') }}">
          </div>
        </div>
        {!! Form::close() !!}
      </div><!-- /.modal-form -->

      <div class="row">
        <a href="javascript:void(0);" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#passwordResetModal">{{ trans('theme.forgot_password') }}</a>
        <a href="javascript:void(0);" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#createAccountModal">{{ trans('theme.register_here') }}</a>
      </div>

      <div class="social-auth-links text-center">
        <div class="row">
          <div class="col-6 nopadding-right">
            <a href="{{ route('socialite.customer', 'facebook') }}" class="btn btn-block btn-social btn-facebook btn-lg flat"><i class="fab fa-facebook-f"></i> {{ trans('theme.button.login_with_fb') }}</a>
          </div>
          <div class="col-6 nopadding-left">
            <a href="{{ route('socialite.customer', 'google') }}" class="btn btn-block btn-social btn-google btn-lg flat"><i class="fab fa-google"></i> {{ trans('theme.button.login_with_g') }}</a>
          </div>
        </div>
      </div>

    </div>

    @if (config('app.demo') == true)
      <h4>Demo Login::</h4>
      <p>Username: <strong>customer@demo.com</strong> | Password: <strong>123456</strong> </p>
    @endif
  </div>
</div>

<div class="modal fade" id="createAccountModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content flat">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title">{{ trans('theme.create_account') }}</span>
      </div>
      <div class="modal-body">
        {!! Form::open(['route' => 'customer.register', 'id' => 'registerForm', 'data-toggle' => 'validator', 'novalidate']) !!}
        <div class="form-group">
          <input name="name" class="form-control input-lg flat" placeholder="{{ trans('theme.placeholder.full_name') }}" type="text" required />
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <input name="email" class="form-control input-lg flat" placeholder="{{ trans('theme.placeholder.your_email') }}" type="email" required />
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <input name="password" class="form-control input-lg flat" placeholder="{{ trans('theme.placeholder.password') }}" type="password" required />
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <input name="password_confirmation" class="form-control input-lg flat" placeholder="{{ trans('theme.placeholder.confirm_password') }}" type="password" required />
          <div class="help-block with-errors"></div>
        </div>
        @if (config('system_settings.ask_customer_for_email_subscription'))
          <div class="form-group">
            <label>
              <input name="subscribe" class="i-check-blue" type="checkbox" /> {{ trans('theme.input_label.subscribe_to_the_newsletter') }}
            </label>
          </div>
        @endif
        <div class="row">
          <div class="col-7">
            <div class="form-group">
              <label>
                <input name="agree" class="i-check-blue" type="checkbox" required /> {!! trans('theme.input_label.i_agree_with_terms', ['url' => route('page.open', \App\Models\Page::PAGE_TNC_FOR_CUSTOMER)]) !!}
              </label>
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-5">
            <input class="btn btn-block btn-lg flat btn-primary" type="submit" value="{{ trans('theme.create_account') }}" />
          </div>
        </div>
        {!! Form::close() !!}

        <div class="row">
          <a href="javascript:void(0);" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">{{ trans('theme.have_account') }}</a>
        </div>

        <div class="social-auth-links text-center">
          <div class="row">
            <div class="col-6 nopadding-right">
              <a href="{{ route('socialite.customer', 'facebook') }}" class="btn btn-block btn-social btn-facebook btn-lg flat"><i class="fab fa-facebook-f"></i> {{ trans('theme.button.login_with_fb') }}</a>
            </div>
            <div class="col-6 nopadding-left">
              <a href="{{ route('socialite.customer', 'google') }}" class="btn btn-block btn-social btn-google btn-lg flat"><i class="fab fa-google"></i> {{ trans('theme.button.login_with_g') }}</a>
            </div>
          </div>
        </div>
      </div><!-- /.modal-body -->
      <div class="modal-footer"></div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /#createAccountModal -->

<div class="modal fade" id="passwordResetModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content flat">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title">{{ trans('theme.password_recovery') }}</span>
      </div>
      <div class="modal-body">
        {!! Form::open(['route' => 'customer.password.email', 'id' => 'psswordRecoverForm', 'data-toggle' => 'validator', 'novalidate']) !!}
        <div class="form-group">
          <input name="email" class="form-control input-lg flat" placeholder="{{ trans('theme.placeholder.your_email') }}" type="email" required />
          <div class="help-block with-errors"></div>
        </div>
        <input class="btn btn-block flat btn-primary" type="submit" value="{{ trans('theme.button.recover_password') }}" />
        {!! Form::close() !!}
      </div><!-- /.modal-body -->
      <div class="modal-footer"></div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /#passwordResetModal -->
