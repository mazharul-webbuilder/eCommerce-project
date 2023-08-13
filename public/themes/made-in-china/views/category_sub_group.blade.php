@extends('theme::layouts.main')

@section('content')
  <div class="main-container shop-page-container">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-3">
          @include('theme::partials.sidebar_filters')
        </div>

        <div class="col-xl-10 col-lg-9">

          @include('theme::partials.top_filters')

          <div class="products-archive zcart-dual-view">
            <div class="row no-gutters">
              @include('theme::partials.product')
            </div>
          </div>
          <!--- .products-archive-->

          <div class="row no-gutters align-items-center">
            <div class="col-md-5">
              {{-- <div class="posts-per-page">
                Show:
                <a href="#">24</a>
                <a href="#" class="active">36</a>
                <a href="#">48</a>
              </div> --}}
            </div>
            <div class="col-md-7">
              {{ $products->links('theme::partials.pagination') }}
            </div>
          </div>
          <!--- .row -->
        </div>
        <!--- .col-xl-10 -->
      </div>
      <!--- .row -->
    </div>
    <!--- .container -->
  </div>
  <!--- .main-container -->
@endsection

@section('scripts')
  {{-- @include('theme::scripts.product_page') --}}
@endsection
