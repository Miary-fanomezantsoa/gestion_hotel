@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-12 p-8 bg-white rounded-xl shadow-lg ring-1 ring-gray-200">
    <h2 class="text-3xl font-extrabold text-indigo-700 mb-8 text-center">Ajouter un étage</h2>

    <form action="{{ route('etages.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="nom_etage" class="block text-gray-700 font-semibold mb-2">Nom de l'étage</label>
            <input type="text" name="nom_etage" id="nom_etage" required
                class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       transition duration-300" />
        </div>

        <div>
            <label for="niveau" class="block text-gray-700 font-semibold mb-2">Niveau</label>
            <input type="number" name="niveau" id="niveau" required
                class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       transition duration-300" />
        </div>

        <div>
            <label for="capacite_max" class="block text-gray-700 font-semibold mb-2">Capacité maximale</label>
            <input type="number" name="capacite_max" id="capacite_max" required
                class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       transition duration-300" />
        </div>

        <div>
            <label for="acces_handicape" class="block text-gray-700 font-semibold mb-2">Accès handicapé ?</label>
            <select name="acces_handicape" id="acces_handicape"
                class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       transition duration-300">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
        </div>

        <div>
            <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
            <textarea name="description" id="description" rows="4"
                class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       transition duration-300"></textarea>
        </div>

        <button type="submit"
            class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md
                   hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500
                   focus:ring-offset-2 transition duration-300">
            Créer
        </button>
    </form>
</div>
@endsection
