<div class="dashboard-quick-tables">
  <div class="row">
    <div class="col-md-12">
      <div class="dashboard-table-box">
        <h2>@lang('theme.disputes')</h2>
        @if ($disputes->count() > 0)
          @foreach ($disputes as $dispute)
            <div class="dashboard-table dashboard-disputes-table mb-4">
              <table class="zcart-table disputes-header">
                <thead>
                  <tr>
                    <th width="33%">
                      <div class="order-info">
                        <span class="text-black">@lang('theme.order_id'):</span>
                        <a href="#">{{ $dispute->order->order_number }}</a><br>
                        <span class="text-black">@lang('theme.order_time_date'):</span>
                        {{ $dispute->order->created_at->toDayDateTimeString() }}
                      </div>
                    </th>
                    <th width="33%">
                      <div class="order-info">
                        <span class="text-black">@lang('theme.store'):</span>
                        @if ($dispute->shop->slug)
                          <a href="{{ route('show.store', $dispute->shop->slug) }}"> {{ $dispute->shop->name }}</a>
                        @else
                          @lang('theme.seller')
                        @endif
                        <br>
                        <span class="text-black">@lang('theme.status'):</span> <span class="label-success">{!! $dispute->order->dispute->statusName() !!}</span>
                      </div>
                    </th>
                    <th width="33%">
                      <div class="order-info">
                        <span class="text-black">@lang('theme.order_amount'): </span>{{ get_formated_currency($dispute->order->grand_total, true, 2) }}<br>
                        <a href="{{ route('order.detail', $dispute->order) }}" class="zcart-vsm-btn">@lang('theme.button.order_detail')</a>
                        <a href="{{ route('order.detail', $dispute->order) . '#message-section' }}" class="zcart-vsm-btn">@lang('theme.button.contact_seller')</a>
                      </div>
                    </th>
                  </tr>
                </thead>
              </table>

              <table class="zcart-table">
                <tbody>
                  @foreach ($dispute->order->inventories as $item)
                    <tr>
                      <td width="60">
                        <img src="{{ get_storage_file_url(optional($item->image)->path, 'small') }}" alt="{{ $item->slug }}" title="{{ $item->slug }}" />
                      </td>
                      <td>
                        <a href="{{ route('show.product', $item->slug) }}" class="product-info-title">{{ $item->pivot->item_description }}</a>

                        <div>
                          <span>{{ get_formated_currency($item->pivot->unit_price, true, 2) }} x {{ $item->pivot->quantity }}</span>
                        </div>
                        @if ($dispute->product_id == $item->product_id)
                          <span class="label label-danger">@lang('theme.disputed')</span>
                        @endif
                      </td>
                      @if ($loop->first)
                        <td width="260px" rowspan="{{ $loop->count }}">
                          @if ($dispute->order->refunds->count())
                            <a href="{{ route('order.detail', $dispute->order) . '#refund-detail-section' }}" class="btn btn-main">@lang('theme.refund_details')</a>
                          @endif

                          <a href="{{ route('dispute.open', $dispute->order) }}" class="btn btn-main btn-black text-white">{!! trans('theme.dispute_details') !!}</a>

                          @if ($dispute->isOpen())
                            {!! Form::open(['route' => ['dispute.markAsSolved', $dispute]]) !!}
                            {!! Form::button(trans('theme.mark_as_solved'), ['type' => 'submit', 'class' => 'confirm btn btn-main']) !!}
                            {!! Form::close() !!}
                          @endif
                        </td>
                      @endif
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  @if ($dispute->order->message_to_customer)
                    <tr class="message_from_seller">
                      <td colspan="3">
                        <p>
                          <strong>@lang('theme.message_from_seller'): </strong> {{ $dispute->order->message_to_customer }}
                        </p>
                      </td>
                    </tr>
                  @endif

                  @if ($dispute->order->buyer_note)
                    <tr class="order-info-footer">
                      <td colspan="3">
                        <span>@lang('theme.note'): </span> {{ $dispute->order->buyer_note }}
                      </td>
                    </tr>
                  @endif
                </tfoot>
              </table>
            </div>
          @endforeach

          <div class="my-2">
            {{ $disputes->links('theme::partials.pagination') }}
          </div><!-- /.row .pagenav-wrapper -->
        @else
          <p class="lead text-center my-4">
            @lang('theme.nothing_found')
          </p>
        @endif
      </div>
    </div>
  </div>
</div>
