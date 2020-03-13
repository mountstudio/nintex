<div class="row">

    <div class="col-3 px-0">
        <div class="slick-carousel  d-flex justify-content-center" style="width: 95px;">
            @foreach($productWholesaleSizes as $item)
                @foreach(json_decode($item['images']) as $value)
                    <div class="item pb-1" style="width: 75px;">
                        <img class="carousel-img1" src="{{ asset('storage/large/'.$value) }}"
                             style="height: 150px; width: 90px;" alt="">
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
    <div class="col-9 px-0">
        <div class="owl-carousel" id="fCarousel">
            {{--        <img style=""--}}
            {{--             src="{{ asset('storage/medium/'.$product->logo)}}" class="img-fluid" alt="">--}}
            @foreach($productWholesaleSizes as $item)
                @foreach(json_decode($item['images']) as $value)
                    <div class="item">
                        <img class="carousel-img1" src="{{ asset('storage/large/'.$value) }}"
                             style="height: 600px; width: 380px;" alt="">
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>

@push('styles')

@endpush
