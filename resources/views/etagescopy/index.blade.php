@extends('layouts.app')

@section('content')
    <h1>Liste des étages</h1>

    <a href="{{ route('etages.create') }}">Ajouter un étage</a>

    <ul>
        @foreach ($etages as $etage)
            <li>{{ $etage->nom_etage }} (Niveau: {{ $etage->niveau }})</li>
        @endforeach
    </ul>
@endsection
