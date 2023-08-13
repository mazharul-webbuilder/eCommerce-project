@extends('theme::layouts.main')

@section('content')
  <div class="main-container zcart-light-bg-2 product-single-container">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="product-single-gallery-area">
            <div class="row">
              <div class="col-sm-4 col-lg-3">
                <img src="{{ get_storage_file_url(optional($product->featuredImage)->path, 'medium') }}" alt="{!! $product->name !!}" title="{!! $product->name !!}" />
              </div>

              <div class="col-sm-8 col-lg-9">
                <h2>{!! $product->name !!}</h2>
                <span class="offered-product-widget-text text-muted space20">
                  @if ($product->manufacturer->slug)
                    {{ trans('theme.by') . ' ' }}
                    <a href="{{ route('show.brand', $product->manufacturer->slug) }}" class="product-info-seller-name">{!! $product->manufacturer->name !!}</a>
                  @endif
                </span>
                <span class="offered-product-widget-text">
                  <span class="text-muted">{{ $product->gtin_type }}:</span> {{ $product->gtin }}
                </span>
              </div>
            </div>
          </div>

          <div class="zcart-card mt-20">
            <div class="multiple-sellers-table">
              <table class="zcart-table">
                <thead>
                  <tr>
                    <th width="12%">@lang('theme.price')</th>
                    <th width="23%">@lang('theme.condition')</th>
                    <th>@lang('theme.attributes')</th>
                    <th>@lang('theme.seller')</th>
                    <th width="15%">@lang('theme.options')</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($product->inventories->sortBy(function ($item) {
          return $item->current_sale_price();
      })
      as $offer)
                    <tr>
                      <td>
                        <div class="product-price">
                          @if ($offer->hasOffer())
                            <del>{!! get_formated_price($offer->sale_price, config('system_settings.decimals', 2)) !!}</del>
                          @endif

                          <span>
                            {!! get_formated_price($offer->current_sale_price(), config('system_settings.decimals', 2)) !!}
                          </span>
                        </div>
                      </td>
                      <td>
                        <div class="product-condition"><strong>{{ $offer->condition }}</strong></div>
                        <p class="small">
                          {{ $offer->condition_note }}
                        </p>
                      </td>
                      <td>
                        <div class="product-title">
                          <a href="{{ route('show.product', $offer->slug) }}" class="product-attributes">{{ $offer->title }}</a>
                        </div>
                        <ul class="attributes list-unstyled">
                          @foreach ($offer->attributeValues as $attributeValue)
                            <li class="small">
                              <span class="text-muted small">{{ $attributeValue->attribute->name }}: </span>
                              {{ $attributeValue->value }}
                            </li>
                          @endforeach
                        </ul>
                      </td>
                      <td>
                        <img src="{{ get_storage_file_url(optional($offer->shop->image)->path, 'thumbnail') }}" class="seller-info-logo img-sm img-circle" alt="{{ trans('theme.logo') }}">

                        <a href="{{ route('show.store', $offer->shop->slug) }}" class="vendor-shop">
                          {!! $offer->shop->getQualifiedName() !!}
                        </a>

                        @include('theme::partials.rating-star', ['ratings' => $offer->shop->feedbacks->avg('rating'), 'count' => $offer->shop->feedbacks->count()])
                      </td>
                      <td>
                        <div class="multiple-sellers-option">
                          {{-- <a href="{{ route('quickView.product', $offer->slug) }}" class="btn btn-main btn-black itemQuickView">@lang('theme.button.quick_view')</a> --}}
                          <a data-link="{{ route('cart.addItem', $offer->slug) }}" class="btn btn-main sc-add-to-cart">@lang('theme.button.add_to_cart')</a>
                          <a href="{{ route('direct.checkout', $offer->slug) }}" class="btn btn-main btn-yellow">@lang('theme.button.buy_now')</a>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
