<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer3Controller extends Controller
{
    public function mostrarExer3() {
        return view("exer3");
    }

    public function calcularExer3(Request $request) {
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return "O resultado da multiplicação é de: " . $valor1 * $valor2;
    }
}
