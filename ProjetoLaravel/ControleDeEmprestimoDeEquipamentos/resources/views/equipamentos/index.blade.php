@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1>Equipamentos</h1>
        <a href="{{ route('equipamentos.create') }}" class="btn btn-success mb-3">Adicionar Equipamento</a>
        
        @if (session('success'))
            <div class="alert alert-primary">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipamentos as $equipamento)
                    <tr>
                        <td>{{ $equipamento->nome }}</td>
                        <td>{{ $equipamento->descricao }}</td>
                        <td>{{ $equipamento->quantidade }}</td>
                        <td>
                            <a href="{{ route('equipamentos.show', $equipamento) }}" class="btn btn-info btn-sm">Ver detalhes</a>
                            <a href="{{ route('equipamentos.edit', $equipamento) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('equipamentos.destroy', $equipamento) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection