
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
            <div class="col-12 text-left">
                <div class="row">
{{--                    <label><b>В розницу:</b></label>--}}
                    @foreach( $product->sizes->unique('id') as $size)
                        <label class="j-size tooltipstered size-button" data-characteristic-id=""
                               data-size="{{ $size->size }}">
                            <span>{{ $size->size }}</span>
                            <input class="radio-size" id="size" name="size" type="radio" value="">
                        </label>
                    @endforeach

                </div>
            </div>

            <p class="font-weight-bold blue-text text-right " style="font-size: 16px;">
                <strong>{{ $product->price }} kgs</strong>
            </p>
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
