<div class="row">
    <div class="col-md-1 d-none d-md-block px-0">
        <div class="slick-five-item  d-flex justify-content-center">
            @foreach($productWholesaleSizes as $item)
                @foreach(json_decode($item['images']) as $value)
                    <div class="item my-2 slick-opacity">
                        <img class="carousel-img1 img-fluid" src="{{ asset('storage/small/'.$value) }}"
                             style="width: 39px;" alt="">
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
    <div class="col-12 col-md-11 ">
        <div class="slick-one-item">
            {{--        <img style=""--}}
            {{--             src="{{ asset('storage/medium/'.$product->logo)}}" class="img-fluid" alt="">--}}
            @foreach($productWholesaleSizes as $item)
                @foreach(json_decode($item['images']) as $value)
                    <div class="item">
                        <img class="slick-foto carousel-img1 img-fluid" src="{{ asset('storage/large/'.$value) }}"
                             style="width: 380px;" alt="">
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
    <style>
        .slick-five-item {
            width: 35px!important;

        }
        .slick-five-item .slick-track {
            transform: translate3d(0px, 0px, 0px)!important;
        }
        .slick-five-item .slick-track .slick-slide.slick-current {
            border: 2px solid black!important;
        }
    </style>
@endpush
@push('scripts')
    {{-- script for zoom img in big show slider --}}
{{--    <script src="{{ asset('js/jquery-1.8.2.min.js') }}"></script>--}}
    <script src="{{ asset('js/zoomsl-3.0.min.js') }}"></script>
    <script>
       $(function () {
           $(".slick-foto").imagezoomsl({

               zoomrange: [3, 3]
           });
       })
    </script>
@endpush
