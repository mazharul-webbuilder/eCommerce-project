<div class="dashboard-quick-tables">
  <div class="row">
    <div class="col-md-12">
      <div class="dashboard-table-box">
        <div class="dashboard-table dashboard-order-table">
          @if ($orders->count() > 0)
            <div class="row justify-content-end mb-3">
              <div class="col-md-8 text-left">
                <h2>@lang('theme.your_order_history')</h2>
              </div>
              <div class="col-md-4 text-right">
                <form action="{{ url('/my/orders') }}" method="get">
                  <div class="form-inline">
                    <input type="text" class="form-control" name="q" placeholder="Search by order id...">
                    <button type="submit" class="btn btn-success d-inline"><i class="fa fa-search"></i></button>
                  </div>
                </form>
              </div>
            </div>

            <table class="zcart-table">
              <thead>
                <tr>
                  <th>@lang('theme.order_time_date')</th>
                  <th>@lang('theme.store'):</th>
                  <th>@lang('theme.order_id')</th>
                  <th>@lang('theme.status')</th>
                  <th>@lang('theme.order_amount')</th>
                  <th width="150">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                  <tr>
                    <td>{{ $order->created_at->toDayDateTimeString() }}</td>
                    <td>
                      @if ($order->shop->slug)
                        <a href="{{ route('show.store', $order->shop->slug) }}"> {{ $order->shop->name }}</a>
                      @else
                        @lang('theme.store_not_available')
                      @endif
                    </td>
                    <td>
                      <a class="btn-link" href="{{ route('order.detail', $order) }}">{{ $order->order_number }}</a>

                      @if ($order->hasPendingCancellationRequest())
                        <span class="badge badge-warning ml-3 text-uppercase">
                          {{ trans('theme.' . $order->cancellation->request_type . '_requested') }}
                        </span>
                      @elseif($order->hasClosedCancellationRequest())
                        <span class="ml-3">
                          {{ trans('theme.' . $order->cancellation->request_type) }}
                        </span>
                        {!! $order->cancellation->statusName() !!}
                      @elseif($order->isCanceled())
                        <span class="ml-3">{!! $order->orderStatus() !!}</span>
                      @endif
                      @if ($order->dispute)
                        <span class="badge badge-danger ml-3 text-uppercase">@lang('theme.disputed')</span>
                      @endif
                    </td>
                    <td class="out-stock">
                      {!! $order->orderStatus(true) . ' &nbsp; ' . $order->paymentStatusName() !!}
                    </td>
                    <td>{{ get_formated_currency($order->grand_total, true, 2) }}</td>
                    <td class="text-center">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('order.detail', $order) }}" class="btn btn-main text-white">@lang('theme.button.order_detail')</a>

                        @if ($order->dispute)
                          <a href="{{ route('dispute.open', $order) }}" class="btn btn-main text-white" data-confirm="@lang('theme.confirm_action.open_a_dispute')">@lang('theme.dispute_detail')</a>
                        @else
                          <a href="{{ route('dispute.open', $order) }}" class="confirm btn btn-main text-white" data-confirm="@lang('theme.confirm_action.open_a_dispute')">@lang('theme.button.open_dispute')</a>
                        @endif
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          @else
            <div class="clearfix space50"></div>
            <p class="lead text-center space50">
              @lang('theme.no_order_history')
              <br />
              <a href="{{ url('/') }}" class="btn btn-main mt-3">@lang('theme.button.shop_now')</a>
            </p>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
