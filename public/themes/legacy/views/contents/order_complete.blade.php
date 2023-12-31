<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <p class="lead">@lang('theme.notify.order_placed_thanks')</p>
        @if (optional($order->paymentMethod)->type == \App\Models\PaymentMethod::TYPE_MANUAL)
          <p class="text-primary space50">
            <strong>@lang('theme.payment_instruction'): </strong>
            @if (vendor_get_paid_directly())
              {!! $order->shop->config->manualPaymentMethods->where('id', $order->payment_method_id)->first()->pivot->payment_instructions !!}
            @else
              {!! get_from_option_table('wallet_payment_instructions_' . optional($order->paymentMethod)->code, 'Manual payment instructions. Edit in settings section.') !!}
            @endif
          </p>
        @elseif(! $order->isPaid())
          <p class="text-danger space50">
            <strong>@lang('theme.payment_status'): </strong> {!! $order->paymentStatusName() !!}
          </p>
        @endif

        <p class="small space30"><i class="fa fa-info-circle"></i>
          {{ trans('theme.notify.order_will_ship_to') }}: <em>"{!! $order->shipping_address !!}"</em>
        </p>

        <p class="lead text-center space50">
          <a class="btn btn-primary flat" href="{{ url('/') }}">{{ trans('theme.button.continue_shopping') }}</a>

          @if (\Auth::guard('customer')->check())
            <a class="btn btn-default flat" href="{{ route('order.detail', $order) }}">@lang('theme.button.order_detail')</a>
          @endif
        </p>
      </div><!-- /.col-md-8 -->
    </div><!-- /.row -->
  </div> <!-- /.container -->
</section>
