<?php

use Illuminate\Support\Facades\Route;
/*Agregamos ruta del controlador*/
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;

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

Route::get('inicio', [PageController::class,'inicio'])->name('inicio');

Route::get('nosotros', [PageController::class,'nosotros'])->name('nosotros');

Route::get('servicios', [PageController::class,'servicios'])->name('servicios');

Route::get('contacto', [PageController::class,'contacto'])->name('contacto');


Route::get('login', [PageController::class,'login'])->name('login')->middleware('guest');

Route::post('login', [LoginController::class,'login']);

Route::get('dashboard', [PageController::class,'dashboard'])->middleware('auth');

Route::post('logout', [LoginController::class,'logout']);
