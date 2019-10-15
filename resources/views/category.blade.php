@extends('layouts.app')

@section('content')
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1>Категории</h1>
                </div>
                <div class="card-columns">
                    <div class="card">
                        <div class="card-body">
                            <a href="">
                                <img src="img/pre.svg" class="card-img-top" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="">
                                <img src="img/pre.svg" class="card-img-top" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="">
                                <img src="img/pre.svg" class="card-img-top" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection
