<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer une catégorie</title>
</head>
<body>
    <h1>Supprimer la catégorie : {{ $category->category_name }}</h1>

    <p>Es-tu sûr de vouloir supprimer cette catégorie ?</p>

    <form action="{{ route('categories.delete', $category->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Oui, supprimer</button>
        <a href="{{ route('categories.index') }}">Annuler</a>
    </form>
</body>
</html>
