<div class="col-7">
    <div class="owl-carousel" id="fCarousel">
        @foreach($product['colors'] as $item)
            @foreach($item as $value)
                @foreach($value as $key)
{{--                    @dd($key)--}}
                    <div class="item">
                        <img class="carousel-img1" src="{{ asset('uploads/'.$key) }}"
                             style="height: 600px; width: 300px;" alt="">
                    </div>
                @endforeach
            @endforeach
        @endforeach
    </div>
</div>

<div class="col-5">
    <div class="slick-carousel">
        @foreach($product['colors'] as $item)
            @foreach($item as $value)
                @foreach($value as $key)
        <div class="">
            <img src="{{  asset('uploads/'.$key) }}" style="height: 114px; width: 57px;" alt="">
        </div>
                @endforeach
            @endforeach
        @endforeach
    </div>
</div>

@push('styles')

@endpush
