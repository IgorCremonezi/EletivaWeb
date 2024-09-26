<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipmentos = Equipmento::all();
        return view('equipmentos.index', compact('equipmentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipmentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'quantidade' => 'required|integer',
        ]);

        Equipmento::create($request->all());
        return redirect()->route('equipmentos.index')->with('success', 'Equipamento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipamento $equipamento)
    {
        return view('equipmentos.show', compact('equipmento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
