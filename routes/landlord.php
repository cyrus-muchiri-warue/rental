<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::prefix('landlord')->group(function () {
    Route::resource('posts', PostController::class);
    Route::resource('location', LocationController::class);
    Route::resource('categorys', CategoryController::class);
    
   
});