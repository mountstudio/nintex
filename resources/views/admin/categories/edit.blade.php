@extends('admin.dashboard')

@section('dashboard_content')
    <form action="{{ route('admin.category.update', $category) }}" method="post" class="border container p-4 bg-white z-depth-1" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-6">
                <div class="md-form">
                    <input type="text" id="title" name="title" class="form-control" value="{{ $category->title }}">
                    <label for="title">Title</label>
                </div>
            </div>
        </div>
        <button type="Сохранить" class="btn btn-primary">Сохранить</button>
    </form>




@endsection
