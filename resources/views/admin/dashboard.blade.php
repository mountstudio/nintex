@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                @include('admin.partials.sidebar')
            </div>

            <div class="col-9">
                @yield('dashboard_content')
            </div>
        </div>
    </div>
@endsection
