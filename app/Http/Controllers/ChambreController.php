<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use App\Models\Etage;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    public function index()
    {
        $chambres = Chambre::with('etage')->get();
        return view('chambres.index', compact('chambres'));
    }

    public function create()
    {
        $etages = Etage::all();
        return view('chambres.create', compact('etages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero_chambre' => 'required|unique:chambres,numero_chambre',
            'type_chambre' => 'required',
            'capacite' => 'required|integer',
            'prix_par_nuit' => 'required|numeric',
            'etat' => 'required',
            'id_etage' => 'required|exists:etages,id_etage'
        ]);

        Chambre::create($request->all());

        return redirect()->route('chambres.index')->with('success', 'Chambre ajoutée.');
    }

    public function edit($id)
    {
        $chambre = Chambre::findOrFail($id);
        $etages = Etage::all();
        return view('chambres.edit', compact('chambre', 'etages'));
    }

    public function update(Request $request, $id)
    {
        $chambre = Chambre::findOrFail($id);

        $request->validate([
            'numero_chambre' => 'required|unique:chambres,numero_chambre,' . $id . ',id_chambre',
            'type_chambre' => 'required',
            'capacite' => 'required|integer',
            'prix_par_nuit' => 'required|numeric',
            'etat' => 'required',
            'id_etage' => 'required|exists:etages,id_etage'
        ]);

        $chambre->update($request->all());

        return redirect()->route('chambres.index')->with('success', 'Chambre modifiée.');
    }

    public function destroy($id)
    {
        Chambre::destroy($id);
        return redirect()->route('chambres.index')->with('success', 'Chambre supprimée.');
    }
}
