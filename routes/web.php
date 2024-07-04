<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get("/",[IndexController::class,"homeView"]);
Route::get("/catalog",[IndexController::class,"catalogView"]);
Route::get("/certificate",[IndexController::class,"certificateView"]);
Route::get("/delivery",[IndexController::class,"deliveryView"]);
Route::get("/about",[IndexController::class,"about_companyView"]);


