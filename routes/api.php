<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by RouteServiceProvider
| and assigned to the "api" middleware group.
|
*/

Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);