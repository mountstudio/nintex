<section>
    <div class="container mt-5">
        <div class="row justify-content-center">



            <div class="col-lg-3 col-md-6 col-12 mb-4">

                <!--Collection card-->
                <div class="card collection-card z-depth-1-half">
                    <!--Card image-->
                    <div class="view zoom">
                        <a href="#">
                            <img src="{{ asset('img/hits.png') }}" class="img-fluid" alt="">

                            <div class="stripe dark">
                                <a>
                                    <p>Red trousers
                                        <i class="fas fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </a>
                    </div>
                    <!--Card image-->
                </div>
                <!--Collection card-->

            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4">

                <!--Collection card-->
                <div class="card collection-card z-depth-1-half">
                    <!--Card image-->
                    <div class="view zoom">
                        <a href="{{ route('product.index') }}">
                            <img src="{{ asset('img/stock.png') }}" class="img-fluid" alt="">
                            <div class="stripe light">
                                <a>
                                    <p>Red trousers
                                        <i class="fas fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </a>
                    </div>
                    <!--Card image-->
                </div>
                <!--Collection card-->

            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4">

                <!--Collection card-->
                <div class="card collection-card z-depth-1-half">
                    <!--Card image-->
                    <div class="view zoom">
                        <a href="{{ route('product.index') }}">
                            <img src="{{ asset('img/new.png') }}" class="img-fluid" alt="">
                            <div class="stripe dark">
                                <a>
                                    <p>Red trousers
                                        <i class="fas fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </a>
                    </div>
                    <!--Card image-->
                </div>
                <!--Collection card-->

            </div>

        </div>
    </div>
</section>
{{--
<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center mb-5 mt-5 pt-5">
                <h1>Категории</h1>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <!--Card-->
                <div class="card shadow-none sh-bord rounded" >

                    <!--Card content-->
                    <div class="card-body">
                        <a href="{{ asset('') }}">
                            <div class="mask rgba-white-slight waves-effect waves-light img-hover-zoom--basic text-center py-3" style="height: 150px!important;">
                                <img src="{{ asset('img/pre.svg') }}" class="card-img-top" style="width: 250px" alt="">
                            </div>
                        </a>
                    </div>

                </div>
                <!--/.Card-->
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <!--Card-->
                <div class="card shadow-none sh-bord rounded">

                    <!--Card content-->
                    <div class="card-body">
                        <a href="">
                            <div class="mask rgba-white-slight waves-effect waves-light img-hover-zoom--basic text-center py-3" style="height: 150px!important;">
                                <img src="{{ asset('img/pre.svg') }}" class="card-img-top" style="width: 250px" alt="">
                            </div>
                        </a>
                    </div>

                </div>
                <!--/.Card-->
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <!--Card-->
                <div class="card shadow-none sh-bord rounded" >

                    <!--Card content-->
                    <div class="card-body">
                        <a href="#">
                            <div class="mask rgba-white-slight waves-effect waves-light img-hover-zoom--basic text-center py-3" style="height: 150px!important;">
                                <img src="{{ asset('img/pre.svg') }}" class="card-img-top" style="width: 250px" alt="">
                            </div>
                        </a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
        </div>
    </div>
</section>
--}}
@push('styles')
    <style>
        .collection-card .stripe.dark {
            background-color: rgba(0,0,0,0.7);
        }
        .collection-card .stripe.light {
            background-color: rgba(255,255,255,0.7);
        }
        .collection-card .stripe {
            position: absolute;
            bottom: 3rem;
            width: 100%;
            padding: 1.2rem;
            text-align: center;
        }
        .collection-card .stripe.light a p {
            color: #2d2d2d;
        }
        .collection-card .stripe.dark a p {
            color: #eee;
        }
        .collection-card .stripe a p {
             padding: 0;
             margin: 0;
             letter-spacing: .30rem;
         }
    </style>
@endpush
