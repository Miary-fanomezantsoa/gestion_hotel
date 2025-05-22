@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Modifier le Membre</h1>

        <form action="{{ route('personnels.update', $personnel->id_personnel) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block mb-2">Nom</label>
                <input type="text" name="nom" value="{{ $personnel->nom }}" required
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Prénom</label>
                <input type="text" name="prenom" value="{{ $personnel->prenom }}" required
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Poste</label>
                <input type="text" name="poste" value="{{ $personnel->poste }}" required
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Email</label>
                <input type="email" name="email" value="{{ $personnel->email }}" required
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Téléphone</label>
                <input type="text" name="telephone" value="{{ $personnel->telephone }}" required
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Date d'embauche</label>
                <input type="date" name="date_embauche" value="{{ $personnel->date_embauche }}" required
                    class="w-full p-2 border border-gray-300 rounded">
            </div>


            <div class="mb-4">
                <label class="block mb-2">Salaire</label>
                <input type="number" name="salaire" value="{{ $personnel->salaire }}" step="0.01" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label class="block mb-2">Département</label>
                <select name="departement" required class="w-full p-2 border border-gray-300 rounded">
                    @foreach($departements as $departement)
                        <option value="{{ $departement }}" {{ $personnel->departement == $departement ? 'selected' : '' }}>
                            {{ $departement }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
        </form>
    </div>
@endsection
