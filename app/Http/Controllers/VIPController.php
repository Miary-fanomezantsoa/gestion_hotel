<?php

namespace App\Http\Controllers;

use App\Models\VIP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VIPController extends Controller
{

    public function index()
    {
        $VIP = VIP::all(); 
        return view('VIP.VIP', compact('VIP'));
    }

    public function create()
    {
        return view('VIP.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|unique:table_private,email',
            'birth_date'   => 'required|date',
            'gender'       => 'required|in:male,female,other',
            'phone_number' => 'nullable|string|max:20',
            'address'      => 'nullable|string',
        ]);

        VIP::create($validated);
        return redirect()->route('VIP.index')->with('success', 'Utilisateur créé avec succès.');
    }

    public function show($VIP)
    {
        return view('VIP.show', compact('VIP'));
    }

   public function edit($id)
    {
        $VIP = VIP::findOrFail($id);
        return view('VIP.edit', compact('VIP'));
    }



    /**
     * Met à jour les données d’un utilisateur.
     */
    public function update(Request $request, $id)
    {
        $VIP = VIP::findOrFail($id);

        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|unique:table_private,email,' . $id,
            'birth_date'   => 'required|date',
            'gender'       => 'required|in:Homme,Femme,Autre',
            'phone_number' => 'nullable|string|max:20',
            'address'      => 'nullable|string',
            'balance'      => 'nullable|numeric|min:0',
        ]);

        $VIP->update($validated);

        return redirect()->route('VIP.index')->with('success', 'Utilisateur mis à jour.');
    }

    public function destroy(VIP $VIP)
{
    $VIP->delete();
    return redirect()->route('VIP.index')->with('success', 'Utilisateur supprimé.');
}


}
