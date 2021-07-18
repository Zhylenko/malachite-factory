<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Application;

use App\Mail\CalculatorMail;

use App\Http\Requests\CalculatorRequest;

class CalculatorController extends Controller
{
    public function send(CalculatorRequest $request)
    {
        $application = new Application;
        $application->createCalculatorApplication($request);

        Mail::to(config('personal.mail.to'))
                ->send(new CalculatorMail($request));
    }
}
