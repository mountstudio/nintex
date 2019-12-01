<script>
    let sync1 = $('#sync1'),// получаем id sync1 и присваеваем переменной sync1
        sync2 = $('#sync2'),// получаем id sync2 и присваеваем переменной sync2
        sync3 = $('#sync3'),
        sync4 = $('#sync4'),
        duration = 300,// милисекунды
        thumbs = 1,// количество item во втором owl carousel
        flag = true,//

        typed1 = new Typed('#typed1', {// element type
            stringsElement: '#typed-strings1',
            typeSpeed: 20,
            backSpeed: 10,
            startDelay: 0,
        }),
        typed2 = new Typed('#typed2', {// element type
            stringsElement: '#typed-strings2',
            typeSpeed: 20,
            backSpeed: 10,
            startDelay: 0,
        }),
        typed3 = new Typed('#typed3', {// element type
            stringsElement: '#typed-strings3',
            typeSpeed: 20,
            backSpeed: 10,
            startDelay: 0,
        }),
        h2First = new Typed('#h2-1',{// element type
            stringsElement: '#h2-strings1',
            typeSpeed: 20,
            backSpeed: 10,
            startDelay: 0,
            smartBackspace: true,
        }),
        h2Second = new Typed('#h2-2',{// element type
            stringsElement: '#h2-strings2',
            typeSpeed: 20,
            backSpeed: 10,
            startDelay: 0,
            smartBackspace: true,

        }),
        h2Third = new Typed('#h2-3',{// element type
            stringsElement: '#h2-strings3',
            typeSpeed: 20,
            backSpeed: 10,
            startDelay: 0,
            smartBackspace: true,

        });
    sync3.owlCarousel({
        loop: true,
        items : thumbs,
        margin:10,
        mouseDrag: false,
        touchDrag: false,
        dots: false,
        animateIn: 'tada',
        animateOut: 'fadeOut',
    })

    function slideClose(){
        $('#left').addClass('left').removeClass('left-active');//функция закрытия шторок
        $('#right').addClass('right').removeClass('right-active');//функция закрытия шторок
        $('#left1').addClass('left').removeClass('left-active');//функция закрытия шторок
        $('#right1').addClass('right').removeClass('right-active');//функция закрытия шторок
    }

    sync1.on('click', '.owl-next', function () {// если кликнуть по кнопке которая пренадлежит sync1 next то
        h2First.reset();
        typed1.reset();
        h2Second.reset();
        typed2.reset();
        h2Third.reset();
        typed3.reset();

        $('#left').addClass('left-active').removeClass('left');// функия открытия шторок
        $('#right').addClass('right-active').removeClass('right');// функия открытия шторок
        sync2.trigger('next.owl.carousel');// то тогда сработает функция next во втором owl carousel

        setTimeout(function() {
            slideClose();
        }, 1000);
        $('#left1').addClass('left-active').removeClass('left');// функия открытия шторок
        $('#right1').addClass('right-active').removeClass('right');// функия открытия шторок
        sync4.trigger('next.owl.carousel');// то тогда сработает функция next во втором owl carousel

        setTimeout(function() {
            slideClose();
        }, 1000);

        sync3.trigger('next.owl.carousel');


    });
    sync1.on('click', '.owl-prev', function () {// если кликнуть по кнопке которая пренадлежит sync1 prev то
        h2First.reset();
        typed1.reset();
        h2Second.reset();
        typed2.reset();
        h2Third.reset();
        typed3.reset();
        $('#left').addClass('left-active').removeClass('left');// функия открытия шторок
        $('#right').addClass('right-active').removeClass('right');// функия открытия шторок
        sync2.trigger('prev.owl.carousel');// то тогда сработает функция next во втором owl carousel

        setTimeout(function() {
            slideClose();
        }, 1000);
        $('#left1').addClass('left-active').removeClass('left');// функия открытия шторок
        $('#right1').addClass('right-active').removeClass('right');// функия открытия шторок
        sync4.trigger('prev.owl.carousel');// то тогда сработает функция next во втором owl carousel

        setTimeout(function() {
            slideClose();
        }, 1000);
        sync3.trigger('prev.owl.carousel');

    });

    // Start Carousel
    sync1.owlCarousel({
        // center : true,
        loop: true,// циклировать карусельку
        items : 1,// отоборажаемые элементы карусели
        margin:0,// отступы
        animateOut: 'fadeOut',
        nav : true,// включить элементы навигации
        navText : ["<img src=\"img/Arrow_left.svg\" alt=\"\">","<img src=\"img/Arrow_right.svg\" alt=\"\">"],// отображает стрелочки навигации
        dots: false,// выкл точки навигации
        mouseDrag: false,
        touchDrag: false,


    })
        .on('dragged.owl.carousel', function (e) {
            if (e.relatedTarget.state.direction == 'left') {
                h2First.reset();//reset typing head text
                typed1.reset();//reset typing text
                h2Second.reset();//reset typing head text
                typed2.reset();//reset typing text
                h2Third.reset();//reset typing head text
                typed3.reset();//reset typing text
                $('#left').addClass('left-active').removeClass('left');// функия открытия шторок
                $('#right').addClass('right-active').removeClass('right');// функия открытия шторок
                sync2.trigger('next.owl.carousel');

                setTimeout(function() {
                    slideClose();

                }, 1000);
                $('#left1').addClass('left-active').removeClass('left');// функия открытия шторок
                $('#right1').addClass('right-active').removeClass('right');// функия открытия шторок
                sync4.trigger('next.owl.carousel');// то тогда сработает функция next во втором owl carousel

                setTimeout(function() {
                    slideClose();
                }, 1000);

                sync3.trigger('next.owl.carousel');
            } else {
                h2First.reset();
                typed1.reset();
                h2Second.reset();
                typed2.reset();
                h2Third.reset();
                typed3.reset();

                $('#left').addClass('left-active').removeClass('left');// функия открытия шторок
                $('#right').addClass('right-active').removeClass('right');// функия открытия шторок

                sync2.trigger('prev.owl.carousel');
                setTimeout(function() {
                    slideClose();
                }, 1000);

                $('#left1').addClass('left-active').removeClass('left');// функия открытия шторок
                $('#right1').addClass('right-active').removeClass('right');// функия открытия шторок
                sync4.trigger('prev.owl.carousel');// то тогда сработает функция next во втором owl carousel

                setTimeout(function() {
                    slideClose();
                }, 1000);
                sync3.trigger('prev.owl.carousel');
            }
        });


    sync2.owlCarousel({
        // center: true,
        loop: true,
        items : thumbs,
        margin:10,
        mouseDrag: false,
        touchDrag: false,
        dots: false,
        animateOut: 'fadeOut',


    })

        .on('click', '.owl-item', function() {

            let i = $(this).index()-(thumbs);
            $('#left').addClass('left-active').removeClass('left');// функия открытия шторок
            $('#right').addClass('right-active').removeClass('right');// функия открытия шторок

            sync2.trigger('to.owl.carousel', [i, duration, true]);
            setTimeout(function() {
                slideClose();
            }, 1000);

            h2First.reset();
            typed1.reset();
            h2Second.reset();
            typed2.reset();
            h2Third.reset();
            typed3.reset();
            sync3.trigger('to.owl.carousel', [i, duration, true])
            sync1.trigger('to.owl.carousel', [i, duration, true]);

        })
        .on('changed.owl.carousel', function (e) {
            if (!flag) {
                sync1.trigger('to.owl.carousel', [e.item.index-thumbs, duration, true]);
                flag = false;
            }
        });
    sync4.owlCarousel({
        // center: true,
        loop: true,
        items : thumbs,
        margin:10,
        mouseDrag: false,
        touchDrag: false,
        dots: false,
        animateOut: 'fadeOut',


    })
        .on('click', '.owl-item', function() {

            let i = $(this).index()-(thumbs);
            $('#left').addClass('left-active').removeClass('left');// функия открытия шторок
            $('#right').addClass('right-active').removeClass('right');// функия открытия шторок

            sync4.trigger('to.owl.carousel', [i, duration, true]);
            setTimeout(function() {
                slideClose();
            }, 1000);

            h2First.reset();
            typed1.reset();
            h2Second.reset();
            typed2.reset();
            h2Third.reset();
            typed3.reset();
            sync3.trigger('to.owl.carousel', [i, duration, true])
            sync1.trigger('to.owl.carousel', [i, duration, true]);

        })
        .on('changed.owl.carousel', function (e) {
            if (!flag) {
                sync1.trigger('to.owl.carousel', [e.item.index-thumbs, duration, true]);
                flag = false;
            }
        });


