<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer19Controller extends Controller
{
    public function mostrarExer19() {
        return view("exer19");
    }

    public function calcularExer19(Request $request) {
        $dias = (int)$request->input('dias');
        return "O resultado da conversão de dias em horas, minutos e segundos é: " . $dias * 24 . " horas, " . $dias * 1440 . " minutos e " . $dias * 86400 . " segundos";
    }
}
