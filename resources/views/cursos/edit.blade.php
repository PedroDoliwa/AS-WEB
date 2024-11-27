@extends('layouts.base')

@section('conteudo')
<form action="{{ url('cursos/'.$curso->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" placeholder="nome" value="{{ $curso->nome }}" required>
    <input type="number" name="duracao" placeholder="duracao" value="{{ $curso->duracao }}" required>

    <button type="submit">Editar Curso</button>
</form>
@endsection