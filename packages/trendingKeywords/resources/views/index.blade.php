@extends('admin.layouts.master')

@section('content')
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">{{ trans('app.promotions') }}</h3>
    </div> <!-- /.box-header -->
    <div class="box-body">
      <div class="spacer20"></div>
      <div class="row">
        <div class="col-sm-10 nopadding-right">
          <div class="col-sm-4 text-right">
            <h4>@lang('trendingKeywords::lang.trending_keywords')</h4>
            <span class="small text-muted">{!! trans('trendingKeywords::lang.description') !!}</span>
          </div>
          <div class="col-sm-8 nopadding-left">
            <div class="form-group">
              {!! Form::open(['route' => 'admin.promotion.trendingKeywords.update', 'method' => 'PUT', 'id' => 'form', 'data-toggle' => 'validator']) !!}

              {!! Form::select('trending_keywords[]', $trending_keywords, $trending_keywords, ['class' => 'form-control select2-keywords', 'multiple' => 'multiple']) !!}

              <div class="help-block with-errors"></div>
            </div>

            {!! Form::submit(trans('app.update'), ['class' => 'btn btn-lg btn-flat btn-new pull-right']) !!}
            {!! Form::close() !!}

            <div class="spacer50"></div>
          </div>
        </div>
        <div class="col-sm-2 nopadding-left"></div>
      </div> <!-- /.row -->
    </div> <!-- /.box-body -->
  </div> <!-- /.box -->
@endsection
