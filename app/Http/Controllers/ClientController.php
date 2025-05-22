<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }
    public function create(){
        return view('clients.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'email' => 'required|email|unique:clients',
            'telephone' => 'required|string|max:20',
        ]);
        Client::create($validated);
        return redirect()->route('clients.index')->with('success', 'Client créé avec succès');
    }
    public function edit($id_client)
    {
        $client = Client::findOrFail($id_client);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id_client)
    {
        $client = Client::findOrFail($id_client);
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'email' => 'required|email|unique:clients,email,'.$id_client.',id_client',
            'telephone' => 'required|string|max:20'
        ]);
        $client->update($validated);
        return redirect()->route('clients.index');
    }
    public function destroy($id_client)
    {
        $client = Client::findOrFail($id_client);
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client supprimé avec succès');
    }
}
