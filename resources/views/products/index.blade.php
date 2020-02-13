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
                                    @include('catalog_blocks.filters')
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
                    @include('catalog_blocks.filters')
                    <button type="submit" class="btn btn-primary">Применить филтр</button>
                </form>
            </div>
            <div class="col-12 col-md-9 my-5">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 mb-4">
                            @include('catalog_blocks.product_card', ['product' => $product ])
                        </div>
                    @endforeach
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pg-blue justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" tabindex="-1">Пред</a>
                        </li>
                        <li class="page-item"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>
                        <li class="page-item">
                            <a class="page-link">След</a>
                        </li>
                    </ul>
                </nav>
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
@push("scripts")
    <script>
        // $("#ex2").slider({});

        // Without JQuery
        // var slider = new Slider('#ex2', {});
    </script>
    <script>
        $('li').click(function () {
            $(this).addClass('active').siblings().removeClass('active');
        });
    </script>

{{--    <script>--}}
{{--        //функция для добавления кнопки--}}
{{--        function showFilterButton(){--}}
{{--            $('#divFilterButton').empty();--}}
{{--            $('#divFilterButton').append('<button type="button" class="btn btn-info">Применить фильтр</button>');--}}
{{--        }--}}

{{--        $('input.sizeClass').click(function () {--}}
{{--            showFilterButton();--}}
{{--            requestAnimationFrame()--}}
{{--        });--}}

        {{--$('div#divFilterButton').click(function () {--}}
        {{--    let size = '';--}}
        {{--    $('input:radio:checked').each(function(){--}}
        {{--        size = $(this).val();--}}
        {{--    });--}}
        {{--    $.ajax({--}}
        {{--        url: "{{ route('product.filter') }} ",--}}
        {{--        data: {--}}
        {{--            size: size--}}
        {{--        },--}}
        {{--        success: data => {--}}
        {{--            console.log(data);--}}
        {{--        },--}}
        {{--        error: () => {--}}
        {{--            console.log('error');--}}
        {{--        }--}}
        {{--    })--}}
        {{--});--}}
{{--    </script>--}}

@endpush
