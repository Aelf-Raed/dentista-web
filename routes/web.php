<?php

use Illuminate\Support\Facades\Route;
/*Agregamos ruta del controlador*/
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class,'inicio'])->name('inicio');

Route::get('nosotros', [PageController::class,'nosotros'])->name('nosotros');

Route::get('servicios', [PageController::class,'servicios'])->name('servicios');

Route::get('contacto', [PageController::class,'contacto'])->name('contacto');
