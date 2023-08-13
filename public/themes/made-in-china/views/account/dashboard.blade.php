<div class="user-dashboard-content-card">
  <div class="dashboard-user-top d-flex justify-content-between align-items-center">
    <div class="user-left-area d-flex align-items-center">
      <div class="user-photo">
        <img src="{{ get_storage_file_url(optional($dashboard->image)->path, 'thumbnail') }}" class="" alt=" {{ trans('theme.avatar') }}" />
      </div>
      <div class="user-info">
        <h2>
          {{ $dashboard->getName() }}
        </h2>
        <p>
          <i class="fas fa-clock-o"></i>
          {{ trans('theme.member_since') }}: <em>{{ $dashboard->created_at->diffForHumans() }}</em>
        </p>
        <a href="{{ route('account', 'account') }}" class="zcart-vsm-btn"><i class="fas fa-edit" data-toggle="tooltip" data-title="{{ trans('theme.edit_account') }}"></i></a>
      </div>
    </div>
    <div class="user-right-area">
      <a href="{{ url('/') }}" class="btn btn-main">
        <i class="fas fa-shopping-cart"></i> @lang('theme.button.continue_shopping')
      </a>

      @unless($dashboard->shippingAddress)
        <a href="{{ route('account', 'account') }}" class="btn btn-main btn-black">
          <i class="fas fa-truck"></i> @lang('theme.add_shipping_address')
        </a>
      @endunless
    </div>
  </div>
</div>

<div class="user-dashboard-cards mt-20">
  <div class="row">
    <div class="col-xl col-md-4 pr-0">
      <a href="{{ route('account', 'orders') }}" class="dashboard-icon-card text-center">
        <div class="card-icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <h4 class="card-count">@lang('theme.orders'): <span>{{ $dashboard->orders_count }}</span></h4>
      </a>
    </div>
    <div class="col-xl col-md-4 px-0">
      <a href="{{ route('account', 'wishlist') }}" class="dashboard-icon-card text-center">
        <div class="card-icon">
          <i class="fas fa-heart"></i>
        </div>
        <h4 class="card-count">@lang('theme.wishlist'): <span>{{ $dashboard->wishlists_count }}</span></h4>
      </a>
    </div>
    <div class="col-xl col-md-4 px-0">
      <a href="{{ route('account', 'messages') }}" class="dashboard-icon-card text-center">
        <div class="card-icon">
          <i class="fas fa-envelope-open-text"></i>
        </div>
        <h4 class="card-count">@lang('theme.unread_messages'): <span>{{ $dashboard->messages_count }}</span></h4>
      </a>
    </div>
    <div class="col-xl col-md-4 px-0">
      <a href="{{ route('account', 'coupons') }}" class="dashboard-icon-card text-center">
        <div class="card-icon">
          <i class="fas fa-tags"></i>
        </div>
        <h4 class="card-count">@lang('theme.coupons'): <span>{{ $dashboard->coupons_count }}</span></h4>
      </a>
    </div>
    <div class="col-xl col-md-4 pl-0">
      <a href="{{ route('account', 'disputes') }}" class="dashboard-icon-card text-center">
        <div class="card-icon">
          <i class="fas fa-envelope"></i>
        </div>
        <h4 class="card-count">@lang('theme.disputes'): <span>{{ $dashboard->disputes_count }}</span></h4>
      </a>
    </div>
  </div>
</div>

<div class="dashboard-quick-tables mt-20">
  <div class="row">
    <div class="col-xl-7 col-lg-6 col-md-12 mb-4 mb-lg-0">
      <div class="dashboard-table-box">
        <h2>{{ trans('theme.orders') }}</h2>
        <div class="dashboard-table dashboard-order-table">
          <table class="zcart-table">
            <thead>
              <tr>
                <th>{{ trans('theme.date') }}</th>
                <th>
                  {{ trans('theme.orders') }}
                  <i class="fas fa-question-circle pull-right" data-toggle="tooltip" data-title="{{ trans('theme.item_count') }}"></i>
                </th>
                <th>{{ trans('theme.amount') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dashboard->orders as $order)
                <tr>
                  <td>{!! $order->created_at->format('M j') !!}</td>
                  <td>
                    <img src="{{ get_storage_file_url(optional($order->shop->logoImage)->path, 'tiny_thumb') }}" class="img-circle" alt="{{ $order->shop->name }}" data-toggle="tooltip" data-title="{{ $order->shop->name }}">
                    <a class="order-number" href="{{ route('order.detail', $order) }}">
                      {!! $order->order_number !!}
                    </a>
                    <small class="indent10">{!! $order->orderStatus() !!}</small>
                    <span class="label label-outline pull-right"> {{ $order->item_count }} </span>
                  </td>
                  <td>{!! get_formated_price($order->grand_total, 2) !!}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-xl-5 col-lg-6 col-md-12">
      <div class="dashboard-table-box">
        <h2>{{ trans('theme.wishlist') }}</h2>
        <div class="dashboard-table dashboard-wishlist-table">
          <table class="zcart-table">
            <thead>
              <tr>
                <th>{{ trans('theme.wishlist') }}</th>
                <th width="120px"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dashboard->wishlists as $wish)
                @if ($wish->inventory)
                  <tr>
                    <td>
                      <img class="" src=" {{ get_product_img_src($wish->inventory, 'tiny') }}" alt="{!! $wish->inventory->title !!}" title="{!! $wish->inventory->title !!}" />

                      <a class="product-link" href="{{ route('show.product', $wish->inventory->slug) }}">{!! \Illuminate\Support\Str::limit($wish->inventory->title, 35) !!}</a>
                    </td>
                    <td>
                      <a class="btn btn-main text-white " href="{{ route('direct.checkout', $wish->inventory->slug) }}">
                        <i class="fas fa-rocket"></i> @lang('theme.button.buy_now')
                      </a>
                    </td>
                  </tr>
                @elseif($wish->product)
                  <tr>
                    <td>
                      <img src="{{ get_storage_file_url(optional($wish->product->featuredImage)->path, 'tiny') }}" alt="{!! $wish->product->name !!}" title="{!! $wish->product->name !!}" />

                      <a class="product-link" href="{{ route('show.offers', $wish->product->slug) }}" class="btn btn-sm btn-link">{!! \Illuminate\Support\Str::limit($wish->product->name, 35) !!}</a>
                    </td>
                    <td>
                      <a class="btn btn-main " href="{{ route('show.offers', $wish->product->slug) }}">
                        @lang('theme.view_more_offers', ['count' => $wish->product->inventories_count])
                      </a>
                    </td>
                  </tr>
                @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
