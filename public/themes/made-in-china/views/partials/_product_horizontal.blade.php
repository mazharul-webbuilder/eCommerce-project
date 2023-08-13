{{--@foreach ($products as $item)--}}
{{--  <div class="recent__items-box box">--}}
{{--    <a href="{{ route('show.product', $item->slug) }}">--}}
{{--      <div class="recent__items-img box-img">--}}
{{--        <img src="{{ get_inventory_img_src($item, 'medium') }}" data-name="product_image" alt="{{ $item->title }}" title="{{ $item->title }}">--}}
{{--      </div>--}}
{{--    </a>--}}

{{--    @if (empty($ratings))--}}
{{--      <div class="recent__items-ratting box-ratting">--}}
{{--        @include('theme::partials._ratings', ['ratings' => $item->ratings])--}}
{{--        --}}{{-- @include('theme::partials._ratings', ['ratings' => $item->feedbacks->avg('rating')]) --}}
{{--      </div>--}}
{{--    @endif--}}

{{--    @if (empty($title))--}}
{{--      <div class="recent__items-title box-title">--}}
{{--        <a href="{{ route('show.product', $item->slug) }}">{!! \Str::limit($item->title, 55) !!}</a>--}}
{{--      </div>--}}
{{--    @endif--}}

{{--    @if (empty($pricing))--}}
{{--      <div class="recent__items-price box-price">--}}
{{--        @include('theme::partials._home_pricing')--}}
{{--      </div>--}}
{{--    @endif--}}

{{--    @if (empty($hover))--}}
{{--      <div class="feature__items-action box-action">--}}
{{--        @include('theme::partials._btn_quick_view')--}}
{{--        @include('theme::partials._btn_wishlist')--}}
{{--        @include('theme::partials._btn_add_to_cart')--}}
{{--      </div>--}}
{{--    @endif--}}
{{--  </div>--}}
{{--@endforeach--}}
<div class="recommend-product mt-20">
    <div class="recommend-product-container position-relative">
        <div id="recommend-product-slider2" class="recomment-product-area">
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
