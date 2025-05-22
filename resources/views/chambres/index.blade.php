@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-extrabold text-gray-800">🛏️ Liste des chambres</h2>
        <a href="{{ route('chambres.create') }}" class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-5 py-2.5 rounded-lg shadow transition duration-200">
            ➕ Ajouter une chambre
        </a>
    </div>

    <div class="overflow-x-auto bg-white shadow-lg rounded-xl">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-100 text-gray-700 text-sm uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4 text-left font-semibold">Numéro</th>
                    <th class="px-6 py-4 text-left font-semibold">Étage</th>
                    <th class="px-6 py-4 text-left font-semibold">Disponibilité</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 bg-white text-gray-800 text-sm">
                @foreach ($chambres as $chambre)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">{{ $chambre->numero }}</td>
                        <td class="px-6 py-4">{{ $chambre->etage->numero ?? 'N/A' }}</td>
                        <td class="px-6 py-4">
                            @if ($chambre->disponible)
                                <span class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Disponible</span>
                            @else
                                <span class="inline-block px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">Occupée</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
