<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperacionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\WriterController;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


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

Route::resource('/posts', PostController::class)
    ->parameters(['post' => 'slug'])
    ->missing(function (Request $request) {
        return Redirect::route('posts.index');
    });

Route::get('libros', [LibroController::class, 'listarLibros']);

Route::get('listar10primos/{n}', [OperacionController::class, 'listar10Primos']);

Route::get('factorial/{numero}', [OperacionController::class, 'factorial']);

Route::resource('sales', SaleController::class);
Route::get('sales/empresa/{nombre}', [SaleController::class, 'empresa']);

Route::resource('writers', WriterController::class);
Route::get('witers/{nombre}', [WriterController::class, 'show']);

Route::get('registro', [LoginController::class, 'registerForm']);
Route::post('registro', [Logincontroller::class, 'register'])->name('registro');
Route::get('login', [LoginController::class, 'loginForm']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('cuenta', function () {
    return view('auth.account');
})->name('users.account')
    ->middleware('auth');
