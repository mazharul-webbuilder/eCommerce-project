@if(count($featured_brands))
    <div class="zcart-section zcart-sourcing-solution">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ trans('theme.featured_brand') }}</h2>
            </div>
        </div>
        <div class="row zcart-low-gap">
          @foreach($featured_brands as $brand)
            <div class="col-md-6 col-lg-4">
                <div class="source-sol-single-item">
                    <div class="sourcing-solution-item-banner position-relative">
                        <div class="sourcing-solution-bg">
                            <img src="{{ get_storage_file_url(optional($brand->featureImage)->path, 'full') }}" alt="{{ $brand->name }}">
                            <div class="solution-mask"></div>
                        </div>
                        <a href="{{ route('show.brand', $brand->slug) }}" class="sourcing-banner-content d-block" target="_blank">
                            <h3>{!! \Str::limit($brand->name, 30) !!}</h3>
                            <p>{!! \Str::limit($brand->description, 99) !!}</p>
                            <div class="sourcing-arrow">
                                <span class="lnr lnr-arrow-right"></span>
                            </div>
                        </a>
                    </div>

                    <div class="sourcing-solution-inner-products">
                        <div class="row no-gutters">
                          @foreach($brand->inventories->take(3) as $item)
                            <div class="col-md-4">
                                <a href="{{ route('show.product', $item->slug) }}" class="source-prod-item d-block">
                                    <div class="source-prod-img">
                                      <img src="{{ get_inventory_img_src($item, 'medium') }}" data-name="product_image" alt="{{ $item->title }}" title="{{ $item->title }}">
                                    </div>
                                    <div class="prod-title">{!! \Str::limit($item->title, 25) !!}</div>
                                </a>
                            </div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
@endif