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
        {{--//---------------------------ВЫВОД РАЗМЕРОВ И СТОИМОСТИ ПРОДУКТА ОПТОМ---------------------------//--}}
        <div class="col-12 text-left">
            <div class="row">
                {{--                @if(!empty($productsWholesaleSize[$product->id]))--}}
                {{--                    @foreach($productsWholesaleSize[$product->id] as $ps)--}}
{{--  закоментировано потому что не нужно или нужно я хз              <div class="col-4 pl-0 pr-0">--}}
{{--                    <label for="size" class="mt-2 pt-1">Оптом:</label>--}}
{{--                </div>--}}
                <div class="col-12 pl-0 pr-0 mb-2">

                    @foreach($productSize as $size1)
                        @foreach(json_decode($size1['sizes']) as $value)
                            <div class="item-size">{{ $value }}</div>
                        @endforeach
                    @endforeach

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
