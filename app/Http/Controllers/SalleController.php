<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function index()
    {
        $salles = Salle::all();
        return view('salles.index', compact('salles'));
    }

    public function create()
    {
        return view('salles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
            'nbrPersonne' => 'required|integer',
            'description' => 'nullable|string',
            'prix' => 'required|numeric',
            'disponible' => 'required|boolean',
        ]);

        Salle::create($validated);
        return redirect()->route('salles.index')->with('success', 'Salle ajoutée avec succès.');
    }

    public function show(Salle $salle)
    {
        return view('salles.show', compact('salle'));
    }

    public function edit(Salle $salle)
    {
        return view('salles.edit', compact('salle'));
    }

    public function update(Request $request, Salle $salle)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
            'nbrPersonne' => 'required|integer',
            'description' => 'nullable|string',
            'prix' => 'required|numeric',
            'disponible' => 'required|boolean',
        ]);

        $salle->update($validated);
        return redirect()->route('salles.index')->with('success', 'Salle mise à jour.');
    }

    public function destroy(Salle $salle)
    {
        $salle->delete();
        return redirect()->route('salles.index')->with('success', 'Salle supprimée.');
    }
}
