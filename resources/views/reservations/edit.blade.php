@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<h2>Modifier une réservation</h2>

<form method="POST" action="{{ route('reservations.update', $reservation) }}">
    @csrf
    @method('PUT')

    <label>Nom :</label>
    <input type="text" name="nom_client" value="{{ $reservation->nom_client }}"><br>

    <label>Email :</label>
    <input type="email" name="email_client" value="{{ $reservation->email_client }}"><br>

    <label>Téléphone :</label>
    <input type="text" name="telephone_client" value="{{ $reservation->telephone_client }}"><br>

    <label>Salle :</label>
    <select name="salle_id">
        @foreach ($salles as $salle)
            <option value="{{ $salle->id }}" {{ $salle->id == $reservation->salle_id ? 'selected' : '' }}>
                {{ $salle->nom }}
            </option>
        @endforeach
    </select><br>

    <label>Type d'événement :</label>
    <input type="text" name="type_evenement" value="{{ $reservation->type_evenement }}"><br>

    <label>Date de l'événement :</label>
    <input type="date" name="date_evenement" value="{{ $reservation->date_evenement }}"><br>

    <label>Heure de début :</label>
    <input type="time" name="heure_debut" value="{{ $reservation->heure_debut }}"><br>

    <label>Heure de fin :</label>
    <input type="time" name="heure_fin" value="{{ $reservation->heure_fin }}"><br>

    <button type="submit">Enregistrer</button>
</form>
@endsection
