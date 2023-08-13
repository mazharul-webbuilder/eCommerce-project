<a class="button product-link itemQuickView" href="{{ route('quickView.product', $item->slug) }}">
  <i class="fal fa-search-plus"></i>
</a>

@if(is_incevio_package_loaded('wishlist'))
<a href="javascript:void(0)" data-link="{{ route('wishlist.add', $item) }}" class="button add-to-wishlist">
  <i class="fal fa-heart"></i>
</a>
@endif

{{-- <a href="#" class="button">
    <i class="fal fa-repeat"></i>
</a> --}}
<a href="javascript:void(0)" data-link="{{ route('cart.addItem', $item->slug) }}" class="button button--cart sc-add-to-cart">
  <i class="fal fa-shopping-cart"></i>
  {{ trans('theme.add_to_cart') }}
</a>
