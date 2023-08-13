<div class="dashboard-order-details dashboard-quick-tables">
  <div class="row">
    <div class="col-md-12">
      <ul class="tabs" data-directive="tabs">
        <li>
          <a href="#account-info-tab" data-behaviour="tab">@lang('theme.basic_info')</a>
        </li>
        <li>
          <a href="#password-tab" data-behaviour="tab">@lang('theme.change_password')</a>
        </li>
        <li>
          <a href="#address-tab" data-behaviour="tab">@lang('theme.addresses')</a>
        </li>
      </ul>

      <div id="account-info-tab">
        <div class="dashboard-quick-tables">
          <div class="dashboard-table-box">
            <div class="dashboard-edit-account">
              <div class="edit-account-form">
                <div class="row">
                  <div class="col-md-9 col-12">
                    {!! Form::model($account, ['method' => 'PUT', 'route' => 'account.update', 'class' => 'form-horizontal', 'data-toggle' => 'validator']) !!}

                    <div class="form-item">
                      {!! Form::label('name', trans('theme.full_name') . '*', ['class' => '']) !!}
                      {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-text flat', 'placeholder' => trans('theme.placeholder.full_name'), 'required']) !!}
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-item">
                      {!! Form::label('nice_name', trans('theme.nice_name'), ['class' => '']) !!}
                      {!! Form::text('nice_name', null, ['id' => 'nice_name', 'class' => 'form-text flat', 'placeholder' => trans('theme.placeholder.nice_name')]) !!}
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-item">
                      {!! Form::label('email', trans('theme.email') . '*', ['class' => '']) !!}
                      {!! Form::email('email', null, ['class' => 'form-text flat', 'placeholder' => trans('theme.placeholder.email'), 'required']) !!}
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-item">
                      {!! Form::label('dob', trans('theme.dob'), ['class' => '']) !!}
                      {{-- <div class="input-item"> --}}
                      {!! Form::text('dob', null, ['class' => 'form-text flat datepicker', 'placeholder' => trans('theme.placeholder.dob')]) !!}
                      {{-- <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2"><i class="fas fa-calendar"></i></span>
                        </div> --}}
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-item">
                      {!! Form::label('description', trans('theme.bio'), ['class' => '']) !!}
                      {!! Form::textarea('description', null, ['class' => 'form-textarea flat', 'rows' => '4', 'placeholder' => trans('theme.placeholder.bio')]) !!}
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-item">
                      <div class="col-sm-4">
                        <small class="help-block text-muted pull-right">* {{ trans('theme.help.required_fields') }}</small>
                      </div>
                      <div class="col-sm-8">
                        {!! Form::submit(trans('theme.button.update'), ['class' => 'btn btn-main btn-yellow']) !!}
                      </div>
                    </div>
                    {!! Form::close() !!}
                  </div>

                  <div class="col-md-3 col-12">
                    <div class="form-item">
                      <div class="photo-upload">
                        <h2>{{ trans('theme.avatar') }}: </h2>

                        <div class="file-preview">
                          <img src="{{ get_storage_file_url(optional($account->image)->path, 'full') }}" alt="{{ trans('theme.avatar') }}" />
                        </div>

                        @if ($account->image)
                          <div class="my-1">
                            {!! Form::model($account, ['method' => 'DELETE', 'route' => 'my.avatar.remove', 'class' => 'form-horizontal', 'data-toggle' => 'validator']) !!}
                            <button type="button" class="btn btn-light btn-sm confirm" data-confirm="@lang('theme.confirm_action.delete')" type="submit" data-toggle="tooltip" data-title="{{ trans('theme.button.delete') }}" data-placement="left">
                              <i class="lnr lnr-cross"></i>
                              @lang('theme.button.delete')
                            </button>
                            {!! Form::close() !!}
                          </div>
                        @endif

                        {!! Form::open(['route' => 'my.avatar.save', 'files' => true, 'data-toggle' => 'validator']) !!}
                        <div class="form-item my-4">
                          {!! Form::file('avatar', ['id' => 'photo', 'class' => 'zcart-file', 'required']) !!}
                          <div class="help-block with-errors"></div>
                        </div>

                        <button type="submit" class="btn btn-main btn-sm flat">{{ trans('theme.button.change_avatar') }}</button>
                        {!! Form::close() !!}
                        {{-- <div class="fields-hints">
                          - jpg, jpeg or png format.<br>
                          - Maximum size of 1M.
                        </div> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="password-tab">
        <div class="dashboard-edit-account">
          <div class="form-req-suggetion text-right">
            "<span class="req">*</span>" means required.
          </div>
          {!! Form::model($account, ['method' => 'PUT', 'route' => 'my.password.update', 'class' => 'form-horizontal', 'data-toggle' => 'validator']) !!}

          <div class="edit-account-form pt-4">
            @if ($account->password)
              <div class="form-item">
                {!! Form::label('current_password', trans('theme.current_password') . '*', ['class' => '']) !!}
                {!! Form::password('current_password', ['class' => 'form-text', 'id' => 'current_password', 'placeholder' => trans('theme.placeholder.current_password'), 'data-minlength' => '6', 'required']) !!}
                <div class="help-block with-errors"></div>
              </div>
            @endif

            <div class="form-item">
              {!! Form::label('password', trans('theme.new_password') . '*', ['class' => '']) !!}
              {!! Form::password('password', ['class' => 'form-text', 'id' => 'password', 'placeholder' => trans('theme.placeholder.password'), 'data-minlength' => '6', 'required']) !!}
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-item">
              {!! Form::label('password_confirmation', trans('theme.confirm_password') . '*', ['class' => '']) !!}
              {!! Form::password('password_confirmation', ['class' => 'form-text', 'placeholder' => trans('theme.placeholder.confirm_password'), 'data-match' => '#password', 'required']) !!}
              <div class="help-block with-errors"></div>
            </div>
          </div>

          <div class="form-item mt-20 text-center d-block">
            {!! Form::submit(trans('theme.button.update'), ['class' => 'btn btn-main btn-yellow']) !!}
          </div>
          {!! Form::close() !!}
        </div>
      </div>

      <div id="address-tab">
        <div class="dashboard-edit-account">
          <div class="edit-account-form">
            <div class="dashboard-quick-tables">
              <div class="row">
                <div class="col-lg-6">
                  <div class="dashboard-table-box">
                    <h2>{{ trans('theme.nav.my_addresses') }}</h2>
                    <div class="shipping-address-tbl dashboard-table dashboard-order-table">
                      @forelse($account->addresses as $address)
                        {!! $address->toHtml() !!}
                        <div class="btn-group pull-right" role="group" aria-label="..." style="margin-top: -100px;">
                          <a href="{{ route('my.address.delete', $address->id) }}" class="confirm btn btn-main btn-xs flat pull-right" data-confirm="@lang('theme.confirm_action.delete')">
                            <i class="far fa-trash-o"></i> @lang('theme.button.delete')
                          </a>

                          <a href="{{ route('my.address.edit', $address) }}" class="modalAction btn btn-main btn-xs flat pull-right">
                            <i class="fas fa-edit"></i> @lang('theme.edit')
                          </a>
                        </div>
                        <hr />
                      @empty
                        <div class="clearfix space50"></div>
                        <p class="lead text-center space50">
                          @lang('theme.nothing_found')
                        </p>
                      @endforelse
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-item mt-20 text-center d-block">
            <a href="{{ route('my.address.create') }}" class="modalAction btn btn-yellow btn-main">
              <i class="fas fa-address-card-o"></i> @lang('theme.button.add_new_address')
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
