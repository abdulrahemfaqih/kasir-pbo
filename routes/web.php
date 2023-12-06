<?php

use App\Http\Controllers\Menu;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Transaksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get("/login", [AuthController::class, "login"])->name("login");
Route::post("/login", [AuthController::class, "autentikasi"]);
Route::get('/', [Dashboard::class, "index"])->middleware("auth");
Route::get("/menu", [Menu::class, "menu"])->middleware("auth");
Route::get("/kategori_menu", [Menu::class, "kategori_menu"])->middleware("auth");
Route::get("/transaksi", [Transaksi::class, "transaksi"])->middleware("auth");



