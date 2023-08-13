@extends('theme::layouts.main')

@section('content')
  <div class="dashboard-container zcart-white-bg">
    <div class="zcart-user-dashboard-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-2 col-md-3">
            @include('theme::nav.dashboard',['tab' => 'disputes'])
          </div>

          <div class="col-xl-10 col-md-9">
            @include('theme::account.dispute_detail')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <!-- MODALS -->
  @includeWhen(! $order->dispute, 'theme::modals.dispute')

  @if ($order->dispute)
    @if ($order->dispute->isClosed())
      @include('theme::modals.dispute_appeal')
    @else
      @include('theme::modals.dispute_response')
    @endif
  @endif
@endsection
