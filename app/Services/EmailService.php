<?php


namespace App\Services;


use App\Email;
use App\Image;
use Illuminate\Support\Facades\Mail;

class EmailService
{
    public static function send(Image $image)
    {
        $email = Email::pluck('email')->toArray();
        Mail::send('emails.welcome', ['image' => $image], function ($message) use ($email) {
            $message->to($email)
                ->subject('Посмотри новость');
            $message->from(['maunt@mail.ru', 'umma@mail.ru']);
            $message->sender('damir290598@gmail.com');
        });
    }
}
