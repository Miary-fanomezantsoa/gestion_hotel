@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<h2>Détail Réservation</h2>
<p>Nom : {{ $reservation->nom_client }}</p>
<p>Email : {{ $reservation->email_client }}</p>
<p>Numero telephone : {{ $reservation->telephone_client}}</p>
<p>Type : {{ $reservation->type_evenement }}</p>
<p>Date : {{ $reservation->date_evenement }} de {{ $reservation->heure_debut }} à {{ $reservation->heure_fin }}</p>
<p>Salle : {{ $reservation->salle->nom }}</p>
<a href="{{ route('reservations.index') }}">Retour</a>
@endsection
