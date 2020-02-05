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
                                @if($retailProductQuantity > 0)
                                    <h5><b>В розницу:</b></h5>
                                    <p class="mb-0">Размеры:</p>
                                    @foreach($productRetailSizes[$product->id] as $productRetailSize)
                                        <input type="radio" class="grey rounded size-retail" name="sizeRetail"
                                               value="{{ $productRetailSize->id }}"
                                               data-prod_id="{{ $product->id }}"
                                               data-size="{{ $productRetailSize->size }}">
                                        <span class="pl-1 pr-1">{{ $productRetailSize->size }}</span>
                                        </input>
                                    @endforeach
                                    <p class="mb-0 mt-0">Цвета:</p>
                                    <div class="retailColors">
                                        @foreach($productRetailColors as $productRetailColor)
                                            <input type="radio" name="colorRetail" data-prod_id="{{ $product->id  }}"
                                                   data-color="{{ $productRetailColor->color }}">
                                            <span class="pl-1 pr-1"
                                                  style="color: {{ $productRetailColor->color }}">{{ $productRetailColor->color }}</span>
                                            </input>
                                        @endforeach
                                    </div>
                                    <div class="retailQuantity">
                                        <h6 id="retailQuantity" class="mt-2"><b>Количество: {{ $retailProductQuantity }}
                                                шт. в наличии</b></h6>
                                    </div>
                                    <h6 id="retailPrice" class="mt-0"><b>Цена за 1 шт: {{ $productsRetailPrice }}
                                            kgs</b></h6>
                                @endif
                                {{--                                <p>Цвет:</p>
                                                                <div class="checkbox">
                                                                    @dd($product->sizesWholesale[11]->price)
                                                                    @foreach( array_keys($product->color) as $colors)
                                                                        <label class="j-color checkbox-red" style="background: {{ $colors }};"
                                                                               data-color="{{ $colors }}">
                                                                            <input id="cbox" checked="checked" value="{{ $colors }}" name="color" type="radio">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    @endforeach
                                                                </div>--}}
                            </div>
                            {{--                            <div class="col-6 pl-5">
                                                            <p>Цвет:</p>
                                                            <div class="checkbox">
                                                                @dd($product->sizesWholesale[11]->price)
                                                                @foreach( array_keys($product->color) as $colors)
                                                                    <label class="j-color checkbox-red" style="background: {{ $colors }};"
                                                                           data-color="{{ $colors }}">
                                                                        <input id="cbox" checked="checked" value="{{ $colors }}" name="color" type="radio">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                @endforeach
                                                            </div>
                                                        </div>--}}
                            <div class="col-6 pt-3">
                                <p class=""><img src="{{ asset('img/file.svg') }}" alt=""> Лучшая ткань</p>
                                <p class=""><img src="{{ asset('img/quality (1).svg') }}" alt=""> Гарантия
                                    качества</p>
                            </div>
                            <div class="col-5 pb-5 pl-5">
                                <div class="j-size-list size-list j-smart-overflow-instance">
                                    @if($wholesaleProductQuantity > 0)
                                        <h5 class="mt-4"><b>Оптом:</b></h5>
                                        <p class="mb-0">Размеры:</p>
                                        @foreach($productWholesaleSizes as $productWholesaleSize)
                                            <input type="checkbox" class="grey rounded" name="sizeWholesale"
                                                   data-prod_id="{{ $product->id }}"
                                                   data-size="{{ $productWholesaleSize->sizes }}"
                                                   value="{{ $productWholesaleSize->sizes }}">
                                            <label for="sizeText" class="grey rounded">
                                                @foreach(json_decode($productWholesaleSize->sizes) as $size)
                                                    <span id="sizeText" class="pl-1 pr-1">{{ $size }}</span>
                                                @endforeach
                                            </label>
                                            </input>
                                        @endforeach
                                        <p class="mb-0 mt-0">Цвета:</p>
                                        <div class="wholesaleColors">
                                            @foreach($productWholesaleColors as $productWholesaleColor)
                                                <input type="radio" class="grey rounded" name="colorWholesale"
                                                       data-color="{{ $productWholesaleColor->color }}"
                                                       data-prod_id="{{ $product->id }}"
                                                       value="{{ $productWholesaleColor->color }}">
                                                <span class="pl-1 pr-1"
                                                      style="color: {{ $productWholesaleColor->color }}">{{ $productWholesaleColor->color }}</span>
                                                </input>
                                            @endforeach
                                        </div>
                                        <div class="wholesaleQuantity">
                                            <h6 id="retailQuantity" class="mt-2">
                                                <b>Количество: {{ $wholesaleProductQuantity }} шт. в наличии</b></h6>
                                        </div>
                                        <h6 id="retailPrice" class="mt-1"><b>Цена за 1
                                                линейку: {{ $productWholesaleColors[0]->price }} kgs</b></h6>
                                    @endif
{{--                                    @foreach($product->sizes as $size)--}}
{{--                                        <label class="j-size tooltipstered size-button " data-characteristic-id=""--}}
{{--                                               data-size="{{ $size }}">--}}
{{--                                            <span>{{ $size }}</span>--}}
{{--                                            <input class="radio-size" id="size" name="size" type="radio" value="">--}}
{{--                                        </label>--}}
{{--                                    @endforeach--}}
                                </div>
                                <a href="{{ route('cart.checkout') }}" class="btn btn-lightblue mt-3 cart">Начать
                                    покупки</a>
                            </div>
                            <div class="col-4 pb-5">
                                @include('partials.favorite', ['route' => \Illuminate\Support\Facades\Auth::check() ? '' : route('login'), 'data' => 'data-id='.$product->id.''])

                                @if($retailProductQuantity > 0 || $wholesaleProductQuantity > 0)
                                    <div id="for-add-cart-btn">
                                        <a class="btn btn-dark btn-block text-fut-book but-hov text-white d-lg-block"
                                           data-id="{{ $product->id }}" data-size=" " data-color=" " id="basketFake">В корзину</a>
                                    </div>
                                @endif
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
        //функция для возврвта набора цветов у продукта->размера
        $('input:radio[name = "sizeRetail"]').on('click, change', function (e) {
            e.preventDefault();
            let btnSizeRetail = $(e.currentTarget);
            let size = btnSizeRetail.data('size');
            let prod_id = btnSizeRetail.data('prod_id');
            $.ajax({
                url: "{{ route('product.selectColorsForRetailSize') }}",
                data: {
                    product_id: prod_id,
                    size: size
                },
                success: data => {
                    $('div.retailColors').empty();
                    let elem = '';
                    $.each(data.colors, function (index, value) {
                        elem = '<input type="radio" name="colorRetail" data-prod_id="{{ $product->id  }}" data-color="' + value.color + '">'
                            + '<span class="pl-1 pr-1" style="color:' + value.color + '">' + ' ' + value.color + ' ' + '</span> </input>'
                        $('div.retailColors').append(elem);
                    });
                    $('div.retailColors').find('input').each(function (i, item) {
                        registerElem(item);
                    });
                    $('div.retailQuantity').empty();
                    $('div.retailQuantity').append('<h6 id="retailQuantity" class="mt-2"><b>Количество: ' + data.quantity + 'шт. в наличии</b></h6>');
                },
                error: () => {
                    console.log('error');
                }
            })
        });

        //функция для возврвта количества у продукта->размера->цвета (в розницу)
        $('div.retailColors').find('input').each(function (i, item) {
            registerElem(item);
        });
        $('input:radio[name = "colorWholesale"]').on('click, change', function (e) {
            let size = '', color = '';
            $('input:checkbox[name = "sizeWholesale"]:checked').each(function () {
                size = $(this).val();
            });
            $('input:radio[name = "colorWholesale"]:checked').each(function () {
                color = $(this).data('color');
            });
            console.log(size, color, 'wholesale');
            size = size.replace(/"/g, "'");
            const element = $('     <a href="#"' +
                '                   class="btn btn-dark btn-block text-fut-book but-hov text-white buy_book d-lg-block"' +
                '                   data-id="{{ $product->id }}" data-size="' + size + '" data-color="' + color + '"' +
                '                   id="basket">В корзину' + '</a>');
            $('div#for-add-cart-btn').empty();
            $('div#for-add-cart-btn').append(element);
            registerCartBuyButtons(element);
        });

        function addBtnBasketFake() {
            const element = $('<div id="for-add-cart-btn">' +
                '<a class="btn btn-dark btn-block text-fut-book but-hov text-white {{--buy_book--}} d-lg-block"' +
                ' data-id="{{ $product->id }}" data-size=" " data-color=" " id="basketFake">В корзину</a>' +
                '</div>');
            $('div#for-add-cart-btn').empty();
            $('div#for-add-cart-btn').append(element);
        }

        function registerElem(elem) {
            $(elem).on('click, change', function (e) {
                e.preventDefault();
                let btnColorWholesale = $(e.currentTarget);
                let color = btnColorWholesale.data('color');
                let prod_id = btnColorWholesale.data('prod_id');
                let size = '';
                $('input:radio[name = "sizeRetail"]:checked').each(function () {
                    size = $(this).val();
                });
                if (size != '') {
                    $.ajax({
                        url: "{{ route('product.selectQuantityProductColor') }}",
                        data: {
                            product_id: prod_id,
                            size: size,
                            color: color
                        },
                        success: data => {
                            $('div.retailQuantity').empty();
                            $('div.retailQuantity').append('<h6 id="retailQuantity" class="mt-2"><b>Количество: ' + data.quantity + ' шт. в наличии</b></h6>');
                        },
                        error: () => {
                            console.log('error');
                        }
                    })
                } else {
                    alert('Выберите размер!');
                }
            });

            $('input:radio[name = "sizeRetail"]').on('click, change', function (e) {
                $('input:checkbox[name = "sizeWholesale"]:checked').each(function () {
                    $(this).prop("checked", false);
                });
                $('input:radio[name = "colorWholesale"]:checked').each(function () {
                    $(this).prop("checked", false);
                });
                addBtnBasketFake();
            });

            $('input:checkbox[name = "sizeWholesale"]').on('click, change', function (e) {
                $('input:radio[name = "sizeRetail"]:checked').each(function () {
                    $(this).prop("checked", false);
                });
                $('input:radio[name = "colorRetail"]:checked').each(function () {
                    $(this).prop("checked", false);
                });
                addBtnBasketFake();
            });

            $('input:radio[name = "colorRetail"]').on('click, change', function (e) {
                let size = '', color = '';
                $('input:radio[name = "sizeRetail"]:checked').each(function () {
                    size = $(this).val();
                });
                $('input:radio[name = "colorRetail"]:checked').each(function () {
                    color = $(this).data('color');
                });
                // $('#basket').data('size', size);
                // $('#basket').data('color', color);
                console.log(size, color, 'retail');
                const element = $('     <a href="#"' +
                    '                   class="btn btn-dark btn-block text-fut-book but-hov text-white buy_book d-lg-block"' +
                    '                   data-id="{{ $product->id }}" data-size="' + size + '" data-color="' + color + '"' +
                    '                   id="basket">В корзину' + '</a>');
                $('div#for-add-cart-btn').empty();
                $('div#for-add-cart-btn').append(element);
                registerCartBuyButtons(element);
            });
            $('input:radio[name = "colorWholesale"]').on('click, change', function (e) {
                let size = '', color = '';
                $('input:checkbox[name = "sizeWholesale"]:checked').each(function () {
                    size = $(this).val();
                });
                $('input:radio[name = "colorWholesale"]:checked').each(function () {
                    color = $(this).data('color');
                });
                console.log(size, color, 'wholesale');
                size = size.replace(/"/g, "'");
                const element = $('     <a href="#"' +
                    '                   class="btn btn-dark btn-block text-fut-book but-hov text-white buy_book d-lg-block"' +
                    '                   data-id="{{ $product->id }}" data-size="' + size + '" data-color="' + color + '"' +
                    '                   id="basket">В корзину' + '</a>');
                $('div#for-add-cart-btn').empty();
                $('div#for-add-cart-btn').append(element);
                registerCartBuyButtons(element);
            });
        }

        //функция для возврвта количества у продукта->размера->цвета (оптом)
        $('input:radio[name = "colorWholesale"]').on('click, change', function (e) {
            e.preventDefault();
            let btnColorWholesale = $(e.currentTarget);
            let color = btnColorWholesale.data('color');
            let prod_id = btnColorWholesale.data('prod_id');
            let size = '';
            $('input:checkbox[name = "sizeWholesale"]:checked').each(function () {
                size = $(this).val();
            });
            // console.log(size);
            if (size != '') {
                $.ajax({
                    url: "{{ route('product.selectQuantityProductColor') }}",
                    data: {
                        product_id: prod_id,
                        size: size,
                        color: color
                    },
                    success: data => {
                        $('div.wholesaleQuantity').empty();
                        $('div.wholesaleQuantity').append('<h6 id="retailQuantity" class="mt-2"><b>Количество: ' + data.quantity + ' шт. в наличии</b></h6>');
                    },
                    error: () => {
                        console.log('error');
                    }
                })
            }
            else {
                $(btnColorWholesale).prop('checked', false);
                alert('Выберите размер!');
            }
        });

    </script>
    <script>
        $('#basket').removeAttr('disabled');
        console.log('asd');
    </script>
    <script>

    </script>
    @includeWhen(auth()->check(), 'partials.scripts.favorite_click')
@endpush

