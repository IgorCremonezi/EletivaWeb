<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer13Controller extends Controller
{
    public function mostrarExer13() {
        return view("exer13");
    }

    public function calcularExer13(Request $request) {
        $metro = (int)$request->input('metro');
        return "O resultado da conversão de metros em centímetros é: " . $metro * 100;
    }
}
