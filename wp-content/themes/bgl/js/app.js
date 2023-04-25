window.onload = function () {
    setTimeout(function () {
        // code below this line
        var featuredCasessSlider = new Swiper(".featured-cases__slider", {
            autoplay: {
                delay: 8000,
                disableOnInteraction: false,
            },
            effect: 'fade',
            loop: true,
            pagination: {
                el: ".featured-cases__slider_pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".featured-cases__slider_next",
                prevEl: ".featured-cases__slider_prev",
            },
        });

        var recentAwards = new Swiper(".recent-awards__slider", {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: ".recent-awards__slider_next",
                prevEl: ".recent-awards__slider_prev",
            },
        });

        // code above this line

    }, 100);
}