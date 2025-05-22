<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue à l'Hôtel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen flex items-center justify-center">
    <div class="text-center p-8 bg-white shadow-xl rounded-xl max-w-md w-full">
        <h1 class="text-3xl font-bold text-blue-800 mb-4">Bienvenue dans le système de gestion d'hôtel</h1>
        <a href="{{ route('clients.index') }}" class="inline-block px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-md shadow hover:bg-blue-700 transition">
            Accéder à l'administration
        </a>
    </div>
</body>
</html>
