<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un événement</title>
</head>
<body>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('events.store') }}">
        @csrf
        <label>Nom de l'artiste:</label><br>
        <input type="text" name="artiste_name" value="{{ old('artiste_name') }}"><br><br>

        <label>Date (AAAA-MM-JJ):</label><br>
        <input type="date" name="date" value="{{ old('date') }}"><br><br>

        <label>Scène:</label><br>
        <input type="text" name="scene" value="{{ old('scene') }}"><br><br>

        <label>Description:</label><br>
        <textarea name="description">{{ old('description') }}</textarea><br><br>

        <label>Horaire:</label><br>
        <input type="text" name="horaire" value="{{ old('horaire') }}"><br><br>

        <label>Catégorie:</label><br>
        <select name="category_id">
            <option value="">-- Sélectionnez une catégorie --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->category_name }}
                </option>
            @endforeach
        </select><br><br>

        <input type="submit" value="Ajouter l'événement">
    </form>
</body>
</html>
