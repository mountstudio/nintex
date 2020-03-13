let fCarousel = $('#fCarousel'),
    sCarousel = $('.slick-carousel');

fCarousel.owlCarousel({
    loop: true,
    items: 1,
    margin: 10,
    nav: true,
    dots: false,

});
sCarousel.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    isfinite: true,
    speed: 300,
    vertical: true,
    verticalSwiping: true,
    arrows: false
})

fCarousel.on('click','.owl-next', function () {
    sCarousel.slick('slickNext');
});
fCarousel.on('click','.owl-prev', function () {
    sCarousel.slick('slickPrev');
});

sCarousel.on('click','.slick-next', function () {
    fCarousel.trigger('next.owl.carousel');
});
sCarousel.on('click','.slick-prev', function () {
    fCarousel.trigger('prev.owl.carousel');
});


fCarousel.on('dragged.owl.carousel', function (e) {

    if (e.relatedTarget.state.direction == 'left') {
        sCarousel.slick('slickNext');
    } else {
        sCarousel.slick('slickPrev');
    }

});
