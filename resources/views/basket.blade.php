@extends('layouts.app')

@section('content')

    <section class="bg-nintex-color">
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-7 position-relative">
                    <div class=" d-flex justify-content-end " style=" border-bottom-left-radius: 100px;">
                        <div class="text-left">
                            <p class="h3 text-uppercase">
                                ДЛИННОЕ ПАЛЬТО ИЗ ШЕРСТИ С ПУГОВИЦЕЙ ИЗ КОЛЛЕКЦИИ HANDMADE
                            </p>
                            <p>
                                Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее
                            </p>
                            <div id="rateYo"></div>
                            <div id="otzyv">

                            </div>
                            <div id="cena">

                            </div>

                        </div>
                    </div>
                    <div class="mt-3">
                        <img class="position-absolute w-100" style="left: 0; bottom: 0;" src="{{ asset('img/Vector 1.svg') }}" alt="">
                        <div class="row mt-5">
                            <div class="col-6">
                                <p>Цвет: черный</p>
                                <div class="checkbox">
                                    <label class="checkbox-white">
                                        <input id="cbox-white" type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>

                                    <label class="checkbox-red">
                                        <input id="cbox-red" type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>

                                    <label class="checkbox-blue">
                                        <input id="cbox-blue" type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>

                                    <label class="checkbox-black">
                                        <input id="cbox-black" type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                            </div>
                            <div class="col-6">
                                <p class="" ><img src="img/file.svg" alt=""> Лучшая ткань</p>
                                <p class="" ><img src="img/quality (1).svg" alt=""> Гарантия
                                    качества</p>
                            </div>
                            <div class="col-5 pb-5 ">
                                <p class="mb-4">Выбери свой размер</p>
                                <div class="j-size-list size-list j-smart-overflow-instance">
                                    <label class="j-size  disabled j-sold-out tooltipstered size-button"
                                           data-characteristic-id="" data-size-name="S">
                                        <span>S</span>
                                        <input class="radio-size" id="size" name="size" type="radio" value="">
                                        <i></i>
                                    </label>
                                    <label class="j-size tooltipstered active size-button" data-characteristic-id=""
                                           data-size-name="M">
                                        <span>M</span>
                                        <input class="radio-size" id="size" name="size" type="radio" value="">
                                        <i></i>
                                    </label>
                                    <label class="j-size tooltipstered size-button" data-characteristic-id=""
                                           data-size-name="L">
                                        <span>L</span>
                                        <input class="radio-size" id="size" name="size" type="radio" value="">
                                        <i></i>
                                    </label>
                                    <label class="j-size tooltipstered size-button" data-characteristic-id=""
                                           data-size-name="XL">
                                        <span>XL</span>
                                        <input class="radio-size" id="size" name="size" type="radio" value="">
                                        <i></i>
                                    </label>
                                    <label class="j-size tooltipstered size-button p-0" data-characteristic-id=""
                                           data-size-name="XXL">
                                        <span>XXL</span>
                                        <input class="radio-size" id="size" name="size" type="radio" value="">
                                        <i></i>
                                    </label>

                                    <i class="icon-step j-imigize hide"></i>
                                </div>
                                <a href="#" class="btn btn-lightblue mt-3">Начать покупки</a>
                            </div>
                            <div class="col-4 pb-5">
                                <a href="#" class="btn btn-white btn-block mt-5">В избранное</a>
                                <a href="#" class="btn btn-dark btn-block mt-2">В корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="col-9">
                        <div class="owl-carousel owl-theme" id="firstCarousel">
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                        </div>

                    </div>
                    <div class="col-3">
                        <div class="owl-carousel owl-theme" id="secondCarousel">
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid position-absolute" style="bottom: 0;">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </section>


@include('partials.footer')
@endsection


@push("styles")


@endpush

@push("scripts")
    <script>
        let firstCar = $('#firstCarousel'),
            secondCar = $('#secondCarousel'),
            thumbs =
        firstCar.owlCarousel({
            loop: true,
            items: 1,
            margin: 0,
            nav: false,
            dots: false,

        });

        secondCar.owlCarousel({
            loop: true,
            items: 7,
            margin: 0,
            nav: false,
            dots: false,

        })

        secondCar.on('click', '.owl-item', function(e) {

        })
    </script>
@endpush
