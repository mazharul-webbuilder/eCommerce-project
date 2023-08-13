<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('meta')
  {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet"> --}}

  <link rel="stylesheet" href="{{ theme_asset_url('css/normalize.css') }}">
  <link rel="stylesheet" href="{{ theme_asset_url('css/bootstrap.min.css') }}">
  {{-- <link rel="stylesheet" href="{{ theme_asset_url('css/bootstrap-grid.min.css') }}"> --}}
  <link rel="stylesheet" href="{{ theme_asset_url('css/linearicons.css') }}">
  <link rel="stylesheet" href="{{ theme_asset_url('css/all.min.css') }}">
  <link rel="stylesheet" href="{{ theme_asset_url('css/tiny-slider.css') }}">
  <link rel="stylesheet" href="{{ theme_asset_url('css/style.css') }}">
  <link rel="stylesheet" href="{{ theme_asset_url('css/style-rtl.css') }}">
  <link rel="stylesheet" href="{{ theme_asset_url('css/responsive.css') }}">
  <link rel="stylesheet" href="{{ theme_asset_url('css/responsive-rtl.css') }}">
  <link rel="stylesheet" href="{{ theme_asset_url('plugins/iCheck/flat/blue.css') }}">
  <link rel="stylesheet" href="{{ theme_asset_url('plugins/jquery-confirm-v3.3.4/dist/jquery-confirm.min.css') }}">
  {{-- <link rel="stylesheet" href="{{ theme_asset_url('plugins/iCheck/flat/pink.css') }}"> --}}
  {{-- <link rel="stylesheet" href="{{ theme_asset_url('plugins/iCheck/line/pink.css') }}"> --}}
  <link rel="stylesheet" href="{{ theme_asset_url('plugins/iCheck/minimal/blue.css') }}">
  <link rel="stylesheet" href="{{ theme_asset_url('css/custom.css') }}">
  <link rel="stylesheet" href="{{ theme_asset_url('css/stub.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />

</head>
<!-- for RTL please add "zcart-rtl" class on body tag-->

<body class="home {{ config('active_locales')->firstWhere('code', App::getLocale())->rtl ? 'rtl zcart-rtl' : 'ltr' }}">
  <div class="mobile-menu-backdrop"></div>
<div class="container">
  <!--- Header Section Start-->
  <header>
    <!-- VALIDATION ERRORS -->
    @if (count($errors) > 0)
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ trans('theme.error') }}!</strong> {{ trans('messages.input_error') }}<br><br>
        <ul class="list-group">
          @foreach ($errors->all() as $error)
            <li class="list-group-item list-group-item-danger">{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if (Session::has('global_announcement'))
      <div class="header__enouncement">
        @if (session('global_announcement')->action_url)
          <div class="container">
            <div class="header__enouncement-inner">
              <p>{!! session('global_announcement')->parsed_body !!}</p>
              <a href="{{ session('global_announcement')->action_url }}">{{ session('global_announcement')->action_text }}</a>
            </div>
          </div>
        @endif
      </div>
    @endif

    @if (url('/') == request()->url())
      @include('theme::nav.main')
    @else
      @include('theme::nav.inner')
    @endif
  </header>
  <!---End Header Section-->

  @yield('content')
</div>

  <!--- footer section-->
  @include('theme::nav.footer_with_top')

  <!-- MODALS -->
  @unless(Auth::guard('customer')->check())
    @include('theme::auth.modals')
  @endunless

  <div id="loading">
    <img id="loading-image" src="{{ theme_asset_url('images/loading.gif') }}" alt="busy...">
  </div>
  <!-- Quick View Modal-->
  <div id="quickViewModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"></div>

  <!-- my Dynamic Modal-->
  <div id="myDynamicModal" class="modal"></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
  <script src="{{ theme_asset_url('js/tiny-slider.js') }}"></script>
  {{-- <script src="{{ theme_asset_url('plugins/popover.js') }}"></script> --}}
  <script src="{{ theme_asset_url('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ theme_asset_url('js/main.js?v=2') }}"></script>
  <script src="{{ theme_asset_url('plugins/notify/notify.min.js') }}"></script>
  <script src="{{ theme_asset_url('plugins/jquery-confirm-v3.3.4/dist/jquery-confirm.min.js') }}"></script>
  <script src="{{ theme_asset_url('plugins/iCheck/icheck.min.js') }}"></script>
  <script src="{{ theme_asset_url('plugins/validator/validator.min.js') }}"></script>
  {{-- 'resources/assets/plugins/validator/validator.min.js', --}}

  {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script> --}}
  {{-- <script src="{{ theme_asset_url('plugins/selectBoxIt.js') }}"></script> --}}
  <script src="{{ theme_asset_url('plugins/simplecolorpicker/jquery.simplecolorpicker.js') }}"></script>
  <script src="{{ theme_asset_url('js/stub.js') }}"></script>

  @include('theme::scripts.appjs')

  <!-- Page Scripts -->
  @yield('scripts')
</body>

</html>
