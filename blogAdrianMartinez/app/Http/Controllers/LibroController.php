<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function listarLibros()
    {
        $libros = [
            ["titulo" => "El juego de Ender", "autor" => "Orson Scott Card", "anyo" => "1985"],
            ["titulo" => "Una educación mortal", "autor" => "Naomi Novik", "anyo" => "2020"],
            ["titulo" => "La historia interminable", "autor" => "Michael Ende", "anyo" => "1979"],
            ["titulo" => "El Señor de los Anillos", "autor" => "J.R.R. Tolkien", "anyo" => "1954"],
            ["titulo" => "Juego de tronos", "autor" => "George R.R. Martin ", "anyo" => "1996"],
            ["titulo" => "El último deseo", "autor" => "Andrzej Sapkowski", "anyo" => "1993"],
        ];
        return view('libros', compact('libros'));
    }
}
