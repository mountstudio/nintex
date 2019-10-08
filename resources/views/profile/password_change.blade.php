<div class="card rounded-0">

    <div class="form-header w-75 mx-auto blue accent-1">
            <strong>{{ __('Изменить пароль') }}</strong>
    </div>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
        <!-- Form -->
        <form class="text-center" style="" method="post" action="{{ route('user.update.password') }}">
        @csrf
        @method("PUT")
        <!-- Name -->
            <div class="md-form">

                <input id="last_password" type="password" class="form-control{{ $errors->has('last_password') ? ' is-invalid' : '' }}" name="last_password">
                <label for="last_password">{{ __('Старый пароль') }}</label>

                @if ($errors->has('last_password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_password') }}</strong>
                                    </span>
                @endif
            </div>
            <!-- Password -->
            <div class="md-form">

                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                <label for="password">{{ __('Новый пароль') }}</label>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <!-- Password confirm -->
            <div class="md-form">

                <input id="password_confirmation" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation">
                <label for="password_confirmation">{{ __('Повторите новый пароль') }}</label>

                @if ($errors->has('password_confirmation'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                @endif
            </div>


            <!-- Send button -->
            <button class="btn btn-light-blue waves-effect waves-light" type="submit">{{ __('Изменить') }}</button>

        </form>


    </div>

</div>
<!-- Material form contact -->
