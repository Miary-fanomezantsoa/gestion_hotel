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
            <h2 class="mb-0">Modifier la réservation</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nom_client" class="form-label">Nom du client</label>
                    <input type="text" class="form-control" id="nom_client" name="nom_client" value="{{ $reservation->nom_client }}" required>
                </div>

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

<<<<<<< HEAD
    <label>Heure de début :</label>
    <input type="time" name="heure_debut" value="{{ $reservation->heure_debut }}"><br>

    <label>Heure de fin :</label>
    <input type="time" name="heure_fin" value="{{ $reservation->heure_fin }}"><br>

    <button type="submit">Enregistrer</button>
</form>
=======
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>
>>>>>>> e925d63 (Sauvegarde avant pull)
@endsection
