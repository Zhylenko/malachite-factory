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

        if ($request->image !== null) {
            $image          = $request->file('image');
            $path           = config('calculator.path.upload');

            $fileExtention  = $image->getClientOriginalExtension();
            $fileName       = $this->generateName() . '.' . $fileExtention;

            $image->move($path, $fileName);

            $request->image = $fileName;
        }


        $application = new Application;
        $application->createCalculatorApplication($request, $type, $font, $place);

        Mail::to(config('personal.mail.to'))
            ->send(new CalculatorMail($request));
    }

    protected function generateName($length = 16)
    {
        $alphabet   = "abcdefghijklmnopqrstuvwxyz0123456789";
        $alphabetLength = strlen($alphabet);
        $name   = "";

        for ($i = 0; $i < $length; $i++) { 
            str_shuffle($alphabet);
            $name .= $alphabet[rand(0, ($alphabetLength - 1))];
        }

        return $name;
    }
}
