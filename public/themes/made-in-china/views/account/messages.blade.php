@if ($messages->count() > 0)
  @php
    $search_q = isset($search_q) ? $search_q : null;
  @endphp

  <div class="dashboard-quick-tables">
    <div class="row">
      <div class="col-md-12">
        <div class="dashboard-table-box">
          <h2>{{ trans('theme.of_total', ['first' => $messages->firstItem(), 'last' => $messages->lastItem(), 'total' => $messages->total()]) . ' ' . trans('theme.my_messages') }}</h2>
          <div class="messagetable-top-button">
            {{-- <a class="zcart-vsm-btn" href="message-compose.html">Compose</a>
            <a class="zcart-vsm-btn" href="#">Delete</a>
            <a class="zcart-vsm-btn" href="#">Spam</a> --}}
          </div>
          <div class="dashboard-table dashboard-messages-table">
            <table class="zcart-table">
              <thead>
                {{-- <tr>
                  <th width="30"><input class="select-all" type="checkbox" name="selectProduct" value="1"></th>
                  <th width="200">Contact</th>
                  <th>Content</th>
                  <th width="90">Status</th>
                  <th width="150">Sent Time</th>
                  <th width="30">&nbsp;</th>
                </tr> --}}
              </thead>
              <tbody>
                @foreach ($messages as $message)
                  <tr id="item_{{ $message->id }}">
                    {{-- <td>
                      <input type="checkbox" name="selectMessage" value="1">
                    </td> --}}
                    <td width="100">
                      @if ($message->shop)
                        <a href="{{ route('show.store', $message->shop->slug) }}">
                          {{-- <img src="{{ get_storage_file_url(optional($message->shop->image)->path, 'thumbnail') }}" class="seller-info-logo img-circle" alt="{{ trans('theme.logo') }}"> --}}
                          {!! $message->shop->getQualifiedName() !!}
                        </a>
                      @else
                        {{ trans('theme.store') }}
                      @endif

                      {{-- <a href="#">Revo Int.</a><br><a href="#">Order: #12345</a> --}}
                    </td>
                    <td>
                      @if ($message->replies_count)
                        <span class="bg-label" title="Replies">
                          {{ $message->replies_count }}
                        </span>
                      @endif
                      <a href="{{ route('message.show', $message) }}" class="{{ $message->isUnread() ? 'unread' : '' }}">
                        {!! highlightWords($message->subject, $search_q) !!} - {!! highlightWords(\Illuminate\Support\Str::limit(strip_tags($message->message), 180 - strlen($message->subject)), $search_q) !!}
                      </a>

                      @if ($message->hasAttachments())
                        <i class="fas fa-paperclip" data-toggle="tooltip" data-placement="top" title="{{ trans('app.attachments') }}"></i>
                      @endif
                    </td>
                    <td width="90">
                      @if ($message->isUnread())
                        <span class="in-stock">
                          {!! $message->statusName() !!}
                        </span>
                      @endif

                      @if ($message->about())
                        <span class="in-stock">
                          {!! $message->about() !!}
                        </span>
                      @endif
                    </td>
                    <td width="150">
                      {{ $message->updated_at->diffForHumans() }}
                    </td>
                    <td>
                      @if ($message->order_id)
                        <a href="{{ route('order.detail', $message->order_id) }}" data-toggle="tooltip" data-placement="left" data-title="{{ trans('theme.button.order_detail') }}"><i class="fas fa-shopping-cart"></i></a>
                      @endif

                      @if ($message->product_id)
                        <a href="{{ route('show.product', $message->item->slug) }}" data-toggle="tooltip" data-placement="left" data-title="{{ trans('theme.button.view_product_details') }}"><i class="far fa-external-link"></i></a>
                      @endif

                      <a href="{{ route('message.archive', $message) }}" class="confirm" data-toggle="tooltip" data-placement="left" data-title="{{ trans('theme.archive') }}"><i class="fas fa-trash-o"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@else
  <p class="lead text-center my5">
    @lang('theme.nothing_found')
  </p>
@endif

<div class="my-3">
  {{ $messages->links('theme::partials.pagination') }}
</div><!-- /.row .pagenav-wrapper -->
