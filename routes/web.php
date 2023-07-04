<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [IndexController::class, "index"])->name("home");
Route::get("/login", [UserController::class, "login"])
   ->middleware("guest")
   ->name("login");
Route::post("/users/authenticate", [UserController::class, "authenticate"]);
