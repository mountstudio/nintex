let fCarousel = $('.slick-one-item'),
    sCarousel = $('.slick-five-item');

fCarousel.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    speed: 300,
    asNavFor: '.slick-five-item'
});
sCarousel.slick({
    slidesToShow: 8,
    slidesToScroll: 1,
    infinite: false,
    speed: 300,
    vertical: true,
    asNavFor: '.slick-one-item',
    arrows: false
});
