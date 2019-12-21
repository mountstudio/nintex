@extends('admin.dashboard')

@section('dashboard_content')
    <form class="border container p-4 bg-white z-depth-1" action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="title" name="title" class="form-control">
                    <label for="title">{{ __('Название') }}</label>
                </div>
            </div>
            <div class="col-3">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="price" name="price" class="form-control">
                    <label for="price">{{ __('Розничная Цена') }}</label>
                </div>
            </div>
            <div class="col-3">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="wholesale_price" name="wholesale_price" class="form-control">
                    <label for="wholesale_price">{{ __('Мелкооптовая цена') }}</label>
                </div>
            </div>
            <div class="col-6">
                <div class="md-form">
                    <textarea id="description" name="description" class="md-textarea form-control" rows="3"></textarea>
                    <label for="description">{{ __('Описание') }}</label>
                </div>
            </div>
            <div class="col-3">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="m_wholesale_price" name="m_wholesale_price" class="form-control">
                    <label for="m_wholesale_price">{{ __('Средняя оптовая цена') }}</label>
                </div>
            </div>
            <div class="col-3">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="l_wholesale_price" name="l_wholesale_price" class="form-control">
                    <label for="l_wholesale_price">{{ __('Крупная оптовая цена') }}</label>
                </div>
            </div>
            <div class="col-6">
                <fieldset id="buildyourform">
                    <label>Выберите цвет</label>
                </fieldset>
                <input type="color" class="fieldname form-control" name="colors[0]">
                <input type="file" name="images[0][]" multiple>
                <button type="button" id="add">
                    <i class="fas fa-plus" id="add"></i>
                </button>
            </div>
            <div class="col-6">
                <label>Выберите фото</label>
                <input type="file" name="logo">
            </div>
{{--            <div class="col-6">--}}
{{--                <label>Выберите картинки</label>--}}
{{--                <input type="file" name="images[]" multiple>--}}
{{--            </div>--}}
            <div class="col-6">
                <label>Выберите видео</label>
                <input type="file" name="video">
            </div>
            <div class="col-6">
                <label>Выберите размеры</label>
                <select class="js-example-basic-multiple" name="sizes[]" multiple="multiple" id="select2" placeholder="size">
                    @foreach($sizes as $size)
                        <option value="{{ $size->size }}">{{ $size ->size }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <select class="browser-default custom-select" name="season" id="">
                    @foreach(['осень/зима', 'весна/лето'] as $season)
                        <option value="{{ $season }}">{{ $season }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <select class="browser-default custom-select" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" title="{{ __('Создать') }}" class="btn btn-success">{{ __('Создать') }}</button>
    </form>
@endsection



@push('styles')
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/multiselect.css') }}">
@endpush


@push('styles')
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
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
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endpush
