@extends('profile.profile')

@section('profile_content')
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-2">
                @include('profile.sidebar')
            </div>
            <div class="col">
                @include('profile.dashboard')
                <section>
                    <h2>История заказов</h2>
                    <div class="d-flex mt-5">
                        @foreach($carts as $cart)
{{--                            @foreach($cart as $item)--}}
{{--                            @dd($cart->cart['cart'])--}}
                            <div class="col-2">
                                <a href="{{ route('cart.shopping', $cart) }}"><p class="h5">{{ $cart->cart['total'] }}</p></a>
                            </div>
                            <div class="col-2">
                                <a href="#">
                                    <p class="h5">{{ $cart->created_at }}</p>
                                </a>
                            </div>
{{--                            @endforeach--}}

                        @endforeach
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
