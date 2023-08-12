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


Route::group([], function () {

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');

});


