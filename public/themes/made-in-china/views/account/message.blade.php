<div class="dashboard-order-details dashboard-quick-tables">
  <div class="row">
    <div class="col-md-12">
      <div class="dashboard-edit-account">
        <h2>{{ trans('theme.message') }}</h2>
        <div class="form-req-suggetion text-right">
          {{-- "<span class="req">*</span>" means required. --}}
        </div>
        <div class="edit-account-form message-chat-page">
          <div class="live-messages-list">
            <div class="message-item message-{{ $message->user_id ? 'right' : 'left' }}-side">
              <div class="message-left-text">
                @if ($message->user_id)
                  <div class="message-user-info visible-md visible-lg">
                    <div class="message-user-name" title="seller">{{ $message->shop ? $message->shop->name : trans('theme.store') }}</div>
                    <div class="message-date small">{{ $message->created_at->toDayDateTimeString() }}</div>
                  </div>
                  {{-- @else
                    <div class="message-user-info hidden-md hidden-lg pull-right">
                      <div class="message-user-name" title="me">@lang('theme.me')</div>
                    </div> --}}
                @endif
              </div>

              <div class="message-center-text">
                <h5>{!! $message->subject !!}</h5>
                <p>
                  {!! $message->message !!}
                </p>

                {{-- <div class="message-date small hidden-md hidden-lg {{ $message->customer_id ? 'pull-right' : '' }}">{{ $message->created_at->toDayDateTimeString() }}</div> --}}

                @if ($attachment = optional($message->attachments)->first())
                  <a href="{{ get_storage_file_url($attachment->path, 'original') }}" class="pull-right message-attachment" target="_blank">
                    <img src="{{ get_storage_file_url($attachment->path, 'tiny') }}" class="img-sm thumbnail">
                  </a>
                @endif
              </div>

              <div class="message-right-text">
                @unless($message->user_id)
                  <div class="message-sender-info visible-md visible-lg">
                    <div class="sender-name" title="me">@lang('theme.me')</div>
                    <div class="message-date small">{{ $message->created_at->toDayDateTimeString() }}</div>
                  </div>
                @endunless
              </div>
            </div>

            @foreach ($message->replies->sortBy('created_at') as $msg)
              <div class="message-item message-{{ $msg->customer_id ? 'left' : 'right' }}-side">
                <div class="message-left-text">
                  @if ($msg->customer_id)
                    <div class="message-sender-info hidden-md hidden-lg">
                      {{-- <div class="message-sender-name pull-right" title="me">@lang('theme.me')</div> --}}
                    </div>
                  @else
                    <div class="message-sender-info">
                      <div class="sender-name" title="seller">
                        {{ $message->shop ? $message->shop->name : trans('theme.store') }}
                      </div>
                      <div class="message-date small  visible-md visible-lg">
                        {{ $msg->created_at->toDayDateTimeString() }}
                      </div>
                    </div>
                  @endif
                </div>

                <div class="message-center-text text-{{ $msg->customer_id ? 'right' : 'left' }}">
                  <p>{!! $msg->reply !!}</p>
                </div>

                <div class="message-right-text">
                  @if ($msg->customer_id)
                    <div class="message-sender-info">
                      <div class="sender-name" title="seller">
                        @lang('theme.me')
                      </div>
                      <div class="message-date small  visible-md visible-lg">
                        {{ $msg->created_at->toDayDateTimeString() }}
                      </div>
                    </div>
                  @endif
                </div>
              </div>
            @endforeach
          </div>

          {!! Form::open(['route' => ['message.reply', $message], 'files' => true, 'id' => 'conversation-form', 'data-toggle' => 'validator']) !!}
          <div class="form-item">
            <label>&nbsp;</label>
            {!! Form::textarea('reply', null, ['class' => 'form-textarea form-text', 'placeholder' => trans('theme.placeholder.message'), 'rows' => '5', 'maxlength' => 500, 'required']) !!}
            <div class="help-block with-errors"></div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="float-right form-item my-20">
                {!! Form::button(trans('theme.button.send_message'), ['type' => 'submit', 'class' => 'btn btn-main btn-yellow']) !!}
              </div>
            </div>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
