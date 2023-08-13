@foreach ($products as $item)
  <div class="col-xl-3 col-md-6">
    <div class="product-item">
      <div class="prduct-item-photo position-relative">
        <img src="{{ get_product_img_src($item, 'medium') }}" alt="{{ $item->title }}" title="{{ $item->title }}">

        <a class="wishlist add-to-wishlist" href="javascript:void(0)" data-link="{{ route('wishlist.add', $item) }}"><i class="fas fa-heart"></i></a>

        {{-- <span class="video-player"><i class="far fa-play-circle"></i></span> --}}

        <div class="product-gallery-preview">
          <div class="product-thumb-gallery">
            <div class="product-thumb-preview">
              <img class="product-gallery-preview-img" src="{{ get_product_img_src($item, 'medium') }}" alt="{{ $item->title }}">
            </div>

            {{-- <div class="product-gl-thumbs">
              @foreach ($item->images as $item)
                <a href="#">
                  <img src="{{ get_product_img_src($item, 'medium') }}" data-src="{{ get_product_img_src($item, 'medium') }}" alt="Ring Die For Animal">
                </a>
              @endforeach
            </div> --}}
          </div>
        </div>
      </div>

      <div class="product-details">
        <div class="product-details-inner">
          <div class="product-details-content">
            <h2>
              <a href="{{ route('show.product', $item->slug) }}">
                {!! \Str::limit($item->title, 55) !!}
              </a>
            </h2>

            <div class="product-property">
              <p class="attr-item">
                <strong class="price">
                  @include('theme::partials.price', ['item' => $item])
{{--                  <a href="javascript:void(0)" data-link="{{ route('wishlist.add', $item) }}" class="zcart-link add-to-wishlist float-right mr-2 mb-2">--}}
{{--                    <i class="far fa-heart fa-2x"></i>--}}
{{--                  </a>--}}
                </strong>
              </p>
              {{-- <p class="attr-item"><span>Min. Order:</span> 1000 Meters </p> --}}
            </div>

            <div class="list-view-description">
              <p>
                {!! \Str::limit($item->description, 160) !!}
              </p>
            </div>
          </div>
          <div class="product-details-action">
            {{-- <a href="vendor.html" class="company-name">Liyang Weikeer Feed Machinery Manufacturing ...</a> --}}
            {{-- <div class="medal">
              <a href="#"><img src="assets/images/audited_supppliers_18.png" alt="audited"></a>
              <a href="#"><img src="assets/images/diamond_member_18.png" alt="diamond"></a>
              <a href="#"><img src="assets/images/featured_icon_18.gif" alt="featured"></a>
            </div> --}}
            <div class="company-address">
              {{-- Jiangsu, China <br>ISO9001:2015 certificate --}}
            </div>
            <div class="product-details-action">
              <a href="javascript:void(0)" data-link="{{ route('cart.addItem', $item->slug) }}" class="zcart-btn yellow-btn sc-add-to-cart">
                <i class="fas fa-shopping-bag"></i>{{ trans('theme.add_to_cart') }}
              </a>
              <a class="zcart-link" href="{{ route('direct.checkout', $item->slug) }}">
                <i class="far fa-rocket"></i>{{ trans('theme.button.buy_now') }}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
