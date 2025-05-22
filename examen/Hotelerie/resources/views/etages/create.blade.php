@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Ajouter un étage</h2>

    <form action="{{ route('etages.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="numero" class="form-label">Numéro d'étage</label>
            <input type="text" name="numero" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection
