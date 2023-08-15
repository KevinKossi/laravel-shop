<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // alle pages dat door een auth moet gaan, steek je hier in 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index' ]);

    // category routes 

    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::post('/category', 'store');
        Route::get('/category/create', 'create');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}','update');
    


        Route::get('/category/{category}/delete', 'delete');
    });

    Route::get('/meats', App\Http\Livewire\Admin\Meat\Index::class);
});



require __DIR__.'/auth.php';
