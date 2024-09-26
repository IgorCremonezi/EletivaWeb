<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer8Controller extends Controller
{
    public function mostrarExer8() {
        return view("exer8");
    }

    public function calcularExer8(Request $request) {
        $largura = (int)$request->input('largura');
        $altura = (int)$request->input('altura');
        return "A área do retângulo é de: " . $largura * $altura;
    }
}
