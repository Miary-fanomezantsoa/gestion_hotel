<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

class PersonnelController extends Controller
{
    public function index()
    {
        $personnels = Personnel::all();
        return view('personnels.index', compact('personnels')); // Notez 'personnel' au singulier
    }

    public function create()
    {
        $departements = Personnel::DEPARTEMENTS;
        return view('personnels.create', compact('departements'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'poste' => 'required|string|max:100',
            'email' => 'required|email|unique:personnel',
            'telephone' => 'required|string|max:20',
            'date_embauche' => 'required|date',
            'salaire' => 'nullable|numeric',
            'departement' => 'required|string'
        ]);

        Personnel::create($validated);
        return redirect()->route('personnels.index');
    }

    public function edit($id_personnel)
    {
        $personnel = Personnel::findOrFail($id_personnel);
        $departements = Personnel::DEPARTEMENTS;
        return view('personnels.edit', compact('personnel', 'departements'));
    }

    public function update(Request $request, $id_personnel)
    {
        $personnel = Personnel::findOrFail($id_personnel);
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'poste' => 'required|string|max:100',
            'email' => 'required|email|unique:personnel,email,' . $id_personnel . ',id_personnel',
            'telephone' => 'required|string|max:20',
            'date_embauche' => 'required|date',
            'salaire' => 'nullable|numeric',
            'departement' => 'required|string'
        ]);

        $personnel->update($validated);
        return redirect()->route('personnels.index');
    }

    public function destroy($id_personnel)
    {
        $personnel = Personnel::findOrFail($id_personnel);
        $personnel->delete();
        return redirect()->route('personnels.index');
    }
}
