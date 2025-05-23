<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<h2>Détail de la salle</h2>

<p>Nom : {{ $salle->nom }}</p>
<p>Capacité : {{ $salle->nbrPersonne }}</p>
<p>Prix : {{ $salle->prix }} Ar</p>
<p>Description : {{ $salle->description }}</p>
<p>Disponible : {{ $salle->disponible ? 'Oui' : 'Non' }}</p>

<a href="{{ route('salles.index') }}">Retour</a>
