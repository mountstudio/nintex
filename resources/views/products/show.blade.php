@extends('layouts.app')
@section('content')
    {{--    @dd(array_keys($product->sizesWholesale[11]->price))--}}

    <section class="{{--bg-nintex-color--}}">
        <div class="container-fluid pt-5">
            <div class="row justify-content-center">
                <div class="col-9 col-lg-4">
                    <img style=""
                         src="{{ asset('uploads/'.$product->logo)}}" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6 position-relative">
                    <div class=" d-flex justify-lg-content-end justify-content-center" style=" border-bottom-left-radius: 100px;">
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
                            <div class="col-12 col-lg-6 pl-3 pl-lg-5">
                                <p>Цвет:</p>
                                <div class="checkbox">
                                    {{--                                    @dd($product->sizesWholesale[11]->price)--}}
                                    {{--                                    @foreach( array_keys($product->color) as $colors)--}}
                                    {{--                                        <label class="j-color checkbox-red" style="background: {{ $colors }};"--}}
                                    {{--                                               data-color="{{ $colors }}">--}}
                                    {{--                                            <input id="cbox" checked="checked" value="{{ $colors }}" name="color" type="radio">--}}
                                    {{--                                            <span class="checkmark"></span>--}}
                                    {{--                                        </label>--}}
                                    {{--                                    @endforeach--}}
                                </div>
                            </div>
                            {{--                            @dd($product->colors)--}}

                            <div class="col-12 col-lg-6 ">
                                <p class="mb-4">Размеры: </p>
                                <div class="j-size-list size-list j-smart-overflow-instance">
                                    {{--                                    @foreach($product->sizes as $size)--}}
                                    {{--                                        <label class="j-size tooltipstered size-button " data-characteristic-id=""--}}
                                    {{--                                               data-size="{{ $size }}">--}}
                                    {{--                                            <span>{{ $size }}</span>--}}
                                    {{--                                            <input class="radio-size" id="size" name="size" type="radio" value="">--}}
                                    {{--                                        </label>--}}
                                    {{--                                    @endforeach--}}
                                </div>

                            </div>
                            <div class="col-12 col-lg-6 pt-3">
                                <p class=""><img src="{{ asset('img/file.svg') }}" alt=""> Лучшая ткань</p>
                                <p class=""><img src="{{ asset('img/quality (1).svg') }}" alt=""> Гарантия
                                    качества</p>
                            </div>
                            <div class="col-12 col-lg-6 pb-5">
                                <a href="{{ route('cart.checkout') }}" class="btn btn-lightblue mt-3 cart">Начать
                                    покупки</a>
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
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container" style="bottom: 0;">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item mx-auto">
                            <a class="nav-link btn shadow-none border-0 border-bottom bg-white text-dark active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                               aria-controls="pills-home" aria-selected="true">Home <span></span></a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link btn shadow-none border-0 border-bottom bg-white text-dark" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                               aria-controls="pills-profile" aria-selected="false">Profile <span></span></a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link btn shadow-none border-0 border-bottom bg-white text-dark" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                               aria-controls="pills-contact" aria-selected="false">Contact <span></span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-12">

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt hic ipsum iste optio, quia quis quod velit voluptas!
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eveniet id neque nisi, optio perspiciatis.
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A doloremque eligendi harum iure placeat porro reiciendis similique ut vitae.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Блок для отзывов -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <button class="btn btn-block " id="post">
                        оставить отзыв
                    </button>
                    <div class="form-group mt-4 " style="display: none;" id="childPost">
                        <label for="quickReplyFormComment">Your comment</label>
                        <textarea class="form-control" id="quickReplyFormComment" rows="5"></textarea>

                        <div class="text-center my-4">
                            <button class="btn btn-primary btn-sm waves-effect waves-light" type="submit" id="childPostButton">Post</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <p>
                        сортировать по: дате оценка полезности
                    </p>
                </div>
                <div class="col-12">
                    <section class="my-5" >

                        <!-- Card header -->
                        <div class="card-header border-0 font-weight-bold">4 comments</div>

                        <div class="media d-block d-md-flex mt-4" id="play">
                            <a href="#" target="_blank" title="Перейти на страницу пользователя">
                                <img class="card-img-64 d-flex mx-auto mb-3 rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" alt="Generic placeholder image">
                            </a>
                            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                <h5 class="font-weight-bold mt-0">
                                    <a href="">Miley Steward</a>
                                    <a href="" class="pull-right">
                                        <i class="fas fa-reply"></i>
                                    </a>
                                </h5>
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <div class="media d-block d-md-flex mt-4">
                                    <a href="#" target="_blank">
                                        <img class="card-img-64 d-flex mx-auto mb-3 rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                        <h5 class="font-weight-bold mt-0">
                                            <a href="">Tommy Smith</a>
                                            <a href="" class="pull-right">
                                                <i class="fas fa-reply"></i>
                                            </a>
                                        </h5>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                                        ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    </div>
                                </div>
                                <div class="media d-block d-md-flex mt-3">
                                    <a href="#" target="_blank">
                                        <img class="card-img-64 d-flex mx-auto mb-3 rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                        <h5 class="font-weight-bold mt-0">
                                            <a href="">Sylvester the Cat</a>
                                            <a href="" class="pull-right">
                                                <i class="fas fa-reply"></i>
                                            </a>
                                        </h5>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                    </div>
                                </div>

                                <!-- Quick Reply -->



                            </div>
                        </div>
{{--                        <div class="media d-block d-md-flex mt-3">--}}
{{--                            <img class="card-img-64 d-flex mx-auto mb-3" src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="Generic placeholder image">--}}
{{--                            <div class="media-body text-center text-md-left ml-md-3 ml-0">--}}
{{--                                <h5 class="font-weight-bold mt-0">--}}
{{--                                    <a href="">Caroline Horwitz</a>--}}
{{--                                    <a href="" class="pull-right">--}}
{{--                                        <i class="fas fa-reply"></i>--}}
{{--                                    </a>--}}
{{--                                </h5>--}}
{{--                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti--}}
{{--                                quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa officia deserunt mollitia animi, id est laborum et dolorum fuga.--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <!--Pagination -->
                        <nav class="d-flex justify-content-center mt-5">
                            <ul class="pagination pg-blue mb-0">

                                <!--First-->
                                <li class="page-item disabled">
                                    <a class="page-link waves-effect waves-effect">First</a>
                                </li>

                                <!--Arrow left-->
                                <li class="page-item disabled">
                                    <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <!--Numbers-->
                                <li class="page-item active">
                                    <a class="page-link waves-effect waves-effect">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">5</a>
                                </li>

                                <!--Arrow right-->
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>

                                <!--Last-->
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">Last</a>
                                </li>

                            </ul>
                        </nav>
                        <!--Pagination -->

                    </section>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">

            </div>
        </div>
    </section>


    @include('partials.footer')

@endsection
@push('scripts')
    {{--<script src="{{ asset('js/slider-basket.js') }}"></script>--}}
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
            $('input:radio:checked').each(function () {
                color = $(this).val();
            });
            console.log(size, color);
            // console.log(size, color);
            $('div#for-add-cart-btn').empty();
            const element = $('     <a href="#"' +
                '                   class="btn btn-dark btn-block text-fut-book but-hov text-white buy_book d-lg-block d-none w-50"' +
                '                   data-id=" {{ $product->id }}" data-size="' + size + '" data-color="' + color + '"' +
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
        $('#post').click(function () {
            $('#childPost').show();
        });
    </script>
    @includeWhen(auth()->check(), 'partials.scripts.favorite_click')
@endpush

