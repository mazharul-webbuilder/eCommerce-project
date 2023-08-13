  // Create and get razorpay order
  var request = $.ajax({
  url: "{{ isset($cart) ? route('razorpay.payment.request', $cart) : (isset($one_checkout_form) ? route('razorpay.payment.request', 'all_checkout') : route('razorpay.payment.request')) }}",
  type: 'POST',
  data: form.serialize()
  });

  request.done(function(response) {
  remove_busy_filter('body');
  // console.log(response);

  // When server response with message
  if (response.message) {
  $('#checkout-notice-msg').html(response.message);
  $('#checkout-notice').show();
  }

  /**
  * The entire list of Checkout fields is available at
  * https://docs.razorpay.com/docs/checkout-form#checkout-fields
  */
  response.handler = function(response) {
  console.log(response);

  // Add razorpay payment data into the form
  $('<input>').attr({
  type: 'hidden',
  name: 'razorpay_order_id',
  value: response.razorpay_order_id
  }).appendTo(form);

  $('<input>').attr({
  type: 'hidden',
  name: 'razorpay_payment_id',
  value: response.razorpay_payment_id
  }).appendTo(form);

  $('<input>').attr({
  type: 'hidden',
  name: 'razorpay_signature',
  value: response.razorpay_signature
  }).appendTo(form);

  // Payment done, now submit the form
  form.submit();
  };

  response.modal = {
  ondismiss: function() {
  @include('theme::layouts.notification', ['message' => trans('theme.notify.payment_failed'), 'type' => 'warning', 'icon' => 'times-circle'])
  },
  // Boolean indicating whether pressing escape key
  // should close the checkout form. (default: true)
  escape: true,
  // Boolean indicating whether clicking translucent blank
  // space outside checkout form should close the form. (default: false)
  backdropclose: false
  };

  // Open the Razorpay payment form
  var rzp = new Razorpay(response);
  rzp.open();
  });

  request.fail(function(jqXHR, textStatus) {
  remove_busy_filter('body');

  // Razoray error
  if (textStatus == 'error') {
  $('#checkout-notice-msg').html(jqXHR.responseJSON.message);
  $('#checkout-notice').show();
  }

  @include('theme::layouts.notification', ['message' => trans('razorpay::lang.bad_request'), 'type' => 'warning', 'icon' => 'times-circle'])
  });
