@extends('admin.layouts.master')

@section('content')
	<div class="box">
	    <div class="box-header with-border">
	      <h3 class="box-title">{{ trans('zipcode::lang.zipcodes') }}</h3>
	      <div class="box-tools pull-right"></div>
	    </div> <!-- /.box-header -->
	    <div class="box-body">
			<div class="row">
				<div class="col-sm-7">
					<fieldset>
						<legend>
							{{ trans('zipcode::lang.add_zipcodes') }}
							{{--<a href="javascript:void(0)" data-link="{{ route('admin.zipcode.bulk') }}" class="ajax-modal-btn btn btn-default btn-flat">{{ trans('app.bulk_import') }}</a>--}}
						</legend>
						{!! Form::open(['route' => ['admin.zipcode.create'], 'files' => true, 'class' => '', 'id' => 'form', 'data-toggle' => 'validator']) !!}
							<div class="form-group">
								<div class="col-sm-4 text-right">
									{!! Form::label('country_id', trans('app.form.country') . ':*', ['class' => 'with-help control-label']) !!}
								</div>
								<div class="col-sm-8 nopadding-left nopadding-right">
									{!! Form::select('country_id', $countries, null, ['class' => 'form-control select2', 'id' =>'country_id', 'required']) !!}
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-4 text-right">
									{!! Form::label('state_id', trans('app.form.state') . ':*', ['class' => 'with-help control-label']) !!}
								</div>
								<div class="col-sm-8 nopadding-left nopadding-right">
									<select name="state_id" id="state_id" class="form-control select2"></select>
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-4 text-right">
									{!! Form::label('city', trans('app.form.city') . ':*', ['class' => 'with-help control-label']) !!}
								</div>
								<div class="col-sm-8 nopadding-left nopadding-right">
									{!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => trans('app.form.city'), 'required']) !!}
									<div class="help-block with-errors"></div>
								</div>
							</div>
							{{--<div class="form-group">
								<div class="col-sm-4 text-right">
									{!! Form::label('lat', trans('zipcode::lang.latitude') . ':*', ['class' => 'with-help control-label']) !!}
									--}}{{--<i class="fa fa-question-circle" data-toggle="tooltip" title="{{ trans('zipcode::lang.default_zipcode_help') }}"></i>--}}{{--
								</div>
								<div class="col-sm-8 nopadding-left nopadding-right">
									{!! Form::text('lat', null, ['class' => 'form-control', 'placeholder' => trans('zipcode::lang.latitude'), 'required']) !!}
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4 text-right">
									{!! Form::label('lng', trans('zipcode::lang.longitude') . ':*', ['class' => 'with-help control-label']) !!}
									--}}{{--<i class="fa fa-question-circle" data-toggle="tooltip" title="{{ trans('zipcode::lang.default_zipcode_help') }}"></i>--}}{{--
								</div>
								<div class="col-sm-8 nopadding-left nopadding-right">
									{!! Form::text('lng', null, ['class' => 'form-control', 'placeholder' => trans('zipcode::lang.longitude'), 'required']) !!}
									<div class="help-block with-errors"></div>
								</div>
							</div>--}}
							<div class="form-group">
								<div class="col-sm-4 text-right">
									{!! Form::label('timezone', trans('app.timezone') . ':*', ['class' => 'with-help control-label']) !!}
								</div>
								<div class="col-sm-8 nopadding-left nopadding-right">
							        {!! Form::select('timezone', $timezones, Null, ['class' => 'form-control select2', 'placeholder' => trans('app.placeholder.timezone'), 'required']) !!}
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4 text-right">
									{!! Form::label('daylight_saving', trans('zipcode::lang.daylight_saving') . ':*', ['class' => 'with-help control-label']) !!}
								</div>
								<div class="col-sm-8 nopadding-left nopadding-right">
							      	{!! Form::select('daylight_savings', ['1' => trans('app.yes'), '0' => trans('app.no')], null, ['class' => 'form-control select2-normal', 'placeholder' => trans('zipcode::lang.daylight_saving'), 'required']) !!}
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4 text-right">
									{!! Form::label('zipcodes', trans('zipcode::lang.zipcodes') . ':*', ['class' => 'with-help control-label']) !!}
								</div>
								<div class="col-sm-8 nopadding-left nopadding-right">
  									{!! Form::textarea('zipcodes', null, ['class' => 'form-control', 'rows' => 5, 'placeholder' => trans('zipcode::lang.add_zipcode_help')]) !!}
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="form-group text-right">
								{!! Form::submit(trans('app.form.save'), ['class' => 'btn btn-lg btn-flat btn-new']) !!}
							</div>
						{!! Form::close() !!}
					</fieldset>
				</div> <!-- /.col-sm-7 -->

				<div class="col-sm-5">
					<fieldset>
						<legend>{{ trans('app.settings') }}</legend>
						{!! Form::open(['route' => ['admin.zipcode.update'], 'files' => true, 'class' => '', 'id' => 'form', 'data-toggle' => 'validator']) !!}
							@php
								$zipcode = get_from_option_table('zipcode_default');
							@endphp
							<div class="form-group">
								<div class="col-sm-5 text-right">
									{!! Form::label('zipcode', trans('zipcode::lang.default_zipcode') . ':*', ['class' => 'with-help control-label']) !!}
									<i class="fa fa-question-circle" data-toggle="tooltip" title="{{ trans('zipcode::lang.default_zipcode_help') }}"></i>
								</div>
								<div class="col-sm-7 nopadding-left nopadding-right">
									<select name="default_zipcode"  class="form-control searchZipcode">
										<option value="{{$zipcode}}" selected>{{ $zipcode }}</option>
									</select>
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="form-group text-right">
								{!! Form::submit(trans('app.update'), ['class' => 'btn btn-lg btn-flat btn-new']) !!}
							</div>
						{!! Form::close() !!}
					</fieldset>
				</div> <!-- /.col-sm-5 -->
		    </div> <!-- /.row -->
		    <div class="clearfix spacer30"></div>
	    </div> <!-- /.box-body -->
	</div> <!-- /.box -->
@endsection

{{--@section('page-script')
	@include('zipcode::scripts.scripts')
@endsection--}}
