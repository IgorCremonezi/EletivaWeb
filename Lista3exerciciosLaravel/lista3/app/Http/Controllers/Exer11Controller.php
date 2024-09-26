<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer11Controller extends Controller
{
    public function mostrarExer11() {
        return view("exer11");
    }

    public function calcularExer11(Request $request) {
        $raio = (int)$request->input('raio');
        return "O perímetro do círculo é de: " . round(2 * M_PI * $raio, 2);
    }
}
