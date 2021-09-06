<?php

use Illuminate\Support\Facades\Route;
/*Agregamos ruta del controlador*/
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
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
Route::get('dashboard', [PageController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::post('logout', [LoginController::class,'logout']);


Route::get('editar-inicio',[AdminController::class,'editar_inicio'])->name('editar-inicio')->middleware('auth');
Route::put('editar-inicio',[AdminController::class,'actualizar_fondo'])->name('fondo');

Route::get('editar-nosotros',[AdminController::class,'editar_nosotros'])->name('editar-nosotros')->middleware('auth');
Route::put('editar-nosotros',[AdminController::class,'actualizar_informacion'])->name('informacion');

Route::get('editar-contacto',[AdminController::class,'editar_contacto'])->name('editar-contacto')->middleware('auth');
Route::put('editar-contacto',[AdminController::class,'actualizar_contacto'])->name('editar-contacto');

Route::get('editar-servicios',[AdminController::class,'editar_servicios'])->name('editar-servicios')->middleware('auth');
Route::post('editar-servicios',[AdminController::class,'agregar_servicio'])->name('agregar-servicio');
Route::put('editar-servicios/{id}',[AdminController::class,'editar_servicio'])->name('editar-servicio');
Route::delete('editar-servicios/{id}',[AdminController::class,'eliminar_servicio'])->name('eliminar-servicio');

Route::get('gestion-usuarios',[AdminController::class,'gestion_usuarios'])->name('gestion-usuarios')->middleware(['auth','admin.auth']);
Route::post('gestion-usuarios',[AdminController::class,'crear_usuario'])->name('crear-usuario');
Route::put('gestion-usuarios/{id}',[AdminController::class,'actualizar_usuario'])->name('actualizar-usuario');
Route::delete('gestion-usuarios/{id}',[AdminController::class,'eliminar_usuario'])->name('eliminar-usuario');
