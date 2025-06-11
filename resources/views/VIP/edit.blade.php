<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un VIP</title>
</head>

<style>
body {
    background-color: #1a1a1a;
    color: #f0f0f0;
    font-family: 'Segoe UI', sans-serif;
    padding: 30px;
}

h1 {
    color: #00bcd4;
    margin-bottom: 25px;
    text-align: center;
}

form {
    background-color: #2b2b2b;
    padding: 25px;
    border-radius: 10px;
    max-width: 600px;
    margin: auto;
    box-shadow: 0 0 12px rgba(0, 188, 212, 0.2);
}

label {
    display: block;
    margin-top: 15px;
    font-weight: bold;
    color: #cccccc;
}

input[type="text"],
input[type="email"],
input[type="date"],
select,
textarea {
    width: 100%;
    padding: 10px;
    margin-top: 6px;
    border-radius: 5px;
    border: 1px solid #444;
    background-color: #1f1f1f;
    color: #fff;
}

button {
    background-color: #00bcd4;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #008c9e;
}

</style>
<body>
    <h1>Modifier le VIP</h1>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('VIP.update', $VIP->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="{{ old('name', $VIP->name) }}" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="{{ old('email', $VIP->email) }}" required><br><br>

        <label for="birth_date">Date de naissance :</label>
        <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date', $VIP->birth_date) }}" required><br><br>

        <label for="gender">Genre :</label>
        <select id="gender" name="gender" required>
            <option value="Homme" {{ old('gender', $VIP->gender) == 'Homme' ? 'selected' : '' }}>Homme</option>
            <option value="Femme" {{ old('gender', $VIP->gender) == 'Femme' ? 'selected' : '' }}>Femme</option>
            <option value="Autre" {{ old('gender', $VIP->gender) == 'Autre' ? 'selected' : '' }}>Autre</option>
        </select><br><br>

        <label for="phone_number">Téléphone :</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $VIP->phone_number) }}"><br><br>

        <label for="address">Adresse :</label>
        <textarea id="address" name="address">{{ old('address', $VIP->address) }}</textarea><br><br>

        <button type="submit">Mettre à jour</button>
    </form>

    <a href="{{ route('VIP.index') }}">⬅️ Retour à la liste</a>
</body>
</html>
