<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\getRegisterController;
use App\Http\Controllers\postRegisterController;
use App\Http\Middleware\FirstMiddleware;
use Illuminate\Http\Request;

Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::post('/', [postRegisterController::class, 'register']);
Route::get('/', [getRegisterController::class, 'register']);
Route::post('/', [postLoginController::class, 'login']);
Route::get('/', [getLoginController::class, 'login']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/attendance/1', function () {
    return view('attendance');
});
Route::post('/register', [postRegisterController::class, 'create']);
Route::get('/register', [postRegisterController::class, 'index']);
Route::post('/attendance/1', [postRegisterController::class, 'index']);
Route::post('/login', [postLoginController::class, 'create']);

