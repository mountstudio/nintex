@extends('admin.dashboard')

@section('dashboard_content')
    <form class="border container p-4 bg-white z-depth-1" action="{{ route('admin.product.store') }}" method="post"
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
        </div>
{{--        <------------------------------------------------tabs------------------------------------------------>--}}
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#retail" role="tab" aria-controls="home"
                   aria-selected="true">Розница</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#wholesale" role="tab" aria-controls="profile"
                   aria-selected="false">Оптом</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="retail" role="tabpanel" aria-labelledby="home-tab">
                <div>
                    <div class="col-12">
                        <br>
                        <label>Выберите цвет</label>
                        <div class="row">
                            <div class="col-2">
                                <input type="color" class="fieldname color form-control" name="color">
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
                        <fieldset id="buildyourform">
                            <label>Выберите размер</label>
                        </fieldset>
                        <div class="j-size-list size-list j-smart-overflow-instance">
                            @foreach($sizes as $size)
                                <label class="j-size tooltipstered size-button " data-characteristic-id=""
                                       data-size="{{ $size->size }}">
                                    <span>{{ $size->size }}</span>
                                    <input class="check-size" name="sizes" type="checkbox" value="{{ $size->size }}">
                                </label>
                            @endforeach
                        </div>
                        <div class="col-6">
                            <div class="md-form">
                                <input type="text" id="price" name="price" class="form-control" required>
                                <label for="price">{{ __('Розничная Цена') }}</label>
                            </div>
                        </div>
                        <div class="col-12 for-size-color"></div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="wholesale" role="tabpanel" aria-labelledby="profile-tab">
                <div class="col-12">
                    <div class="row">
                        <input type="text">
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
    <link rel="stylesheet" href="{{ asset('css/app_bs1') }}">
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
    <script src="{{asset('js/field.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
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
                    '<p class="col-3"> <input type="text" id="qty" class="form-control" name="colorsize[' + item.val() + '][sizes][' + inputCheck.val() + ']" required> ' +
                    '</p>' +
                    '</div>');
                $('.for-size-color').append(input);
            });
        });

        $(document).ready(function (e) {
            $(this).getElementsByClassName("check-size").checked = false;
        })
    </script>

@endpush
