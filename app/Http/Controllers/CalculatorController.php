<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Application;
use App\Models\Font;
use App\Models\Place;
use App\Models\Type;

use App\Mail\CalculatorMail;

use App\Http\Requests\CalculatorRequest;

class CalculatorController extends Controller
{
    public function send(CalculatorRequest $request)
    {
        $type   = Type::where('type', $request->type)->first();
        $font   = Font::where('font', $request->font)->first();
        $place  = Place::where('place', $request->place)->first();

        $application = new Application;
        $application->createCalculatorApplication($request, $type, $font, $place);

        Mail::to(config('personal.mail.to'))
                ->send(new CalculatorMail($request));
    }
}
