<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer20Controller extends Controller
{
    public function mostrarExer20() {
        return view("exer20");
    }

    public function calcularExer20(Request $request) {
        $distancia = $request->input('distancia');
        $tempo = $request->input('tempo');
        return "A velocidade média é de: " . round($distancia / $tempo, 2) . " Km por hora";
    }
}
