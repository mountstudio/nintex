<div class="col-12">
    <div class="slick-slider-card">
        <div class="item">
            <!--Card-->
            <div class="card align-items-center rounded border-0 shadow ">
                <!--Card image-->
                <div class="view overlay">
                    <a href="{{route('product.show', $product)}}">
                        <img src="{{ asset('storage/medium/'.$product->logo) }}" class="img-fluid" alt="">

                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                    </a>
                </div>
                <!--Card image-->
                <!--Card content-->
                <div class="card-body px-2 card-width">
                    <!--Category & Title-->
                    <a href="{{route('product.show', $product)}}" class="text-dark card-text"><p
                            class="">{{$product->title}}</p></a>
                    <div class="col-12 text-left">
                        <div class="row">
                            <div class="col-12 pl-0 pr-0 mb-2">



                            </div>
                            <div class="col-4 pt-2 pl-0 pr-0">
                                <label for="size" class="card-price  text-dark">Оптовая цена:</label>
                            </div>
                            <div class="col-8 pl-0 pr-0 text-center">
                                @foreach($productSize as $size1)
                                    <div class="col-7 text-right ml-3 ml-sm-5 pt-2 pl-0 pr-0">
                                        <p class="text-dark text-bold card-price" style="">{{ $size1->price }}kgs</p>
                                    </div>
                                    @break
                                @endforeach
                            </div>
                            <div class="endLine"></div>
                            {{--                    @endforeach--}}
                            {{--                @endif--}}
                        </div>
                    </div>
                </div>
                <!--Card content-->
            </div>
            <!--Card-->
        </div>
        <div class="item">

        </div>
        <div class="item">

        </div>
        <div class="item">

        </div>
        <div class="item">

        </div>
        <div class="item">

        </div>
        <div class="item">

        </div>
        <div class="item">

        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('.slick-slider-card').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            fade: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        arrows: false,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: true,
                    }
                },
                {
                    breakpoint: 300,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        })
    </script>
@endpush
