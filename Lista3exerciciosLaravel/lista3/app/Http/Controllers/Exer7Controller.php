<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer7Controller extends Controller
{
    public function mostrarExer7() {
        return view("exer7");
    }

    public function calcularExer7(Request $request) {
        $temperatura = (int)$request->input('temperatura');
        return "O resultado da conversão de Fahrenheit para Celsius é: " . ($temperatura - 32) * 5 / 9;
    }
}
