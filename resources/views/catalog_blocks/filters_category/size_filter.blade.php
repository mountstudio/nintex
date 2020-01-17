<div class="col-12">
    <div class="j-size-list size-list j-smart-overflow-instance form-group">
        @foreach($sizes as $size)
            <label class="j-size j-sold-out tooltipstered size-button" data-sizeName="{{ $size->size }}">
                <span>{{ $size->size }}</span>
                <input class="radio-size sizeClass" id="size{{ $size->id }}" name="sizes[{{ $size->id }}]" type="checkbox" value="{{ $size->size }}">
            </label>
        @endforeach
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
