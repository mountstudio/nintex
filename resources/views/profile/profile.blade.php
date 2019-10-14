@extends('layouts.app')

@section('content')
    @includeWhen(\Session::has('status'), 'partials.alerts.success')

    @yield('profile_content')
@endsection
