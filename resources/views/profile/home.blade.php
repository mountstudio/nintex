@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="list-group">
                <a href="{{ route('profile') }}" class="list-group-item list-group-item-action active">{{ __('Профиль') }}</a>
                <a href="#!" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#!" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#!" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#" onclick="event.preventDefault();$('.logout-form').submit();" class="list-group-item list-group-item-action">{{ __('Выход') }}</a>
            </div>
        </div>
        <div class="col-md-8">
            <form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
                @csrf
            </form>

            <!-- Material form contact -->
            <div class="card">

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Contact us</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">
                    <!-- Form -->
                    <form class="text-center" style="" action="#!">
                        @csrf
                        @method("PUT")
                        <!-- Name -->
                        <div class="md-form">

                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name">
                            <label for="name">{{ __('ФИО') }}</label>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <!-- Email -->
                        <div class="md-form">

                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email">
                            <label for="email">{{ __('E-mail') }}</label>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <!-- Send button -->
                        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">{{ __('Изменить') }}</button>

                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form contact -->


        </div>
    </div>
</div>
@endsection
