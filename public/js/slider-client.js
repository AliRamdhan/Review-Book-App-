const swiper = new Swiper('.swiper', {
    loop: true,
    grabCursor: true,
    // centeredSlides: true,
    slidesPerView: 'auto',
    spaceBetween: 15,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
