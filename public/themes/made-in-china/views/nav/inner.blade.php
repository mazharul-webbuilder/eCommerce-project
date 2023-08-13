<header class="inner-page-site-header">
  <div class="top-header inner-page-top-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4">
          <div class="site-logo text-left">
            <a href="{{ url('/') }}" class="zcart-logo">
              <img src="{{ get_logo_url('system', 'full') }}" class="brand-logo" height="47px" alt="{{ trans('theme.logo') }}" title="{{ trans('theme.logo') }}">
            </a>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="top-bar-menu">
            <ul>
              @if (Auth::guard('customer')->check())
                <li class="auth-link">
                  <a href="{{ route('account', 'dashboard') }}">
                    {{ trans('theme.dashboard') }}
                  </a>
                </li>
              @else
                <li class="auth-link">
                  <a href="{{ route('account', 'dashboard') }}">
                    {{ trans('theme.login') }}</a>
                </li>
                <li class="auth-link">
                  <a href="{{ route('customer.register') }}">{{ trans('theme.register') }}</a>
                </li>
              @endif
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

              @if (Auth::guard('customer')->check() && customer_has_wallet())
                <li>
                  <a href="{{ route('customer.account.wallet') }}">
                    <i class="fas fa-wallet"></i>
                    <strong>{{ get_formated_currency(Auth::guard('customer')->user()->balance) }}</strong>
                  </a>
                </li>
              @endif

              <li class="top-bar-cart">
                <a href="{{ route('cart.index') }}">
                  <span class="lnr lnr-cart"></span>
                  <span id="globalCartItemCount" class="cart-count">{{ $cart_item_count }}</span>
                </a>
              </li>

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

  <div id="stickyCommonMenu" class="main-header inner-main-header common-page-search">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-2 col-lg-3">
          <div class="category-dropdown-menu">
            <a href="{{ route('categories') }}" class="btn btn-light category-menu ml-0 d-none d-lg-block"><i class="fas fa-bars"></i>{{ trans('theme.all_categories') }}<span class="lnr lnr-chevron-down lnr-arrow"></span></a>
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
              <h3 class="d-block d-lg-none">
                <a href="javascript:void(0)"><span class="lnr lnr-list"></span>{{ trans('categories') }}</a>
                <div class="mobile-menu-remove d-none"><span class="lnr lnr-cross"></span></div>
              </h3>

              @include('theme::partials.category_list')
              <ul class="mobile-header-menu main-category-list list-unstyled">
                <h3><a>{{ trans('theme.menu_options') }}</a></h3>
                <li class="has-dropdown-megamenu">
                  <span class="lnr lnr-chevron-right submenu-trigger"></span>
                  <a href="#">
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
                                  <a href="{{ route('customer.register') }}">{{ trans('theme.register') }}</a>
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
                  <a href="#">
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
                  <a href="#">
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
          <div class="row d-flex d-lg-none">
            <div class="col-7">
              <div class="site-logo">
                <a href="{{ url('/') }}" class="zcart-logo">
                  <img src="{{ get_logo_url('system', 'full') }}" class="brand-logo" height="47px" alt="{{ trans('theme.logo') }}" title="{{ trans('theme.logo') }}">
                </a>
              </div>
            </div>
            <div class="col-5">
              <div class="header-right-area d-flex justify-content-between">
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

        <div class="col-xl-8 col-lg-6">
          <div class="header-search-container sticky-search-form d-block">

            @include('theme::partials.header_search_box')

          </div>
        </div>
        {{-- <div class="col-xl-2 col-lg-3 d-none d-lg-block"> --}}
        {{-- <div class="h-cart"> --}}
        {{-- <a href="{{ route('cart.index') }}" class="d-flex align-items-center"> --}}
        {{-- <span class="lnr lnr-cart"></span> --}}
        {{-- <div class="cart-text pl-1">{{ trans('theme.your_cart') }}</div> --}}
        {{-- </a> --}}
        {{-- </div> --}}
        {{-- </div> --}}
      </div>
    </div>
  </div>

  @if (Request::is('shop/*') == request()->url())
    @include('theme::nav.vendor')
  @endif

</header>
