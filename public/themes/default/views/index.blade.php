@extends('theme::layouts.main')

@section('content')
  <style type="text/css">
    section {
      margin: 0 0 35px 0;
    }

    @media screen and (max-width: 991px) {
      section {
        margin: 0 0 30px 0;
      }
    }

    /*popup newsletter*/
    body {
      font-family: 'Varela Round', sans-serif;
    }

    .modal-newsletter {
      color: #999;
      width: 750px;
      max-width: 750px;
      font-size: 15px;
      top: 25%;
    }

    .modal-newsletter .modal-content {
      padding: 30px;
      border-radius: 10px;
      border: none;
      /*background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20200821/pngtree-light-white-background-wallpaper-image_396584.jpg);*/
    }

    .modal-newsletter .modal-header {
      border-bottom: none;
      position: relative;
      border-radius: 0;
    }

    .modal-newsletter h4 {
      font-weight: bold;
    }

    .modal-newsletter .close {
      position: absolute;
      top: -20px;
      right: -15px;
      text-shadow: none;
      opacity: 0.5;
      font-size: 30px;
    }

    .modal-newsletter .close:hover {
      opacity: 0.8;
    }

    .modal-newsletter .icon-box {
      color: #7265ea;
      display: inline-block;
      z-index: 9;
      text-align: center;
      position: relative;
      margin-bottom: 10px;
    }

    .modal-newsletter .icon-box i {
      font-size: 110px;
    }

    .modal-newsletter .form-control,
    .modal-newsletter .btn {
      min-height: 46px;
      border-radius: 0;
    }

    .modal-newsletter .form-control {
      box-shadow: none;
      border-color: #dbdbdb;
    }

    .modal-newsletter .form-control:focus {
      border-color: #f95858;
      box-shadow: 0 0 8px rgba(249, 88, 88, 0.4);
    }

    .modal-newsletter .btn {
      color: #fff;
      background: #f95858;
      text-decoration: none;
      transition: all 0.4s;
      line-height: normal;
      padding: 6px 20px;
      min-width: 150px;
      margin-left: 6px !important;
      border: none;
    }

    .modal-newsletter .btn:hover,
    .modal-newsletter .btn:focus {
      box-shadow: 0 0 8px rgba(249, 88, 88, 0.4);
      background: #f72222;
      outline: none;
    }

    .modal-newsletter .input-group {
      margin-top: 30px;
      display: flex;
    }

    .modal-newsletter .modal-body p {
      color: #383e47;
    }

    .hint-text {
      margin: 100px auto;
      text-align: center;
    }

    .newsletterPopup .social_list .social-icons .social-icon {
      color: #373f46;
      border: 1px solid #c2c1c2;
    }

    .footer__content-box-social a {
      background: white;
      color: #373f46;
      border: 1px solid #c2c1c2;
      height: 40px;
      width: 40px;
    }

    label.form-check-label {
      color: #383e47;
      font-size: 13px;
      font-weight: 400;
      margin-left: 5px;
    }
  </style>

  <!-- popup newsletter -->
  {{-- @include('theme::sections.newsletter_popup') --}}

  <!-- MAIN SLIDER -->
  @desktop
    @include('theme::sections.slider-new')
  @elsedesktop
    @include('theme::mobile.slider')
  @enddesktop

  <!-- Featured category stat -->
  @include('theme::sections.featured_category-new')

  <!-- banner grp one -->
  @if (!empty($banners['group_1']))
    @include('theme::sections.banners', ['banners' => $banners['group_1']])
  @endif

  <!-- Flash deal start -->
  @if (isset($flashdeals))
    @include('flashdeal::_deals')
  @endif

  <!-- Trending start -->
  @include('theme::sections.trending_now')

  <!-- banner grp two -->
  @if (!empty($banners['group_2']))
    @include('theme::sections.banners', ['banners' => $banners['group_2']])
  @endif

  <!-- Deal of Day start -->
  @include('theme::sections.deal_of_the_day')

  <!-- banner grp three -->
  @if (!empty($banners['group_3']))
    @include('theme::sections.banners', ['banners' => $banners['group_3']])
  @endif

  <!-- Featured category stat -->
  {{-- @include('theme::sections.featured_category') --}}

  <!-- Popular Product type start -->
  @include('theme::sections.popular')

  <!-- banner grp three -->
  @if (!empty($banners['group_4']))
    @include('theme::sections.banners', ['banners' => $banners['group_4']])
  @endif

  <!-- Bundle start -->
  {{-- @include('theme::sections.bundle_offer') --}}

  <!-- feature-brand start -->
  @include('theme::sections.featured_brands')

  <!-- Recently Added -->
  @include('theme::sections.recently_added')

  <!-- banner grp four -->
  @if (!empty($banners['group_5']))
    @include('theme::sections.banners', ['banners' => $banners['group_5']])
  @endif

  <!-- Additional Items -->
  @include('theme::sections.additional_items')

  <!-- banner grp four -->
  @if (!empty($banners['group_6']))
    @include('theme::sections.banners', ['banners' => $banners['group_6']])
  @endif

  <!-- Best finds under $99 deals start -->
  @include('theme::sections.best_finds')

  <!-- best selling Now   -->
  {{-- @include('theme::sections.best_selling') --}}

  <!-- Recently Viewed -->
  @include('theme::sections.recent_views')
@endsection

@section('scripts')
  <script src="{{ theme_asset_url('js/eislideshow.js') }}"></script>
  <script type="text/javascript">
    // Main slider
    $('#ei-slider').eislideshow({
      animation: 'center',
      autoplay: true,
      slideshow_interval: 5000,
    });

    // $("#top_vendors").slick({
    //   slidesToShow: 3,
    //   slidesToScroll: 1,
    //   autoplay: true,
    //   autoplaySpeed: 2000,
    // });

    // Trending now tabs
    $(function() {
      $('.feature__tabs a').click(function() {
        let targetDom = $(this).attr('href');
        $(targetDom).slick('refresh');

        // Check for active
        $('.feature__tabs li').removeClass('active');
        $(this).parent().addClass('active');

        // Display active tab
        $('.feature__items .feature__items-inner').hide();
        $(targetDom).show();

        return false;
      });
    });

    // Owl Sliders
    $('.owl-carousel').owlCarousel({
      loop: true,
      dots: false,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 2
        },
        576: {
          items: 3
        },
        992: {
          items: 5
        }
      }
    })

    $(document).ready(function() {
      //$("#newsletterModal").modal('show');
      $(document).on('change', '#newsletterCheckbox', function(e) {
        document.cookie = "zcartApperance=newsletterPopup";
      });

      function getCookie(cookieName) {
        let cookie = {};
        document.cookie.split(';').forEach(function(el) {
          let [key, value] = el.split('=');
          cookie[key.trim()] = value;
        })
        return cookie[cookieName];
      }
      var a = getCookie('zcartApperance');
      if (a != "newsletterPopup") {
        $("#newsletterModal").modal('show');
      }

      $('#newsletteForm').submit(function(e) {
        document.cookie = "zcartApperance=newsletterPopup";
      })
    });
  </script>

  <!-- Flash deals script -->
  @if (isset($flashdeals))
    @include('flashdeal::scripts')
  @endif
@endsection
