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
    return 'Hola soy Adrián Martínez, bienvenido a mi blog.';
    // return view('welcome');
})->name('inicio');

Route::get('posts', function () {
    return 'Listado de posts del blog';
})->name('posts');

Route::get('post/{id?}', function ($id = null) {
    if ($id != null) {
        return 'Este es el post: ' . $id;
    } else {
        return redirect(route('inicio'));
    }
})->whereNumber('id')->name('postId');

