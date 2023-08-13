"use strict";
; (function ($, window, document) {
  $("[data-link]").hide(); // hide the ajax functional button untill the page load completely

  // Header
  $('.main-menu-toggle').click(function () {
    $('.close-sidebar').addClass('active');
    $('body').addClass('overflow');
  })
  $('.close-sidebar').click(function () {
    $('.mobile-mega-menu').removeClass('open');
    $(this).removeClass('active');
    $('body').removeClass('overflow');
  })
  $(document).keyup(function (e) {
    $('.mobile-mega-menu').removeClass('open');
    $('.close-sidebar').removeClass('active');
    $('body').removeClass('overflow');
  });

  $(document).ready(function () {
    $("[data-link]").show(); // hide the ajax functional button untill the page load completely

    $('img').on('error', function () {
      $(this).hide();
    });

    // Initiase Slick slider
    initSlickSliders($('body').hasClass('rtl'));

    // Header
    $('[data-search]').on({
      focus: function () {
        $('.search-box__dropdown').addClass('active');
      },
      blur: function (e) {
        setTimeout(function () {
          $('.search-box__dropdown').removeClass('active');
        }, 250);
      }
    });

    // $('[data-menu-link]').click(function () {
    //     // $('[data-menu-toggle]').removeClass('active');
    //     $(this).siblings('[data-menu-toggle]').toggleClass('active');
    // })

    // jqzoom thumbs adjustment
    $('.jqzoom-thumbs li a').on('click', function () {
      $('.jqzoom-thumbs li.active').removeClass('active');
      $(this).closest('li').addClass('active');
    });

    // Product Filters
    $('#filter_opt_sort').on('change', function () {
      let opt = $(this).attr('name');
      let href = removeQueryStringParameter(window.location.href, opt); //Remove currect sorting
      opt = opt + '=' + $(this).val();
      window.location.href = getFormatedUrlStr(href, opt);
    });
    $('.filter_opt_checkbox').on('ifChecked', function () {
			let value = $(this).val() ?? 'true';
      let opt = $(this).attr('name') + '=' + value;
      window.location.href = getFormatedUrlStr(window.location.href, opt);
    });
    $('.filter_opt_checkbox').on('ifUnchecked', function () {
      let opt = $(this).attr('name');
      let href = removeQueryStringParameter(window.location.href, 'page'); //Reset the pagination
      window.location.href = removeQueryStringParameter(href, opt);
    });

    $('.link-filter-opt').on('click', function (e) {
      e.preventDefault();
      let href = window.location.href;
      let opt = $(this).data('name');

      // Removing all category, category grp and category sub-grp
      let cat = ["in", "insubgrp", "ingrp"];
      let a = cat.indexOf(opt);
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

    // On checkout page
    // $('#shipping-address-checkbox').on('ifChecked', function() {
    //     $('#shipping-address').removeClass('hide');
    // });
    // $('#shipping-address-checkbox').on('ifUnchecked', function() {
    //     $('#shipping-address').addClass('hide');
    // });

    // View Switcher
    $("a.viewSwitcher").bind("click", function (e) {
      e.preventDefault();
      if ($(this).hasClass('btn-default')) {
        //Aulter the active button
        $('.viewSwitcher').toggleClass('btn-primary btn-default');

        // Aulter the product widget view
        var product_list = $('.product-list .product');
        product_list.parent().toggleClass('col-md-12 col-md-3');
        product_list.toggleClass('product-list-view product-grid-view');

        // Change the action buttons
        $('.product-actions').toggleClass('btn-group');
        $('.product-actions a.btn-default, .product-actions a.btn-link').toggleClass('btn-sm');
        $('.product-actions a:first-child').toggleClass('btn-link btn-default');
      }
      return false;
    });
    // End View Switcher

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

    // Shop feedback
    $('.shop-rating-count').on('click', function (e) {
      $('ul.nav a[href="' + $(this).data('tab') + '"]').tab('show');
    });

  });

  // Slick sliders
  function initSlickSliders(rtl = false) {
    // Main slider
    $('.banner__slider').slick({
      rtl: rtl,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      dots: true,
      cssEase: 'linear',
      fade: !rtl,
    });

    // Deal slider
    $('.deal-slider').slick({
      rtl: rtl,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      dots: true
    });

    // Deal slider
    $('.best-seller-slider').slick({
      rtl: rtl,
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow: '.best-seller-right',
      prevArrow: '.best-seller-left',
      dots: false,
      rows: 4,
    });

    // Options for slick sliders
    let slickOptions = {
      rtl: rtl,
      slidesToShow: 5,
      slidesToScroll: 4,
      arrows: true,
      dots: false,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        }, {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        }, {
          breakpoint: 420,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        }
      ]
    };

    // Feature Items slider
    $('.feature__items-inner:first-child').css('display', 'block');
    $('.feature__items-inner').slick(slickOptions);

    // top-rated Items slider
    $('.top-rated__items-inner').css('display', 'block').slick($.extend({}, slickOptions, {
      nextArrow: '.top-rated-right',
      prevArrow: '.top-rated-left',
    }));

    // bundle Items slider
    $('.bundle__items-inner').css('display', 'block').slick($.extend({}, slickOptions, {
      nextArrow: '.bundle-right',
      prevArrow: '.bundle-left',
    }));

    // Neckband Items slider
    $('.neckbands__items-inner').css('display', 'block').slick($.extend({}, slickOptions, {
      nextArrow: '.neckbands-right',
      prevArrow: '.neckbands-left',
    }));

    // Best-under Items slider
    $('.best-under__items-inner').css('display', 'block').slick($.extend({}, slickOptions, {
      slidesToShow: 6,
      nextArrow: '.best-under-right',
      prevArrow: '.best-under-left',
    }));

    // best-deals Items slider
    $('.best-deals__items-inner').css('display', 'block').slick($.extend({}, slickOptions, {
      nextArrow: '.best-deal-right',
      prevArrow: '.best-deal-left',
    }));

    // Flash Deal Items slider
    $('.flashdeal__items-inner').css('display', 'block').slick($.extend({}, slickOptions, {
      slidesToShow: 5,
      nextArrow: '.flashdeal-right',
      prevArrow: '.flashdeal-left',
    }));

    // Recent Items slider
    $('.recent__items-inner').css('display', 'block').slick($.extend({}, slickOptions, {
      nextArrow: '.recent-right',
      prevArrow: '.recent-left',
    }));
  }
  // END Slick sliders
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
