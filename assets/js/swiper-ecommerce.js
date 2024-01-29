
(function($){
    $('document').ready(function(){
        const swiper2 = new Swiper('.swiper-ecommerce',{
            autoplay: false,
            slidesPerView: 1,
            autoHeight: true,
            loop: true,
            spaceBetween: 30,
            breakpoints: {
                1200: {
                    slidesPerView: 2
                },

            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

        })
    })
})(jQuery);
