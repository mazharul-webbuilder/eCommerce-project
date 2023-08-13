"use strict";
; (function ($, window, document) {
  $("[data-link]").hide(); // hide the ajax functional button untill the page load completely

  $(document).ready(function () {
    $("[data-link]").show(); // Show the ajax functional button untill the page load completely
    // Product Filters
    $('#filter_opt_sort').on('change', function () {
      var opt = $(this).attr('name');
      var href = removeQueryStringParameter(window.location.href, opt); //Remove currect sorting
      opt = opt + '=' + $(this).val();
      window.location.href = getFormatedUrlStr(href, opt);
    });

    $('.filter_opt_checkbox').on('change', function () {
      if (this.checked) {
        var opt = $(this).attr('name') + '=true';
        window.location.href = getFormatedUrlStr(window.location.href, opt);
      } else {
        var opt = $(this).attr('name');
        var href = removeQueryStringParameter(window.location.href, 'page'); //Reset the pagination
        window.location.href = removeQueryStringParameter(href, opt);
      }
    });

    $('.link-filter-opt').on('click', function (e) {
      e.preventDefault();
      var href = window.location.href;
      var opt = $(this).data('name');

      // Removing all category, category grp and category sub-grp
      var cat = ["in", "insubgrp", "ingrp"];
      var a = cat.indexOf(opt);
      if (a !== -1) {
        cat.forEach(function (s) {
          href = removeQueryStringParameter(href, s); //Remove currect filter
        });
      }
      else {
        href = removeQueryStringParameter(window.location.href, opt); //Remove currect filter
      }

      window.location.href = getFormatedUrlStr(href, opt + '=' + $(this).data('value'));
    });

    $('.clear-filter').on('click', function (e) {
      e.preventDefault();
      window.location.href = removeQueryStringParameter(window.location.href, $(this).data('name')); //Remove the filter
    });

    $("#filterBtn").click(function (e) {
      e.preventDefault();
      $(".category-filters").slideToggle();
    });

    // Prevent the option if disabled
    $("#buy-now-btn").on("click", function (e) {
      if ($(this).attr('disabled')) {
        e.preventDefault();
      }
      else {
        apply_busy_filter('body');
      }
    });

    // FEEDBACK SYSTEM
    $('.feedback-stars span.star').on('mouseover', function () {
      var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
      $(this).parent().children('span.star').each(function (e) {
        if (e < onStar)
          $(this).addClass('rated');
        else
          $(this).removeClass('rated');
      });
    });

    $('.feedback-stars span.star').on('click', function () {
      var onStar = parseInt($(this).data('value'), 10); // The star currently selected
      var wrapper = $(this).parent();

      // Update the rating value
      wrapper.children('input.rating-value').val(onStar);

      wrapper.children('span.star').each(function (e) {
        if (e < onStar) {
          $(this).addClass('rated');
          $(this).children('i').removeClass('far').addClass('fas');
        }
        else {
          $(this).removeClass('rated');
          $(this).children('i').removeClass('fas').addClass('far');
        }
      });
      $(this).siblings('span.response').text($(this).data('title'));
    });
    //END FEEDBACK SYSTEM

    // DISPUTE FORM
    $('#disputeOpenModal input[name="order_received"]').on('ifChecked', function () {
      if ($(this).val() == 1) {
        $('#select_disputed_item, #return_goods_checkbox').removeClass('hidden').addClass('show');
        $('#select_disputed_item select#product_id').attr('required', 'required');
      }
      else {
        $('#select_disputed_item, #return_goods_checkbox').removeClass('show').addClass('hidden');
        $('#select_disputed_item select#product_id').removeAttr('required');
      }
    });
    $('#disputeOpenModal input#return_goods').on('ifChecked', function () {
      $('#return_goods_help_txt').removeClass('hidden').addClass('show');
    });
    $('#disputeOpenModal input#return_goods').on('ifUnchecked', function () {
      $('#return_goods_help_txt').removeClass('show').addClass('hidden');
    });
    //END DISPUTE FORM

    // Make recaptcha field required if exist
    var $recaptcha = document.querySelector('#g-recaptcha-response');
    if ($recaptcha) {
      $recaptcha.setAttribute("required", "required");
    }
  });
}(window.jQuery, window, document));

function apply_busy_filter(dom = 'body') {
  jQuery(dom).addClass('busy');
  jQuery('#loading').show();
}
function remove_busy_filter(dom = 'body') {
  jQuery(dom).removeClass('busy');
  jQuery('#loading').hide();
}

// Update global cart item count
function increaseCartItem(value = 1) {
  return setCartItemCount(getCartItemCount() + value);
}
function decreaseCartItem(value = 1) {
  return setCartItemCount(getCartItemCount() - value);
}
function getCartItemCount() {
  return Number(jQuery("#globalCartItemCount").text());
}
function setCartItemCount(value = 0) {
  jQuery('#globalCartItemCount').removeClass('hidden').text(value);
  return;
}

// Helper functions for Filter
function getFormatedUrlStr(sourceURL, opt) {
  var url = removeQueryStringParameter(sourceURL, 'page'); //Reset the pagination;

  if (url.indexOf('?') !== -1) {
    return url + '&' + opt;
  }

  return url + '?' + opt;
}

function removeQueryStringParameter(sourceURL, key) {
  var rtn = sourceURL.split("?")[0],
    param,
    params_arr = [],
    queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
  if (queryString !== "") {
    params_arr = queryString.split("&");
    for (var i = params_arr.length - 1; i >= 0; i -= 1) {
      param = params_arr[i].split("=")[0];
      if (param === key) {
        params_arr.splice(i, 1);
      }
    }
    rtn = rtn + "?" + params_arr.join("&");
  }

  return rtn;
}
