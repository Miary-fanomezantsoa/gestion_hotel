@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<h2>Détail de la salle</h2>

<p>Nom : {{ $salle->nom }}</p>
<p>Capacité : {{ $salle->nbrPersonne }}</p>
<p>Prix : {{ $salle->prix }} Ar</p>
<p>Description : {{ $salle->description }}</p>
<p>Disponible : {{ $salle->disponible ? 'Oui' : 'Non' }}</p>

<a href="{{ route('salles.index') }}">Retour</a>
@endsection
=======
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Détail de la salle</h2>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <p class="mb-2"><span class="font-semibold">Nom :</span> {{ $salle->nom }}</p>
        <p class="mb-2"><span class="font-semibold">Capacité :</span> {{ $salle->nbrPersonne }}</p>
        <p class="mb-2"><span class="font-semibold">Prix :</span> {{ $salle->prix }} Ar</p>
        <p class="mb-2"><span class="font-semibold">Description :</span> {{ $salle->description }}</p>
        <p class="mb-2"><span class="font-semibold">Disponible :</span> {{ $salle->disponible ? 'Oui' : 'Non' }}</p>
    </div>
    <a href="{{ route('salles.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Retour</a>
</div>
@endsection
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
>>>>>>> e925d63 (Sauvegarde avant pull)
