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
                    <a class="nav-link dropdown-toggle text-uppercase pt-1 px-1 pb-1" style="font-size: 16px" title="Все Коллекции"
                       id="navbarDropdownMenuLink3" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Коллекция</a>
                    <div class="dropdown-menu mega-menu v-2 z-depth-1 bg-white py-5 px-3"
                         aria-labelledby="navbarDropdownMenuLink3" style="width: 1200px!important; left: -230%!important;">
                        <div class="row">
                            <div class="col-5 sub-menu position-relative mb-xl-0 mb-4">
                                <div class="row justify-content-between">
                                    <div class="col-6">
                                        <a href="#!" class="menu-block-slide view overlay z-depth-1 p-0 mb-2">
                                            <img src="https://cdn.shopify.com/s/files/1/2714/9310/products/Unique_Vintage_1950s_Black_Embroidered_Red_Rose_Baltimore_Swing_Dress_1024x1024.jpg?v=1571711475"
                                                 class="img-fluid " alt="First sample image">
                                            <span class="menu-block-text">Lorem ipsum</span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#!" class="menu-block-slide view overlay z-depth-1 p-0 mb-2">
                                            <img src="https://cdn.shopify.com/s/files/1/2714/9310/products/Unique_Vintage_1950s_Black_Embroidered_Red_Rose_Baltimore_Swing_Dress_1024x1024.jpg?v=1571711475"
                                                 class="img-fluid " alt="First sample image">
                                            <span class="menu-block-text">Lorem ipsum</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 sub-menu mb-md-0 mb-4">
                                <div class="pl-5">
                                    <h6 class="sub-title text-uppercase font-weight-bold text-dark">Хиты</h6>
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
                                <h6 class="sub-title text-uppercase font-weight-bold text-dark">Категории</h6>
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
                       class="text-uppercase text-for-a px-1 pb-1" title="Просмотреть Акции">
                        Акции
                    </a>
                </li>

            </ul>
            <!-- Links -->

            <!-- Search form -->
            <ul class=" mt-2 mt-lg-0 list-inline">
                <li class="nav-item list-inline-item pt-4" style="width: 30%;">
                    <!-- Search form -->
                    <form class="form-inline md-form form-sm active-purple-2 mt-2">
                        <input class="form-control form-control-sm mr-3 w-75 mb-1" type="text" placeholder="Search"
                               aria-label="Search">
                        <i class="fas fa-search" aria-hidden="true"></i>
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
                        <p class="px-3">
                            Доставку по всему Кыргызстану и СНГ <br>
                            Наш телефон для связи: 0777 57-89-58, <br>
                            0555 65-98-58, 0703 96-58-74
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
            <ul class="navigation" id="anchor-style">
                <li class="navigation-item">
                    <a style="font-size: 14px" href="{{ route('product.index') }}"
                       class="text-uppercase text-for-a px-1 pb-1" title="Просмотреть новинки">
                        Новинки
                    </a>
                </li>
                <li class="navigation-item">
                    <a style="font-size: 14px" href="{{ route('product.index') }}"
                       class="text-uppercase text-for-a px-1 pb-1" title="Просмотреть Коллекции">
                        Коллекция
                    </a>
                </li>
                <li class="navigation-item">
                    <a style="font-size: 14px" href="/#bottom_stocks" class="text-uppercase text-for-a px-1 pb-1"
                       title="Просмотреть Акции">
                        Акции
                    </a>
                </li>
            </ul>
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
                    <div class="dropdown-menu dropdown-primary text-small">
                        <p class="px-3">
                            Доставку по всему Кыргызстану и СНГ <br>
                            Наш телефон для связи: 0777 57-89-58, <br>
                            0555 65-98-58, 0703 96-58-74
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
            <li><a href="/">Home</a></li>
            <li><a href="/work">Our work</a></li>
            <li><span>About us</span>
                <ul>
                    <li><a href="/about/history">History</a></li>
                    <li><span>The team</span>
                        <ul>
                            <li><a href="/about/team/management">Management</a></li>
                            <li><a href="/about/team/sales">Sales</a></li>
                            <li><a href="/about/team/development">Development</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><span>Services</span>
                <ul>
                    <li><a href="/services/design">Design</a></li>
                    <li><a href="/services/development">Development</a></li>
                    <li><a href="/services/marketing">Marketing</a></li>
                </ul>
            </li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</div>

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
@endpush
