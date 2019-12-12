<div class="row">

    <!--Grid column-->
    <div class="col-md-12 mb-4">

        <form class="range-field">
            <input type="range" min="0" max="100">
        </form>

    </div>
    <!--Grid column-->

    <!--Input form for sum-->
    <div class="col-12">
        <div class="row">
            <div class="col-4 px-0">
                <!-- Small input -->
                <input class="form-control" type="text" placeholder="Введите цену">

            </div>
            <div class="col-1 px-0 text-center py-2">
                <img src="{{ asset('img/Line.png') }}" alt="">
            </div>
            <div class="col-4 px-0">
                <!-- Small input -->
                <input class="form-control" type="text" placeholder="Введите цену">

            </div>
        </div>
    </div>

    <!--Input form for sum-->

    <!--Checkbox-->
    <div class="col-12 my-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="new">
                    <label class="custom-control-label" for="new">Новинка</label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="discount">
                    <label class="custom-control-label" for="discount">Скидка</label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="bestseller">
                    <label class="custom-control-label" for="bestseller">Хит</label>
                </div>
            </div>

        </div>
    </div>
    <!--Checkbox-->
</div>


