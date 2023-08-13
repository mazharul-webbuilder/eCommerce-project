@extends('theme::layouts.main')

@section('content')
    <!-- MAIN SLIDER -->
    @include('theme::sliders.main')

    <!-- BEST DEALS BANNER -->
    @include('theme::banners.best_deals')

    <!-- TRENDING ITEMS -->
    <section>
        <div class="container">
          <div class="row">
              <div class="col-md-12 nopadding">
                <div class="section-title">
                  <h4>{!! trans('theme.section_headings.trending_now') !!}</h4>
                </div>

                @include('theme::sliders.carousel_with_feedback', ['products' => $trending])

              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- PRODUCTS -->
    @include('theme::contents.products')

    <!-- BROWSING ITEMS -->
    @include('theme::sliders.browsing_items')

    <!-- Bottom Banner -->
    @include('theme::banners.bottom')
@endsection