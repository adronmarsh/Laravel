<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;



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
    return view('index');
})->name('index');
Route::get('inicio', function () {
    return view('index');
});

Route::resource('/miembros', UserController::class);

Route::get('cuenta', [UserController::class, 'cuenta'])
->name('users.account')
->middleware('auth');
Route::get('cuenta/{usuario}', [UserController::class, 'editarCuenta'])->name('account.edit');


Route::resource('eventos', EventController::class);

Route::get('contacto', function () {
    return view('contacto/contacto');
})->name('contacto');

Route::get('donde-estamos', function () {
    return view('dondeEstamos');
});

Route::get('añadir-evento', function () {
    return view('añadirEvento');
})
// ->middleware('admin')
;

Route::resource('mensajes', MessageController::class);
Route::post('/procesar-formulario', [MessageController::class, 'procesarFormulario'])->name('message.procesarFormulario');
Route::get('/enviado', [MessageController::class, 'enviado'])->name('enviado');


Route::get('footer/contact', function () {
    return view('footer.contact');
});

Route::get('footer/cookiePolicy', function () {
    return view('footer.cookiePolicy');
});

Route::get('footer/cookieSettings', function () {
    return view('footer.cookieSettings');
});
Route::get('footer/privacyPolicy', function () {
    return view('footer.privacyPolicy');
});
Route::get('footer/termsOfUse', function () {
    return view('footer.termsOfUse');
});

Route::get('registro', [LoginController::class, 'registerForm']);
Route::post('registro', [Logincontroller::class, 'register'])->name('registro');
Route::get('login', [LoginController::class, 'loginForm']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('cuenta', function () {
//     return view('auth.account');
// })->name('users.account')
//     ->middleware('auth');
