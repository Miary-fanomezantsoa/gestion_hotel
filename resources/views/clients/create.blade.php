@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Ajouter un Client</h1>

    <form action="{{ route('clients.store') }}" method="POST">
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
            <label class="block mb-2">Email</label>
            <input type="email" name="email" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Téléphone</label>
            <input type="text" name="telephone" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection
