@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1>Editar Equipamento</h1>

        <form action="{{ route('equipamentos.update', $equipamento) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="nome" class="form-label">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $equipamento->nome }}" required>
            </div>
            
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição: </label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $equipamento->descricao }}" required>
            </div>
            
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade: </label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ $equipamento->quantidade }}" required>
            </div>

            <button type="submit" class="btn btn-warning">Atualizar</button>
        </form>
    </div>
@endsection