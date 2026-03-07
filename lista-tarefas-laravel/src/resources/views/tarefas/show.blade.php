@extends('layouts.app')
@section('title', 'Detalhes')

@section('content')
<div>
    <div><span>Título:</span> {{ $tarefa->titulo }}</div>
    <div><span>Descrição:</span> {{ $tarefa->descricao }}</div>
    <div><span>Status:</span> {{ $tarefa->status }}</div>
    <div><span>Categoria:</span> {{ $tarefa->categoria->nome ?? 'Sem categoria' }}</div>

    <div>
        <a href="{{ route('tarefas.edit', $tarefa) }}">Editar</a>
        <a href="{{ route('tarefas.index') }}">Voltar</a>
    </div>


</div>
@endsection