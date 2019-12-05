@extends('profile.profile')
@section('content')
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-2">
{{--                @include('profile.sidebar')--}}
            </div>
            <div class="col">
{{--                @include('profile.dashboard')--}}
                <section>
                    <h2>История заказов</h2>
                    <div class="d-flex mt-5">
{{--                            @dd($cart->cart['cart'])--}}
{{--                        @foreach($cart->cart['cart'] as $item)--}}
{{--                            {{ $item }}--}}
{{--                        @endforeach--}}
                            <div class="col-2">
                                <label for="">{{ $cart->name }}</label>
                            </div>
                            <div class="col-2">
                                    <label for=""> {{ $cart->address }} </label>
                            </div>
                            <div class="col-2">
                                    <label for=""> {{ $cart->phone }} </label>
                            </div>
                            <div class="col-2">
                                    <label for=""> {{ $cart->email }} </label>
                            </div>
                            <div class="col-2">
                                    <label for=""> {{ $cart->created_at }} </label>
                            </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection

