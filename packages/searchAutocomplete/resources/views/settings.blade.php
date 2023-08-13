@extends('admin.layouts.master')

@section('content')
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">{{ trans('searchAutocomplete::lang.search_settings') }}</h3>
    </div> <!-- /.box-header -->
    <div class="box-body">
      <div class="spacer20"></div>
      <div class="row">
        <div class="col-sm-10">
          {!! Form::open(['route' => 'admin.setting.autocomplete.update', 'method' => 'PUT', 'id' => 'form', 'data-toggle' => 'validator']) !!}

          <div class="form-group">
            <div class="row">
              <div class="col-sm-5 text-right">
                {!! Form::label('settings[min_char]', trans('searchAutocomplete::lang.min_char') . ':*', ['class' => 'with-help text-right control-label']) !!}

                <small class="text-info d-block">
                  {!! trans('searchAutocomplete::lang.min_char_help') !!}
                </small>
              </div>

              <div class="col-sm-7 nopadding-left">
                {!! Form::number('settings[min_char]', $settings['min_char'], ['class' => 'form-control', 'placeholder' => trans('searchAutocomplete::lang.min_char'), 'required']) !!}
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-sm-5 text-right">
                {!! Form::label('settings[max_result]', trans('searchAutocomplete::lang.max_result') . ':*', ['class' => 'with-help text-right control-label']) !!}

                <small class="text-info d-block">
                  {!! trans('searchAutocomplete::lang.max_result_help') !!}
                </small>
              </div>

              <div class="col-sm-7 nopadding-left">
                {!! Form::number('settings[max_result]', $settings['max_result'], ['class' => 'form-control', 'placeholder' => trans('searchAutocomplete::lang.max_result'), 'required']) !!}
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-sm-5 text-right">
                {!! Form::label('settings[show_char]', trans('searchAutocomplete::lang.show_char') . ':*', ['class' => 'with-help text-right control-label']) !!}

                <small class="text-info d-block">
                  {!! trans('searchAutocomplete::lang.show_char_help') !!}
                </small>
              </div>

              <div class="col-sm-7 nopadding-left">
                {!! Form::number('settings[show_char]', $settings['show_char'], ['class' => 'form-control', 'placeholder' => trans('searchAutocomplete::lang.show_char'), 'required']) !!}
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-sm-5 text-right">
                {!! Form::label('styling_css', trans('searchAutocomplete::lang.styling_css') . ':*', ['class' => 'with-help text-right control-label']) !!}
                <small class="text-info d-block">
                  {{ trans('searchAutocomplete::lang.styling_css_help') }}
                </small>
              </div>
              <div class="col-sm-7 nopadding-left">
                {!! Form::textarea('styling_css', $styling, ['class' => 'form-control', 'rows' => '10', 'placeholder' => trans('searchAutocomplete::lang.styling_css_help'), 'required']) !!}
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>

          {!! Form::submit(trans('app.update'), ['class' => 'btn btn-lg btn-flat btn-new pull-right']) !!}

          {!! Form::close() !!}
          <div class="spacer50"></div>
        </div><!-- /.col-sm-10 -->
        {{-- <div class="col-sm-2 nopadding-left"></div> --}}
      </div> <!-- /.row -->
    </div> <!-- /.box-body -->
  </div> <!-- /.box -->
@endsection
