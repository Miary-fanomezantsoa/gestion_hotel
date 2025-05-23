@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold text-center mb-6 text-indigo-700">Liste des chambres</h1>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded shadow">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-end mb-4">
        <a href="{{ route('chambres.create') }}"
           class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
            Ajouter une chambre
        </a>
    </div>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full border-collapse border border-gray-200">
            <thead class="bg-indigo-100">
                <tr>
                    <th class="border px-4 py-2 text-left">Numéro</th>
                    <th class="border px-4 py-2 text-left">Type</th>
                    <th class="border px-4 py-2 text-left">Capacité</th>
                    <th class="border px-4 py-2 text-left">Prix/Nuit</th>
                    <th class="border px-4 py-2 text-left">État</th>
                    <th class="border px-4 py-2 text-left">Étage</th>
                    <th class="border px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chambres as $chambre)
                    <tr class="hover:bg-gray-50">
                        <td class="border px-4 py-2">{{ $chambre->numero_chambre }}</td>
                        <td class="border px-4 py-2">{{ $chambre->type_chambre }}</td>
                        <td class="border px-4 py-2">{{ $chambre->capacite }}</td>
                        <td class="border px-4 py-2">{{ number_format($chambre->prix_par_nuit, 0, ',', ' ') }} Ar</td>
                        <td class="border px-4 py-2">{{ $chambre->etat }}</td>
                        <td class="border px-4 py-2">
                            {{ $chambre->etage->nom_etage ?? 'Non défini' }} (Niv. {{ $chambre->etage->niveau ?? '?' }})
                        </td>
                        <td class="border px-4 py-2 space-x-2">
                            <a href="{{ route('chambres.edit', $chambre->id_chambre) }}"
                               class="text-blue-600 hover:text-blue-800 font-semibold">Modifier</a>

                            <form action="{{ route('chambres.destroy', $chambre->id_chambre) }}"
                                  method="POST" class="inline-block"
                                  onsubmit="return confirm('Supprimer cette chambre ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-red-600 hover:text-red-800 font-semibold">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($chambres->isEmpty())
                    <tr>
                        <td colspan="7" class="text-center py-4 text-gray-500">
                            Aucune chambre enregistrée.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
