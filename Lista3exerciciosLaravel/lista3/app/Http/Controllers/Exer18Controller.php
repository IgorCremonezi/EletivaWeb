<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer18Controller extends Controller
{
    public function mostrarExer18() {
        return view("exer18");
    }

    public function calcularExer18(Request $request) {
        $capital = (int)$request->input('capital');
        $juros = $request->input('juros');
        $periodo = (int)$request->input('periodo');
        return "O rendimento é de: " . round($capital * pow((1 + ($juros / 100)), $periodo), 2);
    }
}
