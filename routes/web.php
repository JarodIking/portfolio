<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\TabsController;

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

//load index page
Route::get('/', [TabsController::class, 'index']);

//load tabs
Route::get('/{tab}', [TabsController::class, 'show']);



//downloads
Route::get('/downloadTheInvaders', function()
{
    $file_name = "TheInvaders.zip";
    $path = storage_path().'/'.'app'.'/public/'.$file_name;
    if (file_exists($path)) {
        return Response::download($path);
    }
});


