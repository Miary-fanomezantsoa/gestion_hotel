@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Ajouter une chambre</h2>
    <form action="{{ route('chambres.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="numero" class="form-label">Numéro de la chambre</label>
            <input type="text" name="numero" id="numero" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="etage_id" class="form-label">Étage</label>
            <select name="etage_id" id="etage_id" class="form-control" required>
                @foreach($etages as $etage)
                    <option value="{{ $etage->id }}">{{ $etage->numero }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="disponible" id="disponible" class="form-check-input" checked>
            <label for="disponible" class="form-check-label">Disponible</label>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
