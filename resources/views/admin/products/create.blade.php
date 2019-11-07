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
            <div class="col-12">
                <fieldset id="buildyourform">
                    <legend>Build your own form!</legend>
                </fieldset>
                <input type="button" value="Preview form" class="add" id="preview" />
                <input type="button" value="Add a field" class="add" id="add" />
            </div>
        </div>
        <button type="submit" title="{{ __('Создать') }}" class="btn btn-success">{{ __('Создать') }}</button>
    </form>
@endsection

@push('scripts')
    <script src="{{asset('js/field.js')}}"></script>
@endpush
