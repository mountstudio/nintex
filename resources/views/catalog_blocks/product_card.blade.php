<!--Card-->
<div class="card align-items-center rounded border-0 shadow ">
    <!--Card image-->
    <div class="view overlay">
        <a href="{{route('product.show', $product)}}">
            <img src="{{ asset('img/clothes.png') }}" class="img-fluid" alt="">

            <div class="mask rgba-white-slight waves-effect waves-light"></div>
        </a>
    </div>
    <!--Card image-->
    <!--Card content-->
    <div class="card-body px-2" style="width: 205px!important;">
        <!--Category & Title-->
        <a href="{{route('product.show', $product)}}" class="text-dark" style="font-size: 16px;"><p
                class="h3">{{$product->title}}</p></a>
        <div class="col-12">
            <div class="row">
                {{--//---------------------------ВЫВОД РАЗМЕРОВ И СТОИМОСТИ ПРОДУКТА В РОЗНИЦУ---------------------------//--}}
                @if(!empty($productsRetailSize[$product->id]))
                    <div class="col-4 pl-0 pr-0">
                        <label for="size" class="mr-1">В розницу:</label>
                    </div>
                    <div class="col-5 pl-0 pr-0 text-center">
                        @foreach($productsRetailSize[$product->id] as $ps)
                            <label class="grey rounded" id="size" data-size="{{ $ps->size }}">
                                <span class="pl-1 pr-1">{{ $ps->size }}</span>
                            </label>
                        @endforeach
                    </div>
                    <div class="col-3 text-right pl-0 pr-0">
                        <p class="blue-text" style="font-size: 12px;">{{ $productsRetailPrice[$product->id] }}kgs</p>
                    </div>
                    <div class="endLine"></div>
                @endif
            </div>
        </div>
        {{--//---------------------------ВЫВОД РАЗМЕРОВ И СТОИМОСТИ ПРОДУКТА ОПТОМ---------------------------//--}}
        <div class="col-12 text-left">
            <div class="row">
                @if(!empty($productsWholesaleSize[$product->id]))
                    @foreach($productsWholesaleSize[$product->id] as $ps)
                        <div class="col-4 pl-0 pr-0">
                            <label for="size">Оптом:</label>
                        </div>
                        <div class="col-5 pl-0 pr-0 text-center">
                            <div class="grey rounded">
                                @foreach(json_decode($ps->sizes) as $size1)
                                    <span class="pl-1 pr-1 pt-1 pb-1">{{ $size1 }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-3 text-right pl-0 pr-0">
                            <p class="blue-text" style="font-size: 12px;">{{ $ps->price }}kgs</p>
                        </div>
                        <div class="endLine"></div>
                    @endforeach
                @endif
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
