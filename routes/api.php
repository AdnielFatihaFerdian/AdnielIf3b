<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/fakultas', [FakultasController::class, 'index']);
Route::get('/prodi', [ProdiController::class, 'index']);

Route::post('/fakultas', [FakultasController::class, 'store']);
Route::post('/prodi', [ProdiController::class, 'store']);
Route::patch('/fakultas/{fakultas}', [FakultasController::class, 'update']);
Route::patch('/prodi/{prodi}', [ProdiController::class, 'update']);
Route::delete('/fakultas/{fakultas}', [FakultasController::class, 'destroy']);
Route::delete('/prodi/{prodi}', [ProdiController::class, 'destroy']);
route::post('register', [AuthController::class, 'register']);
route::post('login', [AuthController::class, 'login']);
