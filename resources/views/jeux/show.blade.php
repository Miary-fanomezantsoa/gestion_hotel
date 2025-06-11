@extends('layouts.app')

@section('content')
<h1>Détails de la partie #{{ $jeu->id }}</h1>
<style>


h1 {
    color: #ff4d4d;
    margin-bottom: 25px;
    text-align: center;
}

.details-card {
    background-color: #1c1c1c;
    padding: 25px;
    border-radius: 10px;
    max-width: 600px;
    margin: auto;
    box-shadow: 0 0 15px rgba(255, 77, 77, 0.3);
}

.details-card p {
    font-size: 16px;
    margin: 12px 0;
    border-bottom: 1px solid #333;
    padding-bottom: 8px;
}

.details-card span {
    color: #ff4d4d;
    font-weight: bold;
}

a.button {
    display: inline-block;
    background-color: #ff4d4d;
    color: #fff;
    padding: 10px 20px;
    border-radius: 6px;
    text-decoration: none;
    transition: background-color 0.3s;
    margin-top: 20px;
}

a.button:hover {
    background-color: #c62828;
}

</style>
<ul>
    <li>Nom du joueur: {{ $jeu->nom }}</li>
    <li>Type de jeu: {{ ucfirst(str_replace('_', ' ', $jeu->type_jeu)) }}</li>
    <li>Numéro joueur: {{ $jeu->num_joueur }}</li>
    <li>Résultat: {{ $jeu->resultat }}</li>
    <li>Gain: {{ $jeu->gain }}</li>
    <li>Perte: {{ $jeu->perte }}</li>
    <li>Temps de jeu: {{ $jeu->temps_jeu }} secondes</li>
    <li>Date: {{ $jeu->created_at->format('d/m/Y H:i:s') }}</li>
</ul>

<a href="{{ route('jeux.index') }}">Retour à la liste</a>
@endsection
