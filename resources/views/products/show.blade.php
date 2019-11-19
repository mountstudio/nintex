@extends('layouts.app')
@section('content')


    <div class="container my-5 py-5 z-depth-1">
        <div class="col-4">
            <h4>Title</h4>
            <label>{{$product->title}}</label>
        </div>
        <div class="col-4">
            <h4>Description</h4>
            <label>{{$product->description}}</label>
        </div>
{{--        <div class="col-4">--}}
{{--            <h4>Colors</h4>--}}
{{--            @foreach($product->colors as $color)--}}
{{--                <label>{{$product->colors}}</label>--}}
{{--            @endforeach--}}
{{--        </div>--}}
        <div class="col-4">
            <h4>Price</h4>
                <label>{{$product->price}}</label>
        </div>
        <button class="btn-primary text-fut-book but-hov mx-auto text-white buy_book py-2 w-100 d-lg-block d-none" data-id="{{ $product->id }}"
             >
            Добавить в корзину</button>
    </div>

    <!-- Default form contact -->


@endsection
@push('scripts')
    <script>
        function getProducts(params = {})
        {
            $.ajax({
                url: '{{ route('product.all') }}',
                data: params,
                success: data => {
                    console.log(data);

                    result.find('.buy_book').each((e, i) => {
                        registerCartBuyButtons($(i));
                    });
                },
                error: () => {
                    console.log('error');
                }
            });
        }
    </script>
@endpush
