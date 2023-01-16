<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operacionesController extends Controller
{
    public function listar10Primos($n)
    {
        $primos = [];
        $numero = 2;
        while (count($primos) < $n) {
            $esPrimo = true;
            for ($i = 2; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    $esPrimo = false;
                    break;
                }
            }
            if ($esPrimo) {
                $primos[] = $numero;
            }
            $numero++;
        }

        return view('primos', compact('primos'));
    }

    public function factorial($numero)
    {
        $factorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;
        }
        return view('factorial', compact('numero', 'factorial'));
    }
}
