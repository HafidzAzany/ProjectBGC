<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('pasien', PasienController::class);
Route::resource('pasien', PasienController::class)->middleware('auth:sanctum');