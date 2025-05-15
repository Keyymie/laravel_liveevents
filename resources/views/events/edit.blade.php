<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un événement</title>
</head>
<body>
    <h1>Modifier un événement</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('events.update', $event->id) }}">
        @csrf
        @method('PUT')

        <label>Nom de l'artiste:</label><br>
        <input type="text" name="artiste_name" value="{{ old('artiste_name', $event->artiste_name) }}"><br><br>

        <label>Date:</label><br>
        <input type="date" name="date" value="{{ old('date', $event->date) }}"><br><br>

        <label>Scène:</label><br>
        <input type="text" name="scene" value="{{ old('scene', $event->scene) }}"><br><br>

        <label>Description:</label><br>
        <textarea name="description">{{ old('description', $event->description) }}</textarea><br><br>

        <label>Horaire:</label><br>
        <input type="text" name="horaire" value="{{ old('horaire', $event->horaire) }}"><br><br>

        <label>Catégorie:</label><br>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $event->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->category_name }}
                </option>
            @endforeach
        </select><br><br>

        <input type="submit" value="Mettre à jour l'événement">
    </form>
</body>
</html>
