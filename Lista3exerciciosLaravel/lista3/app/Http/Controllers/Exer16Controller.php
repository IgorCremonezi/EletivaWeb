<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer16Controller extends Controller
{
    public function mostrarExer16() {
        return view("exer16");
    }

    public function calcularExer16(Request $request) {
        $preco = $request->input('preco');
        $desconto = $request->input('desconto');
        return "O valor do produto com desconto aplicado é: " . round($preco * (1 - ($desconto / 100)), 2);
    }
}
