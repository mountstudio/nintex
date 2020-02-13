<div class="row">
    <div class="col-12 d-block d-lg-none">

        <div class="example">
            <div id="money2" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>

            <div class="row my-4 pl-3">
                <div class="col-4 px-0 form-group">
                    <!-- Small input -->
                    <input class="form-control" type="number" min="0" max="30000" step="1" id="input-1" name="input1">

                </div>
                <div class="col-1 px-0 text-center py-2">
                    <img src="{{ asset('img/Line.png') }}" alt="">
                </div>
                <div class="col-4 px-0 form-group">
                    <!-- Small input -->
                    <input class="form-control" type="number" min="0" max="30000" step="1" id="input-2" name="input2">

                </div>
            </div>
        </div>

    </div>
</div>

@push('scripts')
    <script>
        let moneySlider = document.getElementById('money2');
        let inputNumberFirst = document.getElementById('input-1'),
            inputNumberSecond = document.getElementById('input-2');
        noUiSlider.create(moneySlider, {
            start: [0, 30000],
            connect: true,
            margin: 2500,
            step: 100,
            range: {
                'min': 0,
                'max': 30000
            }
        });

        moneySlider.noUiSlider.on('update', function (values, handle) {

            let value = values[handle];

            if (handle) {
                inputNumberSecond.value = value;
            } else {
                inputNumberFirst.value = Math.round(value);
            }
        });
    </script>
@endpush
