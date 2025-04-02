$(function () {
  (function (e) {
    e.fn.visible = function (t, n, r) {
      var i = e(this).eq(0),
        s = i.get(0),
        o = e(window),
        u = o.scrollTop(),
        a = u + o.height(),
        f = o.scrollLeft(),
        l = f + o.width(),
        c = i.offset().top,
        h = c + i.height(),
        p = i.offset().left,
        d = p + i.width(),
        v = t === true ? h : c,
        m = t === true ? c : h,
        g = t === true ? d : p,
        y = t === true ? p : d,
        b = n === true ? s.offsetWidth * s.offsetHeight : true,
        r = r ? r : "both";
      if (r === "both") return !!b && m <= a && v >= u && y <= l && g >= f;
      else if (r === "vertical") return !!b && m <= a && v >= u;
      else if (r === "horizontal") return !!b && y <= l && g >= f;
    };
  })(jQuery);

  jQuery(window).scroll((event) => {
    jQuery("#firstbox").each(() => {
      if ($("#firstbox").visible(true)) {
        $("body").removeClass("down");
      } else {
        $("body").addClass("down");
      }
    });
  });

  $("#navbarCollapse .box-btn-header #btn-search").click(function () {
    $("#navbarCollapse .form-search").toggleClass("open");
  });
  $("div#navbarCollapse .form-search+.box-shadow").click(function () {
    $("#navbarCollapse .form-search").removeClass("open").find("input").val("");
  });
  $(window).scroll(function () {
    $("#navbarCollapse .form-search").removeClass("open").find("input").val("");
  });

  if ($(window).width() > 1000) {
    $('a[href="#collapseProductType"]').attr("aria-expanded", "true");
    $("#collapseProductType").addClass("show");
  }

  if ($(window).width() >= 768 && $(window).width() <= 1025) {
    window.addEventListener(
      "resize",
      function () {
        formRightSearch();
      },
      false
    );
    formRightSearch();
  }

  sliderBanner();
  sliderProducts();
});
let sliderBanner = () => {
  $(".box-banner .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    lazyLoad: true,
    autoplay: true,
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
  $(".box-banner .owl-carousel .owl-item").on("mouseenter", function (e) {
    $(this).closest(".owl-carousel").trigger("stop.owl.autoplay");
  });
  $(".box-banner .owl-carousel .owl-item").on("mouseleave", function (e) {
    $(this).closest(".owl-carousel").trigger("play.owl.autoplay", [3000]);
  });
};
let sliderProducts = () => {
  $(".box-products .owl-carousel").owlCarousel({
    margin: 10,
    nav: true,
    dots: false,
    lazyLoad: true,
    navText: [
      "<div class='b-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></div>",
      "<div class='b-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></div>",
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      800: {
        items: 3,
      },
      1000: {
        items: 4,
      },
    },
  });
  $(".box-products .o-prev").click(function () {
    $(this).closest(".box-products").find(".owl-prev").click();
  });
  $(".box-products .o-next").click(function () {
    $(this).closest(".box-products").find(".owl-next").click();
  });
};
let formRightSearch = () => {
  right = $("#navbarCollapse .box-btn-header").width() - 35 || 0;
  if (right > 0) {
    $("#navbarCollapse .form-search").css("right", right);
  }
};
