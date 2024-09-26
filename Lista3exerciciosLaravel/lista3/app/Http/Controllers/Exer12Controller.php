<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer12Controller extends Controller
{
    public function mostrarExer12() {
        return view("exer12");
    }

    public function calcularExer12(Request $request) {
        $base = (int)$request->input('base');
        $expoente = (int)$request->input('expoente');
        return "O resultado da exponenciação é: " . pow($base, $expoente);
    }
}
