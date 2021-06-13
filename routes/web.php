<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [ViewController::class, "login"])->name("login");
Route::get('/register', [ViewController::class, "register"]);
Route::group(["middleware" => "auth"], function () {
    Route::get('/', [ViewController::class, "home"]);
    Route::get('/services', [ViewController::class, "services"]);
    Route::get('/order', [ViewController::class, "order"]);
    Route::get('/history', [ViewController::class, "history"]);
    Route::get('/order-detail/{id}', [ViewController::class, "orderDetail"]);
});

Route::group(["prefix" => "user"], function () {
    Route::post("/login", [UserController::class, "login"]);
    Route::post("/register", [UserController::class, "register"]);
    Route::get("/logout", [UserController::class, "logout"]);
});

Route::group(["prefix" => "order"], function () {
    Route::post("/booking", [OrderController::class, "booking"]);
    Route::get("/cancel/{id}", [OrderController::class, "cancel"]);
});
