<div class="row">
    @for($i = 0; $i < 10; $i++)
        @for($j = 0; $j < 3; $j++)
            <div class="col-lg-3 col-md-6 mb-4">
                <!--Card-->
                <div class="card align-items-center rounded border-0 shadow ">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="{{ asset('img/clothes.png') }}" class="img-fluid" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->
                    <!--Card content-->
                    <div class="card-body text-left px-2">
                        <!--Category & Title-->
                        <a href="" class="grey-text">
                            <h5>Пальто из шерсти цвет черный</h5>
                        </a>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-2 mr-2 px-0">
                                    <p class="border py-2 text-center">
                                        XS
                                    </p>
                                </div>
                                <div class="col-2 mr-2 px-0">
                                    <p class="border py-2 text-center">
                                        S
                                    </p>
                                </div>
                                <div class="col-2 mr-2 px-0">
                                    <p class="border py-2 text-center">
                                        L
                                    </p>
                                </div>
                                <div class="col-2 mr-2 px-0">
                                    <p class="border py-2 text-center">
                                        XL
                                    </p>
                                </div>
                                <div class="col-2 px-0">
                                    <p class="border py-2 text-center">
                                        XXL
                                    </p>
                                </div>
                            </div>
                        </div>
                       {{-- <div class="col-12 px-0">
                            <div class="j-size-list size-list j-smart-overflow-instance">
                                <label class="j-size  disabled j-sold-out tooltipstered size-button"
                                       data-characteristic-id="" data-size-name="XXS">
                                    <span>XXS</span>
                                    <input class="radio-size" id="size" name="size" type="radio" value="">
                                    <i></i>
                                </label>
                                <label class="j-size tooltipstered active size-button"
                                       data-characteristic-id=""
                                       data-size-name="XS">
                                    <span>XS</span>
                                    <input class="radio-size" id="size" name="size" type="radio" value="">
                                    <i></i>
                                </label>
                                <label class="j-size tooltipstered size-button" data-characteristic-id=""
                                       data-size-name="S">
                                    <span>S</span>
                                    <input class="radio-size" id="size" name="size" type="radio" value="">
                                    <i></i>
                                </label>
                                <label class="j-size tooltipstered size-button" data-characteristic-id=""
                                       data-size-name="M">
                                    <span>M</span>
                                    <input class="radio-size" id="size" name="size" type="radio" value="">
                                    <i></i>
                                </label>
                                <label class="j-size tooltipstered size-button" data-characteristic-id=""
                                       data-size-name="L">
                                    <span>L</span>
                                    <input class="radio-size" id="size" name="size" type="radio" value="">
                                    <i></i>
                                </label>
                                <label class="j-size tooltipstered size-button" data-characteristic-id=""
                                       data-size-name="XL"
                                       onmousedown="play('{{ asset('audio/one-punch.mp3') }}')">
                                    <span>XL</span>
                                    <input class="radio-size" id="size" name="size" type="radio" value="">
                                    <i></i>
                                </label>

                                <i class="icon-step j-imigize hide"></i>
                            </div>
                        </div>--}}
                        <h4 class="font-weight-bold blue-text text-right">
                            <strong>7500 kgs</strong>
                        </h4>
                    </div>
                    <!--Card content-->
                </div>
                <!--Card-->
            </div>
        @endfor
    @endfor

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

@endpush
