<div class="col-12">
    <div class="j-size-list size-list j-smart-overflow-instance">
        <label class="j-size  disabled j-sold-out tooltipstered size-button"
               data-characteristic-id="" data-size-name="XS">
            <span>XXS</span>
            <input class="radio-size" id="size" name="size" type="radio" value="">
            <i></i>
        </label>
        <label class="j-size tooltipstered active size-button"
               data-characteristic-id=""
               data-size-name="S">
            <span>XS</span>
            <input class="radio-size" id="size" name="size" type="radio" value="">
            <i></i>
        </label>
        <label class="j-size tooltipstered size-button" data-characteristic-id=""
               data-size-name="M">
            <span>S</span>
            <input class="radio-size" id="size" name="size" type="radio" value="">
            <i></i>
        </label>
        <label class="j-size tooltipstered size-button" data-characteristic-id=""
               data-size-name="L">
            <span>M</span>
            <input class="radio-size" id="size" name="size" type="radio" value="">
            <i></i>
        </label>
        <label class="j-size tooltipstered size-button" data-characteristic-id=""
               data-size-name="XL">
            <span>L</span>
            <input class="radio-size" id="size" name="size" type="radio" value="">
            <i></i>
        </label>
        <label class="j-size tooltipstered size-button" data-characteristic-id=""
               data-size-name="XXL"
               onmousedown="play('{{ asset('audio/one-punch.mp3') }}')">
            <span>XL</span>
            <input class="radio-size" id="size" name="size" type="radio" value="">
            <i></i>
        </label>

        <i class="icon-step j-imigize hide"></i>
    </div>
</div>

@push("scripts")

    <script>
        document.addEventListener(
            "DOMContentLoaded", () => {
                new Mmenu("#my-menu", {
                    wrappers: ["bootstrap"]
                });
            }
        );
    </script>
    <script>
        $('.j-size-list').on('click', 'label', function () {
            $('.j-size-list label').removeClass('active');
            $(this).addClass('active');
        });
    </script>

    @include('animate.animate')
@endpush
