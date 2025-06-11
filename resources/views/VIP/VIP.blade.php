@extends('layouts.app')

@section('content')
<style>
body {
    background-color: #121212;
    color: #e0e0e0;
    font-family: 'Segoe UI', sans-serif;
    padding: 20px;
}

h1 {
    color: black;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #1e1e1e;
    border: 1px solid #333;
    color: #ccc;
}

th, td {
    padding: 12px;
    border: 1px solid #333;
    text-align: left;
}

th {
    background-color: #2c2c2c;
    color: #00bcd4;
}

tr:nth-child(even) {
    background-color: #1a1a1a;
}

tr:hover {
    background-color: #2a2a2a;
}

.btn-ajoute{
    display: inline-block;
    background-color: #00bcd4;
    color: #fff;
    padding: 6px 12px;
    border-radius: 5px;
    text-decoration: none;
    margin-right: 5px;
    transition: background-color 0.3s ease;
}





p {
    color: #81c784;
    font-weight: bold;
}

</style>
<body>
    <h1>Liste des VIP</h1>
    <a href="{{ route('VIP.create') }}"class="btn-ajoute">Ajouter un VIP</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Date de naissance</th>
                <th>Genre</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($VIP as $personne)
                <tr>
                    <td>{{ $personne->name }}</td>
                    <td>{{ $personne->email }}</td>
                    <td>{{ $personne->birth_date }}</td>
                    <td>{{ $personne->gender }}</td>
                    <td>{{ $personne->phone_number }}</td>
                    <td>{{ $personne->address }}</td>
                    <td>
                        <a href="{{ route('VIP.edit', $personne->id) }}">Modifier</a>
                        <form action="{{ route('VIP.destroy', $personne->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Voulez-vous vraiment supprimer ce VIP ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Aucun VIP trouvé.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
