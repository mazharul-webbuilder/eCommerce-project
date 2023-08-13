<div class="section-title">
  <h4>@lang('theme.manage_your_account')</h4>
</div>

<ul class="account-sidebar-nav">
  <li class="{{ $tab == 'dashboard' ? 'active' : '' }}">
    <a href="{{ route('account', 'dashboard') }}"><i class="fas fa-tachometer-alt"></i> @lang('theme.nav.dashboard')</a>
  </li>
  @if (customer_has_wallet())
    <li class="{{ $tab == 'wallet' || $tab == 'deposit' ? 'active' : '' }}">
      <a href="{{ route('customer.account.wallet') }}">
        <i class="fas fa-wallet"></i> @lang('wallet::lang.my_wallet')
        @include('partials._addon_badge')
      </a>
    </li>
  @endif
  <li class="{{ $tab == 'messages' || $tab == 'message' ? 'active' : '' }}">
    <a href="{{ route('account', 'messages') }}"><i class="fas fa-envelope"></i> @lang('theme.my_messages')</a>
  </li>
  <li class="{{ $tab == 'orders' ? 'active' : '' }}">
    <a href="{{ route('account', 'orders') }}"><i class="fas fa-shopping-cart"></i> @lang('theme.nav.my_orders')</a>
  </li>

  @if (is_incevio_package_loaded('wishlist'))
    <li class="{{ $tab == 'wishlist' ? 'active' : '' }}">
      <a href="{{ route('account', 'wishlist') }}">
        <i class="fas fa-heart"></i> @lang('theme.nav.my_wishlist')
        @include('partials._addon_badge')
      </a>
    </li>
  @endif

  <li class="{{ $tab == 'disputes' ? 'active' : '' }}">
    <a href="{{ route('account', 'disputes') }}"><i class="fas fa-rocket"></i> @lang('theme.nav.refunds_disputes')</a>
  </li>

  @if (is_incevio_package_loaded('coupons'))
    <li class="{{ $tab == 'coupons' ? 'active' : '' }}">
      <a href="{{ route('account', 'coupons') }}">
        <i class="fas fa-tags"></i> @lang('theme.nav.my_coupons')
        @include('partials._addon_badge')
      </a>
    </li>
  @endif

  @if (is_incevio_package_loaded('eventy'))
    <li class="{{ $tab == 'events' ? 'active' : '' }}">
      <a href="{{ route('account', 'events') }}">
        <i class="fas fa-calendar"></i> @lang('eventy::lang.my_events')
        @include('partials._addon_badge')
      </a>
    </li>
  @endif
  {{-- <li class="{{ $tab == 'gift_cards' ? 'active' : '' }}">
        <a href="{{ route('account', 'gift_cards') }}"><i class="fas fa-gift"></i> @lang('theme.nav.gift_cards')</a>
    </li> --}}
  <li class="{{ $tab == 'account' ? 'active' : '' }}">
    <a href="{{ route('account', 'account') }}"><i class="fas fa-user"></i> @lang('theme.nav.my_account')</a>
  </li>
</ul>
