@extends('layouts.app')
@section('content')
    <section class="bg-nintex-color">
        <div class="container-fluid pt-5">
            <div class="row justify-content-center">
                <div class="col-9 col-lg-4">
                    @include('product_blocks.slider')
                </div>
{{--                @dd($images)--}}
                <div class="col-12 col-lg-6 position-relative">
                    <div class=" d-flex justify-lg-content-end" style=" border-bottom-left-radius: 100px;">
                        <div class="col-12">
                            <h3>Коллекция</h3>
                            <p>
                                {{ $product->season }}
                            </p>
                            <p class="text-uppercase text-h1Size-bold pb-md-2 h2">
                                {{ $product->title }}
                            </p>
                            <h3>Описание</h3>
                            <p>
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-3">
                        <img class="position-absolute w-100" style="left: 0; bottom: 0;"
                             src="{{ asset('img/Vector 1.svg') }}" alt="">

                        <div class="col-12 pb-5 pl-5 mt-5">
                            <div class="j-size-list size-list j-smart-overflow-instance">
                                {{--                                @if($wholesaleProductQuantity > 0)--}}
                                <p class="mb-0 h5">Линейка размеров:</p>
                                @foreach($productWholesaleSizes as $productWholesaleSize)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" checked class="custom-control-input"
                                               id="defaultUnchecked"
                                               name="sizeWholesale"
                                               data-prod_id="{{ $product->id }}"
                                               data-size="{{ $productWholesaleSize->sizes }}"
                                               value="{{ $productWholesaleSize->sizes }}">
                                        {{--                                        @dd($productWholesaleSize->sizes)--}}
                                        <label for="defaultUnchecked" class="mt-2">
                                            @foreach(json_decode($productWholesaleSize->sizes) as $size)
                                                <span id="sizeText"
                                                      class="p-1 ml-1 h5 border border-dark rounded-circle">{{ $size }}</span>
                                            @endforeach
                                        </label>
                                        </input>
                                    </div>
                                @endforeach
                                <p class="mb-0 h5">Цвет:</p>


                                <div class="checkbox">
                                    @foreach($productWholesaleColors as $productWholesaleColor)
                                        <label class="checkbox-red"
                                               style="background-color: {{$productWholesaleColor->color}}"
                                               @if($productWholesaleColor->quantity <= 0) disabled @endif>
                                            <input id="cbox-red" class="checkbox-color" type="radio"
                                                   name="colorWholesale"
                                                   data-color="{{ $productWholesaleColor->color }}"
                                                   data-id="{{ $product->id }}"
                                                   value="{{ $productWholesaleColor->color }}">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach

                                </div>
                                <h6 id="retailPrice" class="mt-1"><b>Цена за 1
                                        линейку: {{ $productWholesaleColors[0]->price }} kgs</b></h6>
                            </div>

                        </div>
                        <div class="col-12 col-lg-6 pt-3">
                            <p class=""><img src="{{ asset('img/file.svg') }}" alt=""> Лучшая ткань</p>
                            <p class=""><img src="{{ asset('img/quality (1).svg') }}" alt=""> Гарантия
                                качества</p>
                        </div>
                        <div class="col-12 col-lg-4 pb-5">
                            @include('partials.favorite', ['route' => \Illuminate\Support\Facades\Auth::check() ? '' : route('login'), 'data' => 'data-id='.$product->id.''])
                            <div id="for-add-cart-btn">
                                <a class="btn btn-dark btn-block text-fut-book but-hov text-white d-lg-block"
                                   data-id="{{ $product->id }}" data-size=" " data-color=" " id="basketFake">В
                                    корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container" style="bottom: 0;">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item mx-auto">
                            <a class="nav-link btn shadow-none border-0 border-bottom bg-white text-dark active"
                               id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                               aria-controls="pills-home" aria-selected="true">Возврат товара <span></span></a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link btn shadow-none border-0 border-bottom bg-white text-dark"
                               id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                               aria-controls="pills-profile" aria-selected="false">Состав/уход <span></span></a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link btn shadow-none border-0 border-bottom bg-white text-dark"
                               id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                               aria-controls="pills-contact" aria-selected="false">Доставка <span></span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-12">

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            {{ $product->information }}
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            {{ $product->composition }}
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab">
                            Доставку по всему Кыргызстану и СНГ
                            Наш телефон для связи: 0777 57-89-58,
                            0555 65-98-58, 0703 96-58-74
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Блок для отзывов -->
    <section>
        <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForComment">
                Оставить отзыв
            </button>
            <div class="row">
                <div class="col-12">
                    <div class="" id="childPost">
                        <form action="{{ route('comment.store') }}" method="post" id="commentcreate">
                            {{--                            @csrf--}}
                            {{--                            <label for="quickReplyFormComment">Your comment</label>--}}
                            {{--                            @if(Auth::user())--}}
                            {{--                            <!-- Button trigger modal -->--}}
                            {{--                                <!-- Central Modal Small -->--}}
                            {{--                                <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"--}}
                            {{--                                     aria-hidden="true">--}}

                            {{--                                    <!-- Change class .modal-sm to change the size of the modal -->--}}
                            {{--                                    <div class="modal-dialog modal-sm" role="document">--}}


                            {{--                                        <div class="modal-content">--}}
                            {{--                                            <div class="modal-header">--}}
                            {{--                                                <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>--}}
                            {{--                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                            {{--                                                    <span aria-hidden="true">&times;</span>--}}
                            {{--                                                </button>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="modal-body">--}}
                            {{--                                                <div class="row">--}}
                            {{--                                                    <div class="col-3">--}}
                            {{--                                        <textarea class="form-control" name="comment" placeholder="your comment"--}}
                            {{--                                                  id="quickReplyFormComment" rows="5"></textarea>--}}
                            {{--                                                    </div>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="modal-footer">--}}
                            {{--                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>--}}
                            {{--                                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <!-- Central Modal Small -->--}}

                            {{--                                <div class="text-center my-4">--}}
                            {{--                                    <button class="btn btn-primary btn-sm waves-effect waves-light"--}}
                            {{--                                            type="submit"--}}
                            {{--                                            id="childPostButton">Post--}}
                            {{--                                    </button>--}}
                            {{--                                </div>--}}
                            {{--                            @else--}}
                            {{--                            --}}
                            {{--                            @endif--}}
                            <div class="modal fade" id="modalForComment" tabindex="-1" role="dialog"
                                 aria-labelledby="modalForComment"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Оставьте отзыв</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('comment.store') }}" method="post" id="commentcreate">
                                            @csrf
                                            @if(Auth::user())
                                                <div class="modal-body mx-3">
                                                    <div class="md-form form-sm">
                                                        <i class="fas fa-envelope prefix"></i>
                                                        <textarea class="form-control" name="comment"
                                                                  placeholder="    your comment"
                                                                  id="quickReplyFormComment" rows="5"></textarea>
                                                    </div>

                                                    {{--                                                    <div class="md-form form-sm">--}}
                                                    {{--                                                        <i class="fas fa-user prefix"></i>--}}
                                                    {{--                                                        <input type="text" name="name" value="" class="form-control"--}}
                                                    {{--                                                               placeholder="name">--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <h5 style="border-bottom: 1px solid lightskyblue;">Оставте--}}
                                                    {{--                                                        контактные данные для обратной связи</h5>--}}
                                                    {{--                                                    <div class="md-form form-sm">--}}
                                                    {{--                                                        <i class="fas fa-tty prefix"></i>--}}
                                                    {{--                                                        <input type="text" name="phone" value="" class="form-control"--}}
                                                    {{--                                                               placeholder="phone">--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <div class="md-form form-sm">--}}
                                                    {{--                                                        <i class="fas fa-at prefix"></i>--}}
                                                    {{--                                                        <input type="text" name="email" value="" class="form-control"--}}
                                                    {{--                                                               placeholder="email">--}}
                                                    {{--                                                    </div>--}}
                                                </div>
                                            @else
                                                <div class="modal-body mx-3">
                                                    <div class="md-form form-sm">
                                                        <i class="fas fa-envelope prefix"></i>
                                                        <textarea class="form-control" name="comment"
                                                                  placeholder="    your comment"
                                                                  id="quickReplyFormComment" rows="5"></textarea>
                                                    </div>

                                                    <div class="md-form form-sm">
                                                        <i class="fas fa-user prefix"></i>
                                                        <input type="text" name="name" value="" class="form-control"
                                                               placeholder="name">
                                                    </div>
                                                    <h5 style="border-bottom: 1px solid lightskyblue;">Оставте
                                                        контактные данные для обратной связи</h5>
                                                    <div class="md-form form-sm">
                                                        <i class="fas fa-tty prefix"></i>
                                                        <input type="text" name="phone" value="" class="form-control"
                                                               placeholder="phone">
                                                    </div>
                                                    <div class="md-form form-sm">
                                                        <i class="fas fa-at prefix"></i>
                                                        <input type="text" name="email" value="" class="form-control"
                                                               placeholder="email">
                                                    </div>
                                                </div>
                                            @endif
                                        </form>
                                        <div class="text-center my-4">
                                            <button class="btn btn-primary btn-sm waves-effect waves-light"
                                                    type="submit"
                                                    id="childPostButton">Post
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <p>
                        сортировать по: дате оценка полезности
                    </p>
                </div>
                <div class="col-12">
                    <section class="my-5">
                        <!-- Card header -->
                        <div class="card-header border-0 font-weight-bold">{{$commentCount}} comments</div>
                        @foreach($comments as $key => $comment)
                            <div class="media my-5 col-12" id="play">
                                <div class="media-body  text-center text-md-left px-4">
                                    <h5 class="font-weight-bold mt-0">

                                        <a href="">{{ $comment->name }} </a>
                                        @admin
                                        <a href="#" class="pull-right answer" data-id="{{ $key }}" id="">
                                            <i class="fas fa-reply"></i>
                                        </a>
                                        @endadmin
                                    </h5>
                                    <h6 class="ml-3">{{$comment->comment}}</h6>
                                    <form class="comment" action="{{ route('comment.store') }}" method="post"
                                          style="display: none;">
                                        @csrf
                                        <div class="row" data-comment="{{ $key }}">
                                            <div class="col-10">
                                            <textarea name="comment" id="" cols="30" rows="10"
                                                      style="width: 850px; height: 50px;"></textarea>
                                            </div>
                                            <div class="col-2" style="display:none"><input type="text" name="parent_id"
                                                                                           value="{{$comment->id}}">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-primary btn-sm waves-effect waves-light"
                                                    type="submit"
                                                    id="">Post
                                            </button>
                                        </div>
                                    </form>
                                    @foreach($comment->children as $answer)
                                        <div class="media d-block d-md-flex mt-1">
                                            <div class="media-body text-center text-md-left ml-md-5 ml-0">
                                                <h5 class="font-weight-bold mt-0">
                                                    <a href="">{{ $answer->name }}</a>
                                                </h5>
                                                {{ $answer->comment }}
                                            </div>
                                        </div>
                                @endforeach
                                <!-- Quick Reply -->
                                </div>
                            </div>
                    @endforeach
                    {{--                        <div class="media d-block d-md-flex mt-3">--}}
                    {{--                            <img class="card-img-64 d-flex mx-auto mb-3"--}}
                    {{--                                 src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg"--}}
                    {{--                                 alt="Generic placeholder image">--}}
                    {{--                            <div class="media-body text-center text-md-left ml-md-3 ml-0">--}}
                    {{--                                <h5 class="font-weight-bold mt-0">--}}
                    {{--                                    <a href="">Caroline Horwitz</a>--}}
                    {{--                                    <a href="" class="pull-right">--}}
                    {{--                                        <i class="fas fa-reply"></i>--}}
                    {{--                                    </a>--}}
                    {{--                                </h5>--}}
                    {{--                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium--}}
                    {{--                                voluptatum deleniti atque corrupti--}}
                    {{--                                quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,--}}
                    {{--                                similique sunt in culpa officia deserunt mollitia animi, id est laborum et dolorum fuga.--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    <!--Pagination -->
{{--                        <nav class="d-flex justify-content-center mt-5">--}}
{{--                            <ul class="pagination pg-blue mb-0">--}}

{{--                                <!--First-->--}}
{{--                                <li class="page-item disabled">--}}
{{--                                    <a class="page-link waves-effect waves-effect">First</a>--}}
{{--                                </li>--}}

{{--                                <!--Arrow left-->--}}
{{--                                <li class="page-item disabled">--}}
{{--                                    <a class="page-link waves-effect waves-effect" aria-label="Previous">--}}
{{--                                        <span aria-hidden="true">«</span>--}}
{{--                                        <span class="sr-only">Previous</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <!--Numbers-->--}}
{{--                                <li class="page-item active">--}}
{{--                                    <a class="page-link waves-effect waves-effect">1</a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link waves-effect waves-effect">2</a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link waves-effect waves-effect">3</a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link waves-effect waves-effect">4</a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link waves-effect waves-effect">5</a>--}}
{{--                                </li>--}}

{{--                                <!--Arrow right-->--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link waves-effect waves-effect" aria-label="Next">--}}
{{--                                        <span aria-hidden="true">»</span>--}}
{{--                                        <span class="sr-only">Next</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <!--Last-->--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link waves-effect waves-effect">Last</a>--}}
{{--                                </li>--}}

{{--                            </ul>--}}
{{--                        </nav>--}}
                        <!--Pagination -->

                    </section>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
{{--                @include('product_blocks.slider_card')--}}
            </div>
        </div>
    </section>

    @include('partials.footer')

@endsection
@push('scripts')
    {{--    <script src="{{ asset('js/slider-basket.js') }}"></script>--}}
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

            $('input:checkbox[name = "sizeWholesale"]').on('click, change', function (e) {
                $('input:radio[name = "sizeRetail"]:checked').each(function () {
                    $(this).prop("checked", false);
                });
                $('input:radio[name = "colorRetail"]:checked').each(function () {
                    $(this).prop("checked", false);
                });
                addBtnBasketFake();
            });


            $('input:radio[name = "colorWholesale"]').on('click, change', function (e) {
                let size = '', color = '';
                $('input:checkbox[name = "sizeWholesale"]:checked').each(function () {
                    size = $(this).val();
                });
                $('input:checkbox[name = "colorWholesale"]:checked').each(function () {
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
        });
    </script>
    <script>
        $('#basket').removeAttr('disabled');
        console.log('asd');
    </script>
    <script>
        $('#post').click(function () {
            $('#childPost').show();
        });
        $('.answer').click(function (e) {
            e.preventDefault();
            let answer = $(e.currentTarget);

            let media = answer.parents('.media');
            $('.media').find('.comment').hide();
            let textarea = media.find('.comment').show();

            console.log(media);
        })
    </script>
    <script src="{{ asset('js/slider-product.js') }}"></script>
    <script>
        $(document).ready(function (){
            $(document).on('click', '.checkbox-color', function(){
                let check = $(this).data('color');
                let id = $(this).data('id');
                console.log(check, id);
                $.ajax({
                    url: "{{ route('color.checkbox') }}",
                    method: 'POST',
                    data: {
                        value: check,
                        id: id,
                    },
                    success: data => {
                        console.log(data.images);
                        fCarousel.slick('slickRemove', null, null, true);
                        sCarousel.slick('slickRemove', null, null, true);
                        // fCarousel.slick('unslick');
                        // sCarousel.slick('unslick');

                        data.images.forEach((image, index) => {
                            let smallDivs = ' <div class="item my-2 slick-opacity">\n' +
                                '                        <img class="carousel-img1 img-fluid" src="/storage/medium/' + image + '"\n' +
                                '                             style="height: 150px; width: 90px;" alt="">\n' +
                                '                    </div>',
                                largeDivs = '<div class="item">\n' +
                                    '                        <img class="carousel-img1 img-fluid" src="/storage/large/' + image + '"\n' +
                                    '                             style="height: 600px; width: 380px;" alt="">\n' +
                                    '                    </div>';

                            fCarousel.slick('slickAdd', largeDivs);
                            sCarousel.slick('slickAdd', smallDivs);
                        });


                    },
                    error: data => {
                        console.log(data, 'Error');
                    }
                })
            })
        })
    </script>
    @includeWhen(auth()->check(), 'partials.scripts.favorite_click')
@endpush

