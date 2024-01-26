(function($){
    $('document').ready(function(){
        const swiper2 = new Swiper('.swiper-ecommerce',{
            autoplay: false,
            slidesPerView: 1,
            loop: true,
            spaceBetween: 30,
            breakpoints: {
                870: {
                    slidesPerView: 2
                }
            },
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