@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Ajouter un Membre</h1>

        <form action="{{ route('personnels.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block mb-2">Nom</label>
                <input type="text" name="nom" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Prénom</label>
                <input type="text" name="prenom" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Poste</label>
                <input type="text" name="poste" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Email</label>
                <input type="email" name="email" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Téléphone</label>
                <input type="text" name="telephone" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Date d'embauche</label>
                <input type="date" name="date_embauche" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Salaire</label>
                <input type="number" name="salaire" step="0.01" class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Département</label>
                <select name="departement" required class="w-full p-2 border border-gray-300 rounded">
                    @foreach($departements as $departement)
                        <option value="{{ $departement }}">{{ $departement }}</option>
                    @endforeach
                </select>
            </div>



            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enregistrer</button>
        </form>
    </div>
@endsection
