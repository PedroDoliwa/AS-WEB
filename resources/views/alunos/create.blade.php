@extends('layouts.base')

@section('conteudo')
<form action="{{ url('alunos') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="nome" required>
    <input type="text" name="matricula" placeholder="matricula" required>
    <input type="text" name="email" placeholder="email" required>

    <button type="submit">Criar Aluno</button>
</form>
@endsection