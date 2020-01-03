@extends('profile.profile')
@section('content')
    <div class="container-fluid py-5">

        <div class="row justify-content-center">
            <div class="col-2">
                @include('profile.sidebar')
            </div>

            <div class="col">
                <section>
                    <h4>Сумма: {{ $cart->cart['total'] }}</h4>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Наименование товара</th>
                            <th scope="col">Цвет</th>
                            <th scope="col">Размер</th>
                            <th scope="col">Цена</th>
                            <th scope="col">Кол-во</th>
                            <th scope="col">Выданная сумма</th>
                            <th scope="col">Сумма сдачи</th>
                            <th scope="col">Дата заказа</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart->cart['cart'] as $item)
{{--                            @foreach($item['attributes'] as $value)--}}
{{--                                @dd($item)--}}
                            <tr>

                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['attributes']['size'] }}</td>
                                <td>
                                    <div class="col-1 order-7">
                                        <div class="mx-2 rounded-circle" style="background:{{ $item['attributes']['colors'] }}; width: 30px; height: 30px;"></div>
                                    </div>
                                </td>
                                <td>{{ $item['price'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>{{ $cart->sum }}</td>
                                <td>{{ $cart->diff }}</td>
                                <td>{{ $cart->created_at }}</td>
                            </tr>
                        @endforeach
{{--                        @endforeach  --}}
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
@endsection

