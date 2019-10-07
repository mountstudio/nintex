<!-- Material form contact -->
<div class="card rounded-0">

    <div class="form-header mx-auto blue accent-1 w-75">
        <strong>{{ __('Изменить данные') }}</strong>
    </div>

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
            <button class="btn btn-light-blue waves-effect waves-light" type="submit">{{ __('Изменить') }}</button>

        </form>


    </div>

</div>
<!-- Material form contact -->
