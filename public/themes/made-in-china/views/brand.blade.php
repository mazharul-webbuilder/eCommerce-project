@extends('theme::layouts.main')

@section('content')
{{--  <!-- BRAND COVER IMAGE -->--}}
{{--  @include('theme::banners.brand_cover', ['brand' => $brand])--}}

  <!-- CONTENT SECTION -->
<!-- CONTENT SECTION -->
@if (\Route::currentRouteName() == 'brand.products')
    <div class="main-container shop-page-container">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    {{-- @include('theme::partials.sidebar_filters') --}}
                </div>

                <div class="col-xl-10 col-lg-9">

                    @include('theme::partials.top_filters')

                    <div class="products-archive zcart-dual-view">
                        <div class="row no-gutters">
                            @include('theme::partials.product')
                        </div>
                    </div>
                    <!---Pagination-->

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

                    {{-- <div class="page-bottom-form-area">
                      <div class="row">
                        <div class="col-md-5">
                          <div class="sub-title">Haven't found what you want?</div>
                          <h4>Easy Sourcing</h4>
                          <p>Post sourcing requests and get quotations quickly.</p>
                          <div class="zcart-inline-form">
                            <form action="">
                              <div class="inline-form-group d-flex">
                                <input type="text" class="form-text" maxlength="160" max-length="160" placeholder="Product Name" value="">
                                <button type="submit" class="btn btn-main">Post Sourcing Request</button>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div class="sub-title">Fast Subscription, Precise Recommendation</div>
                          <h4>Product Alert</h4>
                          <p>Subscribe to product alert and stay updated to what's new and popular on the market.</p>
                          <div class="zcart-inline-form">
                            <form action="">
                              <div class="inline-form-group d-flex">
                                <input type="text" class="form-text" maxlength="50" max-length="50" placeholder="Product keyword" value="">
                                <button type="submit" class="btn btn-main">Subscribe</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!--- .container -->
    </div>

@else
    @include('theme::contents.brand_page')
  @endif

  <!-- BROWSING ITEMS -->
  @include('theme::sections.recent_views')
@endsection
