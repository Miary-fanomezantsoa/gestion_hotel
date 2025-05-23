<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<h2>Liste des salles</h2>

<form action="{{ route('salles.create') }}" method="GET">
    <button type="submit" class="btn">Nouvelle salle</button>
</form>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table>
    <tr>
        <th>Nom</th>
        <th>Capacité</th>
        <th>Prix</th>
        <th>Disponible</th>
        <th>Actions</th>
    </tr>
    @foreach ($salles as $salle)
        <tr>
            <td>{{ $salle->nom }}</td>
            <td>{{ $salle->nbrPersonne }}</td>
            <td>{{ $salle->prix }} Ar</td>
            <td>{{ $salle->disponible ? 'Oui' : 'Non' }}</td>
            <td style="display: flex; gap: 5px;">
                <form action="{{ route('salles.show', $salle) }}" method="GET">
                    <button type="submit" class="btn">Voir</button>
                </form>
                <form action="{{ route('salles.edit', $salle) }}" method="GET">
                    <button type="submit" class="btn">Modifier</button>
                </form>
                <form method="POST" action="{{ route('salles.destroy', $salle) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Supprimer cette salle ?')">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
