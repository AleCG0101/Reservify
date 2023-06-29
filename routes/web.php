<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\NegocioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/', [NegocioController::class, 'homeindex'])->name('home.index');
Route::get('/negocios/negocios_show/{id}', [NegocioController::class, 'show'])->name('negocios.show');

//RUTA PARA MANDAR A LA VISTA DE CREAR CITA, ESTO ES UN FORMULARIO DONDE SE LLENARAN LOS CAMPOS FALTANTES DE LA CITA
Route::get('citas/cita_negocio/{id}',[CitaController::class, 'crearCita'])->name('citas.show');
Route::post('citas/cita_create',[CitaController::class, 'finalizarCita'])->name('citas.store');
Route::get('citas/cita_usuario/{id}',[CitaController::class,'citaUsuario'])->name('citas.usuario');

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios_create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios_store', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios_show/{id}', [UsuarioController::class, 'show'])->name('usuarios.show');
Route::post('/usuarios_update', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::get('/usuarios_destroy/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');



Route::get('/negocios', [NegocioController::class, 'index'])->name('negocios.index');
Route::get('/negocios_create', [NegocioController::class, 'create'])->name('negocios.create');
Route::post('/negocios_store', [NegocioController::class, 'store'])->name('negocios.store');
Route::post('/negocios_update', [NegocioController::class, 'update'])->name('negocios.update');
Route::get('/negocios_destroy/{id}', [NegocioController::class, 'destroy'])->name('negocios.destroy');


Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias_create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias_store', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categorias_show/{id}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::post('/categorias_update', [CategoriaController::class, 'update'])->name('categorias.update');
Route::get('/categorias_destroy/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

