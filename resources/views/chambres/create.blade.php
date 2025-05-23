@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-12 p-8 bg-white rounded-xl shadow-lg ring-1 ring-gray-200">
    <h2 class="text-3xl font-extrabold text-indigo-700 mb-8 text-center">Ajouter une chambre</h2>

    <form action="{{ route('chambres.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="numero_chambre" class="block font-semibold text-gray-700">Numéro de chambre</label>
            <input type="text" name="numero_chambre" id="numero_chambre" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div>
            <label for="type_chambre" class="block font-semibold text-gray-700">Type de chambre</label>
            <select name="type_chambre" id="type_chambre" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">-- Choisir --</option>
                <option value="Simple">Simple</option>
                <option value="Double">Double</option>
                <option value="Suite">Suite</option>
            </select>
        </div>

        <div>
            <label for="capacite" class="block font-semibold text-gray-700">Capacité</label>
            <input type="number" name="capacite" id="capacite" required min="1"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div>
            <label for="prix_par_nuit" class="block font-semibold text-gray-700">Prix par nuit (Ar)</label>
            <input type="number" name="prix_par_nuit" id="prix_par_nuit" required min="0"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div>
            <label for="etat" class="block font-semibold text-gray-700">État</label>
            <select name="etat" id="etat" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">-- Choisir --</option>
                <option value="Disponible">Disponible</option>
                <option value="Occupée">Occupée</option>
                <option value="En maintenance">En maintenance</option>
            </select>
        </div>

        <div>
            <label for="id_etage" class="block font-semibold text-gray-700">Étage</label>
            <select name="id_etage" id="id_etage" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">-- Sélectionner un étage --</option>
                @foreach ($etages as $etage)
                    <option value="{{ $etage->id_etage }}">{{ $etage->nom_etage }} (Niveau {{ $etage->niveau }})</option>
                @endforeach
            </select>
        </div>

        <button type="submit"
            class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-300">
            Enregistrer la chambre
        </button>
    </form>
</div>
@endsection
