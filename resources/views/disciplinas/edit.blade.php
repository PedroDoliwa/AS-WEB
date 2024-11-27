@extends('layouts.base')

@section('conteudo')

<form action="{{ url('disciplinas/'.$disciplina->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" placeholder="nome" value="{{ $disciplina->nome }}" required>
    <input type="number" name="carga_horaria" placeholder="carga_horaria" value="{{ $disciplina->carga_horaria  }}" required>
    <input type="text" name="codigo" placeholder="codigo" value="{{ $disciplina->codigo  }}" required>

    <button type="submit">Editar Disciplina</button>
</form>
@endsection