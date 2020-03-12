@extends('admin.dashboard')

@section('dashboard_content')
    <form id="productcreate" class="border container p-4 bg-white z-depth-1" action="{{ route('admin.product.store') }}" method="post"
          enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="title" name="title" class="form-control">
                    <label for="title">{{ __('Название') }}</label>
                </div>
            </div>
            <div class="col-6">
                <div class="md-form">
                    <textarea id="description" name="description" class="md-textarea form-control" rows="3"></textarea>
                    <label for="description">{{ __('Описание') }}</label>
                </div>
            </div>
            <div class="col-6">
                <div class="md-form">
                    <textarea id="composition" name="information" class="md-textarea form-control" rows="3"></textarea>
                    <label for="composition">{{ __('ИНформация о товаре') }}</label>
                </div>
            </div>
            <div class="col-6">
                <div class="md-form">
                    <textarea id="composition" name="composition" class="md-textarea form-control" rows="3"></textarea>
                    <label for="composition">{{ __('Состав/Уход') }}</label>
                </div>
            </div>
            <div class="col-6">
                <label>Выберите фото</label>
                <input type="file" name="logo">
            </div>
            <div class="col-6">
                <select class="browser-default custom-select" name="season" id="">
                    @foreach(['осень/зима', 'весна/лето'] as $season)
                        <option value="{{ $season }}">{{ $season }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6" style="padding-top: 15px;">
                <select class="browser-default custom-select" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mt-3">
            <!-- Default unchecked -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="type" value="false" class="custom-control-input" id="defaultUnchecked3">
                <label class="custom-control-label" for="defaultUnchecked3">Розничная продажа</label>
            </div>
        </div>
        <div class="mt-3">
            {{--                    <------------------------------------------------tabs------------------------------------------------>--}}
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#retail" role="tab"
                       aria-controls="home"
                       aria-selected="true">Оптом</a>
                </li>
                <li class="nav-item" style="display: none" id="wholesaleTab">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#wholesale" role="tab"
                       aria-controls="profile"
                       aria-selected="false">Розница</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                {{--                            First tab--}}
                <div class="tab-pane fade show active" id="retail" role="tabpanel" aria-labelledby="home-tab">
                    <div>
                        <div class="col-12">
                            <br>
                            <label>Выберите цвет</label>
                            <div class="row">
                                <div class="col-2">
                                    <input type="color" class="fieldname colorbutton form-control">
                                </div>
                                <div class="col-auto">
                                    <label for="qty1">Количество</label>
                                </div>
                                <div class="col-3">
                                    <input type="text"  class="quantity form-control">
                                </div>
                                <div class="col-4">
                                    <input type="file" class="filebtn" name="color[0][]" multiple>
                                </div>
                                <div class="col-1">
                                    <button type="button" id="add-wholesale">
                                        <i class="fas fa-plus" id="add-wholesale"></i>
                                    </button>
                                </div>
                            </div>
                            <fieldset id="buildyourform2">
                            </fieldset>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="md-form">
                                        <input type="text" id="price1" name="wholesale" class="form-control">
                                        <label for="price1">{{ __('Оптовая Цена') }}</label>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label for="" style="margin-top: 37px;">Выберите размеры</label>
                                        </div>
                                        <div class="col-auto">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    @foreach($sizes as $key => $size)
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="size[]"
                                                                       class="sizes custom-control-input"
                                                                       id="defaultUnchecked2{{ $key }}"
                                                                       value="{{ $size->size }}">
                                                                <label class="custom-control-label"
                                                                       for="defaultUnchecked2{{ $key }}">{{ $size->size }}</label>
                                                            </div>
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                Second Tab--}}
                <div class="tab-pane fade" id="wholesale" role="tabpanel" aria-labelledby="profile-tab">
                    <div id="secondTab" style="display: none">
                        <div class="col-12">
                            <br>
                            <label>Выберите цвет</label>
                            <div class="row">
                                <div class="col-2">
                                    <input type="color" class="fieldname color form-control" name="">
                                </div>
                                <div class="col-4">
                                    <input type="file" name="colorsize[0][]" multiple>
                                </div>
                                <div class="col-2">
                                    <button type="button" id="add">
                                        <i class="fas fa-plus" id="add"></i>
                                    </button>
                                </div>
                            </div>
                            <fieldset id="buildyourform">

                            </fieldset>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="md-form">
                                        <input type="text" id="price" name="price" class="form-control" >
                                        <label for="price">{{ __('Розничная Цена') }}</label>
                                    </div>
                                </div>
                                <div class="col-6"></div>

                                <div class="col-6">
                                    <label>Выберите размер</label>
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            @foreach($sizes as $key => $size)
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="sizes"
                                                               class="check-size custom-control-input"
                                                               id="defaultUnchecked1{{ $key }}"
                                                               value="{{ $size->size }}">
                                                        <label class="custom-control-label"
                                                               for="defaultUnchecked1{{ $key }}"
                                                               data-size="{{ $size->size}}">{{ $size->size }}</label>
                                                    </div>
                                                </td>
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12 for-size-color"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--        <------------------------------------------------endtabs------------------------------------------------>--}}
        <button type="submit" title="{{ __('Создать') }}" class="btn btn-success">{{ __('Создать') }}</button>
    </form>
