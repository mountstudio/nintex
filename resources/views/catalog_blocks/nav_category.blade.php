<p class="h4">
    Catalog
</p>

<ul class="list-unstyled filter">
    <li id="allCatalog">
        <!-- Default checked -->
        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
            <input type="checkbox" class="custom-control-input" name="allCatalog[0]" {{ empty($backRequest->allCatalog[0]) ? " " : "checked"}}>
            <label class="custom-control-label font-weight-normal h5" for="allCatalog">Весь каталог</label>
        </div>
    </li>
    @foreach($categories as $cat)
        <li>
            <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
                <input type="checkbox" class="custom-control-input catalogs" id="filter-{{ $cat->id }}" {{ empty($backRequest->allCatalog[$cat->id]) ? " " : "checked"}} name="allCatalog[{{ $cat->id }}]">
                <label class="custom-control-label font-weight-normal h5" for="filter-{{ $cat->id }}">{{ $cat->title }}</label>
            </div>
        </li>
    @endforeach
</ul>

@push("scripts")

@endpush
