@component('mail::message')
    # Hello from Nintex

    Welcome to our online store Nintex

    @foreach($images as $image)
        <img src="{{ asset('storage/large/'.$image->image) }}" class="img-fluid" alt="">
    @endforeach
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
