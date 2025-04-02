$(function () {
  sliderCategory();
  slidershowImg();
  sliderRelate();
  effectCartDetail();
});
let sliderCategory = () => {
  $(".menu-category .owl-carousel").owlCarousel({
    margin: 0,
    nav: false,
    dots: false,
    lazyLoad: true,
    autoWidth: true,
  });
};

let slidershowImg = () => {
  $(".box-showImg .owl-carousel").owlCarousel({
    margin: 0,
    nav: true,
    dots: false,
    mouseDrag: false,
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
      1181: {
        items: 5,
      },
    },
  });
};
let sliderRelate = () => {
  $(".box-relate .owl-carousel").owlCarousel({
    margin: 0,
    nav: false,
    loop: true,
    dots: false,
    lazyLoad: true,
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
      1200: {
        items: 5,
      },
    },
  });
  $(".box-relate .o-prev").click(function () {
    $(this).closest(".box-relate").find(".owl-prev").click();
  });
  $(".box-relate .o-next").click(function () {
    $(this).closest(".box-relate").find(".owl-next").click();
  });
};
let effectCartDetail = () => {
  $("#Add-to-Product").on("click", function () {
    var cart = $("#boxOfProduct img");
    var imgtodrag = $(".zoom-box img").eq(0);
    var quantity = parseInt($(".btn-group.quantity input").val()) || 1;
    var imgclone;
    if (imgtodrag) {
      if (imgtodrag && $(window).width() > 1023) {
        var imgclone = imgtodrag
          .clone()
          .offset({
            top: imgtodrag.offset().top,
            left: imgtodrag.offset().left,
          })
          .css({
            opacity: "0.9",
            width: imgtodrag.width(),
            height: imgtodrag.height(),
            position: "absolute",
            "z-index": "1031",
          })
          .appendTo($("body"))
          .animate(
            {
              top: cart.offset().top + 10,
              left: cart.offset().left + 10,
              width: 20,
              height: 23.38,
            },
            1000,
            "easeInOutExpo"
          );

        setTimeout(function () {
          cart.effect(
            "shake",
            {
              times: 2,
              distance: 7,
            },
            200
          );
        }, 1500);

        imgclone.animate(
          {
            width: 0,
            height: 0,
          },
          function () {
            $(this).detach();

            // ฟังก์ชันเมื่อย้ายตำแหน่ง เสร็จต้องการให้ทำอะไร
            // สามารถนำไปประยุกต์ เพิ่มสินค้าในตะกร้าสินค้า ด้วย ajax
            // alert('เพิ่มสินค้า');

            // เพิ่มเลขตะกร้าตอนกด
            $("#boxOfProduct .badge-pill").html(
              parseInt($("#boxOfProduct .badge-pill").html() || 0) + quantity
            );
            $(".btn-group.quantity button.btn.btn-delete").addClass("disabled");
            $(".btn-group.quantity input").val(1);
          }
        );
      } else {
        // เพิ่มเลขตะกร้าตอนกด
        $("#boxOfProduct .badge-pill").html(
          parseInt($("#boxOfProduct .badge-pill").html() || 0) + quantity
        );
        $(".btn-group.quantity button.btn.btn-delete").addClass("disabled");
        $(".btn-group.quantity input").val(1);

        Swal.fire({
          icon: "success",
          title: "สำเร็จ",
          showConfirmButton: false,
          timer: 2000,
        });
      }
    }
  });
};
