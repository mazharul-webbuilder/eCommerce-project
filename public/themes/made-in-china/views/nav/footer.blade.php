<footer class="zcart-site-footer zcart-light-bg">
  <div class="footer-bottom">
    <div class="container">
      <div class="footer-bottom-inner">
        <div class="row justify-content-center">
          <div class="col-xl-11 col-lg-12">
            <div class="row align-items-md-center">
              <div class="col-md-4">
                {{-- <div class="store-download">
                  <span>Free App:</span>
                  <a href="#" class="btn btn-store-app"><i class="fab fa-apple"></i>App Store</a>
                  <a href="#" class="btn btn-store-app btn-android"><i class="fab fa-android"></i>Google Play</a>
                </div> --}}
              </div>
              <div class="col-md-4">
                {{-- <div class="footer-messenger">
                  <span>TradeMessenger:</span><a href="#"><i class="fa fa-comments"></i></a>
                </div> --}}
              </div>
              <div class="col-md-4">
                <div class="social-links text-right">
                  <span>@lang('theme.stay_connected'):</span>
                  @if ($social_media_links = get_social_media_links())
                    <ul class="list-unstyled">
                      @foreach ($social_media_links as $social_media => $link)
                        <li>
                          <a href="{{ $link }}" target="_blank">
                            <i class="fab fa-{{ $social_media }}-square"></i>
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom-links">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-link-group">
              <div class="footer-bottom-inner-link">
                @foreach ($pages->where('position', 'copyright_area') as $page)
                  <a href="{{ get_page_url($page->slug) }}" target="_blank">{{ $page->title }}</a>
                @endforeach
                <a href="{{ url('admin/dashboard') }}">@lang('theme.nav.merchant_dashboard')</a>
              </div>
            </div>
            <div class="footer-link-group footer-copytext">
              <div class="footer-bottom-inner-link">
                <p class="copyright-text">© {{ date('Y') }} <a href="{{ url('/') }}">{{ get_platform_title() }}</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
