@extends('layouts.app')

@section('content')

    <div class="main-container">
        <div class="row">
            <div class="col-12 d-block d-lg-none col-md-3 my-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mx-5" data-toggle="modal" data-target="#basicExampleModal">
                    Выбрать категории
                </button>

                <!-- Modal -->
                <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Выберите категории</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('product.index') }}" method="GET"><!-- исправить фильтр суммы -->
                                    @include('catalog_blocks.nav_category')
                                    {{--                                    @include('catalog_blocks.filters')--}}

                                    {{--<p class="mt-3 mb-3" style="margin-top: 20px; font-size: 16px;">Цвета:</p>--}}
                                    {{--@include('catalog_blocks.filters_category.color_filter')--}}

                                    <p class="mt-3 mb-4" style="margin-top: 20px; font-size: 16px;">Цены:</p>
                                    @include('catalog_blocks.filters_category.money_filter_mobile')

                                    <button type="submit" class="btn btn-primary" data-dismiss="modal">Применить филтр</button>
                                </form>
                            </div>
                            {{--<div class="modal-footer">
                                <button type="button" class="btn btn-secondary" >Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>--}}
                        </div>
                    </div>
                </div>
                {{--<form action="{{ route('product.index') }}" method="GET">
                    @include('catalog_blocks.nav_category')
                    @include('catalog_blocks.filters')
                    <button type="submit" class="btn btn-primary">Применить филтр</button>
                </form>--}}
            </div>
            <div class="col-12 d-none d-lg-block col-md-3 my-5">
                <form action="{{ route('product.index') }}" method="GET">
                    @include('catalog_blocks.nav_category')
                    {{--                    @include('catalog_blocks.filters')--}}

                    {{--<p class="mt-3 mb-3" style="margin-top: 20px; font-size: 16px;">Цвета:</p>--}}
                    {{--@include('catalog_blocks.filters_category.color_filter')--}}

                    <p class="mt-3 mb-4" style="margin-top: 20px; font-size: 16px;">Цены:</p>
                    @include('catalog_blocks.filters_category.money_filter_lg')

                    <button type="submit" class="btn btn-primary">Применить филтр</button>
                </form>
            </div>
{{--            @dd($newProducts)--}}
            <div class="col-12 col-md-9 my-5">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 mb-4">
                            @include('catalog_blocks.product_card', ['product' => $product, 'productSize' => \App\ProductSize::where('product_id', $product->id)->get() ])
                        </div>
                    @endforeach
                </div>
                @if($products instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="row justify-content-center mt-5">
                        {{ $products->appends(request()->query())->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection

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
@push('scripts')
    <script>
        let moneySlider1 = document.getElementById('money');
        let inputNumberFirst2 = document.getElementById('input-first'),
            inputNumberSecond3 = document.getElementById('input-second');
        noUiSlider.create(moneySlider1, {
            start: [0, 30000],
            connect: true,
            margin: 2500,
            step: 100,
            range: {
                'min': 0,
                'max': 30000
            }
        });

        moneySlider1.noUiSlider.on('update', function (values, handle) {

            let value = values[handle];

            if (handle) {
                inputNumberSecond3.value = value;
            } else {
                inputNumberFirst2.value = Math.round(value);
            }
        });
    </script>
@endpush

@push("scripts")
    <script>
        $('ul.list-unstyled.filter li').click(e => {
            e.preventDefault();
            let li = $(e.currentTarget);


            li.find('input').attr('checked', (index, attr) => {
                return attr == 'checked' ? null : 'checked';
            });

            if (li.prop('id') == 'allCatalog') {
                if (li.find('input').is(':checked')) {
                    console.log($('ul.list-unstyled.filter').find('input').not('#allCatalog input').attr('checked', 'checked'));
                } else {
                    console.log($('ul.list-unstyled.filter').find('input').not('#allCatalog input').removeAttr('checked'));
                }
            }
        })
    </script>

@endpush
