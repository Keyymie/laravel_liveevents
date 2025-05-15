<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une catégorie</title>
</head>
<body>
    <h1>Modifier la catégorie</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')

        <label>Nom de la catégorie :</label><br>
        <input type="text" name="category_name" value="{{ old('category_name', $category->category_name) }}"><br><br>

        <button type="submit">Mettre à jour</button>
        <a href="{{ route('categories.index') }}">Annuler</a>
    </form>
</body>
</html>
