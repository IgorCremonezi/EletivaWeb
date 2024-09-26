<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer17Controller extends Controller
{
    public function mostrarExer17() {
        return view("exer17");
    }

    public function calcularExer17(Request $request) {
        $capital = (int)$request->input('capital');
        $juros = $request->input('juros');
        $periodo = (int)$request->input('periodo');
        return "O rendimento é de: " . round($capital * ($juros/100) * $periodo, 2);
    }
}
