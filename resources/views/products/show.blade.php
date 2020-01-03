@extends('layouts.app')
@section('content')

    <section class="bg-nintex-color">
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-7 position-relative">
                    <div class=" d-flex justify-content-end " style=" border-bottom-left-radius: 100px;">
                        <div class="col-6">
                            <p>
                                {{ $product->season }}
                            </p>
                            <p class="text-uppercase text-h1Size-bold pb-md-2 h3">
                                {{ $product->title }}
                            </p>
                            <p>
                                {{ $product->description }}
                            </p>
                        </div>

                    </div>

                    <div class="mt-3">
                        <img class="position-absolute w-100" style="left: 0; bottom: 0;"
                             src="{{ asset('img/Vector 1.svg') }}" alt="">
                        <div class="row" style="margin-top: 100px;">
                            <div class="col-6 pl-5">
                                <p>Цвет:</p>
                                <div class="checkbox">
                                    @foreach(array_keys($product->colors) as $colors)
                                        <label class="j-color checkbox-red" style="background: {{ $colors }};"
                                               data-color="{{ $colors }}">
                                            <input id="cbox" checked="checked" value="{{ $colors }}" name="color" type="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
{{--                            @dd($product->colors)--}}
                            <div class="col-6 pt-3">
                                <p class=""><img src="{{ asset('img/file.svg') }}" alt=""> Лучшая ткань</p>
                                <p class=""><img src="{{ asset('img/quality (1).svg') }}" alt=""> Гарантия
                                    качества</p>
                            </div>
                            <div class="col-5 pb-5 pl-5">
                                <p class="mb-4">Размеры: </p>
                                <div class="j-size-list size-list j-smart-overflow-instance">
                                    @foreach($product->sizes as $size)
                                        <label class="j-size tooltipstered size-button " data-characteristic-id=""
                                               data-size="{{ $size }}">
                                            <span>{{ $size }}</span>
                                            <input class="radio-size" id="size" name="size" type="radio" value="">
                                        </label>
                                    @endforeach
                                </div>
                                <a href="{{ route('cart.checkout') }}" class="btn btn-lightblue mt-3 cart">Начать
                                    покупки</a>
                            </div>
                            <div class="col-4 pb-5">
                                @include('partials.favorite', ['route' => \Illuminate\Support\Facades\Auth::check() ? '' : route('login'), 'data' => 'data-id='.$product->id.''])

{{--                                <a href="#"--}}
{{--                                   class="btn btn-dark btn-block text-fut-book but-hov text-white buy_book d-lg-block d-none"--}}
{{--                                   data-id="{{ $product->id }}" id="basket">В корзину</a>--}}
                                <div id="for-add-cart-btn">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <img style="bottom: 0px; position: absolute; width:394px;height:525px;"
                         src="{{ asset('uploads/'.$product->logo)}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid position-absolute" style="bottom: 0;">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </section>


    @include('partials.footer')

@endsection
@push('scripts')
    <script src="{{ asset('js/slider-basket.js') }}"></script>
    <script>
        function getProducts(params = {}) {
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
    <script>
        $('.j-size-list').on('click', 'label', function (e) {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let size = btn.data('size');
            let color = '';
            $('input:radio:checked').each(function(){
                color = $(this).val();
            });
            console.log(size, color);
            // console.log(size, color);
            $('div#for-add-cart-btn').empty();
            const element = $('                <a href="#"' +
                '                   class="btn btn-dark btn-block text-fut-book but-hov text-white buy_book d-lg-block d-none w-50"' +
                '                   data-id=" {{ $product->id }}" data-size="' + size  + '" data-color="'+ color +'"' +
                '                   id="basket">Add to cart' +
                '                </a>');
            $('div#for-add-cart-btn').append(element);
            registerCartBuyButtons(element);
        });
        {{--$('.j-size.tooltipstered.size-button').on('click', function (e) {--}}
        {{--    e.preventDefault();--}}
        {{--    let btn = $(e.currentTarget);--}}
        {{--    let size = btn.data('size');--}}

        {{--    $('div#for-add-cart-btn').empty();--}}
        {{--    const element = $('                <a href="#"' +--}}
        {{--        '                   class="btn btn-dark btn-block text-fut-book but-hov text-white buy_book d-lg-block d-none w-50"' +--}}
        {{--        '                   data-id=" {{ $product->id }}" data-size="' + size.size  + '"' +--}}
        {{--        '                   id="basket">Add to cart' +--}}
        {{--        '                </a>');--}}
        {{--    $('div#for-add-cart-btn').append(element);--}}
        {{--    registerCartBuyButtons(element);--}}
        {{--});--}}
    </script>
    <script>
        $('#basket').removeAttr('disabled');
        console.log('asd');
    </script>
    <script>

    </script>
    @includeWhen(auth()->check(), 'partials.scripts.favorite_click')
@endpush

