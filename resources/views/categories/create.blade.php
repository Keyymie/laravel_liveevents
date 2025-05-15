<!-- resources/views/categories/create.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une catégorie</title>
</head>
<body>
    <h1>Ajouter une nouvelle catégorie</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div>
            <label for="category_name">Nom de la catégorie :</label>
            <input type="text" name="category_name" id="category_name" required>
        </div>
        <button type="submit">Ajouter</button>
    </form>

    <p><a href="{{ route('categories.index') }}">Retour à la liste</a></p>
</body>
</html>
