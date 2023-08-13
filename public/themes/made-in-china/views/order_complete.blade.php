@extends('theme::layouts.main')

@section('content')
  <div class="main-container zcart-light-bg pt-4 pb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="zcart-card">
            <div class="confirmation-message">
              <span class="messege-success-tick"><i class="fas fa-check"></i></span>
              <h2>@lang('theme.notify.order_placed_thanks')</h2>

              @php
                $payment_instructions = null;
                if (optional($order->paymentMethod)->type == \App\Models\PaymentMethod::TYPE_MANUAL) {
                    if (vendor_get_paid_directly()) {
                        $payment_method = $order->shop->config->manualPaymentMethods->where('id', $order->payment_method_id)->first();
                
                        $payment_instructions = optional($payment_method)->pivot->payment_instructions;
                    } else {
                        $payment_instructions = get_from_option_table('wallet_payment_info_' . $order->paymentMethod->code);
                    }
                }
              @endphp

              @if ($payment_instructions)
                <p class="text-primary mt-4">
                  <strong>@lang('theme.payment_instruction'): </strong>
                  {!! $payment_instructions !!}
                </p>
              @elseif(!$order->isPaid())
                <p class="text-danger mt-4">
                  <strong>@lang('theme.payment_status'): </strong> {!! $order->paymentStatusName() !!}
                </p>
              @endif


              <p>
                <i class="fas fa-info-circle"></i>
                {{ trans('theme.notify.order_will_ship_to') }}: <em>"{!! $order->shipping_address !!}"</em>
              </p>

              <a href="{{ url('/') }}" class="btn btn-main">{{ trans('theme.button.continue_shopping') }}</a>

              @if (\Auth::guard('customer')->check())
                <a class="btn btn-main" href="{{ route('order.detail', $order) }}">@lang('theme.button.order_detail')</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
