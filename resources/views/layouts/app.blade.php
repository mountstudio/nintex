<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(env('APP_ENV') == 'production')
        <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-T68SJX7');</script>
            <!-- End Google Tag Manager -->
    @endif
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nouislider.css') }}">
    @stack('styles')

    <script src="https://js.cx/libs/animate.js"></script>
</head>
<body class="bg-white">
@if(env('APP_ENV') == 'production')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T68SJX7"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif
    <div id="app pt-4">
        @include('partials.header')

        <main class="">
            @yield('content')
        </main>
    </div>



    <!-- Scripts -->
@if(env('APP_ENV') == 'production')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162679045-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-162679045-1');
    </script>
@endif

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/mmenu.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/nouislider.js')}}"></script>
    @stack('scripts')
    <script>
        let token = "{{ Session::has('token') ? Session::get('token') : uniqid() }}";

        let url = $('.cart').attr('href');
        url += '?token=' + token;
        $('.cart').attr('href', url);

        function fetchCart() {
            $.ajax({
                url: '{{ route('cart.index') }}',
                data: {
                    token: token
                },
                success: data => {
                    console.log(data);
                    let result = freshCartHtml(data.html, data.total);
                    result.find('.buy_book').each((index, item) => {
                        registerCartBuyButtons($(item));
                    });
                    result.find('.remove_book').each((index, item) => {
                        registerCartRemoveButtons($(item));
                    });
                    result.find('.delete_book').each((index, item) => {
                        registerCartDeleteButtons($(item));
                    });
                },
                error: () => {
                    console.log('error');
                }
            });
        }

        function registerCartBuyButtons(data) {

            data.click(e => {
                e.preventDefault();
                console.log('registered');

                let btn = $(e.currentTarget);
                let id = btn.data('id');
                let cart = null;
                let color = btn.data('color');
                let size = btn.data('size');
                let newId = id + size + color;
                console.log(newId, id);

                $.ajax({
                    url: '{{ route('cart.add') }}',
                    data: {
                        product_id: newId,
                        // product_id: size ? id : newId,
                        id: id,
                        count: 1,
                        token: token,
                        size: size,
                        color: color
                    },
                    success: data => {
                        btn.addClass('btn-success').delay(2000).queue(function(){
                            btn.removeClass("btn-success").dequeue();
                        });

                        $('.carts').addClass('btn-success');
                        doBounce($('.cart-count'), 3, '5px', 90);
                        cart = fetchCart();
                    },
                    error: () => {
                        console.log('error');
                    }
                });
            });
        }
        function doBounce(element, times, distance, speed) {
            for(var i = 0; i < times; i++) {
                element.animate({marginTop: '-='+distance}, speed)
                    .animate({marginTop: '+='+distance}, speed);
            }
        }
        function registerCartRemoveButtons(data) {

            data.click(e => {
                e.preventDefault();
                console.log('registered');

                let btn = $(e.currentTarget);
                let id = btn.data('id');
                let cart = null;

                $.ajax({
                    url: '{{ route('cart.remove') }}',
                    data: {
                        product_id: id,
                        count: 1,
                        token: token,
                    },
                    success: data => {
                        cart = fetchCart();
                    },
                    error: () => {
                        console.log('error');
                    }
                });
            });
        }

        function registerCartDeleteButtons(data) {

            data.click(e => {
                e.preventDefault();
                console.log('registered');

                let btn = $(e.currentTarget);
                let id = btn.data('id');
                let cart = null;

                $.ajax({
                    url: '{{ route('cart.delete') }}',
                    data: {
                        product_id: id,
                        token: token,
                    },
                    success: data => {
                        cart = fetchCart();
                    },
                    error: () => {
                        console.log('error');
                    }
                })
            });
        }

        $('.buy_book').each((index, item) => {
            registerCartBuyButtons($(item));
        });

        $('.remove_book').each((index, item) => {
            registerCartRemoveButtons($(item));
        });

        $('.delete_book').each((index, item) => {
            registerCartDeleteButtons($(item));
        });

        function freshCartHtml(html, total) {
            total > 0 ? $('.cart-count').addClass('d-flex').html(total) : $('.cart-count').removeClass('d-flex').html('');
            return $('.modal-body-cart').html(html);
        }

        fetchCart();

        // $('.cart').click(e => {
        //     e.preventDefault();
        //     $('#cart-modal').modal('show');
        //     // freshCartHtml(fetchedCart);
        // });


    </script>

{{--    <script>--}}
{{--        let token = "{{ Session::has('token') ? Session::get('token') : uniqid() }}";--}}

{{--        let url = $('.cart').attr('href');--}}
{{--        url += '?token=' + token;--}}
{{--        $('.cart').attr('href', url);--}}

