<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableJeu;
use Illuminate\Support\Facades\Session;

class JeuController extends Controller
{
    // Liste des jeux enregistrés
    public function index()
    {
        $jeux = TableJeu::orderBy('created_at', 'desc')->paginate(10);
        return view('jeux.index', compact('jeux'));
    }

    // Formulaire création nouvelle partie
    public function create()
    {
        $types_jeux = ['roulette', 'blackjack', 'machine_a_sous', 'poker']; // Exemple types
        return view('jeux.create', compact('types_jeux'));
    }

    // Stockage nouvelle partie et génération RNG
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
            'type_jeu' => 'required|string',
            'num_joueur' => 'required|integer',
            'temps_jeu' => 'required|integer|min:1',
        ]);

        // Génération aléatoire résultat 
        $resultats_possibles = ['gagné', 'perdu', 'nul'];
        $resultat = $resultats_possibles[array_rand($resultats_possibles)];

        // Calcul gains/pertes 
        $gain = 0;
        $perte = 0;
        if ($resultat == 'gagné') {
            $gain = rand(10, 100);
        } elseif ($resultat == 'perdu') {
            $perte = rand(10, 100);
        }

        $jeu = TableJeu::create([
            'nom' => $request->nom,
            'type_jeu' => $request->type_jeu,
            'num_joueur' => $request->num_joueur,
            'resultat' => $resultat,
            'gain' => $gain,
            'perte' => $perte,
            'temps_jeu' => $request->temps_jeu,
        ]);

        // Stockage historique en session (limité à 5 jours => on peut gérer date dans base)
        $historique = Session::get('historique_jeux', []);
        $historique[] = $jeu->toArray();
        Session::put('historique_jeux', $historique);

        return redirect()->route('jeux.index')->with('success', 'Partie enregistrée avec succès!');
    }


    public function show($id) // Details de le parti ou historique
    {
        $jeu = TableJeu::findOrFail($id);
        return view('jeux.show', compact('jeu'));
    }

    public function dashboard()
{
    $VIP = VIP::latest()->take(5)->get(); // Par exemple les 5 derniers
    $jeux = TableJeu::latest()->take(5)->get();

    return view('dashboard', compact('VIP', 'jeux'));
}
}


