@extends('layouts.app')

@section('content')
<h1>Liste des parties jouées</h1>

@if(session('success'))
    <div style="color:green;">{{ session('success') }}</div>
@endif

<a href="{{ route('jeux.create') }}" class="btn-ajoute">Créer une nouvelle partie</a><br><br>

<style>
body {
    background-color: #0b0b0b;
    color: #f8f8f2;
    font-family: 'Segoe UI', sans-serif;
    padding: 20px;
}

h1 {
    color: #ffd700;
    margin-bottom: 20px;
    text-shadow: 1px 1px 2px #000;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #1a1a1a;
    border: 1px solid #333;
}

table th,
table td {
    padding: 12px;
    border: 1px solid #444;
    text-align: center;
}

table th {
    background-color: #2c2c2c;
    color: #ffd700;
    text-transform: uppercase;
    letter-spacing: 1px;
}

table tr:nth-child(even) {
    background-color: #141414;
}

table tr:hover {
    background-color: #222;
}



.btn-ajoute{
    display: inline-block;
    background-color: #00bcd4;
    color: #fff;
    padding: 6px 12px;
    border-radius: 5px;
    text-decoration: none;
    margin-right: 5px;
    transition: background-color 0.3s ease;
}

.pagination {
    margin-top: 20px;
    text-align: center;
}

.pagination a {
    background-color: #2c2c2c;
    margin: 0 5px;
    padding: 6px 12px;
    color: #ffd700;
    border-radius: 3px;
    text-decoration: none;
    border: 1px solid #444;
}

.pagination a:hover {
    background-color: #ffd700;
    color: #0b0b0b;
    font-weight: bold;
}

</style>
<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Type de jeu</th>
            <th>Num Joueur</th>
            <th>Résultat</th>
            <th>Gain</th>
            <th>Perte</th>
            <th>Temps de jeu (s)</th>
            <th>Date</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jeux as $jeu)
            <tr>
                <td>{{ $jeu->id }}</td>
                <td>{{ $jeu->nom }}</td>
                <td>{{ ucfirst(str_replace('_', ' ', $jeu->type_jeu)) }}</td>
                <td>{{ $jeu->num_joueur }}</td>
                <td>{{ $jeu->resultat }}</td>
                <td>{{ $jeu->gain }}</td>
                <td>{{ $jeu->perte }}</td>
                <td>{{ $jeu->temps_jeu }}</td>
                <td>{{ $jeu->created_at->format('d/m/Y H:i') }}</td>
                <td><a href="{{ route('jeux.show', $jeu->id) }}">Voir</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<h1>Les partis jouer et enregistrer ne peux pas être Modifier ou Supprimer</h1>
{{ $jeux->links() }}

@endsection
