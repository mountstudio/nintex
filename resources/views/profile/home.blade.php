@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-2">
            @include('profile.sidebar')
        </div>
        <div class="col">
            <section>
                <div class="d-flex mb-5 jus">
                    <div class="col-2 px-0 mx-2">
                        <div class="card py-4 px-2 text-center">
                            <p class="h1 text-success">24</p>
                            <p class="text-muted">покупки за Сентябрь</p>
                        </div>
                    </div>
                    <div class="col-2 px-0 mx-2">
                        <div class="card py-4 px-2 text-center">
                            <p class="h1 text-success">1424</p>
                            <p class="text-muted">баллов</p>
                        </div>
                    </div>
                    <div class="col-2 px-0 mx-2">
                        <div class="card py-4 px-2 text-center">
                            <p class="h1 text-danger">2</p>
                            <p class="text-muted">оставшиеся товары</p>
                        </div>
                    </div>
                    <div class="col-3 px-0 mx-2">
                        <div class="card py-4 px-2 text-center">
                            <p class="h1 text-info">29/10/2019</p>
                            <p class="text-muted">заходили в последний раз</p>
                        </div>
                    </div>
                    <div class="col-2 px-0 mx-2">
                        <div class="card py-4 px-2 text-center">
                            <p class="h1 text-info">29</p>
                            <p class="text-muted"> в последний раз</p>
                        </div>
                    </div>
                </div>
            </section>

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
