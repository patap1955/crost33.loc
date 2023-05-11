import Swiper, {Autoplay, Navigation, Pagination} from 'swiper';

// header swiper
if (document.querySelector(".headerSwiper")) {
    const swiper = new Swiper(".headerSwiper", {
        modules: [Navigation, Pagination, Autoplay],
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        spaceBetween: 30,
        centeredSlides: true,
        // autoplay: {
        //     delay: 20000,
        //     disableOnInteraction: false,
        // },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
}

// partners swiper
if (document.querySelector(".partnersSwiper")) {
    const swiper = new Swiper(".partnersSwiper", {
        modules: [Pagination, Autoplay],
        // slidesPerView: 4,
        spaceBetween: 10,
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: true,
        },
        breakpoints: {
            // when window width is >= 320px
            300: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 3,
            },
            // when window width is >= 480px
            768: {
                slidesPerView: 4,
            },
        }
    });
}

// portfolio swiper

if (document.querySelector(".portfolioSwiper")) {
    const swiper = new Swiper(".portfolioSwiper", {
        modules: [Autoplay],
        spaceBetween: 15,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: true,
        },
        breakpoints: {
            300: {
                slidesPerView: 1,
            },
            361: {
                slidesPerView: 1.5,
            },
            // when window width is >= 480px
            481: {
                slidesPerView: 2.5,
            },
            1024: {
                slidesPerView: 3.5,
            },
        },
    });
}

