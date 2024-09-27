@extends('layouts.app')

@section('title', 'Cadastrar Equipamento')

@section('content')
    <h1 class="mb-4">Cadastrar Equipamento</h1>

    <form action="{{ route('equipamentos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Equipamento: </label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição: </label>
            <input type="text" class="form-control" id="descricao" name="descricao" required>
        </div>

        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade: </label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" required>
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection