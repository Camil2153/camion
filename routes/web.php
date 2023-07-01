<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::resource('viajes', App\Http\Controllers\ViajeController::class);
Route::resource('gastos', App\Http\Controllers\GastoController::class);
Route::resource('categorias-gastos', App\Http\Controllers\CategoriasGastoController::class);
Route::resource('fallas', App\Http\Controllers\FallaController::class);
Route::resource('servicios', App\Http\Controllers\ServicioController::class);
Route::resource('talleres', App\Http\Controllers\TallereController::class);
Route::resource('tipos-servicios', App\Http\Controllers\TiposServicioController::class);
Route::resource('componentes', App\Http\Controllers\ComponenteController::class);
Route::resource('almacenes', App\Http\Controllers\AlmaceneController::class);
Route::resource('viajes', App\Http\Controllers\ViajeController::class);
Route::resource('rutas', App\Http\Controllers\RutaController::class);
Route::resource('documentos-camiones', App\Http\Controllers\DocumentosCamioneController::class);
Route::resource('camiones', App\Http\Controllers\CamioneController::class);
Route::resource('conductores', App\Http\Controllers\ConductoreController::class);
Route::resource('documentos-conductores', App\Http\Controllers\DocumentosConductoreController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('sistemas', App\Http\Controllers\SistemaController::class);
Route::resource('empresas', App\Http\Controllers\EmpresaController::class);
Route::resource('ciudades', App\Http\Controllers\CiudadeController::class);
Route::resource('paises', App\Http\Controllers\PaiseController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('users', App\Http\Controllers\UserController::class)->only(['index', 'edit', 'update']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
