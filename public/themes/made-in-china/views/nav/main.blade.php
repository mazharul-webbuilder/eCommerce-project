<div class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="top-bar-menu">
          <ul>
            <li class="zcart-has-submenu">
              <a href="javascript:void(0)">
                {{ trans('theme.for_customers') }}
                <span class="lnr lnr-chevron-down lnr-arrow"></span>
              </a>

              <div class="zcart-submenu medium-submenu">
                <div class="row">
                  <div class="col-md-6">
                    <div class="submenu-list-group">
                      <div class="submenu-title">
                        {{ trans('theme.search_product_and_supplier') }}
                      </div>
                      <ul class="list-unstyled">
                        <li><a href="{{ route('brands') }}">{{ trans('theme.brands') }}</a></li>
                        <li><a href="{{ route('shops') }}">{{ trans('theme.vendors') }}</a></li>
                      </ul>
                    </div>

                    <div class="submenu-list-group">
                      <div class="submenu-title">{{ trans('theme.quick_links') }}</div>
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
                  </div>

                  <div class="col-md-6">
                    <div class="submenu-list-group">
                      <div class="submenu-title">{{ trans('theme.nav.customer_service') }}</div>
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
              </div>
            </li>

            <li class="zcart-has-submenu">
              <a href="javascript:void(0)">
                {{ trans('theme.vendors') }}
                <span class="lnr lnr-chevron-down lnr-arrow"></span>
              </a>
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
            </li>

            @if (Auth::guard('customer')->check() && is_wallet_configured_for('customer'))
              <li>
                <a href="{{ route('customer.account.wallet') }}">
                  <i class="fas fa-wallet"></i>
                  <strong>{{ get_formated_currency(Auth::guard('customer')->user()->balance) }}</strong>
                </a>
              </li>
            @endif

            {{-- <li><a href="#"><span class="lnr lnr-smartphone"></span>Get Apps</a></li> --}}

            <li class="zcart-has-submenu">
              <a href="javascript:void(0)">
                {{ config('active_locales')->where('code', \App::getLocale())->first()->language }}
                <span class="lnr lnr-chevron-down lnr-arrow"></span>
              </a>

              <ul class="list-unstyled zcart-submenu sm-zcart-submenu">
                @foreach (config('active_locales') as $lang)
                  <li>
                    <a href="{{ route('locale.change', $lang->code) }}">
                      {{ $lang->language }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="stickyMenu" class="main-header">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-7 col-lg-3 col-xl-3">
        <div class="site-logo">
          <a href="{{ url('/') }}" class="zcart-logo">
            <img src="{{ get_logo_url('system', 'full') }}" class="brand-logo" height="47px" alt="{{ trans('theme.logo') }}" title="{{ trans('theme.logo') }}">
          </a>
        </div>
      </div>
      <div class="col-12 col-lg-5 col-xl-6 order-3 order-lg-2">
        <div class="header-search-container zcart-tab-search d-none d-xl-block">
          {!! Form::open(['route' => 'inCategoriesSearch', 'method' => 'GET', 'id' => 'search-categories-form', 'class' => 'navbar-left navbar-form navbar-search', 'role' => 'search']) !!}
          <div class="header-search">
            <ul class="search-tabs zcart-inline-items">
              <li id="searchTab1" class="search-tab-item active">{{ trans('theme.products') }}</li>
              {{-- <li id="searchTab2" class="search-tab-item">Suppliers</li> --}}
              {{-- <li id="searchTab3" class="search-tab-item">Sourcing</li> --}}
            </ul>
            <div class="zcart-form-group d-flex">
              <input id="zcart-search-field" name="q" autocomplete="off" type="text" placeholder="{{ trans('theme.main_searchbox_placeholder') }}" data-search value="{{ Request::get('q') }}">
              <button type="submit" class="search-btn">{{ trans('theme.search') }}</button>
            </div>
          </div>
          {!! Form::close() !!}
          <div class="header-search-arrow"></div>
        </div>
        <div class="header-search-container sticky-search-form d-block d-xl-none">

          @include('theme::partials.header_search_box')

        </div>
      </div>
      <div class="col-5 col-lg-4 col-xl-3 order-2 order-lg-3">
        <div class="header-right-area d-flex justify-content-between">
          <div class="h-login d-flex align-items-center">
            <span class="lnr lnr-user"></span>
            <div class="h-login-links">

              @auth('customer')
                <a href="{{ route('account', 'dashboard') }}">
                  <span>{{ trans('theme.hello') .
                      ', ' .
                      Auth::guard('customer')->user()->getName() }}</span>
                </a>

                <a href="{{ route('customer.logout') }}">
                  <span>{{ trans('theme.logout') }}</span>
                </a>
              @else
                <a href="{{ route('account', 'dashboard') }}">{{ trans('theme.login') }}</a>
                <a href="{{ route('customer.register') }}">{{ trans('theme.register') }}</a>
              @endauth
            </div>
          </div>
          <div class="h-cart">
            <a href="{{ route('account', 'wishlist') }}" class="d-flex align-items-center">
              <span class="lnr lnr-heart"></span>
              {{-- <span class="badge">{{ $cart_item_count }}</span> --}}
            </a>
          </div>
          <div class="h-cart">
            <a href="{{ route('cart.index') }}" class="d-flex align-items-center">
              <span class="lnr lnr-cart"></span>
              <div class="cart-text">{{ trans('theme.your_cart') }}</div>
            </a>
          </div>
          <a href="javascript:void(0)" class="mobile-menu-trigger"><span class="lnr lnr-menu"></span></a>
        </div>
      </div>
    </div>
  </div>
</div>
