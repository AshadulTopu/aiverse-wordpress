
/* 
 ========= main JS documentation ==========================

 * theme name: Aiverse
 * version: 1.0
 * description: Workplace Html5 Template
 * author: softivus
 * author url: 
    ==================================================
    small device navbar
    sticky navbar
    navbar toggle
    back to top
    pre loader
*/
"user strict";

jQuery(document).ready(function ($) {
    // sidebar open close js code
    let navLinks = document.querySelector(".nav-links");
    let menuOpenBtn = document.querySelector("#shownav");
    let menuCloseBtn = document.querySelector("#closenav");
    if (menuOpenBtn) {
        menuOpenBtn.onclick = function () {
            navLinks.style.left = "0";
        }
    }

    if (menuCloseBtn) {
        menuCloseBtn.onclick = function () {
            navLinks.style.left = "-100%";
        }
    }


    // sticky navbar
    window.addEventListener("scroll", function () {
        document.querySelector('header').classList.toggle('sticky', window.scrollY > 0)
    })

    // navbar toggle
    $(".dropdown_menu").on("click", function () {
        $(this).siblings(".dropdown_item").slideToggle();
    });


    // back to top
    var backToTop = $('#back-to-top');
    if (backToTop) {

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                backToTop.addClass('show');
            } else {
                backToTop.removeClass('show');
            }
        });

        backToTop.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, '300');
        });
    }


    // pre loader
    setTimeout(function () {
        $('#preloader').fadeToggle();
    }, 1000);

})