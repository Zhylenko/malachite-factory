<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home page
Route::get('/', 'App\Http\Controllers\HomeController@index')
	->name('index');

//Send contact form
Route::post('/contact/send', 'App\Http\Controllers\ContactController@send')
	->name('contact.send');

//Calculator form
Route::post('/calculator/send', 'App\Http\Controllers\CalculatorController@send')
	->name('calculator.send');
