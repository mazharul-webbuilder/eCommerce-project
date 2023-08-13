<script src="https://js.stripe.com/v2/"></script>

{{-- Razorpay --}}
@if (is_incevio_package_loaded('razorpay'))
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@endif

<script type="text/javascript">
  "use strict";;
  (function($, window, document) {
    $(document).ready(function() {
      // i-Check plugin
      $('.i-check, .i-radio, .i-check-blue, .i-radio-blue').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
      });

      $('.payment-option').on('ifChecked', function(e) {
        var code = $(this).data('code');
        $("#payment-instructions.text-danger").removeClass('text-danger').addClass('text-info small');
        $('#payment-instructions').children('span').html($(this).data('info'));

        // Alter checkout button text Stripe
        if ('stripe' == code && $(this).val() != 'saved_card') {
          showCardForm();
        } else {
          hideCardForm();
        }

        // Alter checkout button text Authorize Net or cybersource
        if ('authorizenet' == code || 'cybersource' == code) {
          showAuthorizeNetCardForm();
        } else {
          hideAuthorizeNetCardForm();
        }

        // Alter checkout button
        if ('paypal-express' == code) {
          $('#paypal-express-btn').removeClass('hide');
          $('#pay-now-btn').addClass('hide');
        } else {
          $('#paypal-express-btn').addClass('hide');
          $('#pay-now-btn').removeClass('hide');
        }
      });

      // Submit the form
      $("a#paypal-express-btn").on('click', function(e) {
        e.preventDefault();
        $("form#depositForm").submit();
      });

      // Show cart form if the card option is selected
      var paymentOptionSelected = $('input[name="payment_method"]:checked');

      if (paymentOptionSelected.length > 0) {
        var code = paymentOptionSelected.data('code');

        if (code == 'stripe' && paymentOptionSelected.val() != 'saved_card') {
          showCardForm();
        } else if (code == 'authorizenet' || code == 'cybersource') {
          showAuthorizeNetCardForm();
        } else if ('paypal-express' == code) {
          $('#pay-now-btn').addClass('hide');
          $('#paypal-express-btn').removeClass('hide');
        }
      }

      // Stripe code, create a token
      Stripe.setPublishableKey("{{ config('services.stripe.key') }}");

      $("form#depositForm").on('submit', function(e) {
        e.preventDefault();

        var form = $(this);

        if (form.find("input[name='amount']").val() < 1) {
          return;
        }

        // Check if payment method has been selected or not
        if (!$("input:radio[name='payment_method']").is(":checked")) {
          $("#payment-instructions.text-info").removeClass('text-info small').addClass('text-danger');
          return;
        }

        apply_busy_filter('body');

        var payment_method = $('input[name=payment_method]:checked').val();

        // Skip the strip payment and submit if the payment method is not stripe
        if (payment_method == 'stripe') {
          // Stripe API skip the request if the information are not there
          if (!$("input[data-stripe='number']").val() || !$("input[data-stripe='cvc']").val()) {
            return;
          }

          Stripe.card.createToken(form, function(status, response) {
            if (response.error) {
              form.find('.stripe-errors').text(response.error.message).removeClass('hide');
              remove_busy_filter('body');
            } else {
              form.append($('<input type="hidden" name="cc_token">').val(response.id));
              form.get(0).submit();
            }
          });
        } else if (payment_method == 'razorpay' && !$('input[name=razorpay_payment_id]').val()) {
          // console.log(payment_method);
          @if (is_incevio_package_loaded('razorpay'))
            @include('razorpay::script');
          @endif
        } else {
          form.get(0).submit();
        }
      });

      // Submit the form
      $("a#paypal-express-btn").on('click', function(e) {
        e.preventDefault();
        $("form#depositForm").submit();
      });

      $("#submit-btn-block").show(); // Show the submit buttons after loading the doms
    });

    // Stripe
    function showCardForm() {
      $('#cc-form').show().find('input:text, select').attr('required', 'required');
    }

    function hideCardForm() {
      $('#cc-form').hide().find('input, select').removeAttr('required');
    }

    // Authorize Net
    function showAuthorizeNetCardForm() {
      $('#authorize-net-cc-form').show().find('input, select').attr('required', 'required');
    }

    function hideAuthorizeNetCardForm() {
      $('#authorize-net-cc-form').hide().find('input, select').removeAttr('required');
    }
  }(window.jQuery, window, document));
</script>
