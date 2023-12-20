(function($){
    $('document').ready(function(){
        const swiper = new Swiper('.swiper-ecommerce',{
            autoplay: false,
            slidesPerView: 2,
            loop: true,
            spaceBetween: 30,
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