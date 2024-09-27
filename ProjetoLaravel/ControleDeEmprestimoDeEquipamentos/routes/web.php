<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EquipamentoController;
use App\Models\Equipamento;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('equipamentos', EquipamentoController::class);
