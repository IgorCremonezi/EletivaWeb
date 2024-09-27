@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1>Dados dos Equipamentos</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>Nome:</strong> {{ $equipamento->nome }}</p>
                <p><strong>Descrição:</strong> {{ $equipamento->descricao }}</p>
                <p><strong>Quantidade:</strong> {{ $equipamento->quantidade }}</p>
            </div>
        </div>

        <a href="{{ route('equipamentos.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
@endsection