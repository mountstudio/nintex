@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-2">
            @include('profile.sidebar')
        </div>
        <div class="col">
            @include('profile.dashboard')

            <section>
                <h2>Персональные данные</h2>

                <div class="d-flex mt-5">
                    <div class="col-4">
                        @include('profile.email_change')
                    </div>
                    <div class="col-4">
                        @include('profile.password_change')
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection
