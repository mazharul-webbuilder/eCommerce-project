<div class="dashboard-quick-tables">
  <div class="row">
    <div class="col-md-12">
      <div class="dashboard-table-box">
        <h2>{!! trans('theme.dispute_detail') !!}</h2>
        @php
          $progress = $order->dispute ? $order->dispute->progress() : 0;
        @endphp

        <div class="step step-big step-4 cf">
          <div class="step-item {{ $progress <= 33 ? 'step-active' : '' }}">
            <a href="#" class="dot">1</a>
            <div class="txt-box">{!! trans('theme.section_headings.how_to_open_a_dispute') !!}</div>
          </div>
          <div class="step-item {{ $progress > 33 && $progress < 66 ? 'step-active' : '' }}">
            <a href="#" class="dot">2</a>
            <div class="txt-box">{!! trans('theme.seller_helps_you') !!}</div>
          </div>
          <div class="step-item {{ $progress > 66 && $progress < 100 ? 'step-active' : '' }}">
            <a href="#" class="dot">3</a>
            <div class="txt-box">{!! trans('theme.marketplace_steps_in', ['marketplace' => get_platform_title()]) !!}<br />
              <i class="small hidden-xs">{!! trans('theme.help.when_marketplace_steps_in') !!}</i>
            </div>
          </div>
          <div class="step-item {{ $progress >= 100 ? 'step-active' : '' }}">
            <a href="#" class="dot">4</a>
            <div class="txt-box">{!! trans('theme.dispute_finished') !!}</div>
          </div>
        </div>

        @if ($order->dispute)
          <div class="dashboard-table dashboard-disputes-table mb-4">
            <table class="zcart-table disputes-header">
              <thead>
                <tr>
                  <th width="33%">
                    <div class="order-info">
                      <span class="text-black">{!! trans('theme.store') !!}:</span>
                      <a href="#">
                        @if ($order->shop->slug)
                          <a href="{{ route('show.store', $order->shop->slug) }}"> {{ $order->shop->name }}</a>
                        @else
                          {!! trans('theme.seller') !!}
                        @endif
                      </a><br>
                      <span class="text-black">{!! trans('theme.status') !!}:</span> <span class="label-warning">
                        {!! $order->dispute->statusName() !!}
                      </span>
                    </div>
                  </th>
                  <th width="33%">
                    <div class="order-info">
                      <span class="text-black">{!! trans('theme.refund_amount') !!}:</span>
                      {{ get_formated_currency($order->dispute->refund_amount, true, 2) }}
                      <br>
                      <span class="text-black">{!! trans('theme.return_goods') !!}:</span>
                      {{ $order->dispute->return_goods == 1 ? trans('theme.yes') : trans('theme.no') }}
                    </div>
                  </th>
                  <th width="33%">
                    <div class="order-info">
                      <span class="text-black">{!! trans('theme.order_id') !!}:</span>
                      <a href="{{ route('order.detail', $order) }}">{{ $order->order_number }}</a>
                      <br>
                      <span class="text-black">{!! trans('theme.order_received') !!}:</span>
                      {{ $order->dispute->order_received == 1 ? trans('theme.yes') : trans('theme.no') }}
                    </div>
                  </th>
                </tr>
              </thead>
            </table>
            <div class="disputes-details">
              <h3>{!! trans('theme.reason') !!}: {{ $order->dispute->dispute_type->detail }}</h3>

              @if ($order->dispute->description)
                <p>
                  {!! $order->dispute->description !!}

                  @if (count($order->dispute->attachments))
                    <small class="pull-right">
                      {{ trans('app.attachments') . ': ' }}
                      @foreach ($order->dispute->attachments as $attachment)
                        <a href="{{ route('attachment.download', $attachment->path) }}"><i class="fas fa-file"></i></a>
                      @endforeach
                    </small>
                  @endif
                </p>
              @endif

              @if ($order->dispute->replies->count() > 0)
                @foreach ($order->dispute->replies as $reply)
                  <div class="row">
                    <div class="col-md-2 nopadding-right no-print">
                      @if ($reply->user_id)
                        @if ($reply->user->image)
                          <img src="{{ get_storage_file_url(optional($reply->user->image)->path, 'thumbnail') }}" class="img-circle img-sm" alt="{{ trans('app.avatar') }}">
                        @else
                          <img src="{{ get_gravatar_url($reply->user->email, 'thumbnail') }}" class="img-circle img-sm" alt="{{ trans('app.avatar') }}">
                        @endif

                        {{ $reply->user->getName() }}
                      @endif
                    </div>

                    <div class="col-md-8 nopadding">
                      <blockquote style="font-size: 1em;" class="{{ $reply->customer_id ? 'blockquote-reverse' : '' }}">
                        {!! $reply->reply !!}

                        @if (count($reply->attachments))
                          <small class="no-print">
                            {{ trans('app.attachments') . ': ' }}
                            @foreach ($reply->attachments as $attachment)
                              <a href="{{ route('attachment.download', $attachment) }}"><i class="fas fa-file"></i></a>
                            @endforeach
                          </small>
                        @endif

                        <footer>{{ $reply->updated_at->diffForHumans() }}</footer>
                      </blockquote>
                    </div>

                    <div class="col-md-2 nopadding-left no-print">
                      @if ($reply->customer_id)
                        @if ($reply->customer->image)
                          <img src="{{ get_storage_file_url(optional($reply->customer->image)->path, 'thumbnail') }}" class="img-circle img-sm" alt="{{ trans('app.avatar') }}">
                        @else
                          <img src="{{ get_gravatar_url($reply->customer->email, 'thumbnail') }}" class="img-circle img-sm" alt="{{ trans('app.avatar') }}">
                        @endif

                        {{ $reply->customer->getName() }}
                      @endif
                    </div>
                  </div>
                @endforeach
              @endif

            </div>
            <div class="disputes-action text-center mt-20">
              @if ($order->dispute->isClosed())
                <a class="mr-1 btn btn-black" href="javascript:void(0)" data-target-modal="#disputeAppealModal">{!! trans('theme.button.appeal') !!}</a>
              @else
                <a class="mr-1 mb-2 btn btn-main" href="javascript:void(0)" data-target-modal="#disputeResponseModal">{!! trans('theme.button.response') !!}</a>

                {!! Form::open(['route' => ['dispute.markAsSolved', $order->dispute], 'class' => 'form']) !!}
                {!! Form::button(trans('theme.mark_as_solved'), ['type' => 'submit', 'class' => 'confirm mr-1 btn btn-main']) !!}
                {!! Form::close() !!}
              @endif
            </div>
          </div>
        @else
          <p class="text-center">
            <a href="{{ route('order.detail', $order) . '#message-section' }}" class="btn btn-primary flat">{!! trans('theme.button.contact_seller') !!}</a>

            @unless($order->dispute)
              <a href="javascript:void(0);" data-toggle="modal" data-target-modal="#disputeOpenModal" class="btn btn-black flat">{!! trans('theme.button.open_dispute') !!}</a>
            @endunless
          </p>

          <div class="sep my-5"></div>

          <h4 class="pb-2">{!! trans('theme.button.refund_request') !!}:</h4>
          <p class="text-muted pb-4"> {!! trans('theme.help.reason_to_refund_request') !!}</p>

          <h4 class="pb-2">{!! trans('theme.button.return_goods') !!}:</h4>
          <p class="text-muted">{!! trans('theme.help.reason_to_return_goods') !!}</p>
        @endif

        <div class="how-to-open-disputes">
          <h2>{!! trans('theme.section_headings.how_to_open_a_dispute') !!}</h2>
          <div class="how-to-content">
            <h5>{!! trans('theme.help.first_step') !!}:</h5>
            <p>{!! trans('theme.help.how_to_open_a_dispute_first_step') !!}</p>

            <h5>{!! trans('theme.help.second_step') !!}:</h5>
            <p>{!! trans('theme.help.how_to_open_a_dispute_second_step') !!}</p>

            <h5>{!! trans('theme.help.third_step') !!}:</h5>
            <p>{!! trans('theme.help.how_to_open_a_dispute_third_step') !!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
