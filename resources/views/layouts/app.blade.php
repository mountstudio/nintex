<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    @stack('styles')

    <script src="https://js.cx/libs/animate.js"></script>

</head>
<body class="bg-white">
    <div id="app pt-4">
        @include('partials.header')

        <main class="">
            @yield('content')
        </main>
    </div>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/mmenu.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
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
                        product_id: size ? newId : id,
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


    </script><script>
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

                $.ajax({
                    url: '{{ route('cart.add') }}',
                    data: {
                        product_id: id,
                        count: 1,
                        token: token
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
                        token: token
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
                        token: token
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
</body>
</html>
