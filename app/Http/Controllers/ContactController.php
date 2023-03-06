<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\ContactFormMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Recipient;

class ContactController extends Controller
{
    public function view()
    {
        return view('contact');
    }

    public function send(ContactFormRequest $message, Recipient $recipient)
    {
        $recipient->notify(new ContactFormMessage($message));

        return view('contact');
    }
}
