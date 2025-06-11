@extends('layouts.app')

@section('content')
<<<<<<< HEAD
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
=======
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Détail de la réservation</h2>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Nom :</dt>
                <dd class="col-sm-9">{{ $reservation->nom_client }}</dd>

                <dt class="col-sm-3">Email :</dt>
                <dd class="col-sm-9">{{ $reservation->email_client }}</dd>

                <dt class="col-sm-3">Téléphone :</dt>
                <dd class="col-sm-9">{{ $reservation->telephone_client }}</dd>

                <dt class="col-sm-3">Type :</dt>
                <dd class="col-sm-9">{{ $reservation->type_evenement }}</dd>

                <dt class="col-sm-3">Date :</dt>
                <dd class="col-sm-9">{{ $reservation->date_evenement }} de {{ $reservation->heure_debut }} à {{ $reservation->heure_fin }}</dd>

                <dt class="col-sm-3">Salle :</dt>
                <dd class="col-sm-9">{{ $reservation->salle->nom }}</dd>
            </dl>

            <div class="text-end">
                <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection

>>>>>>> e925d63 (Sauvegarde avant pull)
