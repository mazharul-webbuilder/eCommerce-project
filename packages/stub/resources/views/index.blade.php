@extends('admin.layouts.master')

@section('content')
  <p class="strong">
    <i class="icon fa fa-question-circle"></i>
    {!! trans('stub::lang.welcome') !!}
  </p>
@endsection

@section('page-script')
  {{-- Package scripts --}}
@endsection
