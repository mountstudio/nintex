<section class="fixed-bottom d-block d-lg-none bg-white" style="height: 50px!important; width: auto;">
    <div class="container px-0">
        <div class="row">
{{--            <div class="col-3 py-3  text-center">--}}
{{--                <a href="{{ auth()->check() ? route('profile') : route('login') }}"--}}
{{--                   class="border-bottom-0 border-top-0 border-right-0 border-left-0 rounded-0 my-2 my-sm-0"><img--}}
{{--                        src="{{ asset('img/user_avatar.svg') }}" class="img-fluid" alt=""></a>--}}
{{--            </div>--}}
{{--            <div class="col-3 py-3 border-left text-center">--}}
{{--                <a href="{{ auth()->check() ? route('profile') : route('login') }}"--}}
{{--                   class="border-bottom-0 border-top-0 border-right-0 border-left-0 rounded-0  my-2 my-sm-0"><img--}}
{{--                        src="{{ asset('img/user_avatar.svg') }}" class="img-fluid" alt=""></a>--}}
{{--            </div>--}}
            <div class="col-6 px-0 text-center">
                <a href="{{ auth()->check() ? route('profile') : route('login') }}"
                   class="border-bottom-0 border-top-0 border-right-0 border-left-0 shadow-none mx-0 mt-0  btn btn-block rounded-0 my-sm-0"><img
                        src="{{ asset('img/user_avatar.svg') }}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-6 px-0 border-left text-center">
                <a href="{{ route('cart.checkout') }}" class="text-fut-book mx-0 mt-0 cart shadow-none  btn btn-block"
                   style="text-decoration: none; color: #444444;">
                    <div
                        class="badge badge-danger rounded-circle shadow small position-absolute cart-count justify-content-center align-items-center"
                        style="width: 21px; height: 21px;top: -10px; right: 12px;"></div>
                    {{--<i style="color: #444;" class="fas carts fa-cart-plus fa-lg"></i>--}}
                    <img class="img-fluid" src="{{ asset('images/cart.svg') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

