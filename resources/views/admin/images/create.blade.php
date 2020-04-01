@extends('admin.dashboard')

@section('dashboard_content')
    <form id="productcreate" class="border container p-4 bg-white z-depth-1" action="{{ route('admin.image.store') }}" method="post"
          enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-6">
                <label>Выберите фото</label>
                <input type="file" name="image">
            </div>
            <div class="col-6">
                <div class="md-form">
                    <input type="text" id="title" name="title" class="form-control">
                    <label for="title">{{ __('Название') }}</label>
                </div>
            </div>
            <div class="col-6">
                <div class="md-form">
                    <input type="text" id="link" name="link" class="form-control">
                    <label for="link">{{ __('Cсылка') }}</label>
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

    <script src="{{asset('js/field.js')}}"></script>

@endpush