</script>

<script>
    let car1 = $('#carousel1'),
        car2 = $('#carousel2'),
        durations = 300,
        thumb = 1,
        key = true;
    car1.on('click', '.owl-next', function () {// если кликнуть по кнопке которая пренадлежит sync1 next то

        car2.trigger('next.owl.carousel')// то тогда сработает функция next во втором owl carousel

    });
    car1.on('click', '.owl-prev', function () {// если кликнуть по кнопке которая пренадлежит sync1 prev то

        car2.trigger('prev.owl.carousel')// то тогда сработает функция next во втором owl carousel

    });

    // Start Carousel
    car1.owlCarousel({
        // center : true,
        loop: true,// циклировать карусельку
        items : 1,// отоборажаемые элементы карусели
        margin:0,// отступы
        animateOut: 'fadeOut',
        nav : true,// включить элементы навигации
        navText : ["<img src=\"img/Arrow_left.svg\" alt=\"\">","<img src=\"img/Arrow_right.svg\" alt=\"\">"],// отображает стрелочки навигации
        dots: false,// выкл точки навигации
        mouseDrag: false,
        touchDrag: false,
    })
        .on('dragged.owl.carousel', function (e) {
            if (e.relatedTarget.state.direction == 'left') {
                car2.trigger('next.owl.carousel');
            } else {
                car2.trigger('prev.owl.carousel');
            }
        });


    car2.owlCarousel({
        // center: true,
        loop: true,
        items : thumb,
        margin:10,
        mouseDrag: false,
        touchDrag: false,
        dots: false,
        animateOut: 'fadeOut',


    })
        .on('click', '.owl-item', function() {

            let i = $(this).index()-(thumb);


            car2.trigger('to.owl.carousel', [i, durations, true]);

            car1.trigger('to.owl.carousel', [i, durations, true]);

        })
        .on('changed.owl.carousel', function (e) {
            if (!key) {
                car1.trigger('to.owl.carousel', [e.item.index-thumb, durations, true]);
                key = false;
            }
        });
</script>
