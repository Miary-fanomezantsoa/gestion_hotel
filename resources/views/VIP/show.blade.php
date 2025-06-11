<!-- resources/views/VIP/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails du VIP : {{ $VIP->name }}</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>Email :</strong> {{ $VIP->email }}</li>
        <li class="list-group-item"><strong>Date de naissance :</strong> {{ $VIP->birth_date }}</li>
        <li class="list-group-item"><strong>Genre :</strong> {{ $VIP->gender }}</li>
        <li class="list-group-item"><strong>Téléphone :</strong> {{ $VIP->phone_number }}</li>
        <li class="list-group-item"><strong>Adresse :</strong> {{ $VIP->address }}</li>
        <li class="list-group-item"><strong>Solde :</strong> {{ $VIP->balance }} €</li>
    </ul>

    <a href="{{ route('VIP.edit', $VIP->id) }}" class="btn btn-warning mt-3">Modifier</a>
    <a href="{{ route('VIP.VIP') }}" class="btn btn-secondary mt-3">Retour</a>

</div>
@endsection
