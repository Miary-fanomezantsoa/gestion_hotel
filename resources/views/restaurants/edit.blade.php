@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-12">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-2">Modifier le Restaurant</h1>
                <a href="{{ route('restaurants.index') }}"
                   class="bg-gradient-to-r from-gray-600 to-gray-700 hover:from-gray-700 hover:to-gray-800 text-black px-6 py-3 rounded-lg font-semibold shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                    ← Retour à la liste
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-8">
            <form action="{{ route('restaurants.update', $restaurant->id_restaurant) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nom du Restaurant</label>
                        <input type="text" name="nom" value="{{ $restaurant->nom }}" required
                               class="w-full p-4 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Type de Cuisine</label>
                        <input type="text" name="type_cuisine" value="{{ $restaurant->type_cuisine }}" required
                               class="w-full p-4 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Capacité</label>
                        <input type="number" name="capacite" value="{{ $restaurant->capacite }}" required
                               class="w-full p-4 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Horaires d'Ouverture</label>
                        <input type="text" name="horaires_ouverture" value="{{ $restaurant->horaires_ouverture }}" required
                               class="w-full p-4 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                    </div>
                </div>

                <div class="flex justify-end space-x-4 pt-6">
                    <a href="{{ route('restaurants.index') }}"
                       class="bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-black px-8 py-3 rounded-lg font-bold shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                        Annuler
                    </a>
                    <button type="submit"
                            class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-black px-8 py-3 rounded-lg font-bold shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                        Mettre à jour
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
