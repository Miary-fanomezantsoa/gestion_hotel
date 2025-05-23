@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<h2>Nouvelle salle</h2>

<form action="{{ route('salles.store') }}" method="POST">
    @csrf

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom">

    <label for="nbrPersonne">Nombre de personnes :</label>
    <input type="number" name="nbrPersonne" id="nbrPersonne">

    <label for="prix">Prix :</label>
    <input type="number" step="0.01" name="prix" id="prix">

    <label for="description">Description :</label>
    <textarea name="description" id="description"></textarea>

    <label for="disponible">Disponible :</label>
    <select name="disponible" id="disponible">
        <option value="1">Oui</option>
        <option value="0">Non</option>
    </select>

    <button type="submit">Enregistrer</button>
</form>
<form action="{{ route('salles.index') }}" method="GET">
    <button type="submit" class="btn">Listes des salles</button>
</form>
@endsection