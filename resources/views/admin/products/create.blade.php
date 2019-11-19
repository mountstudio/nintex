@extends('admin.dashboard')

@section('dashboard_content')
    <form class="border container p-4 bg-white z-depth-1" action="{{ route('admin.product.store') }}" method="post">
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
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="price" name="price" class="form-control">
                    <label for="price">{{ __('Цена') }}</label>
                </div>
            </div>
            <div class="col-6">
                <div class="md-form">
                    <textarea id="description" name="description" class="md-textarea form-control" rows="3"></textarea>
                    <label for="description">{{ __('Описание') }}</label>
                </div>
            </div>
            <div class="col-6">
                <fieldset id="buildyourform">
                    <label>Выберите цвет</label>
                </fieldset>
                <input type="color" class="fieldname form-control" name="colors[]">
                <button type="button" id="add">
                    <i class="fas fa-plus" id="add"></i>
                </button>
            </div>
            <div class="col-6">
                <label>Выберите фото</label>
                <input type="file" name="logo">
            </div>
            <div class="col-6">
                <label>Выберите картинки</label>
                <input type="file" name="images[]" multiple>
            </div>
            <div class="col-6">
                <label>Выберите размер</label>
                <select name="size_id" id="size_id">
                    @foreach($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->size }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <label>Выберите фото</label>
                <input type="file" name="video">
            </div>
            <div class="col-6">
                <span class="multi-select"></span>
            </div>
        </div>
        <button type="submit" title="{{ __('Создать') }}" class="bt n btn-success">{{ __('Создать') }}</button>
    </form>
@endsection

@push('styles')
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/multiselect.css') }}">
@endpush

@push('scripts')
    <script src="{{asset('js/field.js')}}"></script>
    <script src="{{ asset('js/bundle.min.js') }}"></script>
    <script>
        var multi = new SelectPure(".multi-select", {
            options: [
                {
                    label: "S",
                    value: "S",
                },
                {
                    label: "M",
                    value: "M",
                },
                {
                    label: "L",
                    value: "L",
                },
                {
                    label: "XL",
                    value: "XL",
                },
                {
                    label: "XXL",
                    value: "XXL",
                },
            ],
            value: ["L", "S"],
            multiple: true,
            icon: "fa fa-times",
            onChange: value => { console.log(value); },
        });
    </script>
@endpush
