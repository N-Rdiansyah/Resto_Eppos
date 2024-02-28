<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//register
Route::post('/register', [AuthController::class, 'register']);

//logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

//Api - login
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//Api - product
Route::apiResource('/api-products', App\Http\Controllers\API\ProductController::class)->middleware('auth:sanctum');

// Api - category
Route::apiResource('/api-categories', App\Http\Controllers\API\CategoryController::class)->middleware('auth:sanctum');
