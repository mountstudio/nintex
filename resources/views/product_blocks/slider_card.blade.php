
        <div class="item d-flex justify-content-center">
            <!--Card-->
            <div class="card align-items-center ">
                <!--Card image-->
                <div class="view overlay">
                    <a href="{{route('product.show', $product)}}">
                        <img src="{{ asset('storage/medium/'.$product->logo) }}" style="height: 350px!important;"
                             class="img-fluid" alt="">

                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                    </a>
                </div>
                <!--Card image-->
                <!--Card content-->
                <div class="card-body px-2 w-75">
                    <!--Category & Title-->
                    <a href="{{ asset('test') }}" class="text-dark card-text"><p
                            class="">{{$product->title}}</p></a>
                    <div class="col-12 text-left">
                        <div class="row">
                            <div class="col-12 pl-0 pr-0 mb-2">
                                @foreach($productSize as $size)
                                    @foreach(json_decode($size['sizes']) as $value)
                                        <div class="item-size">{{ $value }}</div>
                                    @endforeach
                                        @break
                                @endforeach

                            </div>
                            <div class="col-4 pt-2 pl-0 pr-0">
                                <label for="size" class="card-price  text-dark">Оптовая цена:</label>
                            </div>
                            <div class="col-8 pl-0 pr-0 text-center">
                                <div class="col-7 text-right ml-3 ml-sm-5 pt-2 pl-0 pr-0">
                                    @foreach($productSize as $price)
                                        <p class="text-dark text-bold card-price" style="">{{ $price->price }}</p>
                                        @break
                                    @endforeach
                                </div>
                            </div>
                            <div class="endLine"></div>
                        </div>
                    </div>
                </div>
                <!--Card content-->
            </div>
            <!--Card-->
        </div>

@push('styles')
    <style>

    </style>
@endpush
@push('scripts')
    <script>
        $('.owl-slider-card').owlCarousel({
            loop: false,
            nav: true,
            dots: true,
            mouseDrag: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>
@endpush
