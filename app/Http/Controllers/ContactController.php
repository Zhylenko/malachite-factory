<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Application;

use App\Mail\ContactMail;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        $application = new Application;
        $application->createContactApplication($request);

        \LaravelFacebookPixel::createEvent('Contact');

        Mail::to(config('personal.mail.to'))
                ->send(new ContactMail($request));
    }
}
