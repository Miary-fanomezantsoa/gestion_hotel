<?php

namespace App\Http\Controllers;
use App\Models\Chambre;
use App\Models\Etage;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chambres = Chambre::all();
        return view('chambres.index', compact('chambres'));
    }

        public function create()
    {
        $etages = Etage::all();
        return view('chambres.create', compact('etages'));
    }

  
    public function store(Request $request)
    {
        
    {
        $request->validate([
            'numero_chambre' => 'required',
            'id_etage' => 'required|exists:etages,id_etage',
        ]);

        Chambre::create($request->all());

        return redirect()->route('chambres.index')->with('success', 'Chambre créée avec succès.');
    }
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
