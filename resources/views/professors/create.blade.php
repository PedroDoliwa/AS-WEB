@extends('layouts.base')

@section('conteudo')
<form action="{{ url('professors') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="nome" required>
    <input type="text" name="especialidade" placeholder="especialidade" required>
    <input type="text" name="email" placeholder="email" required>

    <button type="submit">Criar Professor</button>
</form>
@endsection