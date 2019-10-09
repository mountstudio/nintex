@extends('layouts.app')

@section('content')

    <section class="position-relative rgba-blue-grey-slight pt-5">
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
                        <img class="position-absolute w-100" style="left: 0; bottom: 0;" src="{{ asset('img/Vector 1.svg') }}" alt="">
                        <div class="row">
                            <div class="col-5">
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
                                <p class="" ><img src="img/file.svg" alt=""> Лучшая ткань</p>
                                <p class="" ><img src="img/quality (1).svg" alt=""> Гарантия
                                    качества</p>
                            </div>
                            <div class="col-7">
                                <p>Выбери свой размер</p>
                                <div class="j-size-list size-list j-smart-overflow-instance">
                                    <label class="j-size  disabled j-sold-out tooltipstered size-button"
                                           data-characteristic-id="" data-size-name="XXS">
                                        <span>XXS</span>
                                        <input class="radio-size" id="size" name="size" type="radio" value="">
                                        <i></i>
                                    </label>
                                    <label class="j-size tooltipstered active size-button" data-characteristic-id=""
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
                <div class="col-3">
                    <div class="area">
                        <div class="cover left"></div>
                        <div class="cover right"></div>
                        <div class="target">
                            <div class="d-flex justify-content-center" id="text"></div>
                        </div>

                    </div>
                </div>
            </div>
            <script src="js/main.js"></script>
        </div>
        <div class="container-fluid position-absolute" style="bottom: 0;">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </section>

    @include('partials.category')

    <section>
        <div class="container" style="background: linear-gradient(90deg, #EEEBEE, #EEEBEE 30%, #f8fafc 30%)">

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
                        <img src="img/kofta.svg" alt="">
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
@endpush
