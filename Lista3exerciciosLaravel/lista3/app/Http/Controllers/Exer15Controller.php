<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer15Controller extends Controller
{
    public function mostrarExer15() {
        return view("exer15");
    }

    public function calcularExer15(Request $request) {
        $peso = $request->input('peso');
        $altura = $request->input('altura');
        return "O IMC para os dados informados é: " . round($peso / pow($altura, 2), 2);
    }
}
