@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<h2>Liste des salles</h2>

<form action="{{ route('salles.create') }}" method="GET">
    <button type="submit" class="btn">Nouvelle salle</button>
</form>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table>
    <tr>
        <th>Nom</th>
        <th>Capacité</th>
        <th>Prix</th>
        <th>Disponible</th>
        <th>Actions</th>
    </tr>
    @foreach ($salles as $salle)
        <tr>
            <td>{{ $salle->nom }}</td>
            <td>{{ $salle->nbrPersonne }}</td>
            <td>{{ $salle->prix }} Ar</td>
            <td>{{ $salle->disponible ? 'Oui' : 'Non' }}</td>
            <td style="display: flex; gap: 5px;">
                <form action="{{ route('salles.show', $salle) }}" method="GET">
                    <button type="submit" class="btn">Voir</button>
                </form>
                <form action="{{ route('salles.edit', $salle) }}" method="GET">
                    <button type="submit" class="btn">Modifier</button>
                </form>
                <form method="POST" action="{{ route('salles.destroy', $salle) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Supprimer cette salle ?')">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
=======
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Liste des salles</h2>
    <form action="{{ route('salles.create') }}" method="GET" class="mb-4">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Nouvelle salle</button>
    </form>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">{{ session('success') }}</div>
    @endif
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border">Nom</th>
                    <th class="py-2 px-4 border">Capacité</th>
                    <th class="py-2 px-4 border">Prix</th>
                    <th class="py-2 px-4 border">Disponible</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($salles as $salle)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border">{{ $salle->nom }}</td>
                        <td class="py-2 px-4 border">{{ $salle->nbrPersonne }}</td>
                        <td class="py-2 px-4 border">{{ $salle->prix }} Ar</td>
                        <td class="py-2 px-4 border">{{ $salle->disponible ? 'Oui' : 'Non' }}</td>
                        <td class="py-2 px-4 border">
                            <div class="flex gap-2">
                                <form action="{{ route('salles.show', $salle) }}" method="GET">
                                    <button type="submit" class="text-blue-500 hover:text-blue-700">Voir</button>
                                </form>
                                <form action="{{ route('salles.edit', $salle) }}" method="GET">
                                    <button type="submit" class="text-yellow-500 hover:text-yellow-700">Modifier</button>
                                </form>
                                <form method="POST" action="{{ route('salles.destroy', $salle) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Supprimer cette salle ?')">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
>>>>>>> e925d63 (Sauvegarde avant pull)
