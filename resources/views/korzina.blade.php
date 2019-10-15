@extends('layouts.app')

@section('content')

    <section class="bg-nintex-color">
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-8 position-relative">
                    <div class=" d-flex justify-content-end " style=" border-bottom-left-radius: 100px;">
                        <div class="text-left">
                            <p>
                                осенняя коллекция
                            </p>
                            <p class="text-uppercase text-h1Size-bold pb-md-2 h3">
                                Пальто из шерсти
                            </p>
                            <p>
                                Сайт рыбатекст поможет дизайнеру,
                                верстальщику,<br> вебмастеру сгенерировать
                                несколько абзацев более менее
                            </p>
                        </div>
                    </div>
                    <div class="controls-top d-flex justify-content-end">
                        <a class="btn-floating mr-1" href="#multi-item-example" data-slide="prev">
                            <img src="img/Arrow_left.svg" alt="">
                        </a>
                        <a class="btn-floating ml-1" href="#multi-item-example" data-slide="next">
                            <img src="img/Arrow_right.svg" alt="">
                        </a>
                    </div>
                    <div class="mt-3">
                        <img class="position-absolute w-100" style="left: 0; bottom: 0;"
                             src="{{ asset('img/Vector 1.svg') }}" alt="">
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
                                <p class=""><img src="img/file.svg" alt=""> Лучшая ткань</p>
                                <p class=""><img src="img/quality (1).svg" alt=""> Гарантия
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
                <div class="col-3">

                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ul class="list-unstyled">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" >
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item" style="background: linear-gradient(90deg, #EEEBEE, #EEEBEE 30%, #f8fafc 30%);">
                        <div class="col-12 my-5 pt-5">
                            <div class="row">
                                <div class="col-8 ">
                                    <div class="row justify-content-center">
                                        <div class="col-8 ">
                                            <p class="h2">
                                                ЗАГОЛОВОК КАКОЙ-ТО<br> АКЦИИ
                                            </p>
                                            <p class="py-3">
                                                Сайт рыбатекст поможет дизайнеру,<br> верстальщику, вебмастеру сгенерировать<br>
                                                несколько абзацев
                                                более
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a class="btn-floating mr-1 text-center" href="#multi-item-example" data-slide="prev">
                                            <img src="img/Arrow_left.svg" alt="">
                                        </a>
                                        <a class="btn-floating ml-1 text-center" href="#multi-item-example" data-slide="next">
                                            <img class="text-center" src="img/Arrow_right.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 controls-top d-flex justify-content-end">
                                    <img src="img/kofta.svg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item " style="background: linear-gradient(90deg, #EEEBEE, #EEEBEE 30%, #f8fafc 30%)">
                        <div class="col-12 h- my-5 pt-5">
                            <div class="row">
                                <div class="col-8 ">
                                    <div class="row justify-content-center">
                                        <div class="col-8 ">
                                            <p class="h2">
                                                ЗАГОЛОВОК КАКОЙ-ТО<br> АКЦИИ
                                            </p>
                                            <p class="py-3">
                                                Сайт рыбатекст поможет дизайнеру,<br> верстальщику, вебмастеру сгенерировать<br>
                                                несколько абзацев
                                                более
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a class="btn-floating mr-1 text-center" href="#multi-item-example" data-slide="prev">
                                            <img src="img/Arrow_left.svg" alt="">
                                        </a>
                                        <a class="btn-floating ml-1 text-center" href="#multi-item-example" data-slide="next">
                                            <img class="text-center" src="img/Arrow_right.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 controls-top d-flex justify-content-end">
                                    <img src="img/kofta.svg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    @include('partials.footer')
@endsection


@push("styles")

    <style>
        .h-slider {

            height: 300px!important;
        }

    </style>
@endpush

@push("scripts")
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            margin:10,
            loop:true,
            width: 200,
            height: 500,
            items:1,
            mouseDrag: true,
            touchDrag: true,
            freeDrag: false,
            nav:true,
            navText: ["1","2"],

        })
    </script>


@endpush
