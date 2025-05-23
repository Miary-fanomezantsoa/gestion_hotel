<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<h2>Modifier la salle</h2>

<form action="{{ route('salles.update', $salle) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nom :</label>
    <input type="text" name="nom" value="{{ $salle->nom }}">

    <label>Nombre de personnes :</label>
    <input type="number" name="nbrPersonne" value="{{ $salle->nbrPersonne }}">

    <label>Prix :</label>
    <input type="number" step="0.01" name="prix" value="{{ $salle->prix }}">

    <label>Description :</label>
    <textarea name="description">{{ $salle->description }}</textarea>

    <label>Disponible :</label>
    <select name="disponible">
        <option value="1" {{ $salle->disponible ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ !$salle->disponible ? 'selected' : '' }}>Non</option>
    </select>

    <button type="submit">Mettre à jour</button>
</form>
