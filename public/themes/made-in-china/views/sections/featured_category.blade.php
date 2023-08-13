<div class="zcart-section tranding-product-area zcart-white-bg">
  <div class="row">
    <div class="col-lg-12">
      <h3>{{ trans('theme.featured_category') }}</h3>
    </div>
  </div>
  <div class="row zcart-low-gap">
    @foreach ($featured_category as $item)
      <div class="col-lg-2 col-md-3">
        <a href="{{ route('category.browse', $item->slug) }}" class="tranding-product-item">
          <div class="product-photo">
            <img src="{{ get_storage_file_url(optional($item->featureImage)->path, 'full') }} }}" alt="{{ $item->name }}">
          </div>
          <div class="product-title">{{ $item->name }}</div>
        </a>
      </div>
    @endforeach
  </div>
</div>
