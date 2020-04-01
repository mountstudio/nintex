let fCarousel = $('.slick-one-item'),
    sCarousel = $('.slick-five-item');

fCarousel.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    isfinite: false,
    speed: 300,
    asNavFor: '.slick-five-item'
});
sCarousel.slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    isfinite: false,
    speed: 300,
    vertical: true,
    verticalSwiping: true,
    asNavFor: '.slick-one-item',
    arrows: false
});

// fCarousel.on('click','.slick-next' , function () {
//     sCarousel.slick('slickNext');
// });
// fCarousel.on('click', '.slick-prev' , function () {
//     sCarousel.slick('slickPrev');
// });
//
// sCarousel.slick('setPosition', function () {
//     fCarousel.slick('')
// });
//
// fCarousel.on('swipe', function (event, slick, direction) {
//     console.log(event, slick, direction);
//     if(direction == 'right') {
//         sCarousel.slick('slickPrev');
//     } else {
//         sCarousel.slick('slickNext');
//     }
// });

// slider for slider_card.blade.php

