<div class="zcart-section zcart-banner-section">
  <div class="row zcart-low-gap">
    <div class="col">

      <div class="main-categoires-menu">
        <div class="mobile-sign-in">
          <div class="h-login-links">

            @auth('customer')
              <a href="{{ route('account', 'dashboard') }}">
                <span>{{ trans('theme.hello') .
                    ', ' .
                    Auth::guard('customer')->user()->getName() }}</span>
              </a>
            @else
              <a href="{{ route('account', 'dashboard') }}"><i class="fas fa-sign-in-alt"></i> {{ trans('theme.login') }}</a>
            @endauth
          </div>
        </div>
        <h3>
          <a href="{{ route('categories') }}">
            <span class="lnr lnr-list"></span>{{ trans('theme.nav.categories') }}
          </a>
          <div class="mobile-menu-remove d-none"><span class="lnr lnr-cross"></span></div>
        </h3>

        @include('theme::partials.category_list')
        <ul class="mobile-header-menu main-category-list list-unstyled">
          <h3><a>{{ trans('theme.menu_options') }}</a></h3>
          <li class="has-dropdown-megamenu">
            <span class="lnr lnr-chevron-right submenu-trigger"></span>
            <a href="javascript::void(0)">
              {{ trans('theme.for_customers') }}
            </a>
            <div class="zcart-megamenu">
              <div class="row zcart-low-gap">
                <div class="col-lg-4">
                  <div class="zcart-megamenu-list">
                    <div class="menu-title">{{ trans('theme.search_product_and_supplier') }}</div>
                    <ul class="list-unstyled">
                      <li><a href="{{ route('brands') }}">{{ trans('theme.brands') }}</a></li>
                      <li><a href="{{ route('shops') }}">{{ trans('theme.vendors') }}</a></li>
                    </ul>
                  </div>

                  <div class="zcart-megamenu-list">
                    <div class="menu-title">{{ trans('theme.quick_links') }}</div>
                    <ul class="list-unstyled">
                      <li>
                        <a href="{{ route('account', 'dashboard') }}">
                          @if (Auth::guard('customer')->check())
                            {{ trans('theme.dashboard') }}
                          @else
                            {{ trans('theme.login') }}
                          @endif
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('account', 'account') }}">{{ trans('theme.account') }}</a>
                      </li>
                      <li>
                        <a href="{{ route('account', 'wishlist') }}">{{ trans('theme.wishlist') }}</a>
                      </li>
                      <li>
                        <a href="{{ route('blog') }}" target="_blank">@lang('theme.nav.blog')</a>
                      </li>
                    </ul>
                  </div>

                  <div class="zcart-megamenu-list">
                    <div class="menu-title">{{ trans('theme.nav.customer_service') }}</div>
                    <ul class="list-unstyled">
                      <li>
                        <a href="{{ route('account', 'orders') }}">{{ trans('theme.track_your_order') }}</a>
                      </li>
                      <li>
                        <a href="{{ get_page_url(\App\Models\Page::PAGE_CONTACT_US) }}">{{ trans('theme.support') }}</a>
                      </li>
                    </ul>
                  </div>

                </div>
              </div>

              {{-- <div class="more-hot-prodducts">
                {{ trans('theme.hot_item') }} :
                @foreach ($catGroup->subGroups as $subGroup)
                    <a href="">{{ $subGroup->name }}</a> &nbsp;
                @endforeach
            </div> --}}
            </div>
          </li>

          <li class="has-dropdown-megamenu">
            <span class="lnr lnr-chevron-right submenu-trigger"></span>
            <a href="javascript::void(0)">
              {{ trans('theme.vendors') }}
            </a>
            <div class="zcart-megamenu">
              <div class="row zcart-low-gap">
                <div class="col-lg-4">
                  <div class="zcart-megamenu-list">
                    <ul class="list-unstyled zcart-submenu">
                      <li>
                        <a href="{{ url('/selling') }}">{{ trans('theme.nav.sell_on', ['platform' => get_platform_title()]) }}</a>
                      </li>
                      <li><a href="{{ url('/selling#howItWorks') }}">{{ trans('theme.nav.how_it_works') }}</a></li>

                      <li class="submenu-button">
                        <a href="{{ url('/register') }}" class="btn">{{ trans('theme.register') }}</a>
                        <a href="{{ url('/login') }}" class="btn">{{ trans('theme.login') }}</a>
                      </li>
                    </ul>
                  </div>

                </div>
              </div>

              {{-- <div class="more-hot-prodducts">
                  {{ trans('theme.hot_item') }} :
                  @foreach ($catGroup->subGroups as $subGroup)
                      <a href="">{{ $subGroup->name }}</a> &nbsp;
                  @endforeach
              </div> --}}
            </div>
          </li>

          <h3><a>{{ trans('theme.settings') }}</a></h3>
          <li class="has-dropdown-megamenu">
            <span class="lnr lnr-chevron-right submenu-trigger"></span>
            <a href="javascript::void(0)">
              {{ trans('theme.languages') }}
            </a>

            <div class="zcart-megamenu">
              <div class="row zcart-low-gap">
                <div class="col-lg-4">
                  <div class="zcart-megamenu-list">
                    <ul class="list-unstyled zcart-submenu sm-zcart-submenu">
                      @foreach (config('active_locales') as $lang)
                        <li>
                          <a href="{{ route('locale.change', $lang->code) }}">
                            {{ $lang->language }}
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  </div>

                </div>
              </div>

              {{-- <div class="more-hot-prodducts">
                  {{ trans('theme.hot_item') }} :
                  @foreach ($catGroup->subGroups as $subGroup)
                      <a href="">{{ $subGroup->name }}</a> &nbsp;
                  @endforeach
              </div> --}}
            </div>
          </li>
          <li>
            <a>
              @auth('customer')
                <a href="{{ route('customer.logout') }}">
                  <span>{{ trans('theme.logout') }}</span>
                </a>
              @else
              @endauth
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="col-auto zcart-main-slider">
      <div id="zcart-slider" class="zcart-slider-area">
        @foreach ($sliders as $slider)
          <div class="zcart-single-slide">
            <img src="{{ get_storage_file_url($slider['feature_image']['path'], 'full') }}" alt="{{ $slider['title'] ?? 'Slider Image ' . $loop->count }}">
          </div>
        @endforeach
      </div>

      {{-- <div class="zcart-slider-spotlight">
                <div class="row zcart-xs-low-gap">
                    <div class="col-md-5">
                        <a href="javascript::void(0)" class="zcart-spotlight-link has-desc">
                            <h5>SMART EXPO</h5>
                            <div class="spotlight-desc">Reliable China Suppliers, Recommended at World's Famous Trade Shows.
                            </div>
                            <img src="assets/images/spotlight/smart-expo.png" alt="smart expo">
                            <div class="shake-arrow">
                                <span class="lnr lnr-arrow-right"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-7">
                        <div class="row zcart-xs-low-gap">
                            <div class="col-md-6">
                                <a href="javascript::void(0)" class="zcart-spotlight-link">
                                    <h5>Online Trading</h5>
                                    <img src="assets/images/spotlight/trading.png" alt="Online Trading">
                                    <div class="shake-arrow">
                                        <span class="lnr lnr-arrow-right"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="javascript::void(0)" class="zcart-spotlight-link">
                                    <h5>Online Trading</h5>
                                    <img src="assets/images/spotlight/star.png" alt="Online Trading">
                                    <div class="shake-arrow">
                                        <span class="lnr lnr-arrow-right"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
    </div>

    <div class="col pr-0">
      <div class="slider-right-product-section">
        <h2>{{ trans('theme.featured') }}</h2>
        <div class="like-product-container">
          @foreach ($featured_items->take(5) as $item)
            <a href="{{ route('show.product', $item->slug) }}" class="like-product-item">
              <div class="like-item-img">
                <img src="{{ get_inventory_img_src($item, 'small') }}" data-name="product_image" alt="{{ $item->title }}" title="{{ $item->title }}">
              </div>
              <div class="like-item-content">
                <div class="like-item-name">{!! \Str::limit($item->title, 40) !!}</div>
                <div class="like-item-count">{!! get_formated_price($item->sale_price, config('system_settings.decimals', 2)) !!}</div>
              </div>
            </a>
          @endforeach
        </div>

        {{-- <div class="request-now">
                    <p>No desirable products?</p>
                    <a href="javascript::void(0)" class="btn btn-light"><i class="fa fa-bullseye"></i>Post Your Request Now</a>
                </div> --}}
      </div>
    </div>
  </div>
</div>
