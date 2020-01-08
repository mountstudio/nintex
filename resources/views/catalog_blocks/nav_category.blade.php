<p class="h4">
    Catalog
</p>

<ul class="list-unstyled">
    <li>
        <!-- Default checked -->
        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
            <input type="checkbox" class="custom-control-input" id="allCatalog">
            <label class="custom-control-label  unbold h5" for="allCatalog">Весь каталог</label>
        </div>
    </li>
{{--    <li>--}}
{{--        <!-- Default checked -->--}}
{{--        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">--}}
{{--            <input type="checkbox" class="custom-control-input" id="newDress" name="newDress">--}}
{{--            <label class="custom-control-label  unbold h5" for="newDress">Новинки</label>--}}
{{--        </div>--}}
{{--    </li>--}}
{{--    <li>--}}
{{--        <!-- Default checked -->--}}
{{--        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">--}}
{{--            <input type="checkbox" class="custom-control-input" id="sellOut" name="sellOut">--}}
{{--            <label class="custom-control-label  unbold h5" for="sellOut">Распродажа</label>--}}
{{--        </div>--}}
{{--    </li>--}}
    <li>
        <!-- Default checked -->
        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
            <input type="checkbox" class="custom-control-input" id="coat" name="allCatalog[]" value="Пальто" >
            <label class="custom-control-label unbold h5" for="coat">Пальто</label>
        </div>
    </li>
    <li>
        <!-- Default checked -->
        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
            <input type="checkbox" class="custom-control-input" id="blouses" name="allCatalog[]" value="Блузки">
            <label class="custom-control-label  unbold h5" for="blouses">Блузки</label>
        </div>
    </li>
    <li>
        <!-- Default checked -->
        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
            <input type="checkbox" class="custom-control-input" id="pants" name="allCatalog[]" value="Брюки">
            <label class="custom-control-label  unbold h5" for="pants">Брюки</label>
        </div>
    </li>
    <li>
        <!-- Default checked -->
        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
            <input type="checkbox" class="custom-control-input" id="jackets" name="allCatalog[]" value="Пиджаки">
            <label class="custom-control-label  unbold h5" for="jackets">Пиджаки</label>
        </div>
    </li>
    <li>
        <!-- Default checked -->
        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
            <input type="checkbox" class="custom-control-input" id="bags" name="allCatalog[]" value="Сумки">
            <label class="custom-control-label  unbold h5" for="bags">Сумки</label>
        </div>
    </li>
    <li>
        <!-- Default checked -->
        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
            <input type="checkbox" class="custom-control-input" id="skirts" name="allCatalog[]" value="Юбки">
            <label class="custom-control-label  unbold h5" for="skirts">Юбки</label>
        </div>
    </li>
</ul>

@push("scripts")
    <script>
        $('#allCatalog').on('click.change', function () {
            if ($('#allCatalog').prop('checked'))
            {
                // $("#newDress").prop('checked', true);
                // $("#sellOut").prop('checked', true);
                $("#coat").prop('checked', true);
                $("#blouses").prop('checked', true);
                $("#pants").prop('checked', true);
                $("#jackets").prop('checked', true);
                $("#bags").prop('checked', true);
                $("#skirts").prop('checked', true);
            }
            else
            {
                // $("#newDress").prop('checked', false);
                // $("#sellOut").prop('checked', false);
                $("#coat").prop('checked', false);
                $("#blouses").prop('checked', false);
                $("#pants").prop('checked', false);
                $("#jackets").prop('checked', false);
                $("#bags").prop('checked', false);
                $("#skirts").prop('checked', false);
            }
        });
    </script>
@endpush
