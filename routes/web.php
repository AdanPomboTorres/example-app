<?php

use App\Http\Controllers\OtraPruebaController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\pruebas;
use App\Http\Controllers\UsuariosController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mostrar-vista', function () {
    return view('vista');
});
Route::get('/ejemplo', function(){
    echo "Hola";
});

Route::get('/pruebas', [pruebas::class, 'hacerPruebas']);
Route::get('/otra_prueba', [OtraPruebaController::class, 'prueba2']);
Route::get('/users/{user_id}', [UsuariosController::class, 'findUserById']);
Route::get('/productos', [ProductosController::class, 'todosLosProductos']);
