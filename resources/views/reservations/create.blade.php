@extends('layouts.app')
<<<<<<< HEAD

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
=======
>>>>>>> e925d63 (Sauvegarde avant pull)

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Nouvelle réservation</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('reservations.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nom_client" class="form-label">Nom du client</label>
                    <input type="text" class="form-control" id="nom_client" name="nom_client" required>
                </div>

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

<<<<<<< HEAD
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
=======
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>
>>>>>>> e925d63 (Sauvegarde avant pull)
@endsection
