<div class="row">

    <!--Grid column-->
    <div class="col-12">
        <div class="slidecontainer">
            <span>Мин:</span>
            <span class="float-right">Макс:</span>
            <input type="range" min="0" max="30000" value="0" id="myRange" class="slider">
        </div>
    </div>
    <!--Grid column-->

    <!--Input form for sum-->
    <div class="col-12">
        <div class="row">
            <div class="col-4 px-0">
                <!-- Small input -->
                <input class="form-control" type="text" placeholder="0">

            </div>
            <div class="col-1 px-0 text-center py-2">
                <img src="{{ asset('img/Line.png') }}" alt="">
            </div>
            <div class="col-4 px-0">
                <!-- Small input -->
                <input class="form-control" type="text" placeholder="30000">

            </div>
        </div>
    </div>

    <!--Input form for sum-->

    <!--Checkbox-->
    {{--<div class="col-12 my-5">
        <div class="row">
            <div class="col-12 col-md-4 form-group">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="new" name="new">
                    <label class="custom-control-label" style="font-size: 14px" for="new">Новинки</label>
                </div>
            </div>
            <div class="col-12 col-md-4 form-group">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="sellOut" name="sellOut">
                    <label class="custom-control-label" style="font-size: 14px" for="sellOut">Распродажа</label>
                </div>
            </div>
            <div class="col-12 col-md-4 form-group">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="discount" name="discount">
                    <label class="custom-control-label" style="font-size: 14px" for="discount">Скидка  </label>
                </div>
            </div>
            <div class="col-12 col-md-4 form-group">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="bestseller" name="bestseller">
                    <label class="custom-control-label" style="font-size: 14px" for="bestseller">Хит  </label>
                </div>
            </div>

        </div>
    </div>--}}
    <!--Checkbox-->
</div>
@push('styles')
    <style>
        .slidecontainer {
            margin-bottom:20px ;
            width: 100%;
        }

        .slider {
            -webkit-appearance: none;
            width: 100%;
            border: 1px solid #000000;
            height: 0px;
            border-radius: 5px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #272727;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #272727;
            cursor: pointer;
        }
    </style>
@endpush


