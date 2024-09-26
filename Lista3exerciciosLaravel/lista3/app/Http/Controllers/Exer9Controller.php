<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer9Controller extends Controller
{
    public function mostrarExer9() {
        return view("exer9");
    }

    public function calcularExer9(Request $request) {
        $raio = (int)$request->input('raio');
        return "A área do círculo é de: " . round(M_PI * pow($raio, 2), 2);
    }
}
