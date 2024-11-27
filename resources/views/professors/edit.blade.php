@extends('layouts.base')

@section('conteudo')
<form action="{{ url('professors/'.$professor->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" placeholder="nome" value="{{ $professor->nome }}" required>
    <input type="text" name="especialidade" placeholder="especialidade" value="{{ $professor->especialidade }}" required>
    <input type="text" name="email" placeholder="email" value="{{ $professor->email }}" required>

    <button type="submit">Editar Professor</button>
</form>
@endsection