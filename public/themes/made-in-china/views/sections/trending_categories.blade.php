<!---Zcart category wise products section-->
<div class="zcart-section zcart-category-section zcart-white-bg">
  <div class="row no-gutters">
    <div class="col-12 col-md-auto">
      <div class="left-category-banner">
        <a href="{{ route('category.browse', $category->slug) }}" class="d-block">
          <div class="category-box-img">
            <img src="{{ get_storage_file_url(optional($category->featureImage)->path, 'large') }}" alt="{{ $category->name }}">
          </div>
          <div class="category-box-info">
            <div class="category-title">{{ $category->name }}</div>
            <div class="category-button">{{ trans('theme.view_detail') }}</div>
          </div>
        </a>
      </div>
    </div>
    <div class="col">
      <div class="category-products">
        <div class="row no-gutters">

          @foreach ($category->listings()->available()->get()->take(8)
    as $product)
            <div class="col-lg-3 col-md-6">
              <a href="{{ route('show.product', $product->slug) }}" class="cat-product-item d-block">
                <div class="cat-product-title">{{ $product->title }}</div>
                <div class="cat-product-photo">
                  <img src="{{ get_storage_file_url(optional($product->image)->path, 'medium') }}" alt="{{ $product->name }}">
                </div>
              </a>
            </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
<!---End Zcart category wise products section-->
