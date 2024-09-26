<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer4Controller extends Controller
{
    public function mostrarExer4() {
        return view("exer4");
    }

    public function calcularExer4(Request $request) {
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        if ($valor2 != 0)
            return "O resultado da divisão é de: " . $valor1 / $valor2;
        else
            return "Não é possível dividir por 0!";
    }
}
