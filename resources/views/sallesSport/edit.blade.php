@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Modifier la Salle de Sport</h1>

    <form action="{{ route('sallesSport.update', $sallesSport->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-2">Nom</label>
            <input type="text" name="nom" value="{{ $sallesSport->nom }}" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Capacité</label>
            <input type="number" name="capacite" value="{{ $sallesSport->capacite }}" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Équipements</label>
            <textarea name="equipements" class="w-full p-2 border border-gray-300 rounded">{{ $sallesSport->equipements }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-2">Disponible</label>
            <select name="disponible" class="w-full p-2 border border-gray-300 rounded">
                <option value="1" @if($sallesSport->disponible) selected @endif>Oui</option>
                <option value="0" @if(!$sallesSport->disponible) selected @endif>Non</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection
