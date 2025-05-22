@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Liste du Personnel</h1>

    <a href="{{ route('personnels.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        Ajouter un Membre
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border">Nom</th>
                    <th class="py-2 px-4 border">Prénom</th>
                    <th class="py-2 px-4 border">Poste</th>
                    <th class="py-2 px-4 border">Salaire</th>
                    <th class="py-2 px-4 border">Département</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personnels as $personnel)
                <tr>
                    <td class="py-2 px-4 border">{{ $personnel->nom }}</td>
                    <td class="py-2 px-4 border">{{ $personnel->prenom }}</td>
                    <td class="py-2 px-4 border">{{ $personnel->poste }}</td>
                    <td class="py-2 px-4 border">{{ number_format($personnel->salaire, 2) }} €</td>
                    <td class="py-2 px-4 border">{{ $personnel->departement }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('personnels.edit', $personnel->id_personnel) }}" class="text-blue-600">Modifier</a>
                        <form action="{{ route('personnels.destroy', $personnel->id_personnel) }}" method="POST" class="inline">
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
