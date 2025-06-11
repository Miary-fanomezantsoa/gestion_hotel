@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-green-50 to-emerald-100 py-12">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-2">Ajouter un Menu</h1>
                <a href="{{ route('menus.index') }}"
                   class="bg-gradient-to-r from-gray-600 to-gray-700 hover:from-gray-700 hover:to-gray-800 text-black px-6 py-3 rounded-lg font-semibold shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                    ← Retour à la liste
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-8">
            <form action="{{ route('menus.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nom du Menu</label>
                        <input type="text" name="nom" required
                               class="w-full p-4 border-2 border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-200">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Prix </label>
                        <input type="number" step="0.01" name="prix" required
                               class="w-full p-4 border-2 border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-200">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                        <textarea name="description" rows="4"
                                  class="w-full p-4 border-2 border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-200"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Catégorie</label>
                        <input type="text" name="categorie" required
                               class="w-full p-4 border-2 border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-200">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Disponible</label>
                        <select name="disponible"
                                class="w-full p-4 border-2 border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-200">
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Restaurant</label>
                        <select name="id_restaurant" required
                                class="w-full p-4 border-2 border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-200">
                            <option value="">Sélectionner un restaurant</option>
                            @foreach($restaurants as $restaurant)
                            <option value="{{ $restaurant->id_restaurant }}">{{ $restaurant->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex justify-end space-x-4 pt-6">
                    <a href="{{ route('menus.index') }}"
                       class="bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-black px-8 py-3 rounded-lg font-bold shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                        Annuler
                    </a>
                    <button type="submit"
                            class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-black px-8 py-3 rounded-lg font-bold shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
