@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-12 px-4">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-4xl font-extrabold text-indigo-700">🗂️ Liste des étages</h2>
        <a href="{{ route('etages.create') }}"
           class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md
                  hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                  transition duration-300">
            ➕ Ajouter un étage
        </a>
    </div>

    <div class="overflow-x-auto bg-white rounded-xl shadow-lg ring-1 ring-gray-200">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-indigo-600 text-white text-sm uppercase tracking-wider">
                <tr>
                    <th class="px-8 py-4 text-left text-base font-semibold">Numéro d'étage</th>
                    <th class="px-8 py-4 text-left text-base font-semibold">Description</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-gray-800 text-base">
                @forelse ($etages as $etage)
                    <tr class="hover:bg-indigo-50 transition-colors duration-200">
                        <td class="px-8 py-5 whitespace-nowrap font-medium">{{ $etage->numero }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">{{ $etage->description ?? '—' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="py-10 text-center text-gray-400 italic text-lg">
                            Aucun étage disponible
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
