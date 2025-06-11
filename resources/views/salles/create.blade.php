@extends('layouts.app')

@section('content')
<<<<<<< HEAD
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
=======
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Nouvelle salle</h2>
    <form action="{{ route('salles.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom :</label>
            <input type="text" name="nom" id="nom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="nbrPersonne" class="block text-gray-700 text-sm font-bold mb-2">Nombre de personnes :</label>
            <input type="number" name="nbrPersonne" id="nbrPersonne" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="prix" class="block text-gray-700 text-sm font-bold mb-2">Prix :</label>
            <input type="number" step="0.01" name="prix" id="prix" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description :</label>
            <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <div class="mb-4">
            <label for="disponible" class="block text-gray-700 text-sm font-bold mb-2">Disponible :</label>
            <select name="disponible" id="disponible" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer</button>
    </form>
    <form action="{{ route('salles.index') }}" method="GET">
        <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Listes des salles</button>
    </form>
</div>
@endsection
>>>>>>> e925d63 (Sauvegarde avant pull)
