@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Liste des Clients</h1>

    <a href="{{ route('clients.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        Ajouter un Client
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border">Nom</th>
                    <th class="py-2 px-4 border">Prénom</th>
                    <th class="py-2 px-4 border">Email</th>
                    <th class="py-2 px-4 border">Téléphone</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td class="py-2 px-4 border">{{ $client->nom }}</td>
                    <td class="py-2 px-4 border">{{ $client->prenom }}</td>
                    <td class="py-2 px-4 border">{{ $client->email }}</td>
                    <td class="py-2 px-4 border">{{ $client->telephone }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('clients.edit', $client) }}" class="text-blue-600">Modifier</a>
                        <form action="{{ route('clients.destroy', $client) }}" method="POST" class="inline">
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
