@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Liste des chambres</h2>
    <a href="{{ route('chambres.create') }}" class="btn btn-success mb-3">➕ Ajouter une chambre</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Étage</th>
                <th>Disponibilité</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chambres as $chambre)
                <tr>
                    <td>{{ $chambre->numero }}</td>
                    <td>{{ $chambre->etage->numero ?? 'N/A' }}</td>
                    <td>{{ $chambre->disponible ? 'Disponible' : 'Occupée' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
