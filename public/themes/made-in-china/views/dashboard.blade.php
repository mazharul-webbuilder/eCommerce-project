@extends('theme::layouts.main')

@section('content')
    <div class="dashboard-container zcart-white-bg">
      <div class="zcart-user-dashboard-area">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-md-3">
              @include('theme::nav.dashboard')
            </div>
            <div class="col-xl-10 col-md-9">
              @if (isset($content))
                {!! $content !!}
              @else
              @include('theme::account.' . $tab)
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@if (request()->is('*/wallet/deposit/form'))
  @section('scripts')
    {{-- @include('wallet::scripts.deposit') --}}
    @include('wallet::customer.scripts.deposit')
  @endsection
@endif
