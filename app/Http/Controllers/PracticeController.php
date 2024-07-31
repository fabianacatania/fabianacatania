<?php


// app/Http/Controllers/PracticeController.php
namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index()
    {
        $practices = Practice::all();
        return view('practices.index', compact('practices'));
    }

    public function create()
    {
        return view('practices.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero_pratica' => 'required|unique:practices',
            'nome' => 'required',
            'cognome' => 'required',
            'cuaa' => 'required',
        ]);

        Practice::create($request->all());
        return redirect()->route('practices.index')->with('success', 'Pratica inserita con successo');
    }

    public function show($id)
    {
        $practice = Practice::findOrFail($id);
        return view('practices.show', compact('practice'));
    }

    public function edit($id)
    {
        $practice = Practice::findOrFail($id);
        return view('practices.edit', compact('practice'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'numero_pratica' => 'required',
            'nome' => 'required',
            'cognome' => 'required',
            'cuaa' => 'required',
        ]);

        $practice = Practice::findOrFail($id);
        $practice->update($request->all());
        return redirect()->route('practices.index')->with('success', 'Pratica aggiornata con successo');
    }

    public function destroy($id)
    {
        $practice = Practice::findOrFail($id);
        $practice->delete();
        return redirect()->route('practices.index')->with('success', 'Pratica eliminata con successo');
    }
}




