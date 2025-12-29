<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\AuthController;

Route::get('/', [UmkmController::class, 'landing']);

Route::get('/umkm/{id}', [UmkmController::class, 'show']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'proses']);

