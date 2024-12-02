<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryapiController;
use App\Http\Controllers\Api\ArticleApicontroller;
use App\Http\Controllers\Api\PersonapiController;
use App\Http\Controllers\Api\IncomeApicontroller;
use App\Http\Controllers\Api\SaleApicontroller;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('categories',CategoryapiController::class);
Route::apiResource('articles',ArticleApicontroller::class);
Route::apiResource('Person',PersonapiController::class);
Route::apiResource('Income',IncomeApicontroller::class);
Route::apiResource('Sale',SaleApicontroller::class);
Route::put('sale/{id}', [SaleController::class, 'update']);

