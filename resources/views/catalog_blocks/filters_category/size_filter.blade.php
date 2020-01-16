<div class="col-12">
    <div class="j-size-list size-list j-smart-overflow-instance form-group">
        @foreach($sizes as $size)
            <label class="j-size j-sold-out tooltipstered size-button" data-sizeName="{{ $size }}">
                <span>{{ $size }}</span>
                <input class="radio-size sizeClass" id="size{{ $size }}" name="sizes[{{ $size }}]" type="checkbox" value="{{ $size }}">
            </label>
        @endforeach
   {{--     <label class="j-size  disabled j-sold-out tooltipstered size-button"
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
        <i class="icon-step j-imigize hide"></i>--}}
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
           if( $(this).hasClass('active') == false){
               $(this).addClass('active');
           }else if( $(this).addClass('active') == true ){
               $(this).removeClass('active');
           }

        });
    </script>
    @include('animate.animate')
@endpush
