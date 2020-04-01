{{--@component('mail::message')--}}
    # Hello from Nintex

    Welcome to our online store Nintex
    <h2>Заголовок:{{ $image->title }}</h2>
    <img src="{{ $message->embed(asset('storage/medium/' . $image->image)) }}">
    <a href="{{ $image->link }}">Смотреть товар!</a>
{{--@endcomponent--}}
