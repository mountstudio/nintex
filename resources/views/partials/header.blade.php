<!-- This header for desktop version -->
<div class="container d-none d-xl-block">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg px-0 py-0 shadow-none">

        <!-- Navbar brand -->
        <a href="{{ route('home') }}" class="pb-2">
            <img src="{{ asset('img/logo3.png') }}" class="img-fluid" alt="">
        </a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
                aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">

                <!-- Новинки -->
                <li class="nav-item navigation-item pt-3">
                    <a style="font-size: 16px" href="{{ route('product.index2') }}"
                       class="text-uppercase text-for-a px-1 pb-1" title="Просмотреть новинки">
                        Новинки
                    </a>
                </li>
                <!-- Коллекции -->
                <li class="nav-item dropdown mega-dropdown pt-2 mx-4">
                    <a class="nav-link dropdown-toggle text-uppercase pt-1 px-1 pb-1" style="font-size: 16px"
                       title="Все Коллекции"
                       id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Коллекция</a>
                    <div class="dropdown-menu mega-menu v-2 z-depth-1 bg-white py-5 px-3"
                         aria-labelledby="navbarDropdownMenuLink"
                         style="width: 1200px!important; left: -230%!important;">
                        <div class="row">
                            <div class="col-5 sub-menu position-relative mb-xl-0 mb-4">
                                <div class="row justify-content-between">
                                    <div class="col-6">
                                        <a href="{{ route('product.index2') }}"
                                           class="menu-block-slide view overlay z-depth-1 p-0 mb-2">
                                            <img src="{{ asset('img/modals/girl-black-collection.jpg') }}"
                                                 class="img-fluid " alt="First sample image">
                                            <span class="menu-block-text">Новинки</span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        @foreach($random as $value)
                                            <a href="{{ route('product.show', $value) }}"
                                               class="menu-block-slide view overlay z-depth-1 p-0 mb-2">
                                                <img src="{{ asset('storage/medium/'.$value->logo) }}"
                                                     class="img-fluid " alt="First sample image">
                                                <span class="menu-block-text">{{ $value->category->title }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 sub-menu mb-md-0 mb-4">
                                <div class="pl-5">
                                    <a href="{{ route('product.hit') }}" class="h6 p-0 sub-title text-uppercase font-weight-bold text-dark">Хиты</a>
                                    <ul class="list-unstyled">
                                        @foreach($hits as $hit)
                                            {{--                                            @dd(hits)--}}
                                            <li>
                                                <a class="menu-item pl-0" style="font-size: 14px;"
                                                   href="{{ route('product.show', $hit) }}">
                                                    {{ $hit->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-4 sub-menu mb-0">
                                <a href="{{ route('product.index', ['allCatalog']) }}" class="h6 p-0 sub-title text-uppercase font-weight-bold text-dark">Категории</a>
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="list-unstyled">
                                            {{--                                            @dd($categories)--}}
                                            @foreach($categories->split(2) as $category)
                                                {{--                                                @dd($category)--}}
                                                @foreach($category as $value)
                                                    <li>
                                                        <a class="menu-item pl-0"
                                                           href="{{ route('product.index', ['allCatalog['. $value->id .']' => 'on']) }}">
                                                            {{ $value->title }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="list-unstyled">
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <!-- Акции -->
                <li class="nav-item navigation-item pt-3">
                    <a style="font-size: 16px" href="{{ route('product.discount') }}"
                       class="text-uppercase text-for-a px-1 pb-1" title="Просмотреть Акции">
                        Акции
                    </a>
                </li>

            </ul>
            <!-- Links -->

            <!-- Search form -->
            <ul class=" mt-2 mb-0 mt-lg-0 list-inline">
                <li class="nav-item list-inline-item pt-4" style="width: 30%;">
                    <!-- Search form -->
                    <form class="form-inline md-form form-sm active-purple-2 mt-2">
                        <div class="form-group">
                            <input class="form-control form-control-sm mr-3 w-75 mb-1" type="text" placeholder="Search"
                                   aria-label="Search" name="title" id="title">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <div  id="productList">
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </li>
                <li class="nav-item list-inline-item pt-4 mr-0">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1"
                            data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"
                            style="font-size: 12px; padding: 0!important; background-color: white!important;color: #000!important; border: none; box-shadow: none;">
                        <img src="{{ asset('icons/dostavka.png') }}" class="pr-1" alt="">
                        Доставка в РК и РФ
                    </button>

                    <!--Menu-->
                    <div class="dropdown-menu dropdown-primary text-small" style="top: 80%; left: 60%;">
                        <p class="px-3" style="font-weight: normal;">
                            Доставку по всему Кыргызстану и СНГ <br>
                            Наш телефон для связи:  <br>
                            0777 57-89-58, 0555 65-98-58, 0703 96-58-74
                        </p>
                    </div>
                </li>
                <li class="nav-item list-inline-item pt-4 mx-2">

                    <p style="font-size: 12px;">
                        <img src="{{ asset('icons/phone.png') }}" class="pr-1" alt="">
                        0555 55 55 55
                    </p>
                </li>
                <li class="nav-item list-inline-item mx-2 mb-2">
                    <a href="{{ auth()->check() ? route('profile') : route('login') }}"
                       class="border-bottom-0 border-top-0 border-right-0 border-left-0 rounded-0 border-dark my-2 my-sm-0"><img
                            src="{{ asset('img/user_avatar.svg') }}" class="img-fluid" alt=""></a>
                </li>
                <!--Cart link-->
                <li class="nav-item list-inline-item mr-2 position-relative mb-2" id="basket">
                    <a href="{{ route('cart.checkout') }}" class="text-fut-book cart"
                       style="text-decoration: none; color: #444444;">
                        <div
                            class="badge badge-danger rounded-circle shadow small position-absolute cart-count justify-content-center align-items-center"
                            style="width: 20px; height: 20px;top: -10px; right: -10px;"></div>
                        {{--<i style="color: #444;" class="fas carts fa-cart-plus fa-lg"></i>--}}
                        <img class="img-fluid" src="{{ asset('images/cart.svg') }}" alt="">
                    </a>
                </li>
            </ul>

        </div>
        <!-- Collapsible content -->

    </nav>
    <!-- Navbar -->
</div>
<!-- This header for mobile version -->
<div class="container-fluid d-block d-xl-none">
    <div class="row justify-content-between justify-content-lg-start">
        <div class="col-4 col-lg-2">
            <a href="{{ route('home') }} ">
                <img src="{{ asset('img/logo3.png') }}" class="img-fluid" alt="">
            </a>
        </div>
        <div class="d-none d-lg-block col-lg-4 pt-1">
            <nav class="navbar navbar-expand-lg px-0 py-0 shadow-none">

                <!-- Navbar brand -->
                <a href="{{ route('home') }}" class="pb-2">
                    <img src="{{ asset('img/logo3.png') }}" class="img-fluid" alt="">
                </a>
                <ul class="navbar-nav mr-auto">

                    <!-- Новинки -->
                    <li class="nav-item navigation-item pt-3">
                        <a style="font-size: 16px" href="{{ route('product.index2') }}"
                           class="text-uppercase text-for-a px-1 pb-1 text-dark" title="Просмотреть новинки">
                            Новинки
                        </a>
                    </li>
                    <!-- Коллекции -->
                    <li class="nav-item dropdown mega-dropdown pt-2 mx-4">
                        <a class="nav-link dropdown-toggle text-uppercase mt-1 pt-1 px-1 pb-1" style="font-size: 16px"
                           title="Все Коллекции"
                           type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Коллекция</a>
                        <div class="dropdown-menu mega-menu v-2 z-depth-1 bg-white py-5 px-3"
                             aria-labelledby="dropdownMenuButton"
                             style="width: 960px!important; left: -230%!important;">
                            <div class="row">
                                <div class="col-5 sub-menu position-relative mb-xl-0 mb-4">
                                    <div class="row justify-content-between">
                                        <div class="col-6">
                                            <a href="#!" class="menu-block-slide view overlay z-depth-1 p-0 mb-2">
                                                <img
                                                    src="https://cdn.shopify.com/s/files/1/2714/9310/products/Unique_Vintage_1950s_Black_Embroidered_Red_Rose_Baltimore_Swing_Dress_1024x1024.jpg?v=1571711475"
                                                    class="img-fluid " alt="First sample image">
                                                <span class="menu-block-text">Lorem ipsum</span>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#!" class="menu-block-slide view overlay z-depth-1 p-0 mb-2">
                                                <img
                                                    src="https://cdn.shopify.com/s/files/1/2714/9310/products/Unique_Vintage_1950s_Black_Embroidered_Red_Rose_Baltimore_Swing_Dress_1024x1024.jpg?v=1571711475"
                                                    class="img-fluid " alt="First sample image">
                                                <span class="menu-block-text">Lorem ipsum</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 sub-menu mb-md-0 mb-4">
                                    <div class="pl-5">
                                        <a href="" class=" h6 sub-title text-uppercase font-weight-bold text-dark">Хиты</a>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="menu-item pl-0" style="font-size: 14px;" href="#!">
                                                    Lorem ipsum.
                                                </a>
                                            </li>
                                            <li>
                                                <a class="menu-item pl-0" style="font-size: 14px;" href="#!">
                                                    Lorem ipsum.
                                                </a>
                                            </li>
                                            <li>
                                                <a class="menu-item pl-0" style="font-size: 14px;" href="#!">
                                                    Lorem ipsum.
                                                </a>
                                            </li>
                                            <li>
                                                <a class="menu-item pl-0" style="font-size: 14px;" href="#!">
                                                    Lorem ipsum.
                                                </a>
                                            </li>
                                            <li>
                                                <a class="menu-item pl-0" style="font-size: 14px;" href="#!">
                                                    Lorem ipsum.
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4 sub-menu mb-0">
                                    <a href="{{ asset('products.index') }}" class="h6 sub-title text-uppercase font-weight-bold text-dark">Категории</a>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Новинки
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Зимнии коллекции
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Весеннии коллекции
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Летнии коллекции
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Осеннии коллекции
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Юбки
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Платья
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Топы
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Шорты
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Толстовки
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Куртки
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Пальто
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Пиджаки
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Джинсы
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Трикотаж
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Рубашки
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Футболки
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="menu-item pl-0" href="#!">
                                                        Боди
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <!-- Акции -->
                    <li class="nav-item navigation-item pt-3">
                        <a style="font-size: 16px" href="{{ route('product.discount') }}"
                           class="text-uppercase text-for-a px-1 pb-1 text-dark" title="Просмотреть Акции">
                            Акции
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
        <div class="col-6 col-md-8 col-lg-6 d-flex justify-content-end px-0">
            <ul class="nav mt-2 mt-lg-0 list-inline">
                <li class="nav-item list-inline-item width-form mx-2 mx-md-0">
                    <!-- Search form -->
                    <form class="form-inline md-form form-sm active-purple-2 mt-2 ml-3 ml-md-0">
                        <input class="form-control form-control-sm mr-3 w-75 mb-1 d-none d-md-block" type="text"
                               placeholder="Search"
                               aria-label="Search">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </form>
                </li>
                <li class="nav-item d-none d-md-block list-inline-item mx-auto mx-lg-0 width-form" style="width: 50px;">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1"
                            data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"
                            style="font-size: 12px; padding: 0!important; background-color: white!important;color: #000!important; border: none; box-shadow: none;">
                        <img src="{{ asset('icons/dostavka.png') }}" class="pr-1" alt="delivery"
                             title="Доставка в КР и СНГ">
                    </button>

                    <!--Menu-->
                    <div class="dropdown-menu dropdown-primary text-small"
                         style="top: 50px!important; left: -98px!important;">
                        <p class="px-3">
                            Доставку по всему Кыргызстану и СНГ <br>
                            Наш телефон для связи: <br>
                            0777 57-89-58, 0555 65-98-58, 0703 96-58-74
                        </p>
                    </div>
                </li>
                <li class="nav-item d-none d-md-block list-inline-item mx-2 pt-md-3">

                    <p style="font-size: 12px;">
                        <img src="{{ asset('icons/phone.png') }}" class="pr-1" alt="">
                        0555 55 55 55
                    </p>
                </li>
                <li class="nav-item list-inline-item ml-2 mr-0 mb-2 pt-md-3">
                    <a href="{{ auth()->check() ? route('profile') : route('login') }}"
                       class="border-bottom-0 border-top-0 border-right-0 border-left-0 rounded-0 border-dark my-2 my-sm-0"><img
                            src="{{ asset('img/user_avatar.svg') }}" class="img-fluid" alt=""></a>
                </li>
                <!--Cart link-->
                <li class="nav-item list-inline-item mx-2 mr-md-4 position-relative mb-2 pt-md-3" id="basket">
                    <a href="{{ route('cart.checkout') }}" class="text-fut-book cart"
                       style="text-decoration: none; color: #444444;">
                        <div
                            class="badge badge-danger rounded-circle shadow small position-absolute cart-count justify-content-center align-items-center"
                            style="width: 21px; height: 21px;top: -10px; right: 12px;"></div>
                        {{--<i style="color: #444;" class="fas carts fa-cart-plus fa-lg"></i>--}}
                        <img class="img-fluid" src="{{ asset('images/cart.svg') }}" alt="">
                    </a>
                </li>
                <li class="nav-item list-inline-item mr-2 d-lg-none mt-sm-3">
                    <a href="#menu" class="" style="padding-top: 25px">
                        <img src="{{ asset('img/hamburger.svg') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <nav id="menu">
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li><a href="{{ route('product.index2') }}">Новинки</a></li>
            <li><span>Категории</span>
                <ul>
                    <li><a href="{{ route('product.index') }}">Все коллекции</a></li>
                    @foreach($categories as $category)
                        <li><a href="{{ route('product.index', ['allCatalog['. $category->id .']' => 'on']) }}">{{$category->title}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('product.hit') }}"> Хиты </a>
            </li>
            <li><a href="{{ route('product.discount') }}">Акции</a></li>
            <li><a href="/contact">Частые вопросы</a></li>
        </ul>
    </nav>
</div>

@push('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    @endpush

@push("scripts")
    <script>
        document.addEventListener(
            "DOMContentLoaded", () => {
                new Mmenu("#menu", {
                    "extensions": [
                        "pagedim-black",
                        "position-right"
                    ],
                    "navbars": [
                        {
                            "position": "bottom",
                            "content": [
                                "<a class='fa fa-envelope' href='#/'></a>",
                                "<a class='fa fa-twitter' href='#/'></a>",
                                "<a class='fa fa-facebook' href='#/'></a>"
                            ]
                        }
                    ]
                });
            }
        );
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#menu_yak").on("click", "a", function (event) {
                // event.preventDefault();
                let id = $(this).attr('href'),
                    top = $(id).offset().top;
                $('body,html').animate({scrollTop: top}, 1500);
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#title').keyup(function () {
                let query = $(this).val();
                if (query != '')
                {
                    let _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('product.fetch') }}",
                        method: 'GET',
                        data: {query: query, _token: _token},
                        success: function(data){
                            $('#productList').fadeIn();
                            $('#productList').html(data);
                        }
                    });
                }
            });
            $(document).on('click', 'li', function(){
                $('#title').val($(this).text());
                $('#productList').fadeOut();
            });
        });
    </script>
@endpush
