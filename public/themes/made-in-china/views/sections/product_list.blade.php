<div class="recommend-product mt-20">
  <h2>{!! $title ?? trans('theme.additional_items') !!}</h2>
  <div class="recommend-product-container position-relative">
    <div id="recommend-product-slider" class="recomment-product-area">
      @foreach ($products as $item)
        <div class="product-sm-list product-sm-grid">
          <a href="{{ route('show.product', $item->slug) }}" class="product-photo">
            <img src="{{ get_inventory_img_src($item, 'medium') }}" data-name="product_image" alt="{{ $item->title }}" title="{{ $item->title }}">
          </a>

          <div class="product-list-text">
            <a href="{{ route('show.product', $item->slug) }}">
              {!! \Str::limit($item->title, 55) !!}
            </a>
            <div class="product-list-price">
              @include('theme::partials.price', ['item' => $item])
              {{-- <span class="product-list-price-num">US $3.4-3.8</span> --}}
              {{-- <span class="product-list-price-unit"> / Square Meter</span> --}}
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
