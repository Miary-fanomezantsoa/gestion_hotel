@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-12 p-8 bg-white rounded-xl shadow-lg ring-1 ring-gray-200">
    <h2 class="text-3xl font-extrabold text-indigo-700 mb-8 text-center">Modifier la chambre</h2>

    <form action="{{ route('chambres.update', $chambre->id_chambre) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="numero_chambre" class="block text-gray-700 font-semibold mb-2">Numéro de chambre</label>
            <input type="text" name="numero_chambre" id="numero_chambre" value="{{ old('numero_chambre', $chambre->numero_chambre) }}" required
                class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       transition duration-300" />
        </div>

        <div>
            <label for="type_chambre" class="block text-gray-700 font-semibold mb-2">Type de chambre</label>
            <input type="text" name="type_chambre" id="type_chambre" value="{{ old('type_chambre', $chambre->type_chambre) }}" required
                class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       transition duration-300" />
        </div>

        <div>
            <label for="capacite" class="block text-gray-700 font-semibold mb-2">Capacité</label>
            <input type="number" name="capacite" id="capacite" value="{{ old('capacite', $chambre->capacite) }}" required
                class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       transition duration-300" />
        </div>

        <div>
            <label for="prix_par_nuit" class="block text-gray-700 font-semibold mb-2">Prix par nuit</label>
            <input type="number" step="0.01" name="prix_par_nuit" id="prix_par_nuit" value="{{ old('prix_par_nuit', $chambre->prix_par_nuit) }}" required
                class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       transition duration-300" />
        </div>

        <div>
            <label for="etat" class="block text-gray-700 font-semibold mb-2">État</label>
            <select name="etat" id="etat" required
                class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       transition duration-300">
                <option value="libre" {{ old('etat', $chambre->etat) == 'libre' ? 'selected' : '' }}>Libre</option>
                <option value="occupée" {{ old('etat', $chambre->etat) == 'occupée' ? 'selected' : '' }}>Occupée</option>
                <option value="en nettoyage" {{ old('etat', $chambre->etat) == 'en nettoyage' ? 'selected' : '' }}>En nettoyage</option>
            </select>
        </div>

        <div>
            <label for="id_etage" class="block text-gray-700 font-semibold mb-2">Étage</label>
            <select name="id_etage" id="id_etage" required
                class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       transition duration-300">
                @foreach($etages as $etage)
                    <option value="{{ $etage->id_etage }}" {{ $chambre->id_etage == $etage->id_etage ? 'selected' : '' }}>
                        {{ $etage->nom_etage }} (Niveau {{ $etage->niveau }})
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit"
            class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md
                   hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500
                   focus:ring-offset-2 transition duration-300">
            Enregistrer les modifications
        </button>
    </form>
</div>
@endsection