{{--        function fetchCart() {--}}
{{--            $.ajax({--}}
{{--                url: '{{ route('cart.index') }}',--}}
{{--                data: {--}}
{{--                    token: token--}}
{{--                },--}}
{{--                success: data => {--}}
{{--                    console.log(data);--}}
{{--                    let result = freshCartHtml(data.html, data.total);--}}
{{--                    result.find('.buy_book').each((index, item) => {--}}
{{--                        registerCartBuyButtons($(item));--}}
{{--                    });--}}
{{--                    result.find('.remove_book').each((index, item) => {--}}
{{--                        registerCartRemoveButtons($(item));--}}
{{--                    });--}}
{{--                    result.find('.delete_book').each((index, item) => {--}}
{{--                        registerCartDeleteButtons($(item));--}}
{{--                    });--}}
{{--                },--}}
{{--                error: () => {--}}
{{--                    console.log('error');--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}

{{--        function registerCartBuyButtons(data) {--}}

{{--            data.click(e => {--}}
{{--                e.preventDefault();--}}
{{--                console.log('registered');--}}

{{--                let btn = $(e.currentTarget);--}}
{{--                let id = btn.data('id');--}}
{{--                let cart = null;--}}

{{--                $.ajax({--}}
{{--                    url: '{{ route('cart.add') }}',--}}
{{--                    data: {--}}
{{--                        product_id: id,--}}
{{--                        count: 1,--}}
{{--                        token: token--}}
{{--                    },--}}
{{--                    success: data => {--}}
{{--                        btn.addClass('btn-success').delay(2000).queue(function(){--}}
{{--                            btn.removeClass("btn-success").dequeue();--}}
{{--                        });--}}
{{--                        $('.carts').addClass('btn-success');--}}
{{--                        doBounce($('.cart-count'), 3, '5px', 90);--}}
{{--                        cart = fetchCart();--}}
{{--                    },--}}
{{--                    error: () => {--}}
{{--                        console.log('error');--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        }--}}
{{--        function doBounce(element, times, distance, speed) {--}}
{{--            for(let i = 0; i < times; i++) {--}}
{{--                element.animate({marginTop: '-='+distance}, speed)--}}
{{--                    .animate({marginTop: '+='+distance}, speed);--}}
{{--            }--}}
{{--        }--}}
{{--        function registerCartRemoveButtons(data) {--}}

{{--            data.click(e => {--}}
{{--                e.preventDefault();--}}
{{--                console.log('registered');--}}

{{--                let btn = $(e.currentTarget);--}}
{{--                let id = btn.data('id');--}}
{{--                let cart = null;--}}

{{--                $.ajax({--}}
{{--                    url: '{{ route('cart.remove') }}',--}}
{{--                    data: {--}}
{{--                        product_id: id,--}}
{{--                        count: 1,--}}
{{--                        token: token--}}
{{--                    },--}}
{{--                    success: data => {--}}
{{--                        cart = fetchCart();--}}
{{--                    },--}}
{{--                    error: () => {--}}
{{--                        console.log('error');--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        }--}}

{{--        function registerCartDeleteButtons(data) {--}}

{{--            data.click(e => {--}}
{{--                e.preventDefault();--}}
{{--                console.log('registered');--}}

{{--                let btn = $(e.currentTarget);--}}
{{--                let id = btn.data('id');--}}
{{--                let cart = null;--}}

{{--                $.ajax({--}}
{{--                    url: '{{ route('cart.delete') }}',--}}
{{--                    data: {--}}
{{--                        product_id: id,--}}
{{--                        token: token--}}
{{--                    },--}}
{{--                    success: data => {--}}
{{--                        cart = fetchCart();--}}
{{--                    },--}}
{{--                    error: () => {--}}
{{--                        console.log('error');--}}
{{--                    }--}}
{{--                })--}}
{{--            });--}}
{{--        }--}}

{{--        $('.buy_book').each((index, item) => {--}}
{{--            registerCartBuyButtons($(item));--}}
{{--        });--}}

{{--        $('.remove_book').each((index, item) => {--}}
{{--            registerCartRemoveButtons($(item));--}}
{{--        });--}}

{{--        $('.delete_book').each((index, item) => {--}}
{{--            registerCartDeleteButtons($(item));--}}
{{--        });--}}

{{--        function freshCartHtml(html, total) {--}}
{{--            total > 0 ? $('.cart-count').addClass('d-flex').html(total) : $('.cart-count').removeClass('d-flex').html('');--}}
{{--            return $('.modal-body-cart').html(html);--}}
{{--        }--}}

{{--        fetchCart();--}}

{{--        // $('.cart').click(e => {--}}
{{--        //     e.preventDefault();--}}
{{--        //     $('#cart-modal').modal('show');--}}
{{--        //     // freshCartHtml(fetchedCart);--}}
{{--        // });--}}


{{--    </script>--}}
</body>
</html>
