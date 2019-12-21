<script>
   let carNum1 = $('#carNum1'),// получаем id sync1 и присваеваем переменной sync1
       carNum2 = $('#carNum2'),// получаем id sync2 и присваеваем переменной sync2
       carNum3 = $('#carNum3'),
        duration = 300,// милисекунды
        thumbS = 1,// количество item во втором owl carousel
        flagy = true,//

        type1 = new Typed('#type1', {// element type
            stringsElement: '#type-strings1',
            typeSpeed: 20,
            backSpeed: 10,
            startDelay: 0,
            showCursor: false,
        }),
        type2 = new Typed('#type2', {// element type
            stringsElement: '#type-strings2',
            typeSpeed: 20,
            backSpeed: 10,
            startDelay: 0,
            showCursor: false,
        }),
        type3 = new Typed('#type3', {// element type
            stringsElement: '#type-strings3',
            typeSpeed: 20,
            backSpeed: 10,
            startDelay: 0,
            showCursor: false,
        }),
        hFirst = new Typed('#h-1',{// element type
            stringsElement: '#h-strings1',
            typeSpeed: 20,
            backSpeed: 10,
            startDelay: 0,
            smartBackspace: true,
            showCursor: false,
        }),
        hSecond = new Typed('#h-2',{// element type
            stringsElement: '#h-strings2',
            typeSpeed: 20,
            backSpeed: 10,
            startDelay: 0,
            smartBackspace: true,
            showCursor: false,

        }),
        hThird = new Typed('#h-3',{// element type
            stringsElement: '#h-strings3',
            typeSpeed: 20,
            backSpeed: 10,
            startDelay: 0,
            smartBackspace: true,
            showCursor: false,

        });

   function animationClose(){
       $('#left').addClass('left').removeClass('left-active');//функция закрытия шторок
       $('#right').addClass('right').removeClass('right-active');//функция закрытия шторок
       $('#left1').addClass('left').removeClass('left-active');//функция закрытия шторок
       $('#right1').addClass('right').removeClass('right-active');//функция закрытия шторок
   }

   carNum1.on('click', '.owl-next', function () {// если кликнуть по кнопке которая пренадлежит sync1 next то
       hFirst.reset();
       type1.reset();
       hSecond.reset();
       type2.reset();
       hThird.reset();
       type3.reset();

       //this script for img in comp version
       $('#left').addClass('left-active').removeClass('left');// функия открытия шторок
       $('#right').addClass('right-active').removeClass('right');// функия открытия шторок
       carNum2.trigger('next.owl.carousel');// то тогда сработает функция next во втором owl carousel
       setTimeout(function() {
           animationClose();
       }, 1000);
       //end script

       //this script for img in mobile version
       $('#left1').addClass('left-active').removeClass('left');// функия открытия шторок
       $('#right1').addClass('right-active').removeClass('right');// функия открытия шторок
       carNum3.trigger('next.owl.carousel');// то тогда сработает функция next во втором owl carousel
       setTimeout(function() {//анимация открытия шторок
           animationClose();//функция закрытия шторок
       }, 1000);//время анимации закрытия шторок 1 секунда
        //end script

   });
   carNum1.on('click', '.owl-prev', function () {// если кликнуть по кнопке которая пренадлежит sync1 prev то
       h2First.reset();
       typed1.reset();
       h2Second.reset();
       typed2.reset();
       h2Third.reset();
       typed3.reset();
       //this script for img in mobile version
       $('#left').addClass('left-active').removeClass('left');// функия открытия шторок
       $('#right').addClass('right-active').removeClass('right');// функия открытия шторок
       carNum2.trigger('prev.owl.carousel');// то тогда сработает функция next во втором owl carousel
       setTimeout(function() {//анимация открытия шторок
           animationClose();//функция закрытия шторок
       }, 1000);//время анимации закрытия шторок 1 секунда
       //end script

       //this script for img in mobile version
       $('#left1').addClass('left-active').removeClass('left');// функия открытия шторок
       $('#right1').addClass('right-active').removeClass('right');// функия открытия шторок
       carNum3.trigger('prev.owl.carousel');// то тогда сработает функция next во втором owl carousel
       setTimeout(function() {//анимация открытия шторок
           animationClose();//функция закрытия шторок
       }, 1000);//время анимации закрытия шторок 1 секунда
       //end script

   });

   // Start Carousel
   carNum1.owlCarousel({
       // center : true,
       loop: true,// циклировать карусельку
       items : 1,// отоборажаемые элементы карусели
       margin:0,// отступы
       animateIn: 'fadeIn',
       animateOut: 'fadeOut',
       nav : true,// включить элементы навигации
       navText : ["<img src=\"img/Arrow_left.svg\" alt=\"\">","<img src=\"img/Arrow_right.svg\" alt=\"\">"],// отображает стрелочки навигации
       dots: false,// выкл точки навигации
       mouseDrag: false,
       touchDrag: false,


   })
       .on('dragged.owl.carousel', function (e) {
           if (e.relatedTarget.state.direction == 'left') {
               hFirst.reset();//reset typing head text
               type1.reset();//reset typing text
               hSecond.reset();//reset typing head text
               type2.reset();//reset typing text
               hThird.reset();//reset typing head text
               type3.reset();//reset typing text

               //this script for img
               //
               //
               // in comp version
               $('#left').addClass('left-active').removeClass('left');// функия открытия шторок
               $('#right').addClass('right-active').removeClass('right');// функия открытия шторок
               carNum2.trigger('next.owl.carousel');// то тогда сработает функция next во втором owl carousel
               setTimeout(function() {
                   animationClose();
               }, 1000);
               //end script

               //this script for img in comp version
               $('#left').addClass('left-active').removeClass('left');// функия открытия шторок
               $('#right').addClass('right-active').removeClass('right');// функия открытия шторок
               carNum3.trigger('next.owl.carousel');// то тогда сработает функция next во втором owl carousel
               setTimeout(function() {
                   animationClose();
               }, 1000);
               //end script

           } else {
               hFirst.reset();
               type1.reset();
               hSecond.reset();
               type2.reset();
               hThird.reset();
               type3.reset();

               //this script for img in mobile version
               $('#left1').addClass('left-active').removeClass('left');// функия открытия шторок
               $('#right1').addClass('right-active').removeClass('right');// функия открытия шторок
               carNum2.trigger('prev.owl.carousel');// то тогда сработает функция next во втором owl carousel
               setTimeout(function() {//анимация открытия шторок
                   animationClose();//функция закрытия шторок
               }, 1000);//время анимации закрытия шторок 1 секунда
               //end script

               //this script for img in mobile version
               $('#left1').addClass('left-active').removeClass('left');// функия открытия шторок
               $('#right1').addClass('right-active').removeClass('right');// функия открытия шторок
               carNum3.trigger('prev.owl.carousel');// то тогда сработает функция next во втором owl carousel
               setTimeout(function() {//анимация открытия шторок
                   animationClose();//функция закрытия шторок
               }, 1000);//время анимации закрытия шторок 1 секунда
               //end script
           }
       });


   carNum2.owlCarousel({
       // center: true,
       loop: true,
       items : thumbS,
       margin:10,
       mouseDrag: false,
       touchDrag: false,
       dots: false,
       animateIn: 'fadeIn',
       animateOut: 'fadeOut',
   })

       .on('click', '.owl-item', function() {

           let i = $(this).index()-(thumbS);
           $('#left').addClass('left-active').removeClass('left');// функия открытия шторок
           $('#right').addClass('right-active').removeClass('right');// функия открытия шторок

           carNum2.trigger('to.owl.carousel', [i, duration, true]);
           setTimeout(function() {
               slideClose();
           }, 1000);

           hFirst.reset();
           type1.reset();
           hSecond.reset();
           type2.reset();
           hThird.reset();
           type3.reset();
           carNum3.trigger('to.owl.carousel', [i, duration, true])
           carNum1.trigger('to.owl.carousel', [i, duration, true]);

       })
       .on('changed.owl.carousel', function (e) {
           if (!flagy) {
               carNum1.trigger('to.owl.carousel', [e.item.index-thumbS, duration, true]);
               flagy = false;
           }
       });
   carNum3.owlCarousel({
       // center: true,
       loop: true,
       items : thumbS,
       margin:10,
       mouseDrag: false,
       touchDrag: false,
       dots: false,
       animateIn: 'fadeIn',
       animateOut: 'fadeOut',


   })
       .on('click', '.owl-item', function() {

           let i = $(this).index()-(thumbS);
           $('#left').addClass('left-active').removeClass('left');// функия открытия шторок
           $('#right').addClass('right-active').removeClass('right');// функия открытия шторок

           carNum3.trigger('to.owl.carousel', [i, duration, true]);
           setTimeout(function() {
               slideClose();
           }, 1000);

           hFirst.reset();
           type1.reset();
           hSecond.reset();
           type2.reset();
           hThird.reset();
           type3.reset();
           carNum1.trigger('to.owl.carousel', [i, duration, true]);

       })
       .on('changed.owl.carousel', function (e) {
           if (!flagy) {
               carNum1.trigger('to.owl.carousel', [e.item.index-thumbS, duration, true]);
               flagy = false;
           }
       });


