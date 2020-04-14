@extends('layouts.app')

@section('content')

    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <a href="">
                        <img class="img-fluid" src="{{asset('img/Nintex.svg')}}" alt="Nintex logo">
                    </a>
                </div>
                <div class="col-4">
                    <ul class="list-inline">
                        <li class="list-inline-item">New dress</li>
                        <li class="list-inline-item">Collection</li>
                        <li class="list-inline-item">Hits</li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class=" mt-2 mb-0 mt-lg-0 list-inline">
                        <li class="nav-item list-inline-item mr-0 pt-4" style="width: 30%;">
                            <!-- Search form -->
                            <form class="form-inline md-form form-sm active-purple-2 mt-0 mt-md-2">
                                <div class="form-group">
                                    <input class="form-control form-control-sm pt-0 pt-md-1 mr-1 w-75 mb-1" style="display: inline-block;" type="text" placeholder="Search"
                                           aria-label="Search" name="title" id="title">
                                    <i class="fas fa-search" aria-hidden="true"></i>

                                </div>
                                <div  id="productList">
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
                        <li class="nav-item list-inline-item mb-2">
                            <a href="{{ auth()->check() ? route('profile') : route('login') }}"
                               class="border-bottom-0 border-top-0 border-right-0 border-left-0 rounded-0 border-dark my-2 my-sm-0"><img
                                    src="{{ asset('img/user_avatar.svg') }}" class="img-fluid" alt=""></a>
                        </li>
                        <!--Cart link-->
                        <li class="nav-item list-inline-item position-relative mb-2" id="basket">
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
            </div>
        </div>
    </section>
@endsection
