<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\MessageController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->get('/user', fn(Request $r) => $r->user());

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders', [OrderController::class, 'store']);
    
    Route::post('/contact', [MessageController::class, 'send']);
});

Route::get('/admin/orders', [AdminOrderController::class, 'index']);
Route::put('/admin/orders/{id}/approve', [AdminOrderController::class, 'approve']);
Route::put('/admin/orders/{id}/reject', [AdminOrderController::class, 'reject']);

Route::post('/messages', [MessageController::class, 'store']);
Route::get('/admin/messages', [MessageController::class, 'index']);

Route::get('/sanctum/csrf-cookie', function () {
    return response()->json(['csrf' => true]);
});
