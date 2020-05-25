let fCarousel = $('.slick-one-item'),
    sCarousel = $('.slick-five-item');

fCarousel.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    speed: 300,
    prevArrow: '<button type="button" class="slick-prev"><img src="../img/Arrow_left.svg"></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="../img/Arrow_right.svg"></button>',
    asNavFor: '.slick-five-item'
});
sCarousel.slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    infinite: false,
    speed: 300,
    vertical: true,
    asNavFor: '.slick-one-item',
    arrows: false
});
$( '.slick-five-item' ).on("click", ".slick-slide", function () {
    let actIndex = $(this).attr('data-slick-index');
    let slider = $( '.slick-one-item' );
    slider[0].slick.slickGoTo(parseInt(actIndex));
});
