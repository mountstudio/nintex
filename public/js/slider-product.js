let fCarousel = $('.slick-one-item'),
    sCarousel = $('.slick-five-item');

fCarousel.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    isfinite: false,
    speed: 300,
});
sCarousel.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    isfinite: false,
    speed: 300,
    vertical: true,
    verticalSwiping: true,
    centerMode: true,
    centerPadding: '40px',
    arrows: false
});

fCarousel.on('click','.slick-next' , function () {
    sCarousel.slick('slickNext');
});
fCarousel.on('click', '.slick-prev' , function () {
    sCarousel.slick('slickPrev');
});

sCarousel.slick('setPosition', function () {
    fCarousel.slick('')
});

fCarousel.on('swipe', function (event, slick, direction) {
    console.log(event, slick, direction);
    if(direction == 'right') {
        sCarousel.slick('slickPrev');
    } else {
        sCarousel.slick('slickNext');
    }
});
