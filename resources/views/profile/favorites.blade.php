@extends('profile.profile')

@section('profile_content')
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-2">
                @include('profile.sidebar')
            </div>
            <div class="col">
{{--                @include('profile.dashboard')--}}

                <section>
                    <h2>Избранные</h2>

                    <div class="d-flex mt-5">
                        @foreach($favorites as $product)
                            <div class="col-4">
                                <div class="card hoverable mb-4">
                                    <div class="card-img">
                                        <img src="{{ asset('uploads/'.$product->logo) }}" class="img-fluid" alt=""
                                             style="width: 100%;">
                                    </div>
                                    <div class="card-body">

                                        <a href="{{route('product.show', $product)}}"><p
                                                class="h4">{{ $product->title }}</p></a>
                                        <div class="j-size-list size-list j-smart-overflow-instance">
                                            <div class="col-12">
                                                <div class="col-8">
                                                    <label for="">Розничная цена:</label>
                                                    <span>{{ $product->price }}</span>
                                                </div>
                                                <div class="col-8">
                                                    <label for="">Оптовая цена:</label>
                                                    <span>{{ $product->wholesale_price }}</span>
                                                </div>
                                                <div style="margin-left: 170px; position: relative; margin-top: -60px; font-size: 39px;">
                                                    <i class="icon-step j-imigize hide"></i>
                                                    @auth()
                                                        <a href="{{ $route ?? '#' }}"
                                                           data-id="{{ $product->id }}" class="{{ isset($bootstrap3) && $bootstrap3 ? 'btn-danger' : '' }} text-danger favorite transition-100 {{ $class ?? '' }}">
                                                            <i class="{{ $product->isFavorited() ? 'fas' : 'far' }} fa-heart text-juice"></i>
                                                        </a>
                                                    @elseauth()
                                                        <a href="{{ route('login') }}"
                                                           class=" text-danger transition-100 {{ $class ?? '' }}">
                                                            <i class="{{ $product->isFavorited() ? 'fas' : 'far' }} fa-heart text-juice"></i>
                                                        </a>
                                                    @endauth
                                                </div>

                                            </div>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @includeWhen(auth()->check(), 'partials.scripts.favorite_click')
@endpush
