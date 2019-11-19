<div class="col-lg-4 col-6 item px-1 mb-4">
    <div class="p-4 m-2 shadow" style="background-color: white; height:100%; position: relative;">
        <a href="{{ route('product.show', $product) }}" style="text-decoration: none;">

            {{--@php--}}
            {{--var_dump(file_exists(storage_path('app\\public\\books\\'.$product->image)))--}}
            {{--@endphp--}}
            <h3 class="text-fut-book mt-3 text-left text-desc"
                style="font-size: 18px; line-height: 110%; letter-spacing: 0.05em; color: #222;">
                {{ \Illuminate\Support\Str::limit($product->name,30,'...')  }}
            </h3>
        </a>
        <div class="p-0 text-left">

                <span class="text-fut-book text-desc"
                      style="font-size:18px; letter-spacing: 0.05em;">
                                                            {{ $product->price }} сом
                                                    </span>
        </div>
        <div class="container-fluid mr-0 pr-0">
            <div class="row cart-range" style="width:80%;position: absolute; bottom:5%; color:#222;">
                <button
                    class="btn-primary text-fut-book but-hov mx-auto text-white buy_book py-2 w-100 d-lg-block d-none"
                    data-id="{{ $product->id }}" data-aos="fade-up"
                    style="font-size: 13px; border:0; cursor: pointer;">
                    Добавить в корзину
                </button>
                <button
                    class="btn-primary text-fut-book but-hov mx-auto text-white buy_book py-2 w-100 d-lg-none d-block"
                    data-id="{{ $product->id }}" data-aos="fade-up"
                    style="font-size: 13px; border:0; cursor: pointer;">
                    В корзину
                </button>
            </div>
        </div>
    </div>
</div>