</script>


<script>
    let sync1 = $('#sync1'),// получаем id sync1 и присваеваем переменной sync1
        sync2 = $('#sync2'),// получаем id sync2 и присваеваем переменной sync2
        sync3 = $('#sync3'),
        sync4 = $('#sync4'),
        durations = 300,// милисекунды
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
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
    });

    function slideClose(){
        $('#left2').addClass('left').removeClass('left-active');//функция закрытия шторок
        $('#right2').addClass('right').removeClass('right-active');//функция закрытия шторок
        $('#left2-1').addClass('left').removeClass('left-active');//функция закрытия шторок
        $('#right2-1').addClass('right').removeClass('right-active');//функция закрытия шторок
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
        $('#left2-1').addClass('left-active').removeClass('left');// функия открытия шторок
        $('#right2-1').addClass('right-active').removeClass('right');// функия открытия шторок
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
        $('#left2-1').addClass('left-active').removeClass('left');// функия открытия шторок
        $('#right2-1').addClass('right-active').removeClass('right');// функия открытия шторок
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
        animateIn: 'fadeIn',
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

                $('#left2').addClass('left-active').removeClass('left');// функия открытия шторок
                $('#right2').addClass('right-active').removeClass('right');// функия открытия шторок
                sync2.trigger('next.owl.carousel');

                setTimeout(function() {
                    slideClose();

                }, 1000);

                $('#left2-1').addClass('left-active').removeClass('left');// функия открытия шторок
                $('#right2-1').addClass('right-active').removeClass('right');// функия открытия шторок
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

                $('#left2').addClass('left-active').removeClass('left');// функия открытия шторок
                $('#right2').addClass('right-active').removeClass('right');// функия открытия шторок

                sync2.trigger('prev.owl.carousel');
                setTimeout(function() {
                    slideClose();
                }, 1000);

                $('#left2-1').addClass('left-active').removeClass('left');// функия открытия шторок
                $('#right2-1').addClass('right-active').removeClass('right');// функия открытия шторок
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
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',


    })

        .on('click', '.owl-item', function() {

            let i = $(this).index()-(thumbs);
            $('#left2').addClass('left-active').removeClass('left');// функия открытия шторок
            $('#right2').addClass('right-active').removeClass('right');// функия открытия шторок

            sync2.trigger('to.owl.carousel', [i, durations, true]);
            setTimeout(function() {
                slideClose();
            }, 1000);

            h2First.reset();
            typed1.reset();
            h2Second.reset();
            typed2.reset();
            h2Third.reset();
            typed3.reset();
            sync3.trigger('to.owl.carousel', [i, durations, true])
            sync1.trigger('to.owl.carousel', [i, durations, true]);

        })
        .on('changed.owl.carousel', function (e) {
            if (!flag) {
                sync1.trigger('to.owl.carousel', [e.item.index-thumbs, durations, true]);
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
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',


    })
        .on('click', '.owl-item', function() {

            let i = $(this).index()-(thumbs);
            $('#left2').addClass('left-active').removeClass('left');// функия открытия шторок
            $('#right2').addClass('right-active').removeClass('right');// функия открытия шторок

            sync4.trigger('to.owl.carousel', [i, durations, true]);
            setTimeout(function() {
                slideClose();
            }, 1000);

            h2First.reset();
            typed1.reset();
            h2Second.reset();
            typed2.reset();
            h2Third.reset();
            typed3.reset();
            sync3.trigger('to.owl.carousel', [i, durations, true])
            sync1.trigger('to.owl.carousel', [i, durations, true]);

        })
        .on('changed.owl.carousel', function (e) {
            if (!flag) {
                sync1.trigger('to.owl.carousel', [e.item.index-thumbs, durations, true]);
                flag = false;
            }
        });


</script>

<script>
    let car1 = $('#carousel1'),
        car2 = $('#carousel2'),
        durationse = 300,
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


    })
        .on('click', '.owl-item', function() {

            let i = $(this).index()-(thumb);


            car2.trigger('to.owl.carousel', [i, durationse, true]);

            car1.trigger('to.owl.carousel', [i, durationse, true]);

        })
        .on('changed.owl.carousel', function (e) {
            if (!key) {
                car1.trigger('to.owl.carousel', [e.item.index-thumb, durationse, true]);
                key = false;
            }
        });
</script>
