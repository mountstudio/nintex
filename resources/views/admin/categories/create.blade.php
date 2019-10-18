@extends('admin.dashboard')

@section('dashboard_content')
    <form class="border container p-4 bg-white z-depth-1" action="{{ route('admin.category.store') }}" method="post">
        @csrf

        <div class="row">

            <div class="col-6">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="title" name="title" class="form-control">
                    <label for="title">{{ __('Название') }}</label>
                </div>
            </div>
        </div>

        <button type="submit" title="{{ __('Создать') }}" class="btn btn-success">{{ __('Создать') }}</button>
    </form>
@endsection
