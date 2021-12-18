<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::prefix('landlord')->group(function () {
    Route::resource('posts', PostController::class);
    Route::resource('locations', LocationController::class);
    Route::resource('category', CategoryController::class);
   
});