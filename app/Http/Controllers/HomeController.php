<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Application;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return Application::all();

    }
}
