@extends('profile.profile')
@section('content')
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-2">
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
                            <th scope="col">Дата заказа</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart->cart['cart'] as $item)
{{--                            @foreach($item['attributes'] as $value)--}}
{{--                                @dd($item['attributes'])--}}
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item['name'] }}</td>
{{--                                <td>{{ $item['attributes'] }}</td>--}}
{{--                                <td>{{ $item['attributes'] }}</td>--}}
                                <td>{{ $item['price'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
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

