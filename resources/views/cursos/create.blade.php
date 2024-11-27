@extends('layouts.base')

@section('conteudo')
<form action="{{ url('cursos') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="nome" required>
    <input type="number" name="duracao" placeholder="duracao" required>

    <button type="submit">Criar Curso</button>
</form>
@endsection