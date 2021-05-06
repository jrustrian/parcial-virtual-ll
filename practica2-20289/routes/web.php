<?php

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
    return view('menu.menu');
});


Route::get('/formulario/registrar', [\App\Http\Controllers\FormularioController::class, 'ingresarfor'])->name('ingresar');
Route::post('/formulario/guardar', [\App\Http\Controllers\FormularioController::class, 'for'])->name('guardar');
Route::get('/formulario/mostrar',[\App\Http\Controllers\FormularioController::class, 'Mostrar'])->name('mostrar');
