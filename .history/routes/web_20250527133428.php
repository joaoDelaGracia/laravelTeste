<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect("/series");
});

Route::resource("/series", SeriesController::class)
    ->only(["index", "create", "store"]);

Route::delete("/series/destroy/{serie}", [SeriesController::class, "destroy"])->name("series.destroy");