(function($){
    $('document').ready(function(){
        const swiperP = new Swiper('.swiper-projects',{
            autoplay: false,
            slidesPerView: 1,
            loop: true,
            spaceBetween: 250,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

        })
    })
})(jQuery);