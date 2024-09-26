<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer10Controller extends Controller
{
    public function mostrarExer10() {
        return view("exer10");
    }

    public function calcularExer10(Request $request) {
        $largura = (int)$request->input('largura');
        $altura = (int)$request->input('altura');
        return "O perímetro do retângulo é de: " . 2 * ($largura + $altura);
    }
}
