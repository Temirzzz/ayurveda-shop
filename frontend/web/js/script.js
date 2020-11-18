$(".mycard").hover(function () {
  let accord = $(this).children(".card-body");
  accord.slideToggle();
});

$(".main__menu_first").on("click", function () {
  let menuAccord = $(this).parent().children(".menu__body");
  let arrow = $(this).children("img").toggleClass("rot");
  menuAccord.slideToggle();
});

var swiper = new Swiper(".swiper-container");
