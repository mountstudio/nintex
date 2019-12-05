@extends('profile.profile')

@section('profile_content')
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-2">
                @include('profile.sidebar')
            </div>
            <div class="col">
                @include('profile.dashboard')

                <section>
                    <h2>Избранные</h2>

                    <div class="d-flex mt-5">
                        @foreach($favorites as $product)
                            <div class="col-2">
                                <a href="{{route('product.show', $product)}}"><p class="h4">{{ $product->title }}</p></a>
                            </div>
                            <div class="col-2">

                            </div>

                        @endforeach

                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
