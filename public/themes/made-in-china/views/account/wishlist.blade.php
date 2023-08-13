<div class="dashboard-quick-tables">
  <div class="row">
    <div class="col-md-12">
      <div class="dashboard-table-box">
        <h2>@lang('theme.wishlist')</h2>
        <div class="dashboard-table dashboard-wishlist-table">
          @if ($wishlist->count() > 0)
            <table class="zcart-table">
              <thead>
                <tr>
                  <th width="50">&nbsp;</th>
                  <th width="60">@lang('theme.image')</th>
                  <th>@lang('theme.description')</th>
                  <th width="120px">@lang('theme.price')</th>
                  <th>@lang('theme.status')</th>
                  <th width="150">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($wishlist as $wish)
                  <tr>
                    <td>
                      {!! Form::open(['route' => ['wishlist.remove', $wish], 'method' => 'delete', 'class' => 'data-form']) !!}
                      <a class="remove-wishlist confirm" type="submit">
                        <i class="lnr lnr-cross" data-toggle="tooltip" title="@lang('theme.button.remove_from_wishlist')"></i>
                      </a>
                      {!! Form::close() !!}

                      {{-- <a href="#" class="remove-wishlist"><span class="lnr lnr-cross"></span></a> --}}
                    </td>
                    <td>
                      <a href="{{ route('show.product', $wish->inventory->slug) }}" class="cart-prod-img">
                        <img src="{{ get_product_img_src($wish->inventory, 'medium') }}" alt="{!! $wish->inventory->title !!}" title="{!! $wish->inventory->title !!}" />
                      </a>
                    </td>
                    <td class="wishlist-title">
                      <a href="{{ route('show.product', $wish->inventory->slug) }}">
                        {!! $wish->inventory->title !!}
                      </a>
                    </td>
                    <td>
                      @include('theme::partials.price', ['item' => $wish->inventory])
                    </td>
                    <td class="in-stock">
                      {{ $wish->inventory->stock_quantity > 0 ? trans('theme.in_stock') : trans('theme.out_of_stock') }}
                    </td>
                    <td class="text-center">
                      <a class="btn btn-main text-white" href="{{ route('direct.checkout', $wish->inventory->slug) }}">
                        <i class="fas fa-rocket"></i> @lang('theme.button.buy_now')
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            <div class="my-3">
              {{ $wishlist->links('theme::partials.pagination') }}
            </div><!-- /.row .pagenav-wrapper -->

          @else
            <p class="lead text-center my-4">
              @lang('theme.empty_wishlist')
              <a href="{{ url('/') }}" class="btn btn-main text-white">@lang('theme.button.shop_now')</a>
            </p>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
