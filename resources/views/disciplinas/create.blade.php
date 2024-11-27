@extends('layouts.base')

@section('conteudo')
<form action="{{ url('disciplinas') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="nome" required>
    <input type="number" name="carga_horaria" placeholder="carga_horaria" required>
    <input type="text" name="codigo" placeholder="codigo" required>

    <button type="submit">Criar Disciplina</button>
</form>
@endsection