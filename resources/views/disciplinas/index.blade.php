@extends('layouts.base')

@section('conteudo')
<div class="flex items-start">
        <div class="py-8 mb-5 p-20">
            <a href="{{url(path: 'disciplinas/create')}}"  class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Criar Disciplinas</a>
        </div>
    </div>

@foreach($disciplinas as $entity)
    <div>
        <h3>{{ $entity->nome }}</h3>
        <p>{{ $entity->carga_horaria }}</p>
        <p>{{ $entity->codigo }}</p>
        <a href="{{ url('disciplinas/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('disciplinas/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
@endsection