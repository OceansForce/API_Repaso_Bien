<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuluakController;

use App\Http\Controllers\ErabiltzaileakController;
use App\Http\Controllers\ErabiltzaileakModuluakController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('moduluak', [ModuluakController::class, 'index']);
Route::post('M_crear', [ModuluakController::class , 'store']);
Route::put('M_editar/{moduluak}', [ModuluakController::class , 'update']);
Route::delete('M_borrar/{moduluak}', [ModuluakController::class , 'destroy']);

Route::get('ikasleak', [ErabiltzaileakController::class, 'index']);

Route::post('/login', [ErabiltzaileakController::class, 'login']);

Route::delete('logout', [ErabiltzaileakController::class, 'logout'])->middleware("auth:sanctum");

Route::get('/ikaslemoduluak', [ErabiltzaileakModuluakController::class, 'index'])->middleware("auth:sanctum");

Route::get('/nm/{id}', [ErabiltzaileakModuluakController::class, 'nm']);
Route::post('matrikulatu', [ErabiltzaileakModuluakController::class, 'matrikulatu'])->middleware("auth:sanctum");
