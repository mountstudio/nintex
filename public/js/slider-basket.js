let fCarousel = $('#fCarousel'),
    sCarousel = $('#sCarousel');

fCarousel.owlCarousel({
    loop: true,
    items: 1,
    margin: 10,
    nav: true,
    dots: false,

});
sCarousel.owlCarousel({
    loop: true,
    items: 4,
    margin: 10,
    nav: true,
    dots: false,
});

fCarousel.on('click','.owl-next', function () {
    sCarousel.trigger('next.owl.carousel');
});
fCarousel.on('click','.owl-prev', function () {
    sCarousel.trigger('prev.owl.carousel');
});

sCarousel.on('click','.owl-next', function () {
    fCarousel.trigger('next.owl.carousel');
});
sCarousel.on('click','.owl-prev', function () {
    fCarousel.trigger('prev.owl.carousel');
});

/*
fCarousel.on('dragged.owl.carousel', function (e) {

    if (e.relatedTarget.state.direction == 'left') {
        sCarousel.trigger('next.owl.carousel');
    } else {
        sCarousel.trigger('prev.owl.carousel');
    }

});
*/
