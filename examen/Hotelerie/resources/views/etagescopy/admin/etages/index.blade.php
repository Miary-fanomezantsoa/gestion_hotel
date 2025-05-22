@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Liste des étages</h2>
    <a href="{{ route('etages.create') }}" class="btn btn-success mb-3">➕ Ajouter un étage</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Numéro d'étage</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($etages as $etage)
                <tr>
                    <td>{{ $etage->numero }}</td>
                    <td>{{ $etage->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
