<?php

namespace App\Http\Controllers;

use App\Models\SalleSport;
use Illuminate\Http\Request;

class SalleSportController extends Controller
{
    /**
     * Afficher la liste des salles de sport.
     */
    public function index()
    {
        $sallesSport = SalleSport::all();
        return view('sallesSport.index', compact('sallesSport'));
    }

    /**
     * Afficher le formulaire de création.
     */
    public function create()
    {
        return view('sallesSport.create');
    }

    /**
     * Enregistrer une nouvelle salle de sport.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'capacite' => 'required|integer|min:1',
            'equipements' => 'nullable|string',
            'disponible' => 'required|boolean',
        ]);

        SalleSport::create($request->all());

        return redirect()->route('sallesSport.index')->with('success', 'Salle ajoutée avec succès.');
    }

    /**
     * Afficher le formulaire d’édition d’une salle.
     */
    public function edit(SalleSport $sallesSport)
    {
        return view('sallesSport.edit', compact('sallesSport'));
    }

    /**
     * Mettre à jour une salle.
     */
    public function update(Request $request, SalleSport $sallesSport)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'capacite' => 'required|integer|min:1',
            'equipements' => 'nullable|string',
            'disponible' => 'required|boolean',
        ]);

        $sallesSport->update($request->all());

        return redirect()->route('sallesSport.index')->with('success', 'Salle mise à jour.');
    }

    /**
     * Supprimer une salle.
     */
    public function destroy(SalleSport $sallesSport)
    {
        $sallesSport->delete();

        return redirect()->route('sallesSport.index')->with('success', 'Salle supprimée.');
    }
}
