<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exer5Controller extends Controller
{
    public function mostrarExer5() {
        return view("exer5");
    }

    public function calcularExer5(Request $request) {
        $p1 = (int)$request->input('p1');
        $p2 = (int)$request->input('p2');
        $p3 = (int)$request->input('p3');
        return "A média das notas é de: " . round(($p1 + $p2 + $p3) / 3, 2);
    }
}
