@extends('theme::layouts.main')

@section('content')
  @php
  $geoip = geoip(get_visitor_IP());
  $shipping_country = $business_areas->where('iso_code', $geoip->iso_code)->first();
  $shipping_state = \DB::table('states')
      ->select('id', 'name', 'iso_code')
      ->where([['country_id', '=', $shipping_country->id], ['iso_code', '=', $geoip->state]])
      ->first();

  $shipping_zone = get_shipping_zone_of($item->shop_id, $shipping_country->id, optional($shipping_state)->id);
  $shipping_options = isset($shipping_zone->id) ? getShippingRates($shipping_zone->id) : 'NaN';
  @endphp

  <!-- CONTENT SECTION -->
  <div class="main-container zcart-light-bg-2 product-single-container">
    <div class="container">
      <div class="row align-items-center zcart-breadcrumb-area">
        <div class="col-md-10">
          @php
            $t_category = $item->product->categories->first();
          @endphp

          <div class="zcart-breadcrumb">
            <a href="{{ url('/') }}">{{ trans('theme.home') }}</a>
            <span class="lnr lnr-chevron-right"></span>
            <a href="{{ route('categoryGrp.browse', $t_category->subGroup->group->slug) }}">{!! $t_category->subGroup->group->name !!}</a>
            <span class="lnr lnr-chevron-right"></span>
            <a href="{{ route('categories.browse', $t_category->subGroup->slug) }}">{!! $t_category->subGroup->name !!}</a>
            <span class="lnr lnr-chevron-right"></span>
            <a href="{{ route('category.browse', $t_category->slug) }}">{!! $t_category->name !!}</a>
            <span class="lnr lnr-chevron-right"></span>
            <a href="javascript::void(0)">{!! \Str::limit($item->title, 55) !!}</a>
          </div>
        </div>
        <div class="col-md-2 text-right">
          {{-- <a href="javascript::void(0)" class="zcart-print-link"><span class="lnr lnr-printer"></span>Print This Page</a> --}}
        </div>
      </div>

      <div class="row">
        <div class="col-xl-9 col-lg-8" id="single-product-wrapper">

          @include('theme::partials.product_details', ['item' => $item])

          <div class="zcart-card mt-20">
            <h2>{{ trans('theme.technical_details') }}</h2>
            <div class="info-list-tbl d-flex justify-content-between align-items-start">
              <div class="product-info-list-group">
                @if ($item->product->brand)
                  <div class="info-list-item">
                    <div class="info-list-l">{{ trans('theme.brand') }}: </div>
                    <div class="info-list-r">{{ $item->product->brand }}</div>
                  </div>
                @endif

                @if ($item->product->model_number)
                  <div class="info-list-item">
                    <div class="info-list-l">{{ trans('theme.model_number') }}:</div>
                    <div class="info-list-r">{{ $item->product->model_number }}</div>
                  </div>
                @endif

                @if ($item->product->gtin_type && $item->product->gtin)
                  <div class="info-list-item">
                    <div class="info-list-l">{{ $item->product->gtin_type }}: </div>
                    <div class="info-list-r">{{ $item->product->gtin }}</div>
                  </div>
                @endif

                @if ($item->product->mpn)
                  <div class="info-list-item">
                    <div class="info-list-l">{{ trans('theme.mpn') }}: </div>
                    <div class="info-list-r">{{ $item->product->mpn }}</div>
                  </div>
                @endif

                @if ($item->sku)
                  <div class="info-list-item">
                    <div class="info-list-l">{{ trans('theme.sku') }}: </div>
                    <div id="item_sku" class="info-list-r">{{ $item->sku }}</div>
                  </div>
                @endif

                <div class="info-list-item">
                  <div class="info-list-l">{{ trans('theme.availability') }}: </div>
                  <div id="item_sku" class="info-list-r">
                    {{ $item->availability }}
                  </div>
                </div>
              </div>
              <div class="product-info-list-group">
                @if (optional($item->product->manufacturer)->name)
                  <div class="info-list-item">
                    <div class="info-list-l">{{ trans('theme.manufacturer') }}: </div>
                    <div class="info-list-r">{{ $item->product->manufacturer->name }}</div>
                  </div>
                @endif

                @if ($item->product->origin)
                  <div class="info-list-item">
                    <div class="info-list-l">{{ trans('theme.origin') }}: </div>
                    <div class="info-list-r">{{ $item->product->origin->name }}</div>
                  </div>
                @endif

                @if ($item->min_order_quantity)
                  <div class="info-list-item">
                    <div class="info-list-l">{{ trans('theme.min_order_quantity') }}: </div>
                    <div id="item_min_order_qtt" class="info-list-r">{{ $item->min_order_quantity }}</div>
                  </div>
                @endif

                @if ($item->shipping_weight)
                  <div class="info-list-item">
                    <div class="info-list-l">{{ trans('theme.shipping_weight') }}: </div>
                    <div id="item_shipping_weight" class="info-list-r">{{ $item->shipping_weight . ' ' . config('system_settings.weight_unit') }}</div>
                  </div>
                @endif

                @if ($item->product->created_at)
                  <div class="info-list-item">
                    <div class="info-list-l">{{ trans('theme.first_listed_on', ['platform' => get_platform_title()]) }}:</div>
                    <div class="info-list-r">{{ $item->product->created_at->toFormattedDateString() }}</div>
                  </div>
                @endif
              </div>
            </div>
          </div>

          <div class="product-tabs-section mt-20">
            <ul class="zcart-tabs list-unstyled">
              <li class="active"><a href="#tab-key-features">{!! trans('theme.section_headings.key_features') !!}</a></li>
              <li class=""><a href=" #tab-product-desc">@lang('theme.product_desc')</a></li>
              <li class=""><a href=" #tab-product-desc-seller">@lang('theme.product_desc_seller')</a></li>
              <li class=""><a href=" #tab-product-review">@lang('theme.customer_reviews')</a></li>
            </ul>
            <div class="zcart-tab-content">
              <div id="tab-key-features" class="zcart-tab-pane active">
                <div class="product-description">
                  @if ($item->key_features)
                    <ul class="key_feature_list" id="item_key_features">
                      @foreach (unserialize($item->key_features) as $key_feature)
                        <li>{!! $key_feature !!}</li>
                      @endforeach
                    </ul>
                  @endif
                </div>
              </div>

              <div id="tab-product-desc" class="zcart-tab-pane">
                <div class="product-description">
                  {!! $item->product->description !!}
                </div>
              </div>

              <div id="tab-product-desc-seller" class="zcart-tab-pane">
                <div class="product-description">
                  {!! $item->description !!}

                  @if ($item->shop->config->show_shop_desc_with_listing)
                    @if ($item->description)
                      <br /><br />
                      <hr class="style4 muted" />
                    @endif
                    <br />
                    <h4>{{ trans('theme.seller_info') }}: </h4>
                    {!! $item->shop->description !!}
                  @endif

                  @if ($item->shop->config->show_refund_policy_with_listing && $item->shop->config->return_refund)
                    <br /><br />
                    <hr class="style4 muted" /><br />

                    <h4>{{ trans('theme.return_and_refund_policy') }}: </h4>
                    {!! $item->shop->config->return_refund !!}
                  @endif
                </div>
              </div>

              <div id="tab-product-review" class="zcart-tab-pane">
                <div class="product-review-tab">
                  @forelse($item->feedbacks->sortByDesc('created_at') as $feedback)
                    <p>
                      <b>{{ optional($feedback->customer)->getName() }}</b>

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

                  {{-- <form method="post" action="">
                                        <div class="form-item">
                                            <textarea name="prodDesc" class="form-textarea" rows="3" placeholder="Enter your question about this product"></textarea>
                                            <div class="form-hints">Once receive your question, the supplier will answer you as soon as possible.</div>
                                        </div>
                                        <button class="btn btn-main mr-4" type="submit">Send</button>
                                    </form> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="vendor-right-card mt-20" id="contact_seller_box">
            <h2>{{ trans('theme.button.contact_seller') }}</h2>

            <div class="zcart-form-row d-flex form-item">
              <div class="zcart-form-label"><span>*</span>{{ trans('theme.to') }}:</div>
              <div class="zcart-form-field">
                <div class="form-avater d-flex align-items-center">
                  <img src="{{ get_storage_file_url(optional($item->shop->logoImage)->path, 'thumbnail') }}" class="seller-info-logo img-sm" alt="{{ trans('theme.logo') }}">

                  {{-- <a href="javascript:void(0)" data-toggle="modal" data-target="#shopReviewsModal" class="seller-info-name"> --}}
                  <a href="{{ route('show.store', $item->shop->slug) }}" class="btn-link">
                    {!! $item->shop->getQualifiedName() !!}
                  </a>
                </div>
              </div>
            </div>

            @include('theme::partials.contact_seller_form',['vendor' => $item->shop->slug])
          </div>

          <div class="zcart-card mt-20">
            <h2>{!! trans('theme.related_items') !!}</h2>
            <div class="row">
              @foreach ($related as $related_item)
                <div class="col-6 col-xl-3 col-md-4 mb-4">
                  <div class="product-sm-list product-sm-grid">
                    <a href="{{ route('show.product', $related_item->slug) }}" class="product-photo">
                      <img src="{{ get_inventory_img_src($related_item, 'medium') }}" data-name="product_image" alt="{{ $related_item->title }}" title="{{ $related_item->title }}">
                    </a>
                    <div class="product-list-text">
                      <a href="{{ route('show.product', $related_item->slug) }}">
                        {!! \Str::limit($related_item->title, 55) !!}
                      </a>
                      <div class="product-list-price">
                        @include('theme::partials.price', ['item' => $related_item])

                        {{-- <span class="product-list-price-num">US $3.4-3.8</span> --}}
                        {{-- <span class="product-list-price-unit"> / Square Meter</span> --}}
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>

          {{-- <div class="zcart-card mt-20 mb-40">
            <h2>Find Similar Products By Category</h2>
            <div class="zcart-breadcrumb">
              <a href="#">Construction & Decoration </a><span class="lnr lnr-chevron-right"></span>
              <a href="#">Floors & Flooring </a><span class="lnr lnr-chevron-right"></span>
              <a href="#">Floor Tile</a>
            </div>
            <div class="zcart-hot-search">
              <h2>Hot Searches</h2>
              <ul class="hot-search-list list-unstyled">
                <li><a href="#">China Tile</a></li>
                <li><a href="#">Ceramic Tile</a></li>
                <li><a href="#">Interior Porcelain Floor Tile</a></li>
                <li><a href="#">Polished Porcelain Tile bulkbuy</a></li>
                <li><a href="#">Floor Tile</a></li>
                <li><a href="#">Building Floor Tile</a></li>
                <li><a href="#">Porcelain Glazed Floor Tile</a></li>
                <li><a href="#">Building Tile</a></li>
                <li><a href="#">Marble Wall Floor Tile</a></li>
                <li><a href="#">Porcelain Ceramic Floor Tile</a></li>
              </ul>
              <a id="zcart-show-more-list" class="zcart-link" href="#">More<span class="lnr lnr-chevron-down"></span></a>
              <div id="showMoreList" class="show-more-list-container">
                <div class="showmore-title">Recommended Suppliers & Wholesalers</div>
                <ul class="hot-search-list list-unstyled">
                  <li><a href="#">China Tile</a></li>
                  <li><a href="#">Ceramic Tile</a></li>
                  <li><a href="#">Interior Porcelain Floor Tile</a></li>
                </ul>
                <a id="zcart-hide-more-list" class="zcart-link" href="#">Less<span class="lnr lnr-chevron-up"></span></a>
              </div>
            </div>
          </div> --}}
        </div>

        <div class="col-xl-3 col-lg-4">
          <div class="product-single-sidebar zcart-category-list-group box-bordered">
            <h3>
              @lang('theme.section_headings.bought_together')
            </h3>

            @foreach ($linked_items as $linked_item)
              <div class="product-sm-list d-flex">
                <a href="{{ route('show.product', $linked_item->slug) }}" class="product-photo">
                  <img src="{{ get_inventory_img_src($linked_item, 'small') }}" data-name="product_image" alt="{{ $linked_item->title }}" title="{{ $linked_item->title }}">
                </a>

                <div class="product-list-text">
                  <a href="{{ route('show.product', $linked_item->slug) }}">
                    {!! \Str::limit($linked_item->title, 80) !!}
                  </a>
                  <div class="product-list-price">
                    <span class="product-list-price-num">
                      @include('theme::partials.price', ['item' => $linked_item])
                    </span>
                    {{-- <span class="product-list-price-unit"> / Square Meter</span> --}}
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          {{-- <div class="vendor-left-list">
            <div class="zcart-search-form d-flex">
              <input type="text" placeholder="Search Products">
              <button type="submit" class="search-btn"><span class="lnr lnr-magnifier"></span></button>
            </div>
            <h2>Product Groups</h2>
            <ul class="side-group-list list-unstyled">
              <li>
                <a href="#" title="Permanent Magnetic 2 Series">Permanent Magnetic 2 Series</a>
              </li>
              <li>
                <a href="#" title="Permanent Magnetic Series">Permanent Magnetic Series</a>
              </li>
              <li>
                <a href="#" title="Screw Air Compressor(Large Power II Series)">Screw Air Compressor(Large Power II Series)</a>
              </li>
              <li>
                <a href="#" title="Screw Air Compressor(Low Pressure Series)">Screw Air Compressor(Low Pressure Series)</a>
              </li>
              <li class="has-sidebar-submenu">
                <a href="#" title="Screw Air Compressor(Two Stage Series)">Screw Air Compressor(Two Stage Series)</a>
                <span class="lnr lnr-chevron-right sidebar-submenu-trigger"></span>
                <ul class="sidebar-submenu list-unstyled">
                  <li><a href="#">Big Size Porcelain Tile</a></li>
                  <li><a href="#">900*1800mm Full Body Marble Tile</a></li>
                  <li><a href="#">900*1800mm Full Body Marble Tile</a></li>
                </ul>
              </li>
              <li class="has-sidebar-submenu">
                <a href="#" title="Screw Air Compressor(Direct Driven)">Screw Air Compressor(Direct Driven)</a>
                <span class="lnr lnr-chevron-right sidebar-submenu-trigger"></span>
                <ul class="sidebar-submenu list-unstyled">
                  <li><a href="#">Big Size Porcelain Tile</a></li>
                  <li><a href="#">900*1800mm Full Body Marble Tile</a></li>
                  <li><a href="#">900*1800mm Full Body Marble Tile</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title="Screw Air Compressor(Belt Driven)">Screw Air Compressor(Belt Driven)</a>
              </li>
              <li>
                <a href="#" title="Screw Air Compressor(VSD Type)">Screw Air Compressor(VSD Type)</a>
              </li>
              <li>
                <a href="#" title="Oil-free Screw Air Compressor">Oil-free Screw Air Compressor</a>
              </li>
              <li>
                <a href="#" title="Oil-free Scroll Air Compressor">Oil-free Scroll Air Compressor</a>
              </li>
              <li>
                <a href="#" title="Air Dryer">Air Dryer</a>
              </li>
              <li>
                <a href="#" title="CPM Screw Air Compressor">CPM Screw Air Compressor</a>
              </li>
            </ul>
          </div> --}}

        </div>
      </div>
    </div>
  </div>
  <!-- RELATED ITEMS -->

  <!-- BROWSING ITEMS -->
  {{-- @include('theme::sections.recent_views') --}}

  <!-- MODALS -->
  {{-- @include('theme::modals.shopReviews', ['shop' => $item->shop]) --}}
@endsection

@section('scripts')
  @if (is_chat_enabled($item->shop))
     @include('theme::scripts.chatbox', ['shop' => $item->shop, 'agent' => $item->shop->owner, 'agent_status' => trans('theme.online')])
  @endif

  @include('theme::modals.ship_to')
  @include('theme::scripts.product_page')
@endsection
