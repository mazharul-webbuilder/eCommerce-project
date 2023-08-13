<strong>
  <span class="product-info-price-new">{!! get_formated_price($item->current_sale_price(), config('system_settings.decimals', 2)) !!}</span>
</strong>

<span class="old-price small" style="display: {{ $item->hasOffer() ? '' : 'none' }}"><del>{!! get_formated_price($item->sale_price, config('system_settings.decimals', 2)) !!}</del></span>
