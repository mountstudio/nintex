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
                <label>Выберите фото</label>
                <input type="file" name="logo">
            </div>
        </div>

        <button type="submit" title="{{ __('Создать') }}" class="btn btn-success">{{ __('Создать') }}</button>
    </form>
@endsection
