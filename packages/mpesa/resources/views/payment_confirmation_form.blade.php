@extends('theme::layouts.main')

@section('content')
  <!-- HEADER SECTION -->
  @include('theme::headers.order_detail')

  <section>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-md-offset-3">
          <p class="lead text-center">
            @if (File::exists(sys_image_path('payment-methods') . 'mpesa.png'))
              <img src="{{ asset(sys_image_path('payment-methods') . 'mpesa.png') }}" class="open-img-md" alt="mpesa">
            @else
              <p class="list-group-item-heading inline lead">
                MPESA
              </p>
            @endif
          </p>

          <p class="text-danger mb-3">
            <strong>@lang('theme.payment_status'): </strong> {!! $order->paymentStatusName() !!}
          </p>

          <p class="lead">@lang('mpesa::lang.payment_confirmation')</p>

          <p class="text-center">
            {!! Form::open(['route' => ['mpesa.order.confirm', $order], 'id' => 'form', 'data-toggle' => 'validator']) !!}

            {!! Form::submit(trans('mpesa::lang.confirm_order'), ['class' => 'btn btn-primary btn-lg']) !!}

            {!! Form::close() !!}
          </p>
        </div><!-- /.col-md-8 -->
      </div><!-- /.row -->
    </div> <!-- /.container -->
  </section>
@endsection
