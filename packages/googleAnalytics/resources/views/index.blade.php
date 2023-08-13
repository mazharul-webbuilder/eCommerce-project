@extends('admin.layouts.master')

@section('content')
  {{-- @if (is_ggoogle_analytic_ready()) --}}
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">
        <i class="fa fa-globe hidden-sm"></i>&nbsp;
        {{ trans('analytics::lang.visitors') }}
      </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div> <!-- /.box-header -->
    <div class="box-body">
      {!! $chartVisitors->container() !!}
    </div> <!-- /.box-body -->
  </div> <!-- /.box -->

  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">
        <i class="fa fa-map-signs hidden-sm"></i>&nbsp;
        {{ trans('analytics::lang.behavior') }}
      </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div> <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-sm-6 nopadding-right">
          {!! $chartVisitorTypes->container() !!}
        </div>
        <div class="col-sm-6 nopadding-left">
          {!! $chartDevices->container() !!}
        </div>
      </div>
    </div> <!-- /.box-body -->
  </div> <!-- /.box -->

  {{-- <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">
        <i class="fa fa-globe hidden-sm"></i>&nbsp;
        {{ trans('analytics::lang.most_visited_pages') }}
      </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div> <!-- /.box-header -->
    <div class="box-body">
      {!! $chartVisitors->container() !!}
    </div> <!-- /.box-body -->
  </div> <!-- /.box --> --}}

  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">
        <i class="fa fa-link hidden-sm"></i>&nbsp;
        {{ trans('analytics::lang.top_referrals') }}
      </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div> <!-- /.box-header -->
    <div class="box-body">
      {!! $chartReferrers->container() !!}
    </div> <!-- /.box-body -->
  </div> <!-- /.box -->
  {{-- @else
    <div class="callout callout-warning">
      <p>
        <strong><i class="icon ion-md-nuclear"></i> {{ trans('app.alert') }}</strong>
        {{ trans('analytics::lang.misconfigured_google_analytics') }}
      </p>
    </div>
  @endif --}}
@endsection

@section('page-script')
  @include('plugins.chart')

  {!! $chartVisitors->script() !!}
  {!! $chartReferrers->script() !!}
  {!! $chartVisitorTypes->script() !!}
  {!! $chartDevices->script() !!}
@endsection
