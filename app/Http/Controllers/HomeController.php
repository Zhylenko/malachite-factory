<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;

class HomeController extends Controller
{
    public function index(ContactRequest $request)
    {
        return 'd';
    }
}
