<div class="container d-none d-xl-block">
    <div class="row py-lg-1">
        <div class="col-2 pt-2">
            <a href="{{ route('home') }} ">
                <img src="{{ asset('img/logo3.png') }}" class="img-fluid" alt="">
            </a>
        </div>
        <div class="col-4 pt-3">
            <ul class="navigation" id="anchor-style">
                <li class="navigation-item">
                    <a style="font-size: 16px" href="{{ route('product.index') }}" class="text-uppercase text-for-a px-1 pb-1" title="Просмотреть новинки">
                        Новинки
                    </a>
                </li>
                <li class="navigation-item">
                    <a style="font-size: 16px" href="{{ route('product.index') }}"class="text-uppercase text-for-a px-1 pb-1" title="Просмотреть Коллекции">
                        Коллекция
                    </a>
                </li>
                <li class="navigation-item">
                    <a style="font-size: 16px" href="/#bottom_stocks" class="text-uppercase text-for-a px-1 pb-1" title="Просмотреть Акции">
                        Акции
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-6 pt-3 px-0">
            <ul class=" mt-2 mt-lg-0 list-inline">
                <li class="nav-item list-inline-item" style="width: 30%;">
                    <!-- Search form -->
                    <form class="form-inline md-form form-sm active-purple-2 mt-2">
                        <input class="form-control form-control-sm mr-3 w-75 mb-1" type="text" placeholder="Search"
                               aria-label="Search">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </form>
                </li>
                <li class="nav-item list-inline-item mr-0">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"style="font-size: 12px; padding: 0!important; background-color: white!important;color: #000!important; border: none; box-shadow: none;">
                        <img src="{{ asset('icons/dostavka.png') }}" class="pr-1" alt="">
                        Доставка в РК и РФ
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
                <li class="nav-item list-inline-item mx-2">

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
                <li class="nav-item list-inline-item mr-4 position-relative mb-2" id="basket">
                    <a href="{{ route('cart.checkout') }}" class="text-fut-book cart" style="text-decoration: none; color: #444444;">
                        <div class="badge badge-danger rounded-circle shadow small position-absolute cart-count justify-content-center align-items-center" style="width: 21px; height: 21px;top: -10px; right: 12px;"></div>
                        {{--<i style="color: #444;" class="fas carts fa-cart-plus fa-lg"></i>--}}
                        <img class="img-fluid" src="{{ asset('images/cart.svg') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
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
                    <a style="font-size: 14px" href="{{ route('product.index') }}" class="text-uppercase text-for-a px-1 pb-1" title="Просмотреть новинки">
                        Новинки
                    </a>
                </li>
                <li class="navigation-item">
                    <a style="font-size: 14px" href="{{ route('product.index') }}"class="text-uppercase text-for-a px-1 pb-1" title="Просмотреть Коллекции">
                        Коллекция
                    </a>
                </li>
                <li class="navigation-item">
                    <a style="font-size: 14px" href="/#bottom_stocks" class="text-uppercase text-for-a px-1 pb-1" title="Просмотреть Акции">
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
                        <input class="form-control form-control-sm mr-3 w-75 mb-1 d-none d-md-block" type="text" placeholder="Search"
                               aria-label="Search">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </form>
                </li>
                <li class="nav-item d-none d-md-block list-inline-item mx-auto mx-lg-0 width-form" style="width: 50px;">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"style="font-size: 12px; padding: 0!important; background-color: white!important;color: #000!important; border: none; box-shadow: none;">
                        <img src="{{ asset('icons/dostavka.png') }}" class="pr-1" alt="delivery" title="Доставка в КР и СНГ">
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
                    <a href="{{ route('cart.checkout') }}" class="text-fut-book cart" style="text-decoration: none; color: #444444;">
                        <div class="badge badge-danger rounded-circle shadow small position-absolute cart-count justify-content-center align-items-center" style="width: 21px; height: 21px;top: -10px; right: 12px;"></div>
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
                new Mmenu( "#menu", {
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
        $(document).ready(function(){
            $("#menu_yak").on("click","a", function (event) {
                // event.preventDefault();
                let id  = $(this).attr('href'),
                    top = $(id).offset().top;
                $('body,html').animate({scrollTop: top}, 1500);
            });
        });
    </script>
@endpush
