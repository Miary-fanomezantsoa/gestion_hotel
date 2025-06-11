@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Liste des Salles de Sport</h1>

    <a href="{{ route('sallesSport.create') }}" class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">Ajouter une Salle</a>

    <table class="w-full border border-gray-300 mt-4">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">Nom</th>
                <th class="p-2 border">Capacité</th>
                <th class="p-2 border">Équipements</th>
                <th class="p-2 border">Disponible</th>
                <th class="p-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sallesSport as $salle)
                <tr class="text-center">
                    <td class="p-2 border">{{ $salle->nom }}</td>
                    <td class="p-2 border">{{ $salle->capacite }}</td>
                    <td class="p-2 border">{{ $salle->equipements }}</td>
                    <td class="p-2 border">{{ $salle->disponible ? 'Oui' : 'Non' }}</td>
                    <td class="p-2 border">
                        <a href="{{ route('sallesSport.edit', $salle->id) }}" class="text-blue-500 hover:underline">Modifier</a>
                        <form action="{{ route('sallesSport.destroy', $salle->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline ml-2">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
