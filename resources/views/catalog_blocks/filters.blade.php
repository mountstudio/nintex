<p class="h3">
    Filters
</p>

<ul class="list-unstyled">
    <li>
        <!-- Default checked -->
        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
            <label class="custom-control-label  unbold h5" for="retail">В розницу</label>
            <input type="checkbox" class="custom-control-input" id="retail" {{ $requestValues->retail != null ? "checked" : " " }} name="retail">
        </div>
    </li>
    <li>
        <!-- Default checked -->
        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
            <input type="checkbox" class="custom-control-input" id="wholesale" name="wholesale">
            <label class="custom-control-label  unbold h5" for="wholesale">Оптом</label>
        </div>
    </li>
</ul>

<p class="mt-5 mb-3" style="margin-top: 20px; font-size: 16px;">Размеры:</p>
@include('catalog_blocks.filters_category.size_filter')

{{--<p class="mt-3 mb-3" style="margin-top: 20px; font-size: 16px;">Цвета:</p>--}}
{{--@include('catalog_blocks.filters_category.color_filter')--}}

<p class="mt-3 mb-4" style="margin-top: 20px; font-size: 16px;">Цены:</p>
@include('catalog_blocks.filters_category.money_filter')

