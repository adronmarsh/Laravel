<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\OperacionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SaleController;

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
    return view('inicio');
})->name('inicio');

Route::resource('posts', PostController::class)->parameters(['posts' => 'post'])
    ->whereNumber('post');

Route::get('libros', [LibroController::class, 'listarLibros']);

Route::get('listar10primos/{n}', [OperacionController::class, 'listar10Primos']);

Route::get('factorial/{numero}', [OperacionController::class, 'factorial']);

Route::get('sales/empresa/{nombre}',[SaleController::class,'empresa']);
Route::resource('sales', SaleController::class);
