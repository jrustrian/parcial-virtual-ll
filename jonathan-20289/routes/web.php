<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('home/ingresarcategoria',[ClienteController::class, 'registrarCate'])->name('4');
Route::post('home/guardarcate',[ClienteController::class, 'guardarCat'])->name('3');

Route::get('home/ingresardepartamento',[ClienteController::class, 'registrarDe'])->name('6');
Route::post('home/guardardepa',[ClienteController::class, 'guardarDe'])->name('5');

Route::get('home/ingresargenero',[ClienteController::class, 'registrarge'])->name('8');
Route::post('home/guardarge',[ClienteController::class, 'guardarge'])->name('7');

Route::get('home/mostrarcliente',[ClienteController::class, 'MostrarC'])->name('mostrarcliente');
Route::delete('home/{cliente}',[\App\Http\Controllers\ClienteController::class, 'eliminarcliente'])->name('cliente.delete');

Route::get('home/mostrarcategoria',[ClienteController::class, 'MostrarCate'])->name('mostrarcate');
Route::delete('home/{cate}',[\App\Http\Controllers\ClienteController::class, 'eliminarcate'])->name('cate.delete');

Route::get('home/mostrardepartamento',[ClienteController::class, 'MostrarD'])->name('mostrardepa');
Route::delete('home/{depa}',[\App\Http\Controllers\ClienteController::class, 'eliminarde'])->name('departamento.delete');

Route::get('home/mostrargenero',[ClienteController::class, 'Mostrargene'])->name('mostrarge');
Route::delete('home/{genero1}',[\App\Http\Controllers\ClienteController::class, 'eliminarge'])->name('genero.delete');



Route::get('home/registrar', [\App\Http\Controllers\ClienteController::class, 'registrarC'])->name('2');
Route::post('home/guardarclientes', [\App\Http\Controllers\ClienteController::class, 'guardarC'])->name('1');
