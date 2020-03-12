@extends('admin.dashboard')

@section('dashboard_content')
    <form action="{{ route('admin.product.update', $product) }}" method="post" class="border container p-4 bg-white z-depth-1" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="title" name="title" value="{{ $product->title }}" class="form-control">
                    <label for="title">{{ __('Название') }}</label>
                </div>
            </div>
            <div class="col-6">
{{--                <div class="md-form">--}}
{{--                    @dd( $product->description)--}}
{{--                    <textarea id="description" name="description" value="{{ $product->description }}" class="md-textarea form-control" rows="3"></textarea>--}}
{{--                    <label for="description">{{ __('Описание') }}</label>--}}
{{--                </div>--}}
            </div>
            <div class="col-6">
                <label>Выберите фото</label>
                <input type="file" name="logo" value="{{ $product->logo }}">
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
            <div>
                <div class="md-form">
                    <input type="text" class="form-control" name="discount" id="discount"}}">
                    <label for="discount">Скидка</label>
                </div>
            </div>
        </div>
        <button type="Сохранить" class="btn btn-primary">Сохранить</button>
    </form>




@endsection
