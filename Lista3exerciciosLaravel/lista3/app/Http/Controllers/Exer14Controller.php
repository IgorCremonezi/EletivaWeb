<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer14Controller extends Controller
{
    public function mostrarExer14() {
        return view("exer14");
    }

    public function calcularExer14(Request $request) {
        $km = (int)$request->input('km');
        return "O resultado da conversão de quilômetros em milhas é: " . $km * 0.621371;
    }
}
