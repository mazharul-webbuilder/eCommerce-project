<div class="product-archive-filter">
  {{-- <div class="zcart-filter-top d-flex justify-content-between">
    <ul class="zcart-tab list-unstyled">
      <li><a href="javascript:void(0)">Product List</a></li>
    </ul>
    <a class="zcart-link" href="javascript:void(0)">View Related <strong>Feed Processing Machinery</strong> Suppliers<span class="lnr lnr-chevron-right"></span></a>
  </div> --}}

  <div class="zcart-product-filter">
    <div class="search-result-count">
      {{ trans('app.search_result_found', ['count' => $products->count()]) }}
      {{-- Total <span class="text-highlight">27,936</span> products in <span class="text-highlight">Feed Processing Machinery</span> category from about 2,793 manufacturers & suppliers --}}
    </div>

    {{-- <div class="zcart-search-tabs">
      @lang('theme.sort_by'):
      <select name="sort_by" class="selectBoxIt" id="filter_opt_sort">
        <option value="best_match">@lang('theme.best_match')</option>
        <option value="newest" {{ Request::get('sort_by') == 'newest' ? 'selected' : '' }}>@lang('theme.newest')</option>
        <option value="oldest" {{ Request::get('sort_by') == 'oldest' ? 'selected' : '' }}>@lang('theme.oldest')</option>
        <option value="price_acs" {{ Request::get('sort_by') == 'price_acs' ? 'selected' : '' }}>@lang('theme.price'): @lang('theme.low_to_high')</option>
        <option value="price_desc" {{ Request::get('sort_by') == 'price_desc' ? 'selected' : '' }}>@lang('theme.price'): @lang('theme.high_to_low')</option>
      </select>

      <a href="javascript:void(0)" class="zcart-btn">{{ trans('theme.newest') }}</a>
      <a href="javascript:void(0)" class="zcart-btn">{{ trans('theme.oldest') }}</a> 
    </div> --}}

    <div class="zcart-filter-check d-md-flex align-items-center">
      @lang('theme.sort_by'):
      <select name="sort_by" class="mx-3" id="filter_opt_sort">
        <option value="best_match">@lang('theme.best_match')</option>
        <option value="newest" {{ Request::get('sort_by') == 'newest' ? 'selected' : '' }}>@lang('theme.newest')</option>
        <option value="oldest" {{ Request::get('sort_by') == 'oldest' ? 'selected' : '' }}>@lang('theme.oldest')</option>
        <option value="price_acs" {{ Request::get('sort_by') == 'price_acs' ? 'selected' : '' }}>@lang('theme.price'): @lang('theme.low_to_high')</option>
        <option value="price_desc" {{ Request::get('sort_by') == 'price_desc' ? 'selected' : '' }}>@lang('theme.price'): @lang('theme.high_to_low')</option>
      </select>

      <div class="zcart-filter-fields ml-2">
        <a href="javascript:void(0)" class="form-check form-check-inline">
          <input name="free_shipping" id="freeShippingCheckbox" class="form-check-input filter_opt_checkbox" type="checkbox" {{ Request::has('free_shipping') ? 'checked' : '' }}>
          <label class="form-check-label" for="freeShippingCheckbox">@lang('theme.free_shipping') <span class="small">({{ $products->where('free_shipping', 1)->count() }})</span></label>
        </a>
        <a href="javascript:void(0)" class="form-check form-check-inline">
          <input name="has_offers" id="hasOffersCheckbox" class="form-check-input filter_opt_checkbox" type="checkbox" {{ Request::has('has_offers') ? 'checked' : '' }} />
          <label class="form-check-label" for="hasOffersCheckbox">
            @lang('theme.has_offers')
            <span class="small">({{ $products->where('offer_price', '>', 0)->where('offer_start', '<', \Carbon\Carbon::now())->where('offer_end', '>', \Carbon\Carbon::now())->count() }})</span>
          </label>
        </a>
        <a href="javascript:void(0)" class="form-check form-check-inline">
          <input name="new_arrivals" id="newArrivalsCheckbox" class="form-check-input filter_opt_checkbox" type="checkbox" {{ Request::has('new_arrivals') ? 'checked' : '' }} />
          <label class="form-check-label" for="newArrivalsCheckbox">
            @lang('theme.new_arrivals')
            <span class="small">
              ({{ $products->where('created_at', '>', \Carbon\Carbon::now()->subDays(config('system.filter.new_arraival', 7)))->count() }})
            </span>
          </label>
        </a>
      </div>

      <div class="grid-list-view d-inline-block">
        <a href="javascript:void(0)" class="active" data-view="zcart-grid-view"><i class="fas fa-th-large"></i></a>
        <a href="javascript:void(0)" data-view="zcart-list-view"><i class="fas fa-th-list"></i></a>
      </div>
    </div>

    {{-- <div class="zcart-filter-check d-flex align-items-center zcart-filter-highlight"> --}}
    {{-- <span class="mr-3">
        @lang('theme.sort_by'):
        <select name="sort_by" class="selectBoxIt" id="filter_opt_sort">
          <option value="best_match">@lang('theme.best_match')</option>
          <option value="newest" {{ Request::get('sort_by') == 'newest' ? 'selected' : '' }}>@lang('theme.newest')</option>
          <option value="oldest" {{ Request::get('sort_by') == 'oldest' ? 'selected' : '' }}>@lang('theme.oldest')</option>
          <option value="price_acs" {{ Request::get('sort_by') == 'price_acs' ? 'selected' : '' }}>@lang('theme.price'): @lang('theme.low_to_high')</option>
          <option value="price_desc" {{ Request::get('sort_by') == 'price_desc' ? 'selected' : '' }}>@lang('theme.price'): @lang('theme.high_to_low')</option>
        </select>
      </span> --}}

    {{-- <div class="checkbox mr-3">
         <label>
          <input name="free_shipping" class="i-check filter_opt_checkbox" type="checkbox" {{ Request::has('free_shipping') ? 'checked' : '' }}> @lang('theme.free_shipping') <span class="small">({{ $products->where('free_shipping', 1)->count() }})</span>
        </label> 
      </div>
      <div class="checkbox mr-3">
        <label>
          <input name="has_offers" class="i-check filter_opt_checkbox" type="checkbox" {{ Request::has('has_offers') ? 'checked' : '' }} />
          @lang('theme.has_offers')
          <span class="small">({{ $products->where('offer_price', '>', 0)->where('offer_start', '<', \Carbon\Carbon::now())->where('offer_end', '>', \Carbon\Carbon::now())->count() }})</span>
        </label>
      </div>
      <div class="checkbox mr-3">
        <label>
          <input name="new_arrivals" class="i-check filter_opt_checkbox" type="checkbox" {{ Request::has('new_arrivals') ? 'checked' : '' }} />
          @lang('theme.new_arrivals')
          <span class="small">
            ({{ $products->where('created_at', '>', \Carbon\Carbon::now()->subDays(config('system.filter.new_arraival', 7)))->count() }})
          </span>
        </label>
      </div> --}}

    {{-- <div class="filter-title">Trading Type:</div> --}}
    {{-- <div class="zcart-filter-fields">
        <div class="grid-list-view d-inline-block">
          <a href="javascript:void(0)" class="active" data-view="zcart-grid-view"><i class="fas fa-th-large"></i></a>
          <a href="javascript:void(0)" data-view="zcart-list-view"><i class="fas fa-th-list"></i></a>
        </div>
      </div> --}}
    {{-- </div> --}}
  </div>
</div>
