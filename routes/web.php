<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
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
    return view('home');
});
Route::get('/message', function () {
    return view('sections.contact');
});

Route::get('/portfolio/{id}', [PortfolioController::class,'show'])->where('id', '[0-9]+');;

Route::post('/contact', [ContactController::class,'store']);