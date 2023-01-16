<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\PostController;

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
    ->names([
        'index' => 'posts.lista',
        'create' => 'posts.crear',
        'show' => 'posts.mostrar',
        'edit' => 'posts.editar'
    ])->whereNumber('post');

Route::get('libros', [LibrosController::class, 'listarLibros']);

Route::get('listar10primos/{n}', [OperacionesController::class, 'listar10Primos']);

Route::get('factorial/{numero}', [OperacionesController::class, 'factorial']);
