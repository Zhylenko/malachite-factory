<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\CalculatorRequest;

class Application extends Model
{
    use HasFactory;

    public function createContactApplication(ContactRequest $request)
    {
        $this->name = $request->name;
        $this->phone = $request->phone;
        $this->message = $request->message;
        $this->ip = $request->ip();

        $this->save();

        return $this;
    }

    public function createCalculatorApplication(CalculatorRequest $request)
    {
        $this->name = $request->name;
        $this->phone = $request->phone;
        $this->type = $request->type;
        $this->width = $request->width;
        $this->height = $request->height;
        $this->font = $request->font;
        $this->place = $request->place;
        $this->ip = $request->ip();

        $this->save();

        return $this;
    }

    public function type()
    {
        return $this->hasOne('App\Models\Type');
    }

    public function font()
    {
        return $this->hasOne('App\Models\Font');
    }

    public function place()
    {
        return $this->hasOne('App\Models\Place');
    }
}
