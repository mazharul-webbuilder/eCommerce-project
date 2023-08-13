<script type="text/javascript">
  $('.apply_seller_coupon').on('click', function(e) {
    e.preventDefault();
    var cart = $(this).data('cart');
    var coupon = $('#coupon' + cart).val();
    var shop = $('#shop-id' + cart).val();
    var zone = $('#zone-id' + cart).val();
    // var totalPrice  = getOrderTotal(cart);
    coupon = coupon.trim();

    if (coupon) {
      $.ajax({
          url: '{{ route('validate.coupon') }}',
          type: 'POST',
          data: {
            'coupon': coupon,
            'shop': shop,
            'cart': cart,
            'zone': zone
          },
          dataType: 'JSON',
          success: function(data, textStatus, xhr) {
            applyDiscountOnCart(cart, data);
          }
        })
        .fail(function(response) {
          if (401 === response.status) {
            $('#loginModal').modal('show');
          } else if (500 === response.status) {
            // console.log(response);
          } else if (403 === response.status) {
            @include('theme::layouts.notification', ['message' => trans('coupons::lang.coupon_not_valid'), 'type' => 'warning', 'icon' => 'times-circle'])
          } else if (404 === response.status) {
            @include('theme::layouts.notification', ['message' => trans('coupons::lang.coupon_not_exist'), 'type' => 'danger', 'icon' => 'times-circle'])
          } else if (443 === response.status) {
            @include('theme::layouts.notification', ['message' => trans('coupons::lang.coupon_not_valid_for_zone'), 'type' => 'warning', 'icon' => 'times-circle'])
          } else if (444 === response.status) {
            @include('theme::layouts.notification', ['message' => trans('coupons::lang.coupon_limit_expired'), 'type' => 'warning', 'icon' => 'times-circle'])
          } else {
            @include('theme::layouts.notification', ['message' => trans('theme.notify.failed'), 'type' => 'danger', 'icon' => 'times-circle'])
          }

          // resetDiscount(cart);
        });
    }
  });
</script>
