<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('welcome');
});


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
