<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etage;
use App\Models\Chambre;

class EtageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etages = Etage::all();
        return view('etages.index', compact('etages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nom_etage' => 'required|string|max:255',
        'description' => 'nullable|string',
        'niveau' => 'required|integer',
        'capacite_max' => 'required|integer',
        'acces_handicape' => 'required|boolean',
    ]);

    Etage::create($request->all());

    return redirect()->route('etages.index')->with('success', 'Étage créé avec succès.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Affiche le formulaire de modification
public function edit(string $id)
{
    $etage = Etage::findOrFail($id);
    return view('etages.edit', compact('etage'));
}

// Met à jour les données dans la base
public function update(Request $request, string $id)
{
    $request->validate([
        'nom_etage' => 'required|string|max:255',
        'niveau' => 'required|integer',
        'capacite_max' => 'required|integer',
        'acces_handicape' => 'required|boolean',
        'description' => 'nullable|string',
    ]);

    $etage = Etage::findOrFail($id);
    $etage->update($request->all());

    return redirect()->route('etages.index')->with('success', 'Étage mis à jour avec succès.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
