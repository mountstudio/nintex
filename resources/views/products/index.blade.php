@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="margin-top: 20px">
        <div class="row">
            <div class="col-2 h-100 ">
                <p class="h3">Каталог</p>
                <a href="" class="">
                    <p class="">
                        Весь каталог
                    </p>
                </a>
                <a href="" class="">
                    <p class="">
                        Новинки
                    </p>
                </a>
                <a href="" class="">
                    <p class="">
                        Распродажа
                    </p>
                </a>
                <a href="" class="">
                    <p class="">
                        Пальто
                    </p>
                </a>
                <a href="" class="">
                    <p class="">
                        Блузки
                    </p>
                </a>
                <a href="" class="">
                    <p class="">
                        Брюки
                    </p>
                </a>
                <a href="" class="">
                    <p class="">
                        Пиджаки
                    </p>
                </a>
                <a href="" class="">
                    <p class="">
                        Сумки
                    </p>
                </a>
                <a href="" class="">
                    <p class="">
                        Юбки
                    </p>
                </a>
                <p class="h3">Фильтр</p>
                <p class="h4">Размеры:</p>
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
                <p class="h4">Цены:</p>
                <div class="col-12">
                    <div class="slidecontainer">
                        <input type="range" min="0" max="15000" value="0" id="myRange" class="slider">
                    </div>
                </div>
                <input class="form-control form-control-sm" type="text" placeholder="Small input">
                <input class="form-control form-control-sm" type="text" placeholder="Small input">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultChecked1" checked>
                    <label class="custom-control-label" for="defaultChecked1">Скидка</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
                    <label class="custom-control-label" for="defaultChecked2">Новинка</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultChecked3" checked>
                    <label class="custom-control-label" for="defaultChecked3">Хит</label>
                </div>
                <button type="button" class="btn btn-outline-default btn-rounded waves-effect"
                        style="border-radius: 20px">Сбросить фильтр
                </button>
            </div>

            <div class="col-10">
                <div class="row px-2">
                    @foreach($products as $product)
                        <div class="col-3">
                            @include('products.card')
                        </div>
                    @endforeach
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-circle pg-blue">
                        <li class="page-item disabled"><a class="page-link">Пред</a></li>
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link">След</a></li>
                    </ul>
                </nav>
                {{--                <nav aria-label="Page navigation example">--}}
                {{--                    <ul class="pagination pagination-circle pg-blue">--}}
                {{--                        <li class="page-item ">--}}
                {{--                            <a class="page-link" tabindex="-1">Пред</a>--}}
                {{--                        </li>--}}
                {{--                        <li class="page-item"><a class="page-link">1</a></li>--}}
                {{--                        <li class="page-item active">--}}
                {{--                            <a class="page-link">2 <span class="sr-only">(current)</span></a>--}}
                {{--                        </li>--}}
                {{--                        <li class="page-item"><a class="page-link">3</a></li>--}}
                {{--                        <li class="page-item ">--}}
                {{--                            <a class="page-link">След</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </nav>--}}
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection

@push('styles')
    <style>
.slidecontainer {
width: 100%;
}

.slider {
-webkit-appearance: none;
width: 100%;
height: 15px;
border-radius: 5px;
background: #d3d3d3;
outline: none;
opacity: 0.7;
-webkit-transition: .2s;
transition: opacity .2s;
}

.slider:hover {
opacity: 1;
}

.slider::-webkit-slider-thumb {
-webkit-appearance: none;
appearance: none;
width: 25px;
height: 25px;
border-radius: 50%;
background: #4CAF50;
cursor: pointer;
}

.slider::-moz-range-thumb {
width: 25px;
height: 25px;
border-radius: 50%;
background: #4CAF50;
cursor: pointer;
}
</style>
@endpush
@push("scripts")
    <script>
        // $("#ex2").slider({});

        // Without JQuery
        // var slider = new Slider('#ex2', {});
    </script>
    <script>
        $('li').click(function () {
            $(this).addClass('active').siblings().removeClass('active');
        });
    </script>

@endpush
