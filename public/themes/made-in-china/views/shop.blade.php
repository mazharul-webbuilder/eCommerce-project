@extends('theme::layouts.main')

@section('content')

  <!-- CONTENT SECTION -->
  @if (\Route::currentRouteName() == 'shop.products')
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
{{--    @include('theme::contents.shop_page')--}}
<div class="main-container zcart-light-bg vendor-site">
  <div class="container">
    <div class="vendor-shop-product-container">
      <div class="row zcart-low-gap">
        <div class="col-12">
          <div id="company-profile" class="vendor-right-card">
            <h2>{!! $shop->getQualifiedName() !!}</h2>
            <div class="row">
              <div class="col-xl-4 col-lg-12">
                @include('theme::layouts.ratings', ['ratings' => $shop->feedbacks->avg('rating'), 'count' => $shop->feedbacks->count()])

                <div class="vendor-info-sld-container position-relative">
                  {{-- <div id="vendorInfoSlide" class="vendor-info-slider">
                    <div class="vendor-info-sld-item"> --}}
                  <img src="{{ get_storage_file_url(optional($shop->logo)->path, 'full') }}" class="" alt=" {{ trans('theme.logo') }}">
                  {{-- </div> --}}
                  {{-- <div class="vendor-info-sld-item">
                      <img src="assets/images/vendor/Shanghai-Screw-Compressor-Co-Ltd- (2).jpg" alt="Shanghai-Screw-Compressor-Co-Ltd">
                    </div> --}}
                  {{-- </div> --}}
                </div>
                {{-- <div class="vendor-links">
                  <div class="row zcart-xs-low-gap">
                    <div class="col-md-6">
                      <a href="#" class="zcart-btn">360° Virtual Tour</a>
                    </div>
                    <div class="col-md-6">
                      <a href="#" class="zcart-btn">Book a Factory Tour</a>
                    </div>
                  </div>
                </div> --}}
              </div>

              <div class="col-xl-8 col-lg-12">
                <div class="company-info-list">
                  <table>
                    <tbody>
                    <tr>
                      <td width="16">
                        <i class="fas fa-check"></i>
                      </td>
                      <td class="info-label-td">
                        <span class="info-label-txt">{{ trans('theme.legal_name') }}:</span>
                      </td>
                      <td>
                        {{ $shop->legal_name }}
                      </td>
                    </tr>
                    <tr>
                      <td width="16">
                        <i class="fas fa-check"></i>
                      </td>
                      <td class="info-label-td">
                        <span class="info-label-txt">{{ trans('theme.member_since') }}:</span>
                      </td>
                      <td>
                        {{ $shop->created_at->diffForHumans() }}
                      </td>
                    </tr>
                    <tr>
                      <td width="16">
                        <i class="fas fa-check"></i>
                      </td>
                      <td class="info-label-td">
                        <span class="info-label-txt">{{ trans('theme.active_listings') }}:</span>
                      </td>
                      <td>
                        {{ $shop->inventories_count }}
                      </td>
                    </tr>
                    <tr>
                      <td width="16">
                        <i class="fas fa-check"></i>
                      </td>
                      <td class="info-label-td">
                        <span class="info-label-txt">{{ trans('theme.items_sold') }}:</span>
                      </td>
                      <td title="ISO9001:2015">
                        {{ \App\Helpers\Statistics::sold_items_count($shop->id) }}
                      </td>
                    </tr>
                    </tbody>
                  </table>

                  {{-- <span class="vendor-info-footer">
                    <i class="fas fa-info-circle"></i>Info marked by "<i class="fas fa-check"></i>" is verified by<a href="#" target="_blank">BV</a>
                  </span> --}}
                </div>
              </div>
            </div>

            <div class="company-info">
              <p>{!! trans('theme.description') !!}</p>
            </div>
          </div>

          @if ($shop->config->return_refund)
            <div id="return-refund-policy" class="vendor-right-card">
              <h2>
                {{ trans('theme.return_and_refund_policy') }}
              </h2>
              <div class="company-info-list">
                {!! $shop->config->return_refund !!}
              </div>
            </div>
          @endif

          <div id="latest-reviews" class="vendor-right-card">
            <h2>
              {{ trans('theme.latest_reviews') }}
            </h2>
            <div class="company-info-list">
              @forelse($shop->feedbacks->sortByDesc('created_at') as $feedback)
                <p>
                  <b>{{ $feedback->customer->nice_name ?? $feedback->customer->name }}</b>

                  <span class="pull-right small">
                      <b class="text-success">@lang('theme.verified_purchase')</b>
                      <span class="text-muted"> | {{ $feedback->created_at->diffForHumans() }}</span>
                    </span>
                </p>

                <p>{{ $feedback->comment }}</p>

                @include('theme::layouts.ratings', ['ratings' => $feedback->rating])

                @unless($loop->last)
                  <div class="sep"></div>
                @endunless
              @empty
                <div class="space20"></div>
                <p class="lead text-center text-muted">@lang('theme.no_reviews')</p>
              @endforelse
            </div>
          </div>

          <div id="contact-seller" class="vendor-right-card">
            <h2>{{ trans('theme.button.contact_seller') }}</h2>

            @include('theme::partials.contact_seller_form',['vendor' => $shop])
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  @endif

  <!-- BROWSING ITEMS -->
  @include('theme::sections.recent_views')

  <!-- MODALS -->
  {{-- @include('theme::modals.shopReviews') --}}

@section('scripts')
  @if (is_chat_enabled($shop))
    @include('theme::scripts.chatbox', ['shop' => $shop, 'agent' => $shop->owner, 'agent_status' => trans('theme.online')])
  @endif
@endsection
@endsection