@endsection

@push('styles')
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/multiselect.css') }}">
@endpush


@push('styles')
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
{{--    <link rel="stylesheet" href="{{ asset('css/app_bs1') }}">--}}
    <style>
        .select2-container {
            width: auto !important;
            min-width: 100px;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('js/bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script>
            $('form#productcreate button[type="submit"]').click(function (e) {
                e.preventDefault();
                console.log($('.colorbutton'));
                $(".colorbutton").each((index, item) => {
                    item = $(item);
                    // let color = $('<input type="color" name="color[' + item.val() + ']" class="fieldname colorbutton form-control">')
                    item.parent().parent().find('input[type="text"]').attr('name', 'color[' + item.val() + '][]');
                    item.parent().parent().find('input[type="file"]').attr('name', 'color[' + item.val() + '][images][]');
                    // console.log(item.val(), "as");
                });

                $('form#productcreate').submit();
            });
    </script>
    <script>
        $('.check-size').click((e) => {
            let inputCheck = $(e.currentTarget);
            $('.color').each((index, item) => {
                item = $(item);
                item.parent().parent().find('input[type="file"]').attr('name', 'colorsize[' + item.val() + '][images][]');
                // console.log(item.val())
                let input = $('<div class="row">' +
                    '<p class="col-auto">Цвет: <div class="mx-2 rounded-circle" style="background: ' + item.val() + '; width: 30px; height: 30px;"></div></p>' +
                    '<p class="col-3">Размер: ' + inputCheck.val() + '</p>' +
                    '<p class="col-auto"> <label for="qty">Количество </label>' +
                    '<p class="col-3"> <input type="text" id="qty" class="form-control" name="colorsize[' + item.val() + '][sizes][' + inputCheck.val() + ']"> ' +
                    '</p>' +
                    '</div>');
                $('.for-size-color').append(input);
            });
        });
    </script>
    <script>
        let count = 0;
        let countChecked = 0;

        $('.sizes').click(e => {
            let check = $(e.currentTarget);
            let isToCheck = false;
            $('.sizes').each((index, item) => {
                if (e.currentTarget == item) {
                    count++;
                }
                if (count == 2) {
                    isToCheck = true;
                }
            });
            console.log(isToCheck, count);
            if (isToCheck) {
                $('.sizes').each((index, item) => {

                    if ($(item).is(':checked')) {
                        countChecked++;
                        return;
                    }
                    if (countChecked == 1) {
                        $(item).prop('checked', 'checked');
                        return;
                    }
                })
            }
        })
    </script>
    <script>

        $("#defaultUnchecked3").click( e => {
            let checkBox = document.getElementById("defaultUnchecked3");
            let tabItem = document.getElementById("wholesaleTab");
            let secondTab = document.getElementById("secondTab");
            let valCheck = $(e.currentTarget);
            // console.log(valCheck.val());

            if (checkBox.checked === true) {
                tabItem.style.display = "block";
                secondTab.style.display = "block";
                valCheck.val("true");
                console.log(valCheck.val());
            } else {
                tabItem.style.display = "none";
                secondTab.style.display = "none";
            }
        });

    </script>
    <script src="{{asset('js/field.js')}}"></script>

@endpush
