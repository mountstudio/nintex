@extends('layouts.app')

@section('content')

    <section class="bg-lightblue position-relative">
        <div class="container pt-5 ">
            <div class="row">
                <div class="col-8 text-right" style="z-index: 10;">
                    <div class="d-flex ">
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

                    <div class="controls-top d-flex justify-content-end">
                        <a class="btn-floating mr-1" href="#multi-item-example" data-slide="prev">
                            <img src="img/Arrow_left.svg" alt="">
                        </a>
                        <a class="btn-floating ml-1" href="#multi-item-example" data-slide="next">
                            <img src="img/Arrow_right.svg" alt="">
                        </a>

                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mt-3">
                            <p>Цвет: черный</p>
                            <p>Выбери свой размер</p>
                            <a href="#" class="btn btn-lightblue ">Начать покупки</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
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
                    <a class="nav-link" href="#"><img src="img/file.svg" alt=""> Лучшая ткань</a>
                    <a class="nav-link" href="#"><img src="img/quality (1).svg" alt=""> Гарантия качества</a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.category')

    <section>
        <div class="container" style="background: linear-gradient(90deg, grey, grey 30%, white 30%)">
            <div class="row">
                <div class="col-12 py-5">
                    <h2>
                        Lorem ipsum
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti distinctio iure
                        maxime,
                        vitae voluptas.
                    </p>
                    <div class="controls-top d-flex justify-content-start">
                        <a class="btn-floating mr-1" href="#multi-item-example" data-slide="prev">
                            <img src="img/Arrow_left.svg" alt="">
                        </a>
                        <a class="btn-floating ml-1" href="#multi-item-example" data-slide="next">
                            <img src="img/Arrow_right.svg" alt="">
                        </a>
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
@endpush
