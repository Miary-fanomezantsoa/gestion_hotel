@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Ajouter une Salle de Sport</h1>

    <form action="{{ route('sallesSport.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-2">Nom</label>
            <input type="text" name="nom" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Capacité</label>
            <input type="number" name="capacite" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Équipements</label>
            <textarea name="equipements" class="w-full p-2 border border-gray-300 rounded"></textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-2">Disponible</label>
            <select name="disponible" class="w-full p-2 border border-gray-300 rounded">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection
