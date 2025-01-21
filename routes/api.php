<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LodgingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// --- Guest routes --- //
Route::middleware('guest:sanctum')->group(function () {
    // Auth routes
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});


// Activities routes
Route::get('/activities', [ActivityController::class, 'index']);
Route::get('/activities/{activity_id}', [ActivityController::class, 'show']);



// --- Authenticated routes --- //
Route::middleware('auth:sanctum')->group(function () {
    // Auth routes
    Route::post('/logout', [AuthController::class, 'logout']);

    // Profile routes
    Route::get('/profile', [AuthController::class, 'getUser']);

    // Activities routes
    Route::post('/activities', [ActivityController::class, 'store']);
    Route::put('/activities/{activity_id}', [ActivityController::class, 'update']);
    Route::delete('/activities/{activity_id}', [ActivityController::class, 'destroy']);
    Route::put('/activities/{activity_id}/status', [ActivityController::class, 'changeStatus']);

    // Lodging routes
    Route::get('/lodgings', [LodgingController::class, 'index']);
    Route::get('/lodgings/{lodging_id}', [LodgingController::class, 'show']);
    Route::post('/lodgings', [LodgingController::class, 'store']);
    Route::put('/lodgings/{lodging_id}', [LodgingController::class, 'update']);
    Route::delete('/lodgings/{lodging_id}', [LodgingController::class, 'destroy']);

    // Users routes
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{user_id}', [UserController::class, 'show']);
    Route::put('/users/{user_id}', [UserController::class, 'update']);
    Route::delete('/users/{user_id}', [UserController::class, 'destroy']);
});




