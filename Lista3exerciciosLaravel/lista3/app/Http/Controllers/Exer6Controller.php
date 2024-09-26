<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer6Controller extends Controller
{
    public function mostrarExer6() {
        return view("exer6");
    }

    public function calcularExer6(Request $request) {
        $temperatura = (int)$request->input('temperatura');
        return "O resultado da conversão de Celsius para Fahrenheit é: " . ($temperatura * 9 / 5) + 32;
    }
}
