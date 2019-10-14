@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2 h-100 bg-secondary">
                text
            </div>

            <div class="col-10">
                <div class="row px-2">
                    @foreach($products as $product)
                        <div class="col-3">
                            @include('products.card')
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
