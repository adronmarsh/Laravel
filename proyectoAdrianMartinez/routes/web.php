<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LoginController;


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

// --------------------- User ---------------------
Route::resource('/miembros', UserController::class);
Route::get('cuenta', [UserController::class, 'cuenta'])->name('users.account')->middleware('auth');

// --------------------- Events ---------------------
Route::resource('eventos', EventController::class);
Route::put('eventos/apuntados/{evento}', [EventController::class, 'apuntados'])->name('eventos.apuntados');
Route::get('eventos/apuntados/{evento}', function () {
    return redirect()->route('index');
});
Route::put('/eventos/{evento}/visible', [EventController::class, 'visible'])->name('eventos.visible');
Route::get('/eventos/{evento}/visible', function () {
    return redirect()->route('index');
});



// --------------------- Message ---------------------
Route::resource('mensajes', MessageController::class);
Route::post('/procesar-formulario', [MessageController::class, 'procesarFormulario'])->name('message.procesarFormulario');
Route::get('/procesar-formulario', function () {
    return redirect()->route('index');
})->name('procesarFormularioError');
Route::get('/enviado', [MessageController::class, 'enviado'])->name('enviado');

// --------------------- Login ---------------------
Route::get('registro', [LoginController::class, 'registerForm']);
Route::post('registro', [Logincontroller::class, 'register'])->name('registro');
Route::get('login', [LoginController::class, 'loginForm']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// --------------------- Static ---------------------
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('inicio', function () {
    return view('index');
});

Route::get('donde-estamos', function () {
    return view('dondeEstamos');
});

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

Route::get('contacto', function () {
    return view('contacto/contacto');
})->name('contacto');
