<?php

use App\Http\Controllers\StaffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ReservationController;


// Activities routes
Route::get('/activities', [ActivityController::class, 'index']);
Route::get('/activities/{activity_id}', [ActivityController::class, 'show']);


// Profile routes
Route::get('/profile', [AuthController::class, 'getUser']);


// Users routes
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user_id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{user_id}', [UserController::class, 'update']);
Route::delete('/users/{user_id}', [UserController::class, 'destroy']);


// Staff routes
Route::get('/staff', [StaffController::class, 'index']);
Route::get('/staff/{staff_id}', [StaffController::class, 'show']);
Route::post('/staff', [StaffController::class, 'store']);
Route::put('/staff/{staff_id}', [StaffController::class, 'update']);
Route::delete('/staff/{staff_id}', [StaffController::class, 'destroy']);
Route::patch('/staff/{staff_id}/toggle-status', [StaffController::class, 'toggleStatus']);


// Activities routes
Route::post('/activities', [ActivityController::class, 'store']);
Route::put('/activities/{activity_id}', [ActivityController::class, 'update']);
Route::delete('/activities/{activity_id}', [ActivityController::class, 'destroy']);
Route::patch('/activities/{activity_id}/toggle-status', [ActivityController::class, 'toggleStatus']);


// Reservation routes
Route::get('/reservations', [ReservationController::class, 'index']);
Route::get('/reservations/{reservation_id}', [ReservationController::class, 'show']);
Route::post('/reservations', [ReservationController::class, 'store']);
Route::put('/reservations/{reservation_id}', [ReservationController::class, 'update']);





