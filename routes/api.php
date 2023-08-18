<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/todos',[\App\Http\Controllers\TodosController::class, 'index']);
Route::post('/todos',[\App\Http\Controllers\TodosController::class, 'store']);
Route::delete('/todos/{id}',[\App\Http\Controllers\TodosController::class, 'destroy']);
