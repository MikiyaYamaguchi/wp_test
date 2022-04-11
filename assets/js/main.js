"use strict";

$(function () {
  $(".menu_icon").on("click", function () {
    $(this).toggleClass("active");
    $(".global_nav").slideToggle(200);
  });

  //メインスライド
  $(".main_visual .slick_slider").slick({
    autoplay: true,
    autoplaySpeed: 4000,
    dots: false,
    arrows: false,
    fade: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
  });
});
