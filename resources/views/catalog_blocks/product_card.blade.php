
    <!--Card-->
    <div class="card align-items-center rounded border-0 shadow ">
        <!--Card image-->
        <div class="view overlay">
            <img src="{{ asset('img/clothes.png') }}" class="img-fluid" alt="">
            <a>
                <div class="mask rgba-white-slight waves-effect waves-light"></div>
            </a>
        </div>
        <!--Card image-->
        <!--Card content-->
        <div class="card-body px-2" style="width: 205px!important;">
            <!--Category & Title-->
            <a href="{{route('product.show', $product)}}" class="text-dark" style="font-size: 16px;"><p class="h3">{{$product->title}}</p></a>
            <div class="col-12">
                <div class="row">
{{--//---------------------------ВЫВОД РАЗМЕРОВ И СТОИМОСТИ ПРОДУКТА В РОЗНИЦУ---------------------------//--}}
{{--                    проверка на наличие продукта в розницу--}}
                    @if(!empty($product->sizes->unique('id')[0]))
                        <div class="col-4 pl-0 pr-0">
                            <label for="size" class="mr-1">В розницу:</label>
                        </div>
                    @endif
{{--                    вывод размеров в розницу--}}
                    <div class="col-5 pl-0 pr-0">
                        @foreach( $product->sizes->unique('id') as $size)
                            <label class="circle" id="size" data-size="{{ $size->size }}">
                                <span class="index">{{ $size->size }}</span>
                            </label>
                        @endforeach
                    </div>
                    @if(!empty($product->sizesWholesale[0]))
                        @foreach($product->sizesWholesale as $productSize)
                            @if(!is_array(json_decode($productSize->sizes)))
                                <div class="col-3 text-right pl-0 pr-0">
                                    <p class="blue-text" style="font-size: 12px;">{{ $product->sizesWholesale[0]->price }}kgs</p>
                                </div>
                                @break
                            @endif
                        @endforeach
                    @endif
                    <div class="endLine"></div>
                </div>
            </div>
            <div class="col-12 text-left">
                <div class="row">
                    @if(!empty($productsSizes[$product->id]))
                        @foreach($productsSizes[$product->id] as $ps)
                            <div class="col-4 pl-0 pr-0">
                                <label for="size">Оптом:</label>
                            </div>
                            <div class="col-5 pl-0 pr-0">
                                @foreach(json_decode($ps->sizes) as $size1)
                                    <label class="circle" id="size" data-size="{{ $size1 }}">
                                        <span class="index">{{ $size1 }}</span>
                                    </label>
                                @endforeach
                            </div>
                            <div class="col-3 text-right pl-0 pr-0">
                                <p class="blue-text" style="font-size: 12px;">{{ $ps->price }}kgs</p>
                            </div>
                            <div class="endLine"></div>
                        @endforeach
                    @endif
                </div>
            </div>

{{--            <div class="col-12 text-left">
                <div class="row">
                    @if(!empty($productsSizes[$product->id]))
                        @foreach($productsSizes[$product->id] as $ps)
                            <div class="col-2 pl-0">
                                <label for="size">Оптом:</label>
                            </div>
                            <div class="col-6 text-left">
                                @foreach(json_decode($ps->sizes) as $size1)
                                    <label class="circle" id="size" data-size="{{ $size1 }}">
                                        <span class="index">{{ $size1 }}</span>
                                    </label>
                                @endforeach
                            </div>
                            <div class="col-4">
                                <p class="blue-text" style="font-size: 12px;">{{ $ps->price }}kgs</p>
                            </div>
                            <div class="endLine"></div>
                        @endforeach
                    @endif
                </div>
            </div>--}}
        </div>
        <!--Card content-->
    </div>
    <!--Card-->

@push("scripts")

    <script>
        document.addEventListener(
            "DOMContentLoaded", () => {
                new Mmenu("#my-menu", {
                    wrappers: ["bootstrap"]
                });
            }
        );
    </script>
    <script>
        $('.j-size-list').on('click', 'label', function () {
            $('.j-size-list label').removeClass('active');
            $(this).addClass('active');
        });
    </script>
    <script>

        $('.j-size-list').on('click', 'label', function () {
            $('.j-size-list label').removeClass('active');
            $(this).addClass('active');
        });
    </script>

@endpush
