<?php

namespace App\Http\Controllers;

use App\Models\Font;
use App\Models\Place;
use App\Models\Type;
use Illuminate\Http\Request;

use App\Models\Work;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $works   = Work::limit(config('works.portfolio.limit'))->get();
        $types   = Type::all();
        $fonts   = Font::all();
        $places  = Place::all();

        return view('home.index', [
            'works'     => $works,
            'types'     => $types,
            'fonts'     => $fonts,
            'places'    => $places,
        ]);
    }
}
