$(document).ready(function () {
    var swiperIndex = new Swiper(".slider-index", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoHeight: true,
        breakpoints: {
            992: {
                slidesPerView: 2,
                spaceBetween: 15,
            }
        }
    });


    const reelsSlider = document.querySelector(".popular-reels");
    const nextReelsSlider = reelsSlider.querySelector('.swiper-button-next')
    const prevReelsSlider = reelsSlider.querySelector('.swiper-button-prev')
    const paginationReelsSlider = reelsSlider.querySelector('.swiper-pagination')
    const swiper = new Swiper(reelsSlider.querySelector(".swiper"), {
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 8,
        breakpoints: {
            992: {
                slidesPerView: 3,
                spaceBetween: 16
            },
            1200: {
                slidesPerView: 4
            }
        },
        navigation: {
            nextEl: nextReelsSlider,
            prevEl: prevReelsSlider,
        },
        pagination: {
            el: paginationReelsSlider,
            type: "progressbar"
        },
    });


    const efirsSlider = document.querySelector(".index-efirs");
    const nextefirsSlider = efirsSlider.querySelector('.swiper-button-next')
    const prevefirsSlider = efirsSlider.querySelector('.swiper-button-prev')
    const paginationefirsSlider = efirsSlider.querySelector('.swiper-pagination')
    const swiperefirs = new Swiper(efirsSlider.querySelector(".swiper"), {
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 8,
        breakpoints: {
            992: {
                slidesPerView: 2,
                spaceBetween: 16
            }
        },
        navigation: {
            nextEl: nextefirsSlider,
            prevEl: prevefirsSlider,
        },
        pagination: {
            el: paginationefirsSlider,
            type: "progressbar"
        },
    });

    $(".js-open-menu").on("click", function () {
        $("body").addClass("active-menu")
    });

    $(".up-menu").on("click", function () {
        $(".menu-mobile-wrapper").animate({ scrollTop: 0 }, 400);
    });

    $(".js-close-menu").on("click", function () {
        $("body").removeClass("active-menu")
    });
});


