<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticador;
use App\Mail\SeriesCreated;
use App\Models\Series;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::resource("/series", SeriesController::class)
    ->except("show");

Route::middleware("autenticador")->group(function () {
    Route::get('/', function () {
        return redirect("/series");
    });

    Route::get("/series/{series}/seasons", [SeasonsController::class, 'index'])->name("seasons.index");

    Route::get("/seasons/{season}/episodes", [EpisodesController::class,"index"])->name("episodes.index");
    Route::post("/seasons/{season}/episodes", [EpisodesController::class,"update"])->name("episodes.update");

});


Route::get("/login", [LoginController::class, "index"])->name("login");
Route::post("/login", [LoginController::class, "store"])->name("signin");
Route::post("/logout", [LoginController::class,"destroy"])->name("logout");

Route::get("/register", [UsersController::class, "create"])->name("users.create");
Route::post("/register", [UsersController::class, "store"])->name("users.store");

Route::get("/email", function (){
    return new SeriesCreated(
        'Série de teste',
        1,
        5,
        10
    );
});

