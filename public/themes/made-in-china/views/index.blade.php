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
    .modal-newsletter .form-control, .modal-newsletter .btn {
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
    .modal-newsletter .btn:hover, .modal-newsletter .btn:focus {
      box-shadow: 0 0 8px rgba(249, 88, 88, 0.4);
      background: #f72222;
      outline: none;
    }
    .modal-newsletter .input-group {
      margin-top: 30px;
      display: flex;
    }
    .modal-newsletter .modal-body p{
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
    .footer__content-box-social a{
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
    .fade.show{
      visibility: visible;
    }
    .footer__news-form-box {
      background-color: #fff;
      border-radius: 40px;
      width: 100%;
      display: -webkit-flex;
      display: -webkit-box;
      display: -moz-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-align-items: center;
      align-items: center;
    }
    .footer__news-form-box input {
      border-radius: 40px;
      width: calc(100% - 140px);
      border: none;
      font-weight: 300;
      font-size: 14px;
      line-height: 19px;
      padding: 16px 0 16px 33px;
      color: #333e48;
      font-family: "Arimo", sans-serif;
    }
    .footer__news-form-box button {
      background: #d92121;
      border-radius: 40px;
      padding: 16px 32px;
      border: none;
      outline: none;
      color: white;
      font-weight: 600;
      font-size: 16px;
      font-family: "Arimo", sans-serif;
      line-height: 17px;
      box-shadow: 0 0 1px #404041;
      cursor: pointer;
      transition: all 500ms;
    }
    .footer__news-form-box button:hover {
      background-color: #333e48;
      color: #f7f7f7;
    }
    .footer__content-box-social ul {
      display: -webkit-flex;
      display: -webkit-box;
      display: -moz-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      flex-wrap: wrap;
    }
    .footer__content-box-social li {
      padding: 0 15px 10px 0;
      list-style: none;
    }
    .footer__content-box-social a {
      background: white;
      color: #373f46;
      border: 1px solid #c2c1c2;
      height: 40px;
      width: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 200ms;
      border-radius: 50%;
    }
    .footer__content-box-social a:hover {
      background-color: #d92121;
      text-decoration: none;
      color: white;
    }
  </style>
  <div class="main-container zcart-light-bg">
    <div class="container">

      <!-- popup newsletter -->
    @include('theme::sections.newsletter_popup')

      <!--- Slider section-->
      @include('theme::sections.slider')

      <!--- Featured category section-->
      @include('theme::sections.featured_category')

      <!--- Category wise products section-->
      @foreach ($trending_categories as $category)
        @include('theme::sections.trending_categories', ['category' => $category])
      @endforeach
      {{-- @include('theme::sections.trending_categories') --}}

      <!---Zcart easy sourcing section-->
      <div class="zcart-section zcart-easy-sourcing position-relative mt-20">
        <div class="zcart-section-bg">
          <img src="{{ theme_asset_url('images/easy-sourcing.jpg') }}" alt="easy sourcing">
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-5">
            <div class="zcart-sourcing-text">
              <h3 class="sourcing-title">EASY SOURCING</h3>
              <div class="sourcing-descirption">
                <p>An easy way to post your sourcing requests and get quotes.</p>
                <p>One request, multiple quotes<br>
                  Verified suppliers matching<br>
                  Quotes comparison and sample request</p>
              </div>
              <div class="sourcing-more-link">
                {{-- <a href="#" target="_blank">Learn More <span class="lnr lnr-chevron-right"></span></a> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-2 col-md-7">
            <div class="get-quotation-form">
              <h3 class="form-title">Want to get quotations?</h3>
              {!! Form::open(['route' => 'contact_us', 'id' => 'contact_us_form', 'role' => 'form', 'data-toggle' => 'validator']) !!}

              <div class="row">
                <div class="col-md-6 ">
                  <div class="form-item">
                    {!! Form::text('name', null, ['class' => 'form-text input-lg flat', 'placeholder' => trans('theme.placeholder.name'), 'maxlength' => '100', 'required']) !!}
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="form-item">
                    {!! Form::email('email', null, ['class' => 'form-text input-lg flat', 'placeholder' => trans('theme.placeholder.email'), 'maxlength' => '100', 'required']) !!}
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>

              <div class="form-item">
                {!! Form::text('subject', null, ['class' => 'form-text input-lg flat', 'placeholder' => trans('theme.placeholder.contact_us_subject'), 'maxlength' => 200, 'required']) !!}
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-item">
                {!! Form::textarea('message', null, ['class' => 'form-text input-lg flat', 'placeholder' => trans('theme.placeholder.message'), 'rows' => 8, 'maxlength' => 500, 'required']) !!}
                <div class="help-block with-errors"></div>
              </div>

              <div class="row">
                <div class="col-md-6 ">
                  <div class="form-item">
                    <button type="submit" class='btn btn-primary btn-lg flat'><i class="fas fa-paper-plane"></i> {{ trans('theme.button.send_message') }}</button>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="form-item">
                    @if (config('services.recaptcha.key'))
                      <div class="g-recaptcha" data-sitekey="{!! config('services.recaptcha.key') !!}"></div>
                    @endif
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
      <!---End Zcart easy sourcing section-->

      @include('theme::sections.product_list', ['title'=> trans('theme.recently_added'),'products' => $featured_items])
      @include('theme::sections.flash_deals', ['title'=> trans('theme.recently_added'),'products' => $featured_items])

      <!---Zcart easy sourcing solution section-->
      @include('theme::sections.featured_brands')

      <!---Zcart machinery industry section-->
      {{-- <div class="zcart-section zcart-machinery-industry">
      <div class="row">
        <div class="col-md-12">
          <h2>Pioneer in Manufacturing & Processing Machinery Industry</h2>
        </div>
      </div>
      <div class="zcart-machinery-box">
        <div class="zcart-machinery-box-company">
          <div class="row">
            <div class="col-12 col-md-auto">
              <img src="{{ theme_asset_url('images/Xiamen-BMS.jpg') }}" alt="Xiamen BMS">
            </div>
            <div class="col-12 col-md">
              <div class="company-member">
                <h3><a href="#" target="_blank">Xiamen BMS Group</a></h3>
                <ul class="company-member-list">
                  <li class="company-member">
                    <img src="{{ theme_asset_url('images/diamond_member_18.png') }}" alt="China Supplier - Diamond Member">Diamond Member <span class="diamond-since">Since 2018</span>
                  </li>
                  <li class="company-member">
                    <img class="auth-icon" src="{{ theme_asset_url('images/audited_supppliers_18.png') }}" alt="Audited Supplier">Audited Supplier
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-md-auto mb-4 mb-md-0 mt-3 mb-mt-0">
              <div class="machinery-industry-button">
                <a href="#" class="btn">View More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="zcart-machinery-box-img">
          <div class="row zcart-low-gap">
            <div class="col-lg-8 col-md-6">
              <div class="machinery-cover-img">
                <img src="{{ theme_asset_url('images/DaQtpUBIUElg.jpg') }}" alt="Virtual 360° View of the Factory">
                <a href="#" class="compnay-360-text d-block">
                  <div class="inner-360-text">
                    <img src="{{ theme_asset_url('images/360-degrees.png') }}" alt="360 degrees">
                    <span class="compnay-360-view-text">Virtual 360° View of the Factory</span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-3">
              <div class="machinery-thumb-img">
                <img src="{{ theme_asset_url('images/box1.jpg') }}" alt="Image Alt text">
              </div>
            </div>
            <div class="col-lg-2 col-md-3">
              <div class="machinery-thumb-img">
                <img src="{{ theme_asset_url('images/box2.jpg') }}" alt="Image Alt text">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
      <!---End Zcart machinery industry section-->

      <!---Zcart trade show section-->
      {{-- <div class="zcart-section zcart-trade-show mt-20">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title-desc">
            <h3><a href="#" title="Trade Shows">Trade Shows</a></h3>
            <p>List of the trade shows Made-In-China.com will take part in.</p>
            <div class="more-button-right">
              <a href="#" class="btn">View More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="zcart-trade-body mt-20">
        <div class="row">
          <div class="col-lg-6 mb-3 mb-md-0">
            <div class="trade-image-section">
              <div class="trade-img">
                <a href="#"><img src="{{ theme_asset_url('images/trade-body.jpg') }}" alt="Image alt text here"></a>
              </div>
              <div class="trade-body-text">
                <h5>ITES 2021</h5>
                <div class="trade-booth-no">Booth：1-R43</div>
                <div class="trade-duration">Duration: Mar 30 - Apr 2, 2021</div>
                <div class="trade-location">Location: Shenzhen, China</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 trade-border-left mt-md-4">
            <div class="trade-list-items">
              <div class="trade-single-list">
                <div class="row">
                  <div class="col-md-4">
                    <div class="trade-thumb">
                      <a href="#"><img src="{{ theme_asset_url('images/trade-body.jpg') }}" alt="Image alt text here"></a>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="trade-item-info">
                      <h4 class="item-main-title">
                        <a href="#" target="_blank">CHINA INTERNATIONAL BEAUTY EXPO 2021</a>
                      </h4>
                      <div class="item-booth-no">Booth：8.1D21</div>
                      <div class="item-duration">Duration: Mar 10 - 12, 2021</div>
                      <div class="item-location">Location: China</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="trade-single-list">
                <div class="row">
                  <div class="col-md-4">
                    <div class="trade-thumb">
                      <a href="#"><img src="{{ theme_asset_url('images/SNEC-2021.webp') }}" alt="SNEC 2021"></a>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="trade-item-info">
                      <h4 class="item-main-title">
                        <a href="#" target="_blank">SNEC 2021</a>
                      </h4>
                      <div class="item-booth-no">Booth：TBD</div>
                      <div class="item-duration">Duration: Jun 3 - 5, 2021</div>
                      <div class="item-location">Location: Shanghai, China</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="trade-single-list">
                <div class="row">
                  <div class="col-md-4">
                    <div class="trade-thumb">
                      <img src="{{ theme_asset_url('images/productronica-China-2021.webp') }}" alt="productronica China 2021">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="trade-item-info">
                      <h4 class="item-main-title">
                        <a href="#" target="_blank">productronica China 2021</a>
                      </h4>
                      <div class="item-booth-no">Booth：E5.5676</div>
                      <div class="item-duration">Duration: Mar 17 - 19, 2021</div>
                      <div class="item-location">Location: China</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
      <!---End Zcart trade show section-->

      <!-- Flash deal start -->
{{--      @include('theme::sections.flash_deals')--}}

    </div>
  </div>

  <!-- banner grp one -->
  {{-- @if (!empty($banners['group_1']))
        @include('theme::sections.banners', ['banners' => $banners['group_1']])
    @endif --}}

  <!-- Flash deal start -->
  {{-- @include('theme::sections.flash_deals') --}}

  <!-- banner grp two -->
  {{-- @if (!empty($banners['group_2']))
        @include('theme::sections.banners', ['banners' => $banners['group_2']])
    @endif --}}

  <!-- Deal of Day start -->
  {{-- @include('theme::sections.deal_of_the_day') --}}

  <!-- banner grp three -->
  {{-- @if (!empty($banners['group_3']))
        @include('theme::sections.banners', ['banners' => $banners['group_3']])
    @endif --}}

  <!-- Popular Product type start -->
  {{-- @include('theme::sections.popular') --}}
  <!-- Product type end -->

  <!-- banner grp three -->
  {{-- @if (!empty($banners['group_4']))
        @include('theme::sections.banners', ['banners' => $banners['group_4']])
    @endif --}}

  <!-- Bundle start -->
  {{-- @include('theme::sections.bundle_offer') --}}
  <!-- Bundle end -->

  <!-- Recently Added -->
  {{-- @include('theme::sections.recently_added') --}}
  <!-- neckbands end -->

  <!-- banner grp four -->
  {{-- @if (!empty($banners['group_5']))
        @include('theme::sections.banners', ['banners' => $banners['group_5']])
    @endif --}}

  <!-- Additional Items -->
  {{-- @include('theme::sections.additional_items') --}}

  <!-- banner grp four -->
  {{-- @if (!empty($banners['group_6']))
        @include('theme::sections.banners', ['banners' => $banners['group_6']])
    @endif --}}

  <!-- Best finds under $99 deals start -->
  {{-- @include('theme::sections.best_finds') --}}

  <!-- best selling Now   -->
  {{-- @include('theme::sections.best_selling') --}}

  <!-- Recently Viewed -->
  {{-- @include('theme::sections.recent_views') --}}

  <!-- Flash deals script -->
  @if (isset($flashdeals))
    @include('flashdeal::scripts')
  @endif
@endsection
@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      $(document).on('change', '#newsletterCheckbox', function (e) {
        document.cookie = "zcartApperance=newsletterPopup";
      });
      function getCookie(cookieName) {
        let cookie = {};
        document.cookie.split(';').forEach(function(el) {
          let [key,value] = el.split('=');
          cookie[key.trim()] = value;
        })
        return cookie[cookieName];
      }
      var a = getCookie('zcartApperance');
      if(a == "newsletterPopup"){
        $("#newsletterModal").modal('hide');
      }else{
        $("#newsletterModal").modal('show');
      }

      $('#newsletteForm').submit(function(e){
        document.cookie = "zcartApperance=newsletterPopup";
      })
    });
  </script>
@endsection