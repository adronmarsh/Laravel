<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;

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

Route::resource('miembros', MemberController::class);

Route::resource('eventos', EventController::class);

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('donde-estamos', function () {
    return view('dondeEstamos');
});

Route::get('añadir-evento', function () {
    return view('añadirEvento');
});

Route::resource('mensajes', MessageController::class);

Route::get('registro', function () {
    return view('registro');
});

Route::get('login', function () {
    return view('login');
});

Route::get('cuenta', function () {
    return view('cuenta');
});
// Footer

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
