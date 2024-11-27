<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CursoController extends Controller
{
    public function index()
{
    $cursos = Curso::all();
    return view('cursos.index', compact('cursos'));
}

public function create()
{
    Gate::authorize('create',Curso::class);

    return view('cursos.create');
}

public function store(Request $request)
{
    Curso::create($request->all());
    return redirect('cursos')->with('success', 'Curso created successfully.');
}

public function edit($id)
{
    Gate::authorize('update',Curso::class);

    $curso = Curso::findOrFail($id);
    return view('cursos.edit', compact('curso'));
}

public function update(Request $request, $id)
{
    $curso = Curso::findOrFail($id);
    $curso->update($request->all());
    return redirect('cursos')->with('success', 'Curso updated successfully.');
}

public function destroy($id)
{
    Gate::authorize('delete',arguments: Curso::class);

    $curso = Curso::findOrFail($id);
    $curso->delete();
    return redirect('cursos')->with('success', 'Curso deleted successfully.');
}
}
