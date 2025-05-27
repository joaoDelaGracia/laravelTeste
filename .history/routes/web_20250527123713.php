<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect("/series");
});

Route::resource("/series", SeriesController::class);
>>>>>>> ca29d7cbf21624a7bf8fc43471d86a007f2726c1
