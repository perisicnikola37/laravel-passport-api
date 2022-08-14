<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => 'true']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/change-password/{user:name}', [HomeController::class, 'edit'])->name('edit-user');
Route::put('/change-password/{id}', [HomeController::class, 'update'])->name('update-user');

Auth::routes();
