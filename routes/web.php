<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
//use App\Http\Controllers\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
