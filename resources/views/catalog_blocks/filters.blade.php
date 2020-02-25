<p class="h3">
    Filters
</p>

<ul class="list-unstyled">
    <li>
        <!-- Default checked -->
        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
            <input type="checkbox" class="custom-control-input" id="retail" {{ empty($backRequest->retail) ? " " : "checked"}} name="retail">
            <label class="custom-control-label  unbold h5" for="retail">В розницу</label>
        </div>
    </li>
    <li>
        <!-- Default checked -->
        <div class="custom-control custom-checkbox py-1 mt-0 mb-0 form-group">
            <input type="checkbox" class="custom-control-input" id="wholesale" {{ empty($backRequest->wholesale) ? " " : "checked"}} name="wholesale">
            <label class="custom-control-label  unbold h5" for="wholesale">Оптом</label>
        </div>
    </li>
</ul>


