@extends('layouts.app')

@section('title', 'Ajouter un VIP')

@section('content')
<div class="container mt-4">
    <h2>Ajouter un VIP</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erreur !</strong> Veuillez corriger les champs suivants :
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <style>
body {
    background-color: #121212;
    color: #e0e0e0;
    font-family: 'Segoe UI', sans-serif;
    padding: 20px;
}

h1 {
    color: #ffffff;
    margin-bottom: 20px;
}

form {
    background-color: #1e1e1e;
    padding: 20px;
    border-radius: 8px;
    max-width: 600px;
    margin: auto;
    border: 1px solid #333;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #00bcd4;
    font-weight: bold;
}

input, select, textarea {
    width: 100%;
    padding: 10px;
    background-color: #2c2c2c;
    border: 1px solid #444;
    border-radius: 5px;
    color: #fff;
    margin-bottom: 15px;
}

input::placeholder, textarea::placeholder {
    color: #888;
}

button[type="submit"] {
    background-color: #00bcd4;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0194a6;
}


.error {
    color: #ff5252;
    font-size: 0.9em;
}

    </style>
    <form action="{{ route('VIP.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="birth_date">Date de naissance :</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="gender">Genre :</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="">-- Sélectionner --</option>
                <option value="Homme" {{ old('gender') == 'Homme' ? 'selected' : '' }}>Homme</option>
                <option value="Femme" {{ old('gender') == 'Femme' ? 'selected' : '' }}>Femme</option>
                <option value="Autre" {{ old('gender') == 'Autre' ? 'selected' : '' }}>Autre</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="phone_number">Téléphone :</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
        </div>

        <div class="form-group mb-3">
            <label for="address">Adresse :</label>
            <textarea class="form-control" id="address" name="address">{{ old('address') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('VIP.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
