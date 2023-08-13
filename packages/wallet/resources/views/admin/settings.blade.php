@extends('admin.layouts.master')

@section('content')
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">{{ trans('wallet::lang.wallet_settings') }}</h3>
      <div class="box-tools pull-right">
      </div>
    </div> <!-- /.box-header -->
    <div class="box-body">
      <div class="spacer20"></div>
      <div class="row">
        {!! Form::open(['route' => ['admin.package.config.update', 'wallet'], 'files' => true, 'class' => 'form-horizontal', 'id' => 'form', 'data-toggle' => '	validator']) !!}
        <div class="col-sm-10">
          <div class="form-group">
            <div class="col-sm-5 text-right">
              {!! Form::label('wallet_min_withdrawal_limit', trans('wallet::lang.minimum_withdrawal_limit') . ': *', ['class' => 'with-help control-label']) !!}
              <small class="text-info d-block">
                {!! trans('wallet::lang.minimum_withdrawal_limit_help') !!}
              </small>
            </div>

            <div class="col-sm-7 nopadding-left">
              <div class="input-group">
                <span class="input-group-addon">{{ config('system_settings.currency_symbol', '$') }}</span>
                {!! Form::number('wallet_min_withdrawal_limit', get_from_option_table('wallet_min_withdrawal_limit', config('wallet.default.min_withdrawal_limit')), ['min' => 0, 'class' => 'form-control', 'placeholder' => trans('wallet::lang.minimum_withdrawal_limit'), 'required']) !!}
              </div>
              <div class="help-block with-errors"></div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-5 text-right">
              {!! Form::label('wallet_payment_methods[]', trans('wallet::lang.diposit_payment_methods') . ':', ['class' => 'with-help control-label']) !!}
              <small class="text-info d-block">
                {!! trans('wallet::lang.select_atleast_one_payment_option') !!}
              </small>
            </div>

            <div class="col-sm-7 nopadding-left">
              {!! Form::select('wallet_payment_methods[]', $paymentMethods, get_from_option_table('wallet_payment_methods', []), ['class' => 'form-control select2-normal', 'multiple' => 'multiple']) !!}
              <div class="help-block with-errors small"></div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-5 text-right">
              {!! Form::label('wallet_checkout', trans('wallet::lang.wallet_checkout') . ':', ['class' => 'with-help control-label']) !!}
              <small class="text-info d-block">
                {{ trans('wallet::lang.allow_customer_wallet_checkout') }}
              </small>
            </div>

            <div class="col-sm-7 nopadding-left">
              @php
                $wallet_checkout = get_from_option_table('wallet_checkout');
              @endphp

              <div class="handle horizontal">
                <a href="javascript:void(0)" data-link="{{ route('admin.package.config.toggle', ['option' => 'wallet_checkout']) }}" type="button" class="btn btn-md btn-secondary btn-toggle {{ !vendor_get_paid_directly() && $wallet_checkout == 1 ? 'active' : '' }}" data-toggle="button" aria-pressed="{{ $wallet_checkout == 1 ? 'true' : 'false' }}" autocomplete="off" {{ vendor_get_paid_directly() ? 'disabled' : '' }}>
                  <div class="btn-handle"></div>
                </a>
              </div>
              <div class="help-block with-errors small">
                <span class="text-danger">{!! vendor_get_paid_directly() ? '<i class="fa fa-ban"></i> ' . trans('wallet::lang.wallet_checkout_off_when_vendor_paid') : '' !!}</span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-5 text-right">
              {!! Form::label('wallet_payment_info_cod', trans('wallet::lang.manual_payment_info_cod') . ':*', ['class' => 'with-help text-right control-label']) !!}
              <small class="text-info d-block">
                {!! trans('help.config_additional_details') !!}
              </small>
            </div>

            <div class="col-sm-7 nopadding-left">
              {!! Form::text('wallet_payment_info_cod', get_from_option_table('wallet_payment_info_cod'), ['class' => 'form-control', 'placeholder' => trans('wallet::lang.manual_payment_info_cod'), 'required']) !!}
              <div class="help-block with-errors"></div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-5 text-right">
              {!! Form::label('wallet_payment_instructions_cod', trans('wallet::lang.manual_payment_instructions_cod') . ':*', ['class' => 'with-help control-label']) !!}
              <small class="text-info d-block">
                {!! trans('help.config_payment_instructions') !!}
              </small>
            </div>

            <div class="col-sm-7 nopadding-left">
              {!! Form::textarea('wallet_payment_instructions_cod', get_from_option_table('wallet_payment_instructions_cod'), ['class' => 'form-control summernote-min', 'rows' => '2', 'placeholder' => trans('wallet::lang.manual_payment_instructions_cod')]) !!}
              <div class="help-block with-errors"></div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-5 text-right">
              {!! Form::label('wallet_payment_info_wire', trans('wallet::lang.manual_payment_info_wire') . ':*', ['class' => 'with-help control-label']) !!}
              <small class="text-info d-block">
                {!! trans('help.config_additional_details') !!}
              </small>
            </div>

            <div class="col-sm-7 nopadding-left">
              {!! Form::text('wallet_payment_info_wire', get_from_option_table('wallet_payment_info_wire'), ['class' => 'form-control', 'placeholder' => trans('wallet::lang.manual_payment_info_wire'), 'required']) !!}
              <div class="help-block with-errors small"></div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-5 text-right">
              {!! Form::label('wallet_payment_instructions_wire', trans('wallet::lang.manual_payment_instructions_wire') . ':*', ['class' => 'with-help control-label']) !!}
              <small class="text-info d-block">
                {!! trans('help.config_payment_instructions') !!}
              </small>
            </div>

            <div class="col-sm-7 nopadding-left">
              {!! Form::textarea('wallet_payment_instructions_wire', get_from_option_table('wallet_payment_instructions_wire'), ['class' => 'form-control summernote-min', 'rows' => '2', 'placeholder' => trans('wallet::lang.manual_payment_instructions_wire')]) !!}
              <div class="help-block with-errors small"></div>
            </div>
          </div>

          {!! Form::submit(trans('app.update'), ['class' => 'btn btn-lg btn-flat btn-new pull-right']) !!}
        </div>

        {{-- <div class="col-sm-5 nopadding-left">
          <div class="row">
            <div class="col-sm-5 text-right nopadding-left">
              <div class="form-group">
                {!! Form::label('wallet_checkout', trans('wallet::lang.wallet_checkout') . ':', ['class' => 'with-help control-label']) !!}
                <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title=""></i> {{ trans('wallet::lang.allow_customer_wallet_checkout') }}
              </div>
            </div>
            <div class="col-sm-7 nopadding-left nopadding-right">
              @php
                $wallet_checkout = get_from_option_table('wallet_checkout');
              @endphp
              <div class="handle horizontal">
                <a href="javascript:void(0)" data-link="{{ route('admin.package.config.toggle', ['option' => 'wallet_checkout']) }}" type="button" class="btn btn-md btn-secondary btn-toggle {{ !vendor_get_paid_directly() && $wallet_checkout == 1 ? 'active' : '' }}" data-toggle="button" aria-pressed="{{ $wallet_checkout == 1 ? 'true' : 'false' }}" autocomplete="off" {{ vendor_get_paid_directly() ? 'disabled' : '' }}>
                  <div class="btn-handle"></div>
                </a>
              </div>
              <div class="help-block with-errors">{!! vendor_get_paid_directly() ? trans('wallet::lang.wallet_checkout_off_when_vendor_paid') : '' !!}</div>
            </div>
          </div> <!-- /.row -->
        </div> --}}
        {!! Form::close() !!}
      </div>
      <div class="spacer20"></div>
    </div> <!-- /.box-body -->
  </div> <!-- /.box -->
@endsection
