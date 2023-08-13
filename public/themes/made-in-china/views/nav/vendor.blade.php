<div id="stickyVendorMenu" class="vendor-menu-area">
  <div class="vmobile-menu-remove d-block d-lg-none"><span class="lnr lnr-cross"></span></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="vendor-menu list-unstyled">
          <li class="active">
            <a href="{{ route('show.store', $shop->slug) }}">
              {{ trans('theme.nav.home') }}
            </a>
          </li>

          {{-- <li>
            <a href="{{ route('show.store', $shop->slug) }}">
              {{ trans('theme.products') }}
            </a>
          </li> --}}

          <li>
            <a href="#contact-seller">
              {{ trans('theme.contact_us') }}
            </a>
          </li>
          <li>
            <a href="{{ route('shop.products',$shop->slug) }}">
              {{ trans('theme.products') }}
            </a>
          </li>
          <li>
            <a href="#latest-reviews">
              {{ trans('theme.latest_reviews') }}
            </a>
          </li>
          {{-- <li class="zcart-has-submenu">
            <a href="vendor-products.html"><span class="lnr lnr-list"></span>Products</a>
            <ul class="list-unstyled zcart-submenu">
              <li><a href="#">Wheel Loader</a></li>
              <li><a href="#">Combine Harvester</a></li>
              <li><a href="#">Farm Management Machinery</a></li>
              <li><a href="#">Sugarcane Harvester</a></li>
              <li><a href="#">Wheel Loader</a></li>
              <li><a href="#">Combine Harvester</a></li>
              <li><a href="#">Farm Management Machinery</a></li>
              <li><a href="#">Sugarcane Harvester</a></li>
            </ul>
          </li> --}}
        </ul>
      </div>
    </div>
  </div>
</div>
