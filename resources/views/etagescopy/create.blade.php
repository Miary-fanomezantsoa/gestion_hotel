@extends('layouts.app')

@section('content')
    <h1>Ajouter un étage</h1>

    <form method="POST" action="{{ route('etages.store') }}">
        @csrf

        <label>Nom étage :</label>
        <input type="text" name="nom_etage" required>
        <br>

        <label>Niveau :</label>
        <input type="number" name="niveau" required>
        <br>

        <label>Description :</label>
        <textarea name="description"></textarea>
        <br>

        <label>Capacité max :</label>
        <input type="number" name="capacite_max">
        <br>

        <label>Accès handicapé :</label>
        <input type="checkbox" name="acces_handicape" value="1">
        <br>

        <button type="submit">Enregistrer</button>
    </form>
@endsection
