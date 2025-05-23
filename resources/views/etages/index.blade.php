@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-12 p-8 bg-white rounded-xl shadow-lg ring-1 ring-gray-200">

    <h2 class="text-3xl font-extrabold text-indigo-700 mb-8 text-center">Liste des étages</h2>

    @if (session('success'))
        <div class="mb-6 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('etages.create') }}"
       class="mb-6 inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
       + Ajouter un étage
    </a>

    @if($etages->count() > 0)
    <table class="w-full table-auto border-collapse border border-gray-300">
        <thead>
            <tr class="bg-indigo-100 text-indigo-700">
                <th class="border border-gray-300 px-4 py-2">Nom étage</th>
                <th class="border border-gray-300 px-4 py-2">Niveau</th>
                <th class="border border-gray-300 px-4 py-2">Capacité max</th>
                <th class="border border-gray-300 px-4 py-2">Accès handicapé</th>
                <th class="border border-gray-300 px-4 py-2">Description</th>
                <th class="border border-gray-300 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($etages as $etage)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $etage->nom_etage }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $etage->niveau }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $etage->capacite_max }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        {{ $etage->acces_handicape ? 'Oui' : 'Non' }}
                    </td>
                    <td class="border border-gray-300 px-4 py-2">{{ Str::limit($etage->description, 50) }}</td>
                    <td class="border border-gray-300 px-4 py-2 space-x-2">
                        <a href="{{ route('etages.edit', $etage->id_etage) }}"
                           class="text-indigo-600 hover:text-indigo-900 font-semibold">Modifier</a>

                        <form action="{{ route('etages.destroy', $etage->id_etage) }}" method="POST" class="inline"
                              onsubmit="return confirm('Voulez-vous vraiment supprimer cet étage ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p class="text-center text-gray-500 mt-10">Aucun étage trouvé.</p>
    @endif
</div>
@endsection
