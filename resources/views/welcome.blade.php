@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section class="bg-lightblue position-relative">
        <div class="container pt-5 ">
            <div class="text-center">
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
            <div class="row">
                <div class="col-12 col-md-6 mt-3">
                    <img src="img/point.png" class="img-size ml-4" alt="">
                    <p>Цвет: черный</p>
                    <p>Выбери свой размер</p>
                    <a href="#" class="btn btn-lightblue ">Начать покупки</a>
                </div>
                <div class="col-md-6 mt-3 pb-4">
                    <img src="img/asdas.png" class="position-relative mt-5" alt="">
                    <img src="img/girlInJeense.png" class="img-fluid  position-absolute" style="bottom: 0; right: 20%; z-index: 3" alt="">
                    <img src="img/point.png" class="d-flex align-items-end" style="margin-left: 100%; padding-top: 1.2rem;"   alt="">
                </div>
            </div>
        </div>
        <div class="container-fluid position-absolute" style="bottom: 0;">
            <div class="row">
                <div class="col-8 px-0 text-center bg-light py-2" style="z-index: 10;">
                    <ul class="nav">
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="#"><img src="img/hanger.png" alt=""> Примерка перед покупкой</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="#"><img src="img/file.png" alt=""> Подлинные товары</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="#"><img src="img/quality.png" alt=""> Гарантия качества</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @include('partials.category')
    @include('partials.footer')
@endsection

@push("scripts")
<script>
    document.addEventListener(
        "DOMContentLoaded", () => {
            new Mmenu( "#my-menu", {
                wrappers: ["bootstrap"]
            });
        }
    );
</script>
@endpush
