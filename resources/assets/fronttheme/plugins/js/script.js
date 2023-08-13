
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
$(document).keyup(function(e) {
  $('.mobile-mega-menu').removeClass('open');
  $('.close-sidebar').removeClass('active');
  $('body').removeClass('overflow');
});



$(document).ready(function () {
    //Header
    $('[data-search]').on({
        focus: function() {
          $('.search-box__dropdown').addClass('search-box__dropdown--active');
        },
        blur: function() {
          $('.search-box__dropdown').removeClass('search-box__dropdown--active');
        }
    });

    // $('[data-menu-link]').click(function () {
    //     // $('[data-menu-toggle]').removeClass('active');
    //     $(this).siblings('[data-menu-toggle]').toggleClass('active');
    // })

    // Banner slider
    $('.banner__slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows:false,
      autoplay:true,
      dots:true,
      cssEase: 'linear',
      fade:true,
    });

    var title = $('.banner__content-title');
    var subtitle = $('.banner__content-sub-title');
    var text = $('.banner__content-text');
    var btn = $('.banner__content-btn');

    if ($('.slick-slide').hasClass('slick-active')) {
      title.addClass('animate__animated animate__flipInX');
      subtitle.addClass('animate__animated animate__lightSpeedInLeft');
      text.addClass('animate__animated animate__lightSpeedInRight');
      btn.addClass('animate__animated animate__fadeInDownBig');
    } else{
      title.removeClass('animate__animated animate__flipInX');
      subtitle.removeClass('animate__animated animate__lightSpeedInLeft');
      text.removeClass('animate__animated animate__lightSpeedInRight');
      btn.removeClass('animate__animated animate__fadeInDownBig');
    }

    $('.banner__slider').on('beforeChange', function(){
      title.removeClass('animate__animated animate__flipInX').hide();
      subtitle.removeClass('animate__animated animate__lightSpeedInLeft').hide();
      text.removeClass('animate__animated animate__lightSpeedInRight').hide();
      btn.removeClass('animate__animated animate__fadeInDownBig').hide();
      setTimeout(() => {
        title.addClass('animate__animated animate__flipInX').show();
        subtitle.addClass('animate__animated animate__lightSpeedInLeft').show();
        text.addClass('animate__animated animate__lightSpeedInRight').show();
        btn.addClass('animate__animated animate__fadeInDownBig').show();
      }, 500);
    });


    // Deal slider
    $('.deal-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows:false,
      autoplay:true,
      dots:true
    });

    // Deal slider
    $('.best-seller-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow: '.best-seller-right',
      prevArrow: '.best-seller-left',
      dots:false ,
      rows: 4,
    });

    // feature Items slider
    $('.feature__items-inner').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 4,
      arrows:true,
      dots:false,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            }
        },
        {
            breakpoint: 420,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
        }
    ]
    });

      // top-rated Items slider
    $('.top-rated__items-inner').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 4,
      nextArrow: '.top-rated-right',
      prevArrow: '.top-rated-left',
      arrows:true,
      dots:false,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            }
        },
        {
            breakpoint: 420,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
        }
    ]
    });
    // bundle Items slider
    $('.bundle__items-inner').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 4,
      nextArrow: '.bundle-right',
      prevArrow: '.bundle-left',
      arrows:true,
      dots:false,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            }
        },
        {
            breakpoint: 420,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
        }
    ]
    });

    // neckbands Items slider
    $('.neckbands__items-inner').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 4,
      nextArrow: '.neckbands-right',
      prevArrow: '.neckbands-left',
      arrows:true,
      dots:false,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            }
        },
        {
            breakpoint: 420,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
        }
    ]
    });

    // best-under Items slider
    $('.best-under__items-inner').slick({
      infinite: true,
      slidesToShow: 6,
      slidesToScroll: 4,
      nextArrow: '.best-under-right',
      prevArrow: '.best-under-left',
      arrows:true,
      dots:false,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            }
        },
        {
            breakpoint: 420,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
        }
    ]
    });

    // best-deals Items slider
    $('.best-deals__items-inner').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 4,
      nextArrow: '.best-deal-right',
      prevArrow: '.best-deal-left',
      arrows:true,
      dots:false,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            }
        },
        {
            breakpoint: 420,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
        }
    ]
    });

    // Flash Deal Items slider
    $('.flashdeal__items-inner').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 4,
      nextArrow: '.flashdeal-right',
      prevArrow: '.flashdeal-left',
      arrows:true,
      dots:false,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            }
        },
        {
            breakpoint: 420,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
        }
    ]
    });

    // Recent Items slider
    $('.recent__items-inner').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 4,
      nextArrow: '.recent-right',
      prevArrow: '.recent-left',
      arrows:true,
      dots:false,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            }
        },
        {
            breakpoint: 420,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
        }
    ]
    });
});

