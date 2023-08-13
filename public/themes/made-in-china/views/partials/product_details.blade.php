<div class="product-single-gallery-area">
  <div class="row">
    <div class="col-xl-6 col-lg-12">
      <div class="single-product-gallery">
        <div class="single-gl-preview">
          @php
            $pImg = get_product_img_src($item, 'full');
          @endphp
          <a href="{{ $pImg }}" id="{{ $zoomID ?? 'jqzoom' }}" data-rel="gal-1">
            <img id="single-gl-preview-img" src="{{ $pImg }}" data-name="product_image" alt="{{ $item->title }}">
          </a>

          <div class="gallery-zoom-preview"></div>
        </div>
        <div class="single-gl-thumbs-container position-relative">
          <div id="singleGlThumbSlider" class="single-gl-thumb-slider">
            @php
              $item_images = $item->images->count() ? $item->images : $item->product->images;
              
              if (isset($variants)) {
                  // Remove images of current items from the variants imgs
                  $other_images = $variants
                      ->pluck('images')
                      ->flatten(1)
                      ->filter(function ($value, $key) use ($item) {
                          return $value->imageable_id != $item->id;
                      });
              
                  $item_images = $item_images->concat($other_images);
              }
            @endphp

            @foreach ($item_images as $img)
              @continue(! $img->path)

              @php
                $sImg = get_storage_file_url($img->path, 'full');
              @endphp

              <a href="javascript:void(0)">
                <img class="small-preview" src="{{ get_storage_file_url($img->path, 'mini') }}" data-src="{{ $sImg }}" alt="Thumb" title="{{ $item->title }}" />
              </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-6 col-lg-12">
      <div class="single-product-top-overview">
        <h1>{!! $item->title !!}</h1>
        <div class="row">
          <div class="col-md-6">
            <a href="javascript:void(0)" data-link="{{ route('wishlist.add', $item) }}" class="zcart-link zcart-latest-link add-to-wishlist">
              <i class="fa fa-heart"></i>
              {{ trans('theme.button.add_to_wishlist') }}
            </a>
          </div>

          <div class="col-md-6 text-right">
            <a href="#contact_seller_box" class="zcart-link">
              <i class="fa fa-comments"></i> @lang('theme.button.contact_seller')
            </a>
          </div>
        </div>

        <div class="single-product-price-property">
          <table class="single-product-info-tbl product-price-tbl">
            <tbody>
              {{-- <tr>
                <th colspan="2">Purchase Qty. / Reference FOB Price</th>
              </tr>
              <tr>
                <td width="170">100-1,439 <span class="unit">Square Meters</span></td>
                <td><strong class="red">US $3.29</strong></td>
              </tr>
              <tr>
                <td width="170">1,440-14,399 <span class="unit">Square Meters</span></td>
                <td><strong class="red">US $3.22</strong></td>
              </tr> --}}

              <tr>
                <td width="170">
                  <span class="unit">{{ trans('theme.unit_price') }}</span>
                </td>
                <td>
                  <strong class="red">
                    @include('theme::partials.price', ['item' => $item])
                  </strong>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="single-product-info-tbl product-config-table">
            <tbody class="select-box-wrapper">
              @foreach ($attributes as $attribute)
                <tr class="product-attribute">
                  <th width="170">{{ $attribute->name }}:</th>
                  <td>
                    <select class="product-attribute-selector {{ $attribute->css_classes }}" id="attribute-{{ $attribute->id }}" required="required">
                      @foreach ($attribute->attributeValues as $option)
                        <option value="{{ $option->id }}" data-color="{{ $option->color ?? $option->value }}" {{ in_array($option->id, $item_attrs) ? 'selected' : '' }}>{{ $option->value }}</option>
                      @endforeach
                    </select>
                    <div class="help-block with-errors"></div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

          <hr />

          <table id="calculation-section" class="single-product-info-tbl product-config-table">
            <tbody>
              <tr>
                <th width="170" data-options="{{ $shipping_options }}" id="shipping-options">
                  @lang('theme.shipping'):
                  {{ Form::hidden('shipping_zone_id', isset($shipping_zone->id) ? $shipping_zone->id : null, ['id' => 'shipping-zone-id']) }}
                  {{ Form::hidden('shipping_rate_id', null, ['id' => 'shipping-rate-id']) }}
                  {{ Form::hidden('shipto_country_id', $shipping_country->id, ['id' => 'shipto-country-id']) }}
                  {{ Form::hidden('shipto_state_id', optional($shipping_state)->id, ['id' => 'shipto-state-id']) }}
                </th>
                <td>
                  <span id="summary-shipping-cost" data-value="0"></span>
                  <div id="product-info-shipping-detail">
                    <span>{{ strtolower(trans('theme.to')) }}

                      <a id="shipTo" class="ship_to" data-modal="shipToModal" data-country="{{ $shipping_country->id }}" data-state="{{ optional($shipping_state)->id }}" href="javascript:void(0)">
                        {{ $shipping_state ? $shipping_state->name : $geoip->country }}
                      </a>

                      {{-- <select id="width_tmp_select">
                        <option id="width_tmp_option"></option>
                      </select> --}}
                    </span>

                    <span class="dynamic-shipping-rates" data-toggle="popover" title="{{ trans('theme.shipping_options') }}">
                      <span id="summary-shipping-carrier"></span>
                      <small><i class="fa fa-caret-down"></i></small>
                    </span>
                  </div>
                  <small class="text-muted" id="delivery-time"></small>
                </td>
              </tr>
              <tr>
                <th width="170">
                  <span class="info-label qtt-label">@lang('theme.quantity'):</span>
                </th>
                <td>
                  <div class="product-qty-wrapper">
                    <div class="product-info-qty-item">
                      <button class="product-info-qty product-info-qty-minus">-</button>
                      <input class="product-info-qty product-info-qty-input" data-name="product_quantity" data-min="{{ $item->min_order_quantity }}" data-max="{{ $item->stock_quantity }}" type="text" value="{{ $item->min_order_quantity }}">
                      <button class="product-info-qty product-info-qty-plus">+</button>
                    </div>
                    <span class="available-qty-count">@lang('theme.stock_count', ['count' => $item->stock_quantity])</span>
                  </div>
                </td>
              </tr>
              <tr id="order-total-row">
                <th width="170">
                  <span class="info-label">@lang('theme.total'):</span>
                </th>
                <td>
                  <span id="summary-total" class="text-muted">{{ trans('theme.notify.will_calculated_on_select') }}</span>
                </td>
              </tr>
              <tr>
                <th width="170"></th>
                <td></td>
              </tr>
            </tbody>
          </table>

          <a data-link="{{ route('cart.addItem', $item->slug) }}" class="btn btn-main mb-2 col-5 sc-add-to-cart">
            <i class="fas fa-shopping-bag"></i> @lang('theme.button.add_to_cart')
          </a>

          <a href="{{ route('direct.checkout', $item->slug) }}" class="btn btn-main mb-2 col-5" id="buy-now-btn"><i class="fas fa-rocket"></i> @lang('theme.button.buy_now')</a>

          @if ($item->product->inventories_count > 1)
            <a href="{{ route('show.offers', $item->product->slug) }}" class="d-none d-sm-block ml-2">
              @lang('theme.view_more_offers', ['count' => $item->product->inventories_count])
            </a>
          @endif
        </div>

        {{-- <div class="product-single-bottom-actions d-flex justify-content-between">
          <a class="zcart-link" href="#"><span class="lnr lnr-cart"></span>Inquiry Basket</a>
          <a class="zcart-link" href="#"><span class="lnr lnr-inbox"></span>Request Sample</a>
          <a class="zcart-link" href="#"><span class="lnr lnr-pencil"></span>Customized Request</a>
        </div> --}}
      </div>
    </div>
  </div>
</div>
