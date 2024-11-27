<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AlunoController extends Controller
{
        public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        Gate::authorize('create',Aluno::class);
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        Aluno::create($request->all());
        return redirect('alunos')->with('success', 'Aluno created successfully.');
    }

    public function edit($id)
    {
        Gate::authorize('update',Aluno::class);

        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
        return redirect('alunos')->with('success', 'Aluno updated successfully.');
    }

    public function destroy($id)
    {
        Gate::authorize('delete',arguments: Aluno::class);

        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect('alunos')->with('success', 'Aluno deleted successfully.');
    }
}
