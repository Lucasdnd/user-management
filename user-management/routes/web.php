<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    return view('welcome');
});

Route::get('/edit',[UsersController::class, 'edit'], function () {
    return view('edit');
})->name('edit');

Route::post('/destroy/{id}', [UsersController::class,'destroy'])->name('destroy');



Route::get('/dashboard',[UsersController::class, 'index'], function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';
