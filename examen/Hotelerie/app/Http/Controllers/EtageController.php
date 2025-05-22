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
            'nom_etage' => 'required',
            'niveau' => 'required|integer',
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
