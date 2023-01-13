<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\librosController;

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

Route::get('posts', function () {
    return 'Listado de posts del blog';
})->name('posts');

Route::get('post/{id?}', function ($id = null) {
    if ($id != null) {
        return view('posts/post', compact('id'));
    } else {
        return redirect(route('inicio'));
    }
})->whereNumber('id')->name('postId');

Route::get('libros', [librosController::class,'listarLibros'] );

Route::get('posts/listado', function () {
    return view('posts.listado');
})->name('posts.listado');
