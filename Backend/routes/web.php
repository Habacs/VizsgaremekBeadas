<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('/admin/dashboard/', [AdminController::class, 'dashboard'])->middleware('admin');
    Route::resource('/products', ProductController::class);
});