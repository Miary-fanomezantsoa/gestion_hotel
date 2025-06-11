@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<h2>Modifier la salle</h2>

<form action="{{ route('salles.update', $salle) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nom :</label>
    <input type="text" name="nom" value="{{ $salle->nom }}">

    <label>Nombre de personnes :</label>
    <input type="number" name="nbrPersonne" value="{{ $salle->nbrPersonne }}">

    <label>Prix :</label>
    <input type="number" step="0.01" name="prix" value="{{ $salle->prix }}">

    <label>Description :</label>
    <textarea name="description">{{ $salle->description }}</textarea>

    <label>Disponible :</label>
    <select name="disponible">
        <option value="1" {{ $salle->disponible ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ !$salle->disponible ? 'selected' : '' }}>Non</option>
    </select>

    <button type="submit">Mettre à jour</button>
</form>
@endsection
=======
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Modifier la salle</h2>
    <form action="{{ route('salles.update', $salle) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom :</label>
            <input type="text" name="nom" id="nom" value="{{ $salle->nom }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="nbrPersonne" class="block text-gray-700 text-sm font-bold mb-2">Nombre de personnes :</label>
            <input type="number" name="nbrPersonne" id="nbrPersonne" value="{{ $salle->nbrPersonne }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="prix" class="block text-gray-700 text-sm font-bold mb-2">Prix :</label>
            <input type="number" step="0.01" name="prix" id="prix" value="{{ $salle->prix }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description :</label>
            <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $salle->description }}</textarea>
        </div>
        <div class="mb-4">
            <label for="disponible" class="block text-gray-700 text-sm font-bold mb-2">Disponible :</label>
            <select name="disponible" id="disponible" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="1" {{ $salle->disponible ? 'selected' : '' }}>Oui</option>
                <option value="0" {{ !$salle->disponible ? 'selected' : '' }}>Non</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Mettre à jour</button>
    </form>
    <a href="{{ route('salles.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Retour</a>
</div>
@endsection
>>>>>>> e925d63 (Sauvegarde avant pull)
