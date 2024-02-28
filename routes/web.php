<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('pages.auth.login');
});

//Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//middleware home
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('home');

    Route::resource('user', UserController::class);

    //Product Controller
    Route::resource('products', ProductController::class);

    //Category Controller
    Route::resource('categories', CategoryController::class);
});
