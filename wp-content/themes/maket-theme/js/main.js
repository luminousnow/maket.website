$(document).ready(function () {
  var arrow_1 = $('.manual-arrow_1');
  var arrow_2 = $('.manual-arrow_2');
  var arrow_3 = $('.manual-arrow_3');
  var manual_img = $('.manual-block__img');

  if ($(window).width() < 992) {
    $('.show-order').on('click', function () {
      $('body').toggleClass('lock');
      $('.overlay').show();
      $('.overlay').css('overflow', 'scroll');
    });
    $('.popup_close').on('click', function () {
      $('body').removeClass('lock');
      $('.overlay').hide();
    });
  } else {
    $('.show-order').on('click', function () {
      $('.overlay').show();
    });
    $('.popup_close').on('click', function () {
      $('.overlay').hide();
    });
  }

  if ($(window).width() < 992) {
    $('.show-politic').on('click', function () {
      $('body').toggleClass('lock');
      $('.overlay-politic').show();
      $('.overlay-politic').css('overflow', 'scroll');
    });
    $('.popup_close-politic').on('click', function () {
      $('body').removeClass('lock');
      $('.overlay-politic').hide();
    });
  } else {
    $('.show-politic').on('click', function () {
      $('.overlay-politic').show();
    });
    $('.popup_close-politic').on('click', function () {
      $('.overlay-politic').hide();
    });
  }

  $('.slider').slick({
    arrows: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    draggable: false,
    swipe: false,
    prevArrow: '<div class="slider-left"></div>',
    nextArrow: '<div class="slider-right"></div>',
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          arrows: true,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          swipe: true,
          arrows: true,
          autoplay: false,
          infinite: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          swipe: true,
          arrows: true,
          autoplay: false,
          infinite: true,
        },
      },
    ],
  });

  $('.slider-block__img').slick({
    dots: true,
    arrows: false,
    swipe: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          swipe: false,
          autoplay: false,
          arrows: false,
          dots: false,
          infinite: true,
        },
      },
    ],
  });

  manual_img.hover(function () {
    arrow_1.toggleClass('manual-arrow_1-active');
    arrow_2.toggleClass('manual-arrow_2-active');
    arrow_3.toggleClass('manual-arrow_3-active');
  });

  $('.input-phone').mask('+7 (999) 999-9999', { autoclear: false });

  // $('form').submit(function (event) {
  //   event.preventDefault();
  //   $.ajax({
  //     type: 'POST',
  //     url: 'mailer/smart.php',
  //     data: $(this).serialize(),
  //   }).done(function () {
  //     $(this).find('input').val('');
  //     $('.overlay').hide();
  //     $('.overlay-message').show();
  //     setTimeout(function () {
  //       $('.overlay-message').hide();
  //     }, 3000);
  //     $('form').trigger('reset');
  //   });
  //   return false;
  // });

  new WOW().init();
});
