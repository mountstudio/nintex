@extends('layouts.app')

@section('content')

    <section class="position-relative bg-img pt-5"
             style="background: url('{{ asset('img/Vector.svg') }}')  no-repeat center center;
                 -webkit-background-size: cover;
                 -moz-background-size: cover;
                 -o-background-size: cover;
                 background-size: cover; ">

        <!--Слайдер выбора одежды-->
        <div class="container">
            <div class="row">
                <div class="col-12 d-block d-lg-none">
                    <div class="area">
                        <div class="cover left" id="left"></div>
                        <div class="cover right" id="right"></div>

                        <div class="owl-carousel owl-theme position-relative" id="sync2">

                            <div class="item">

                                <img src="{{ asset('img/slider1.svg') }}" class="img-fluid mx-auto"
                                     style="height: 200px;width: 150px;z-index: 0;" alt="">

                            </div>
                            <div class="item">
                                <img src="{{ asset('img/slider2.svg') }}" class="img-fluid mx-auto"
                                     style="height: 200px;width: 150px;z-index: 0;" alt="">

                            </div>
                            <div class="item">

                                <img src="{{ asset('img/onePunchMan.jpg') }}" class="img-fluid mx-auto"
                                     style="height: 200px;width: 150px;z-index: 0;" alt="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 position-relative">
                    <div class="owl-carousel owl-theme" style="height: 250px;" id="sync1">
                        <div class="item ">
                            <div class="row justify-content-end">
                                <div class="col-12 col-lg-5" style=" border-bottom-left-radius: 100px;">

                                    <div id="h2-strings1">
                                        <p>Черное пальтишко</p>
                                    </div>
                                    <div id="typed-strings1">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                                            Illum, perferendis?
                                        </p>
                                    </div>

                                    <h2 class="mt-4 text-left" id="h2-1"></h2>
                                    <p class="text-left" id="typed1"></p>
                                </div>
                            </div>
                            {{--
                            <div class="controls-top d-flex justify-content-end">
                                <a class="btn-floating mr-1" href="#multi-item-example" data-slide="prev">
                                    <img src="img/Arrow_left.svg" alt="">
                                </a>
                                <a class="btn-floating ml-1" href="#multi-item-example" data-slide="next">
                                    <img src="img/Arrow_right.svg" alt="">
                                </a>
                            </div>--}}


                        </div>

                        <div class="item ">
                            <div class="row justify-content-end">
                                <div class="col-12 col-lg-5" style=" border-bottom-left-radius: 100px;">

                                    <div id="h2-strings2">
                                        <p>Прикольное пальтишко</p>
                                    </div>
                                    <div id="typed-strings2">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                                            Illum, perferendis?
                                        </p>
                                    </div>


                                    <h2 class="mt-4 text-left" id="h2-2"></h2>
                                    <p class="text-left" id="typed2"></p>
                                </div>
                            </div>
                            {{--
                            <div class="controls-top d-flex justify-content-end">
                                <a class="btn-floating mr-1" href="#multi-item-example" data-slide="prev">
                                    <img src="img/Arrow_left.svg" alt="">
                                </a>
                                <a class="btn-floating ml-1" href="#multi-item-example" data-slide="next">
                                    <img src="img/Arrow_right.svg" alt="">
                                </a>
                            </div>--}}


                        </div>

                        <div class="item ">
                            <div class="row justify-content-end">
                                <div class="col-12 col-lg-5" style=" border-bottom-left-radius: 100px;">

                                    <div id="h2-strings3">
                                        <p>Сайтамино пальтишко</p>
                                    </div>
                                    <div id="typed-strings3">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                                            One puuuuuuuuuuuuuuuunnnnnnncchhhhhhhhhhhhhhhhhhhhh
                                        </p>
                                    </div>

                                    <h2 class="mt-4 text-left" id="h2-3"></h2>
                                    <p class=" text-left" id="typed3"></p>
                                </div>
                            </div>
                            {{--
                            <div class="controls-top d-flex justify-content-end">
                                <a class="btn-floating mr-1" href="#multi-item-example" data-slide="prev">
                                    <img src="img/Arrow_left.svg" alt="">
                                </a>
                                <a class="btn-floating ml-1" href="#multi-item-example" data-slide="next">
                                    <img src="img/Arrow_right.svg" alt="">
                                </a>
                            </div>--}}


                        </div>

                    </div>
                    <div class="owl-carousel owl-theme" id="sync3">
                        <div class="item">
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
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
                                        <div class="media mt-4 px-1 text-md-left">
                                            <img class="card-img-100 d-flex mr-3" src="img/file.svg"
                                                 alt="Generic placeholder image" style="width: 30px !important; height: 30px !important;">
                                            <div class="media-body">
                                                Лучшая ткань
                                            </div>
                                        </div>
                                        <div class="media mt-4 px-1 text-md-left">
                                            <img class="card-img-100 d-flex mr-3" src="img/quality (1).svg"
                                                 alt="Generic placeholder image" style="width: 30px !important; height: 30px !important;">
                                            <div class="media-body">
                                                Гарантия качества
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <p>Выбери свой размер</p>
                                        <div class="j-size-list size-list j-smart-overflow-instance">
                                            <label class="j-size  disabled j-sold-out tooltipstered size-button"
                                                   data-characteristic-id="" data-size-name="XXS">
                                                <span>XXS</span>
                                                <input class="radio-size" id="size" name="size" type="radio" value="">
                                                <i></i>
                                            </label>
                                            <label class="j-size tooltipstered active size-button"
                                                   data-characteristic-id=""
                                                   data-size-name="XS">
                                                <span>XS</span>
                                                <input class="radio-size" id="size" name="size" type="radio" value="">
                                                <i></i>
                                            </label>
                                            <label class="j-size tooltipstered size-button" data-characteristic-id=""
                                                   data-size-name="S">
                                                <span>S</span>
                                                <input class="radio-size" id="size" name="size" type="radio" value="">
                                                <i></i>
                                            </label>
                                            <label class="j-size tooltipstered size-button" data-characteristic-id=""
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

                                            <i class="icon-step j-imigize hide"></i>
                                        </div>
                                        <a href="#" class="btn btn-lightblue ">Начать покупки</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
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

                                        <div class="media mt-4 px-1 text-md-left">
                                            <img class="card-img-100 d-flex mr-3" src="img/file.svg"
                                                 alt="Generic placeholder image" style="width: 30px !important; height: 30px !important;">
                                            <div class="media-body">
                                                Лучшая ткань
                                            </div>
                                        </div>
                                        <div class="media mt-4 px-1 text-md-left">
                                            <img class="card-img-100 d-flex mr-3" src="img/quality (1).svg"
                                                 alt="Generic placeholder image" style="width: 30px !important; height: 30px !important;">
                                            <div class="media-body">
                                                Гарантия качества
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <p>Выбери свой размер</p>
                                        <div class="j-size-list size-list j-smart-overflow-instance">
                                            <label class="j-size  disabled j-sold-out tooltipstered size-button"
                                                   data-characteristic-id="" data-size-name="XXS">
                                                <span>XXS</span>
                                                <input class="radio-size" id="size" name="size" type="radio" value="">
                                                <i></i>
                                            </label>
                                            <label class="j-size tooltipstered active size-button"
                                                   data-characteristic-id=""
                                                   data-size-name="XS">
                                                <span>XS</span>
                                                <input class="radio-size" id="size" name="size" type="radio" value="">
                                                <i></i>
                                            </label>
                                            <label class="j-size tooltipstered size-button" data-characteristic-id=""
                                                   data-size-name="S">
                                                <span>S</span>
                                                <input class="radio-size" id="size" name="size" type="radio" value="">
                                                <i></i>
                                            </label>
                                            <label class="j-size tooltipstered size-button" data-characteristic-id=""
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

                                            <i class="icon-step j-imigize hide"></i>
                                        </div>
                                        <a href="#" class="btn btn-lightblue ">Начать покупки</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
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
                                        <div class="media mt-4 px-1 text-md-left">
                                            <img class=" d-flex mr-3" src="img/file.svg"
                                                 alt="Generic placeholder image" style="width: 30px !important; height: 30px !important;">
                                            <div class="media-body">
                                                Лучшая ткань
                                            </div>
                                        </div>
                                        <div class="media mt-4 px-1 text-md-left">
                                            <img class="d-flex mr-3" src="img/quality (1).svg"
                                                 alt="Generic placeholder image" style="width: 30px !important; height: 30px !important;">
                                            <div class="media-body">
                                                Гарантия качества
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <p>Выбери свой размер</p>
                                        <div class="j-size-list size-list j-smart-overflow-instance">
                                            <label class="j-size  disabled j-sold-out tooltipstered size-button"
                                                   data-characteristic-id="" data-size-name="XXS">
                                                <span>XXS</span>
                                                <input class="radio-size" id="size" name="size" type="radio" value="">
                                                <i></i>
                                            </label>
                                            <label class="j-size tooltipstered active size-button"
                                                   data-characteristic-id=""
                                                   data-size-name="XS">
                                                <span>XS</span>
                                                <input class="radio-size" id="size" name="size" type="radio" value="">
                                                <i></i>
                                            </label>
                                            <label class="j-size tooltipstered size-button" data-characteristic-id=""
                                                   data-size-name="S">
                                                <span>S</span>
                                                <input class="radio-size" id="size" name="size" type="radio" value="">
                                                <i></i>
                                            </label>
                                            <label class="j-size tooltipstered size-button" data-characteristic-id=""
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
                                                   data-size-name="XL"
                                                   onmousedown="play('{{ asset('audio/one-punch.mp3') }}')">
                                                <span>XL</span>
                                                <input class="radio-size" id="size" name="size" type="radio" value="">
                                                <i></i>
                                            </label>

                                            <i class="icon-step j-imigize hide"></i>
                                        </div>
                                        <a href="#" class="btn btn-lightblue ">Начать покупки</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-none d-lg-block">
                    <div class="area">
                        <div class="cover left" id="left1"></div>
                        <div class="cover right" id="right1"></div>

                        <div class="owl-carousel owl-theme position-relative" id="sync4">

                            <div class="item">

                                <img src="{{ asset('img/slider1.svg') }}" class="img-fluid"
                                     style="height: 550px;width: 300px;z-index: 0;" alt="">

                            </div>
                            <div class="item">
                                <img src="{{ asset('img/slider2.svg') }}" class="img-fluid"
                                     style="height: 550px;width: 300px;z-index: 0;" alt="">

                            </div>
                            <div class="item">

                                <img src="{{ asset('img/onePunchMan.jpg') }}" class="img-fluid"
                                     style="height: 550px;width: 300px;z-index: 0;" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.category')

    <section>
        <div class="container" style="background: linear-gradient(90deg, #EEEBEE, #EEEBEE 30%, #f8fafc 30%)">

            <div class="col-12 my-5 pt-5">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <div class="owl-carousel owl-them" id="carousel1">
                            <div class="item">
                                <div class="row justify-content-start">
                                    <div class="col-12">
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
                            </div>

                            <div class="item">
                                <div class="row justify-content-start">
                                    <div class="col-12">
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


                            </div>

                            <div class="item">
                                <div class="row justify-content-start">
                                    <div class="col-12 ">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-4 controls-top d-flex justify-content-end">
                        <div class="owl-carousel owl-them" id="carousel2">
                            <div class="item">
                                <img src="{{ asset('img/kofta.svg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/kofta.svg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/onePunchMan.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection

@push("scripts")

    <script>
        document.addEventListener(
            "DOMContentLoaded", () => {
                new Mmenu("#my-menu", {
                    wrappers: ["bootstrap"]
                });
            }
        );
    </script>
    <script>
        $('.j-size-list').on('click', 'label', function () {
            $('.j-size-list label').removeClass('active');
            $(this).addClass('active');
        });
    </script>

    @include('animate.animate')
@endpush
