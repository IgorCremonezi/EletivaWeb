<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\Exer2Controller;
use App\Http\Controllers\Exer3Controller;
use App\Http\Controllers\Exer4Controller;
use App\Http\Controllers\Exer5Controller;
use App\Http\Controllers\Exer6Controller;
use App\Http\Controllers\Exer7Controller;
use App\Http\Controllers\Exer8Controller;
use App\Http\Controllers\Exer9Controller;
use App\Http\Controllers\Exer10Controller;
use App\Http\Controllers\Exer11Controller;
use App\Http\Controllers\Exer12Controller;
use App\Http\Controllers\Exer13Controller;
use App\Http\Controllers\Exer14Controller;
use App\Http\Controllers\Exer15Controller;
use App\Http\Controllers\Exer16Controller;
use App\Http\Controllers\Exer17Controller;
use App\Http\Controllers\Exer18Controller;
use App\Http\Controllers\Exer19Controller;
use App\Http\Controllers\Exer20Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exer1', [ListaController::class, 'mostrarExer1']);
Route::post('respostaExer1', [ListaController::class, 'calcularExer1']);

Route::get('/exer2', [Exer2Controller::class, 'mostrarExer2']);
Route::post('respostaExer2', [Exer2Controller::class, 'calcularExer2']);

Route::get('/exer3', [Exer3Controller::class, 'mostrarExer3']);
Route::post('respostaExer3', [Exer3Controller::class, 'calcularExer3']);

Route::get('/exer4', [Exer4Controller::class, 'mostrarExer4']);
Route::post('respostaExer4', [Exer4Controller::class, 'calcularExer4']);

Route::get('/exer5', [Exer5Controller::class, 'mostrarExer5']);
Route::post('respostaExer5', [Exer5Controller::class, 'calcularExer5']);

Route::get('/exer6', [Exer6Controller::class, 'mostrarExer6']);
Route::post('respostaExer6', [Exer6Controller::class, 'calcularExer6']);

Route::get('/exer7', [Exer7Controller::class, 'mostrarExer7']);
Route::post('respostaExer7', [Exer7Controller::class, 'calcularExer7']);

Route::get('/exer8', [Exer8Controller::class, 'mostrarExer8']);
Route::post('respostaExer8', [Exer8Controller::class, 'calcularExer8']);

Route::get('/exer9', [Exer9Controller::class, 'mostrarExer9']);
Route::post('respostaExer9', [Exer9Controller::class, 'calcularExer9']);

Route::get('/exer10', [Exer10Controller::class, 'mostrarExer10']);
Route::post('respostaExer10', [Exer10Controller::class, 'calcularExer10']);

Route::get('/exer11', [Exer11Controller::class, 'mostrarExer11']);
Route::post('respostaExer11', [Exer11Controller::class, 'calcularExer11']);

Route::get('/exer12', [Exer12Controller::class, 'mostrarExer12']);
Route::post('respostaExer12', [Exer12Controller::class, 'calcularExer12']);

Route::get('/exer13', [Exer13Controller::class, 'mostrarExer13']);
Route::post('respostaExer13', [Exer13Controller::class, 'calcularExer13']);

Route::get('/exer14', [Exer14Controller::class, 'mostrarExer14']);
Route::post('respostaExer14', [Exer14Controller::class, 'calcularExer14']);

Route::get('/exer15', [Exer15Controller::class, 'mostrarExer15']);
Route::post('respostaExer15', [Exer15Controller::class, 'calcularExer15']);

Route::get('/exer16', [Exer16Controller::class, 'mostrarExer16']);
Route::post('respostaExer16', [Exer16Controller::class, 'calcularExer16']);

Route::get('/exer17', [Exer17Controller::class, 'mostrarExer17']);
Route::post('respostaExer17', [Exer17Controller::class, 'calcularExer17']);

Route::get('/exer18', [Exer18Controller::class, 'mostrarExer18']);
Route::post('respostaExer18', [Exer18Controller::class, 'calcularExer18']);

Route::get('/exer19', [Exer19Controller::class, 'mostrarExer19']);
Route::post('respostaExer19', [Exer19Controller::class, 'calcularExer19']);

Route::get('/exer20', [Exer20Controller::class, 'mostrarExer20']);
Route::post('respostaExer20', [Exer20Controller::class, 'calcularExer20']);