@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Modifier le Restaurant</h1>

    <form action="{{ route('restaurants.update', $restaurant->id_restaurant) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-2">Nom</label>
            <input type="text" name="nom" value="{{ $restaurant->nom }}" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Type de Cuisine</label>
            <input type="text" name="type_cuisine" value="{{ $restaurant->type_cuisine }}" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Capacité</label>
            <input type="number" name="capacite" value="{{ $restaurant->capacite }}" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Horaires d'Ouverture</label>
            <input type="text" name="horaires_ouverture" value="{{ $restaurant->horaires_ouverture }}" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection
