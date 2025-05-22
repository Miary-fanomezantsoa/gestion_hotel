@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Ajouter une chambre</h2>

    <form action="{{ route('chambres.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md space-y-6">
        @csrf

        <!-- Numéro de la chambre -->
        <div>
            <label for="numero" class="block text-sm font-medium text-gray-700 mb-1">Numéro de la chambre</label>
            <input type="text" name="numero" id="numero" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Étages -->
        <div>
            <label for="etage_id" class="block text-sm font-medium text-gray-700 mb-1">Étage</label>
            <select name="etage_id" id="etage_id" class="w-full border border-gray-300 rounded-md px-4 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                @foreach($etages as $etage)
                    <option value="{{ $etage->id }}">{{ $etage->numero }}</option>
                @endforeach
            </select>
        </div>

        <!-- Disponible -->
        <div class="flex items-center space-x-2">
            <input type="checkbox" name="disponible" id="disponible" class="h-5 w-5 text-blue-600 border-gray-300 rounded" checked>
            <label for="disponible" class="text-sm text-gray-700">Disponible</label>
        </div>

        <!-- Bouton d'ajout -->
        <div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md shadow hover:bg-blue-700 transition">
                Ajouter
            </button>
        </div>
    </form>
</div>
@endsection
