@if(count($products))
    @foreach($products as $product)
        @include('products.single')
    @endforeach

@else

    <div class="col-12 bg-white p-5">
        <h2 class="text-center">В данной категории нет продуктов!</h2>
        <p class="text-center small">Поищите в других категориях</p>
    </div>

@endif
