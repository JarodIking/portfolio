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

Route::get('/', function () {
    return view('skills');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/exp', function () {
    return view('exp');
});

Route::get('/edu', function () {
    return view('edu');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/interests', function () {
    return view('interests');
});

