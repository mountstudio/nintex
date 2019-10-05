@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="list-group">
                <a href="#!" class="list-group-item list-group-item-action active">{{ __('Профиль') }}</a>
                <a href="#!" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#!" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#!" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#!" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
            </div>
        </div>
        <div class="col-md-8">

            <!-- Material form contact -->
            <div class="card">

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Contact us</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" action="#!">
                        <!-- Default checked -->
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                        </div>
                        <!-- Material outline input with prefix-->
                        <div class="md-form md-outline">
                            <i class="fas fa-envelope prefix"></i>
                            <input type="text" id="inputIconEx1" class="form-control">
                            <label for="inputIconEx1">E-mail address</label>
                            <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone.</small>
                        </div>
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

                        <!-- E-mail -->
                        <div class="md-form">
                            <input type="email" id="materialContactFormEmail" class="form-control">
                            <label for="materialContactFormEmail">E-mail</label>
                        </div>

                        <!-- Subject -->
                        <span>Subject</span>
                        <select class="mdb-select">
                            <option value="" disabled>Choose option</option>
                            <option value="1" selected>Feedback</option>
                            <option value="2">Report a bug</option>
                            <option value="3">Feature request</option>
                            <option value="4">Feature request</option>
                        </select>

                        <!--Message-->
                        <div class="md-form">
                            <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                            <label for="materialContactFormMessage">Message</label>
                        </div>

                        <!-- Copy -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialContactFormCopy">
                            <label class="form-check-label" for="materialContactFormCopy">Send me a copy of this message</label>
                        </div>

                        <!-- Send button -->
                        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form contact -->



            <form action="" class="py-5 text-center z-depth-1">
                @csrf
                @method("PUT")
                <!-- Material input -->
                    <div class="md-form">
                        <input type="text" id="form1" class="form-control">
                        <label for="form1">Example label</label>
                    </div>


                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
