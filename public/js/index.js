$(function () {
  sliderNewproduct();
  boxSupplier();
});
let sliderNewproduct = () => {
  $(".box-newproduct .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    lazyLoad: true,
    // 		autoplay:true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    navText: [
      "<div class='b-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></div>",
      "<div class='b-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></div>",
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
    },
    afterAction: function (current) {
      current.find("video").get(0).play();
    },
  });
  $(".box-newproduct .owl-carousel .owl-item").on("mouseenter", function (e) {
    $(this).closest(".owl-carousel").trigger("stop.owl.autoplay");
  });
  $(".box-newproduct .owl-carousel .owl-item").on("mouseleave", function (e) {
    $(this).closest(".owl-carousel").trigger("play.owl.autoplay", [3000]);
  });
};
let boxSupplier = () => {
  $(".box-supplier-brand .owl-carousel").owlCarousel({
    dots: false,
    // 		autoWidth:true,
    lazyLoad: true,
    nav: true,
    margin: 10,
    lazyLoad: true,
    navText: [
      "<div class='b-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></div>",
      "<div class='b-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></div>",
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 4,
      },
      769: {
        items: 5,
      },
      1024: {
        items: 7,
      },
      1200: {
        items: 8,
      },
    },
  });
  $(".box-supplier-brand .o-prev").click(function () {
    $(this).closest(".box-supplier-brand").find(".owl-prev").click();
  });
  $(".box-supplier-brand .o-next").click(function () {
    $(this).closest(".box-supplier-brand").find(".owl-next").click();
  });
};
