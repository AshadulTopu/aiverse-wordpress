/*
 ========= plugin in customization JS documentation ==========================

 * theme name: Aiverse
 * version: 1.0
 * description: Workplace Html5 Template
 * author: softivus
 * author url: 
    ==================================================
    brand section swiper
    testimonials section swiper
    Related post section swiper
    product single page swiper
    Related product section swiper
    wow js 
    odometer
    Magnific Popup video
*/

"user strict";

jQuery(document).ready(function ($) {

  // brand section swiper js
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      420: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });

  // testimonials section swiper js
  var testimonialsSwiper = new Swiper(".testimonialsSwiper", {
    spaceBetween: 30,
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 5500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".ts-swiper-prev",
      prevEl: ".ts-swiper-next",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  // Related post section swiper js
  var RelatedSwiper = new Swiper(".RelatedSwiper", {
    spaceBetween: 24,
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 5500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });

  // product single page swiper
  var productSwiper = new Swiper(".productSwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });
  var productSwiper2 = new Swiper(".productSwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: productSwiper,
    },
  });

  // Related product section swiper js
  var RelatedProductsSwiper = new Swiper(".RelatedProductsSwiper", {
    spaceBetween: 24,
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 5500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".products-button-prev",
      prevEl: ".products-button-next",
    },
    breakpoints: {
      575: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });


  // wow js
  new WOW().init();


  //Odometer
  $(".odometer-item").each(function () {
    $(this).isInViewport(function (status) {
      if (status === "entered") {
        for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
          var el = document.querySelectorAll(".odometer")[i];
          el.innerHTML = el.getAttribute("data-odometer-final");
        }
      }
    });
  });


  /* Magnific Popup video */
  if (document.querySelector(".popupvideo") !== null) {
    $(".popupvideo").magnificPopup({
      disableOn: 300,
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false,
    });
  }


})