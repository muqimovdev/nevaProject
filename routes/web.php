<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get("/",[IndexController::class,"homeView"])->name("home.page");
Route::get("/catalog",[IndexController::class,"catalogView"])->name("catalog.page");
Route::get("/certificate",[IndexController::class,"certificateView"])->name("certificate.page");
Route::get("/delivery",[IndexController::class,"deliveryView"])->name("delivery.page");
Route::get("/about",[IndexController::class,"about_companyView"])->name("about.company.page");


