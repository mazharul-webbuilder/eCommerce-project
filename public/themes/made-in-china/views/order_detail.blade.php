@extends('theme::layouts.main')

@section('content')
  <div class="dashboard-container zcart-white-bg">
    <div class="zcart-user-dashboard-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-2 col-md-3">
            @include('theme::nav.dashboard',['tab' => 'orders'])
          </div>

          <div class="col-xl-10 col-md-9">
            <div class="dashboard-order-details dashboard-quick-tables">
              <div class="row">
                <div class="col-md-9">
                  <div class="mb-3">
                    <a href="{{ route('order.again', $order) }}" class="btn btn-default">
                      <i class="fas fa-shopping-cart"></i> @lang('theme.order_again')
                    </a>

                    @unless($order->isCanceled())
                      <a href="{{ route('order.invoice', $order) }}" class="btn btn-default">
                        <i class="fas fa-file"></i> @lang('theme.invoice')
                      </a>

                      @if ($order->canBeCanceled())

                        {!! Form::model($order, ['method' => 'PUT', 'route' => ['order.cancel', $order]]) !!}
                        {!! Form::button('<i class="fas fa-times-circle-o"></i> ' . trans('theme.cancel_order'), ['type' => 'submit', 'class' => 'confirm btn btn-default', 'data-confirm' => trans('theme.confirm_action.cant_undo')]) !!}
                        {!! Form::close() !!}

                      @elseif($order->canRequestCancellation())

                        <a href="{{ route('cancellation.form', ['order' => $order, 'action' => 'cancel']) }}" class="modalAction btn btn-default"><i class="fas fa-times"></i> @lang('theme.cancel_items')</a>

                      @endif

                      @if ($order->canTrack())
                        <a href="{{ route('order.track', $order) }}" class="btn btn-black">
                          <i class="fas fa-map-marker"></i> @lang('theme.button.track_order')
                        </a>
                      @endif

                      @if ($order->canEvaluate())
                        <a href="{{ route('order.feedback', $order) }}" class="btn btn-primary">
                          @lang('theme.button.give_feedback')
                        </a>
                      @endif

                      @if ($order->isFulfilled())
                        @if ($order->canRequestReturn())
                          <a href="{{ route('cancellation.form', ['order' => $order, 'action' => 'return']) }}" class="modalAction btn btn-default "><i class="fas fa-undo"></i> @lang('theme.return_items')</a>
                        @endif

                        @unless($order->goods_received)
                          {!! Form::model($order, ['method' => 'PUT', 'route' => ['goods.received', $order]]) !!}
                          {!! Form::button(trans('theme.button.confirm_goods_received'), ['type' => 'submit', 'class' => 'confirm btn btn-primary ', 'data-confirm' => trans('theme.confirm_action.goods_received')]) !!}
                          {!! Form::close() !!}
                        @endunless
                      @endif

                    @endunless

                    @if ($order->dispute)
                      <a href="{{ route('dispute.open', $order) }}" class="btn btn-link" data-confirm="@lang('theme.confirm_action.open_a_dispute')">@lang('theme.dispute_detail')</a>
                    @else
                      <a href="{{ route('dispute.open', $order) }}" class="confirm btn btn-link" data-confirm="@lang('theme.confirm_action.open_a_dispute')">@lang('theme.button.open_dispute')</a>
                    @endif
                  </div>

                  <div class="dashboard-table-box">
                    <h2>
                      <span class="text-red">@lang('theme.order_id'):</span>
                      {{ $order->order_number }}

                      @if ($order->hasPendingCancellationRequest())
                        <span class="label label-warning ml-2 text-uppercase">
                          {{ trans('theme.' . $order->cancellation->request_type . '_requested') }}
                        </span>
                      @elseif($order->hasClosedCancellationRequest())
                        <span class="ml-2">
                          {{ trans('theme.' . $order->cancellation->request_type) }}
                        </span>
                        {!! $order->cancellation->statusName() !!}
                      @elseif($order->isCanceled())
                        <span class="ml-2">{!! $order->orderStatus() !!}</span>
                      @endif
                      @if ($order->dispute)
                        <span class="label label-danger ml-2 text-uppercase">@lang('theme.disputed')</span>
                      @endif
                    </h2>
                    <div class="dashboard-table dashboard-order-product-table">
                      <table class="zcart-table">
                        <thead>
                          <tr>
                            <th width="60">@lang('theme.image')</th>
                            <th>@lang('theme.description')</th>
                            <th>@lang('theme.total')</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($order->inventories as $item)
                            <tr>
                              <td>
                                <a href="{{ route('show.product', $item->slug) }}" class="cart-prod-img">
                                  <img src="{{ get_storage_file_url(optional($item->image)->path, 'small') }}" alt="{{ $item->slug }}" title="{{ $item->slug }}" />
                                </a>
                              </td>
                              <td>
                                <a href="{{ route('show.product', $item->slug) }}" class="product-info-title" style="display: inline;">{{ $item->pivot->item_description }}</a>

                                @if ($order->cancellation && $order->cancellation->isItemInRequest($item->id))
                                  <span class="label label-danger indent10">
                                    {{ trans('theme.' . $order->cancellation->request_type . '_requested') }}
                                  </span>
                                @endif
                                <br />
                                {{ get_formated_currency($item->pivot->unit_price, true, 2) }} x {{ $item->pivot->quantity }}
                              </td>
                              <td>{{ get_formated_currency($item->pivot->unit_price * $item->pivot->quantity, true, 2) }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 pl-0">
                  <div class="zcart-summary">
                    <h2>{{ trans('theme.cart_summary') }}</h2>
                    <div class="cart-summary-box">
                      <table class="zcart-table">
                        <tbody>
                          <tr>
                            <th width="50%">{{ trans('theme.subtotal') }}</th>
                            <td>
                              <span class="cart-price">
                                {{ get_formated_currency($order->total, true, 2) }}
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <th width="50%">
                              <div class="cart-hoverable">
                                <span>{{ trans('theme.shipping') }}</span>
                                {{-- <span class="summery-label">Fast Shipping</span> --}}
                              </div>
                            </th>
                            <td><span class="cart-price">{{ get_formated_currency($order->shipping + $order->handling, true, 2) }}</span></td>
                          </tr>
                          <tr>
                            <th width="50%">
                              <div class="cart-hoverable">
                                <span>{{ trans('theme.packaging') }}</span>
                                {{-- <span class="summery-label">Free Basic Packaging</span> --}}
                              </div>

                            </th>
                            <td><span class="cart-price">{{ get_formated_currency($order->packaging, true, 2) }}</span></td>
                          </tr>
                          <tr>
                            <th width="50%">{{ trans('theme.taxes') }}</th>
                            <td>
                              <span class="cart-price">
                                {{ get_formated_currency($order->taxes, true, 2) }}
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <th width="50%">
                              <div class="cart-hoverable">
                                <span>{{ trans('theme.discount') }}</span>
                                {{-- <span class="summery-label">Fast Shipping</span> --}}
                              </div>
                            </th>
                            <td><span class="cart-price">{{ get_formated_currency($order->discount, true, 2) }}</span></td>
                          </tr>
                          <tr>
                            <th width="50%">{{ trans('theme.total') }}</th>
                            <td><span class="cart-price">{{ get_formated_currency($order->grand_total, true, 2) }}</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              @if ($order->refunds->count())
                <div class="row">
                  <div class="col-md-12 nopadding">
                    <div class="dashboard-table dashboard-order-product-table">
                      <table class="zcart-table">
                        <thead>
                          <tr>
                            <th colspan="6">@lang('theme.refunds')</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="buyer-payment-info-head">
                            <td>{{ trans('theme.return_goods') }}</td>
                            <td>{{ trans('theme.amount') }}</td>
                            <td>{{ trans('theme.status') }}</td>
                            <td>{{ trans('theme.created_at') }}</td>
                            <td>{{ trans('theme.updated_at') }}</td>
                          </tr>

                          @foreach ($order->refunds as $refund)
                            <tr class="buyer-payment-info-body">
                              <td>{!! get_yes_or_no($refund->return_goods) !!}</td>
                              <td>{{ get_formated_currency($refund->amount, true, 2) }}</td>
                              <td>{!! $refund->statusName() !!}</td>
                              <td>{{ $refund->created_at->diffForHumans() }}</td>
                              <td>{{ $refund->updated_at->diffForHumans() }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div><!-- /.dashboard-table -->
                  </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
              @endif

              <div class="row mt-20">
                <div class="col-xl-4 mb-4 mb-xl-0">
                  <div class="dashboard-quick-tables">
                    <div class="dashboard-table-box">
                      <h2>@lang('theme.shipping_address')</h2>
                      {!! $order->shipping_address !!}
                      <h2>@lang('theme.billing_address')</h2>
                      {!! $order->billing_address !!}
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 px-0 mb-4 mb-xl-0">
                  <div class="dashboard-quick-tables">
                    <div class="dashboard-table-box">
                      <h2>@lang('theme.order_detail')</h2>
                      <div class="shipping-address-tbl dashboard-table dashboard-order-table">
                        <table class="zcart-table">
                          <tbody>
                            <tr>
                              <th>@lang('theme.seller')</th>
                              <td>
                                @if ($order->shop->slug)
                                  <a href="{{ route('show.store', $order->shop->slug) }}">
                                    {{ $order->shop->name }}
                                  </a>
                                @else
                                  @lang('theme.store_not_available')
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <th>@lang('theme.order_time_date')</th>
                              <td>{{ $order->created_at->toDayDateTimeString() }}</td>
                            </tr>
                            <tr>
                              <th>@lang('theme.status')</th>
                              <td>{!! $order->orderStatus(true) !!}</td>
                            </tr>
                            @if ($order->buyer_note)
                              <tr>
                                <th>@lang('theme.note'): </th>
                                <td>{!! $order->buyer_note !!}</td>
                              </tr>
                            @endif
                            @if ($order->message_to_customer)
                              <tr>
                                <th>@lang('theme.message_from_seller')</th>
                                <td>{!! $order->message_to_customer !!}</td>
                              </tr>
                            @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 mb-4 mb-xl-0">
                  <div class="dashboard-quick-tables">
                    <div class="dashboard-table-box">
                      <h2>@lang('theme.payment_detail')</h2>
                      <div class="shipping-address-tbl dashboard-table dashboard-order-table">
                        <table class="zcart-table">
                          <tbody>
                            <tr>
                              <th width="120px">@lang('theme.amount')</th>
                              <td>{{ get_formated_currency($order->grand_total, true, 2) }}</td>
                            </tr>
                            <tr>
                              <th>@lang('theme.payment_method')</th>
                              <td>{{ $order->paymentMethod->name }}</td>
                            </tr>
                            <tr>
                              <th>@lang('theme.status')</th>
                              <td>{!! $order->paymentStatusName() !!}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->

      <div class="container" id="message-section" name="message-section">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h4>@lang('theme.section_headings.contact_seller')</h4>
            </div>
            <div class="message-list">
              {!! Form::open(['route' => ['order.conversation', $order], 'files' => true, 'id' => 'conversation-form', 'data-toggle' => 'validator']) !!}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    {!! Form::label('message', trans('theme.write_your_message')) !!}
                    {!! Form::textarea('message', null, ['class' => 'form-control form-control flat', 'placeholder' => trans('theme.leave_message_to_seller'), 'rows' => '4', 'maxlength' => 500, 'required']) !!}
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    {!! Form::label('photoInput', trans('theme.button.upload_photo')) !!}
                    {!! Form::file('photo') !!}
                    <span class="help-block small">@lang('theme.help.upload_photo')</span>
                  </div>
                  @unless($order->order_status_id == \App\Models\Order::STATUS_DELIVERED)
                    <div class="checkbox">
                      <label>
                        {!! Form::checkbox('goods_received', 1, null, ['class' => 'i-check-blue']) !!} {{ trans('theme.goods_received') }}
                      </label>
                    </div>
                  @endunless
                  {!! Form::button(trans('theme.button.send_message'), ['type' => 'submit', 'class' => 'btn btn-info flat']) !!}
                </div>
              </div> <!-- /.row -->
              {!! Form::close() !!}

              @if ($order->conversation)
                <div class="message-list-header">
                  <h4>@lang('theme.message_history')</h4>
                </div>

                @foreach ($order->conversation->replies->sortByDesc('created_at') as $msg)
                  <div class="row message-list-item {{ $msg->customer_id ? 'message-buyer message-me' : 'message-seller' }}">
                    <div class="col-2 nopadding-right">
                      @unless($msg->customer_id)
                        <div class="message-user-info">
                          <div class="message-user-name" title="seller">{{ $order->shop->name ?? lang('theme.seller') }}</div>
                          <div class="message-date">{{ $msg->created_at->toDayDateTimeString() }}</div>
                        </div>
                      @endunless
                    </div>
                    <div class="col-8">
                      <div class="message-content-wrapper">
                        <div class="message-content">{!! $msg->reply !!}</div>
                        @if ($attachment = optional($msg->attachments)->first())
                          <a href="{{ get_storage_file_url($attachment->path, 'original') }}" class="pull-right message-attachment" target="_blank">
                            <img src="{{ get_storage_file_url($attachment->path, 'tiny') }}" class="img-sm thumbnail">
                          </a>
                        @endif
                      </div>
                    </div>
                    <div class="col-2 nopadding-left">
                      @if ($msg->customer_id)
                        <div class="message-user-info">
                          <div class="message-user-name" title="me">@lang('theme.me')</div>
                          <div class="message-date">{{ $msg->created_at->toDayDateTimeString() }}</div>
                        </div>
                      @endif
                    </div>
                  </div>
                @endforeach

                <div class="row message-list-item message-buyer message-me">
                  <div class="col-2 nopadding-right">
                  </div>
                  <div class="col-8">
                    <div class="message-content-wrapper">
                      <div class="message-content">{!! $order->conversation->message !!}</div>
                      @if ($attachment = optional($order->conversation->attachments)->first())
                        <a href="{{ get_storage_file_url($attachment->path, 'original') }}" class="pull-right message-attachment" target="_blank">
                          <img src="{{ get_storage_file_url($attachment->path, 'tiny') }}" class="img-sm thumbnail">
                        </a>
                      @endif
                    </div>
                  </div>
                  <div class="col-2 nopadding-left">
                    <div class="message-user-info">
                      <div class="message-user-name" title="me">@lang('theme.me')</div>
                      <div class="message-date">{{ $order->conversation->created_at->toDayDateTimeString() }}</div>
                    </div>
                  </div>
                </div>
              @endif
            </div><!-- /.message-list -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div>
  </div>
@endsection