// tabs
$(function() {
  $('.feature__tabs a').click(function() {
    $('.feature__items-inner').slick('refresh');

    // Check for active
    $('.feature__tabs li').removeClass('active');
    $(this).parent().addClass('active');

    // Display active tab
    let currentTab = $(this).attr('href');
    $('.feature__items .feature__items-inner').hide();
    $(currentTab).show();

    return false;
  });
});


// $(function () {
// 	var austDay = new Date();
// 	austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
// 	$('#defaultCountdown').countdown({until: austDay});
// 	$('#year').text(austDay.getFullYear());
// });





// $(selector).countdown({until: liftoffTime, format: 'dHM'});


// timer 1
/*(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  let birthday = "Sep 30, 2021 00:00:00",
      countDown = new Date(birthday).getTime(),
      x = setInterval(function() {

        let now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          let headline = document.getElementById("headline"),
              countdown = document.getElementById("countdown"),
              content = document.getElementById("content");

          headline.innerText = "Sorry sale over";
          countdown.style.display = "none";
          content.style.display = "block";

          clearInterval(x);
        }
        //seconds
      }, 0)
  }());*/


 /* // timer 2
  (function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;

    let birthday = "jun 12, 2021 10:00:00",
        countDown = new Date(birthday).getTime(),
        x = setInterval(function() {

          let now = new Date().getTime(),
              distance = countDown - now;

          document.getElementById("days1").innerText = Math.floor(distance / (day)),
            document.getElementById("hours1").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes1").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds1").innerText = Math.floor((distance % (minute)) / second);

          //do something later when date is reached
          if (distance < 0) {
            let headline1 = document.getElementById("headline1"),
                countdown1 = document.getElementById("countdown1"),
                content1 = document.getElementById("content1");

            headline1.innerText = "Sorry sale over";
            countdown1.style.display = "none";
            content1.style.display = "block";

            clearInterval(x);
          }
          //seconds
        }, 0)
    }());*/

  /*// timer 3
  (function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;

    let birthday = "mar 7, 2021 02:30:00",
        countDown = new Date(birthday).getTime(),
        x = setInterval(function() {

          let now = new Date().getTime(),
              distance = countDown - now;

          document.getElementById("days2").innerText = Math.floor(distance / (day)),
          document.getElementById("hours2").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes2").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds2").innerText = Math.floor((distance % (minute)) / second);

          //do something later when date is reached
          if (distance < 0) {
            let headline2 = document.getElementById("headline2"),
                countdown2 = document.getElementById("countdown2"),
                content2 = document.getElementById("content2");

            headline2.innerText = "Sorry sale over";
            countdown2.style.display = "none";
            content2.style.display = "block";

            clearInterval(x);
          }
          //seconds
        }, 0)
    }());

    $('.main-menu').mobileMegaMenu({
			changeToggleText: false,
			enableWidgetRegion: true,
			prependCloseButton: true,
			stayOnActive: true,
			// toogleTextOnClose: 'Close Menu',
			menuToggle: 'main-menu-toggle'
    });
*/