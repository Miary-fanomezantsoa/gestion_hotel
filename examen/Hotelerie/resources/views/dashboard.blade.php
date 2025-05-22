<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard Hôtel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center text-primary">Bienvenue dans la gestion des chambres</h1>

    <!-- Boutons d'action rapide -->
    <div class="mb-4 text-end">
        <a href="{{ route('admin.chambres.create') }}" class="btn btn-success me-2">➕ Ajouter Chambre</a>
        <a href="{{ route('admin.etages.create') }}" class="btn btn-success me-2">➕ Ajouter Étage</a>
        <a href="{{ route('admin.chambres.index') }}" class="btn btn-primary">🛠 Administration</a>
    </div>

    <!-- Statistiques -->
    <div class="row text-center mb-5">
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">🏨 Total Chambres</h5>
                    <p class="display-5">{{ $totalChambres }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">✅ Disponibles</h5>
                    <p class="display-5 text-success">{{ $disponibles }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">❌ Occupées</h5>
                    <p class="display-5 text-danger">{{ $occupees }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">🏢 Total Étages</h5>
                    <p class="display-5">{{ $totalEtages }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Dernières chambres -->
    <div class="card mb-5 shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">📋 Dernières chambres ajoutées</h4>
        </div>
        <div class="card-body p-0">
            @if($dernieresChambres->isEmpty())
                <p class="p-3 text-muted">Aucune chambre enregistrée.</p>
            @else
            <table class="table table-striped mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Numéro</th>
                        <th>Étage</th>
                        <th>Disponibilité</th>
                        <th>Créée le</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dernieresChambres as $chambre)
                        <tr>
                            <td>{{ $chambre->numero }}</td>
                            <td>{{ $chambre->etage->nom ?? 'Non défini' }}</td>
                            <td>
                                @if($chambre->disponible)
                                    <span class="badge bg-success">Disponible</span>
                                @else
                                    <span class="badge bg-danger">Occupée</span>
                                @endif
                            </td>
                            <td>{{ $chambre->created_at->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>

    <!-- Aperçu des étages -->
    <div class="card mb-5 shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">🏢 Aperçu des étages</h4>
        </div>
        <div class="card-body p-0">
            @if($etages->isEmpty())
                <p class="p-3 text-muted">Aucun étage enregistré.</p>
            @else
            <table class="table table-striped mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Nom de l'étage</th>
                        <th>Chambres totales</th>
                        <th>Chambres disponibles</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($etages as $etage)
                        <tr>
                            <td>{{ $etage->nom }}</td>
                            <td>{{ $etage->chambres_count }}</td>
                            <td>{{ $etage->disponibles }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>

    <!-- Graphique de disponibilité -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">📊 Disponibilité des chambres</h4>
        </div>
        <div class="card-body">
            <canvas id="dispoChart" style="max-width: 600px; max-height: 300px;"></canvas>
        </div>
    </div>

</div>

<script>
    const ctx = document.getElementById('dispoChart').getContext('2d');
    const dispoChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Disponibles', 'Occupées'],
            datasets: [{
                label: 'Nombre de chambres',
                data: [{{ $disponibles }}, {{ $occupees }}],
                backgroundColor: ['#198754', '#dc3545']
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true, stepSize: 1 }
            }
        }
    });
</script>

</body>
</html>
