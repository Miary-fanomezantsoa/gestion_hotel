@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<h2>Nouvelle réservation</h2>

<form method="POST" action="{{ route('reservations.store') }}">
    @csrf

    <label for="nom_client">Nom</label>
    <input type="text" name="nom_client" id="nom_client">

    <label for="email_client">Email</label>
    <input type="email" name="email_client" id="email_client">

    <label for="telephone_client">Téléphone</label>
    <input type="text" name="telephone_client" id="telephone_client">

    <label for="type_evenement">Type d'événement</label>
    <input type="text" name="type_evenement" id="type_evenement">

    <label for="date_evenement">Date</label>
    <input type="date" name="date_evenement" id="date_evenement">

    <label for="heure_debut">Heure début</label>
    <input type="time" name="heure_debut" id="heure_debut">

    <label for="heure_fin">Heure fin</label>
    <input type="time" name="heure_fin" id="heure_fin">

    <label for="salle_id">Salle</label>
    <select name="salle_id" id="salle_id">
        @foreach ($salles as $salle)
            <option value="{{ $salle->id }}">{{ $salle->nom }}</option>
        @endforeach
    </select>

    <button type="submit">Réserver</button>
</form>
@endsection
