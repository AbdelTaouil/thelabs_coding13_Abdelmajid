<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitreController;


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
    return view('template.home');
});

Auth::routes();

Route::get('/back', [App\Http\Controllers\HomeController::class, 'index'])->name('back');

Auth::routes();

Route::get('/back', function() {
    return view('back');
})->name('back')->middleware('auth');


Route::get('/Blog', function () {
    return view('template.blog');
});



Route::get('/', [App\Http\Controllers\TitreController::class, 'index']);

Route::get('/Services', [App\Http\Controllers\TitreController::class, 'indexbis']);

Route::get('/Blog', [App\Http\Controllers\TitreController::class, 'indexbis2']);

Route::get('/Contact', [App\Http\Controllers\ContactController::class, 'index']);


