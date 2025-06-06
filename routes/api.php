<?php

use App\Http\Controllers\Api\ApiSeriesController;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/series", [ApiSeriesController::class, "index"]);