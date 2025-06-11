<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
=======
>>>>>>> e925d63 (Sauvegarde avant pull)


@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Liste des réservations</h2>

<<<<<<< HEAD
<table>
    <tr>
        <th>Nom</th>
        <th>Type</th>
        <th>Date</th>
        <th>Salle</th>
        <th>Actions</th>
    </tr>
    @foreach ($reservations as $res)
        <tr>
            <td>{{ $res->nom_client }}</td>
            <td>{{ $res->type_evenement }}</td>
            <td>{{ \Carbon\Carbon::parse($res->date_evenement)->format('d/m/Y') }}</td>
            <td>{{ $res->salle ? $res->salle->nom : 'Aucune salle' }}</td>
            <td style="display:flex; gap:5px;">
                <form action="{{ route('reservations.show', $res) }}" method="GET">
                    <button type="submit" class="btn">Voir</button>
                </form>
=======
    <div class="mb-4">
        <a href="{{ route('reservations.create') }}" class="btn btn-primary">Nouvelle réservation</a>
    </div>
>>>>>>> e925d63 (Sauvegarde avant pull)

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

<<<<<<< HEAD
                <form action="{{ route('reservations.destroy', $res) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Supprimer cette réservation ?')">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
=======
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Salle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $res)
                    <tr>
                        <td>{{ $res->nom_client }}</td>
                        <td>{{ $res->type_evenement }}</td>
                        <td>{{ $res->date_evenement }}</td>
                        <td>{{ $res->salle ? $res->salle->nom : 'Aucune salle' }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('reservations.show', $res) }}" class="btn btn-sm btn-info">Voir</a>
                                <a href="{{ route('reservations.edit', $res) }}" class="btn btn-sm btn-warning">Modifier</a>
                                <form action="{{ route('reservations.destroy', $res) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cette réservation ?')">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
>>>>>>> e925d63 (Sauvegarde avant pull)
@endsection
