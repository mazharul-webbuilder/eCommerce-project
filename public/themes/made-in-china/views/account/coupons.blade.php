<div class="dashboard-quick-tables">
  <div class="row">
    <div class="col-md-12">
      <div class="dashboard-table-box">
        <h2>My Coupons</h2>
        <div class="dashboard-table dashboard-cooupon-table">
          @if ($coupons->count() > 0)
            <table class="zcart-table">
              <thead>
                <tr>
                  <th>{{ trans('theme.coupon_code') }}</th>
                  <th>{{ trans('theme.store') }}</th>
                  <th>{{ trans('theme.value') }}</th>
                  <th width="30%">{{ trans('theme.validity') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($coupons as $coupon)
                  <tr>
                    <td><span class="coupon-code">{{ $coupon->code }}</span></td>
                    <td>
                      <a href="{{ route('show.store', $coupon->shop->slug) }}" target="_blank">{{ $coupon->shop->name }}</a>
                      <small><i class="far fa-external-link text-muted"></i></small>
                    </td>
                    <td>
                      @php
                        $value = $coupon->type == 'amount' ? get_formated_currency($coupon->value, true, 2) : get_formated_decimal($coupon->value) . '%';
                      @endphp
                      {{ trans('theme.coupon_off', ['value' => $value]) }}
                      @if ($coupon->min_order_amount)
                        <span class="small">
                          {{ trans('theme.when_min_order_value', ['value' => get_formated_currency($coupon->min_order_amount, true, 2)]) }}
                        </span>
                      @endif
                    </td>
                    <td>{!! $coupon->validityText() !!}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            <div class="my-3">
              {{ $coupons->links('theme::partials.pagination') }}
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
</div>
