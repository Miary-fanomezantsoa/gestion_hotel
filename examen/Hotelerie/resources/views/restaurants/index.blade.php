@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Liste des Restaurants</h1>

    <a href="{{ route('restaurants.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        Ajouter un Restaurant
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border">Nom</th>
                    <th class="py-2 px-4 border">Type de Cuisine</th>
                    <th class="py-2 px-4 border">Capacité</th>
                    <th class="py-2 px-4 border">Horaires</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($restaurants as $restaurant)
                <tr>
                    <td class="py-2 px-4 border">{{ $restaurant->nom }}</td>
                    <td class="py-2 px-4 border">{{ $restaurant->type_cuisine }}</td>
                    <td class="py-2 px-4 border">{{ $restaurant->capacite }}</td>
                    <td class="py-2 px-4 border">{{ $restaurant->horaires_ouverture }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('restaurants.edit', ['id_restaurant' => $restaurant->id_restaurant]) }}" class="text-blue-600">Modifier</a>
                        <form action="{{ route('restaurants.destroy', ['id_restaurant' => $restaurant->id_restaurant]) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 ml-2">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
