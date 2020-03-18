<div class="row">
    <div class="col-md-3 d-none d-md-block px-0">
        <div class="slick-five-item  d-flex justify-content-center">
            @foreach($productWholesaleSizes as $item)
                @foreach(json_decode($item['images']) as $value)
                    <div class="item my-2 slick-opacity">
                        <img class="carousel-img1 img-fluid" src="{{ asset('storage/large/'.$value) }}"
                             style="height: 150px; width: 90px;" alt="">
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
    <div class="col-12 col-md-9 px-0">
        <div class="slick-one-item">
            {{--        <img style=""--}}
            {{--             src="{{ asset('storage/medium/'.$product->logo)}}" class="img-fluid" alt="">--}}
            @foreach($productWholesaleSizes as $item)
                @foreach(json_decode($item['images']) as $value)
                    <div class="item">
                        <img class="carousel-img1 img-fluid" src="{{ asset('storage/large/'.$value) }}"
                             style="height: 600px; width: 380px;" alt="">
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
    </div>

</div>

@push('styles')

@endpush


