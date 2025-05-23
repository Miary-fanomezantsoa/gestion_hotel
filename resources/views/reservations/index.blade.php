@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<h2>Liste des réservations</h2>

<form action="{{ route('reservations.create') }}" method="GET">
    <button type="submit" class="btn">Nouvelle réservation</button>
</form>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

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

                <form action="{{ route('reservations.edit', $res) }}" method="GET">
                    <button type="submit" class="btn">Modifier</button>
                </form>

                <form action="{{ route('reservations.destroy', $res) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Supprimer cette réservation ?')">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
