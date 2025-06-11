@extends('layouts.app')

@section('content')
<h1>Créer une nouvelle partie</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<style>
body {
    background-color: #121212;
    color: #f0f0f0;
    font-family: 'Segoe UI', sans-serif;
    padding: 30px;
}

h1 {
    color: #ff4d4d;
    margin-bottom: 25px;
}

form {
    background-color: #1e1e1e;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(255, 77, 77, 0.2);
    max-width: 600px;
    margin: auto;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #ff4d4d;
}

input[type="text"],
input[type="number"],
input[type="date"],
select,
textarea {
    width: 100%;
    padding: 10px;
    background-color: #292929;
    border: 1px solid #444;
    border-radius: 5px;
    color: #f0f0f0;
    margin-bottom: 15px;
}

input[type="submit"],
.btn-ajoute {
    background-color: #ff4d4d;
    color: white;
    border: none;
    padding: 10px 18px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover,
button:hover {
    background-color: #d32f2f;
}



</style>

<form action="{{ route('jeux.store') }}" method="POST">
    @csrf
    <label>Nom du joueur:</label><br>
    <input type="text" name="nom" value="{{ old('nom') }}" required><br><br>

    <label>Type de jeu:</label><br>
    <select name="type_jeu" required>
        @foreach($types_jeux as $type)
            <option value="{{ $type }}" {{ old('type_jeu') == $type ? 'selected' : '' }}>{{ ucfirst(str_replace('_', ' ', $type)) }}</option>
        @endforeach
    </select><br><br>

    <label>Numéro du joueur:</label><br>
    <input type="number" name="num_joueur" value="{{ old('num_joueur') }}" required><br><br>

    <label>Temps de jeu (secondes):</label><br>
    <input type="number" name="temps_jeu" value="{{ old('temps_jeu') }}" required><br><br>

    <button type="submit" class="btn-ajoute">Enregistrer</button>
</form>
@endsection
