<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProfessorController extends Controller
{
    public function index()
    {
        $professors = Professor::all();
        return view('professors.index', compact('professors'));
    }
    
    public function create()
    {
        Gate::authorize('create',Professor::class);

        return view('professors.create');
    }
    
    public function store(Request $request)
    {
        Professor::create($request->all());
        return redirect('professors')->with('success', 'Professor created successfully.');
    }
    
    public function edit($id)
    {
        Gate::authorize('update',Professor::class);

        $professor = Professor::findOrFail($id);
        return view('professors.edit', compact('professor'));
    }
    
    public function update(Request $request, $id)
    {
        $professor = Professor::findOrFail($id);
        $professor->update($request->all());
        return redirect('professors')->with('success', 'Professor updated successfully.');
    }
    
    public function destroy($id)
    {
        Gate::authorize('delete',Professor::class);

        $professor = Professor::findOrFail($id);
        $professor->delete();
        return redirect('professors')->with('success', 'Professor deleted successfully.');
    }
}
