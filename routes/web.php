<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

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

Route::get('/websites', function () {
    return view('web');
});

Route::get('/projects', function () {
    return view('projects');
});


//external Websites
Route::get('/stennizworkshops.nl', function(){
    return redirect('https://stennizworkshops.nl');
});

Route::get('/50plusroadtrip.nl', function(){
    return redirect('https://50plusroadtrip.nl');
});

Route::get('/jarodiking.com', function(){
    return redirect('https://jarodiking.com');
});


//downloads

Route::get('/downloadTheInvaders', function()
{
    $file_name = "TheInvaders.zip";
    $path = storage_path().'/'.'app'.'/public/'.$file_name;
    if (file_exists($path)) {
        return Response::download($path);
    }
});


