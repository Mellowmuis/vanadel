jQuery(document).ready(function($) {
  $('.Slider').bxSlider({
    mode: 'horizontal',
    minSlides: 1,
    maxSlides: 1,
    startSlide: 0,
    //slideWidth: 1200,
    slideMargin: 0,
    // captions: true,
    pause: 6000,
    auto: true,
    speed: 2000,
    infiniteLoop: true,
    hideControlOnEnd: true,
    touchEnabled: false,
    pager: true,
    controls: true,

    onSliderLoad: function() {
      $('.Slider').css('visibility', 'visible');
    }

  });
});
/*
 * ScrollToFixed
 */
$(document).ready(function() {

  var stickyNavTop = $('.Bot-Nav').offset().top;

  var stickyNav = function() {
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) {
      $('.Bot-Nav').addClass('sticky')
      $('.extra-padding').css("paddingTop", "44px");
    } else {
      $('.Bot-Nav').removeClass('sticky');
      $('.extra-padding').css("paddingTop", "0px");
    }
  };

  stickyNav();

  $(window).scroll(function() {
    if ($(window).width() > 1040) {
      stickyNav();
    } else {

    }
  });
});
$('.totop').click(function() {
  $("html, body").animate({
    scrollTop: 0
  }, 600);
  return false;
});
