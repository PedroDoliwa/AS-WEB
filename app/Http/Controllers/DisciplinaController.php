<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas = Disciplina::all();
        return view('disciplinas.index', compact('disciplinas'));
    }
    
    public function create()
    {
        Gate::authorize('create',Disciplina::class);

        return view('disciplinas.create');
    }
    
    public function store(Request $request)
    {
        Disciplina::create($request->all());
        return redirect('disciplinas')->with('success', 'Disciplina created successfully.');
    }
    
    public function edit($id)
    {
        Gate::authorize('uptade',Disciplina::class);

        $disciplina = Disciplina::findOrFail($id);
        return view('disciplinas.edit', compact('disciplina'));
    }
    
    public function update(Request $request, $id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->update($request->all());
        return redirect('disciplinas')->with('success', 'Disciplina updated successfully.');
    }
    
    public function destroy($id)
    {
        Gate::authorize('delete',Disciplina::class);

        $disciplina = Disciplina::findOrFail($id);
        $disciplina->delete();
        return redirect('disciplinas')->with('success', 'Disciplina deleted successfully.');
    }
}
