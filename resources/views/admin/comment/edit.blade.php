@extends('admin.dashboard')

@section('dashboard_content')
    <form action="{{ route('admin.comment.update', $comment) }}" method="post" class="border container p-4 bg-white z-depth-1" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-6">
                <div class="md-form">
                    <input type="text" id="comment" name="comment" class="form-control" value="{{ $comment->comment }}">
                    <label for="comment">Комментарий</label>
                </div>
            </div>
            <div class="col-6">
                <div class="md-form">
                    <input type="text" name="email" id="email" value="{{ $comment->email }}">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="col-6">
                <div class="md-form">
                    <input type="text" name="name" id="name" value="{{ $comment->name }}">
                    <label for="name">ФИО</label>
                </div>
            </div>
        </div>
        <button type="Сохранить" class="btn btn-primary">Сохранить</button>
    </form>




@endsection
