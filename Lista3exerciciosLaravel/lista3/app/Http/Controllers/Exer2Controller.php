<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer2Controller extends Controller
{
    public function mostrarExer2() {
        return view("exer2");
    }

    public function calcularExer2(Request $request) {
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return "O resultado da subtração é de: " . $valor2 - $valor1;
    }
}