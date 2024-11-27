@extends('layouts.base')

@section('conteudo')
<form action="{{ url('alunos/'.$aluno->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" placeholder="nome" value="{{ $aluno->nome }}" required>
    <input type="text" name="matricula" placeholder="matricula" value="{{ $aluno->matricula }}" required>
    <input type="text" name="email" placeholder="email" value="{{ $aluno->email }}" required>

    <button type="submit">Editar Aluno</button>
</form>
@endsection