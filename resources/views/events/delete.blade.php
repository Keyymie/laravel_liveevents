<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un événement</title>
</head>
<body>
    <h1>Supprimer l'événement</h1>

    <p>Êtes-vous sûr de vouloir supprimer l'événement suivant ?</p>

    <ul>
        <li><strong>Artiste :</strong> {{ $event->artiste_name }}</li>
        <li><strong>Date :</strong> {{ $event->date }}</li>
        <li><strong>Scène :</strong> {{ $event->scene }}</li>
        <li><strong>Catégorie :</strong> {{ $event->category->category_name ?? 'Non spécifiée' }}</li>
    </ul>

    <form method="POST" action="{{ route('events.destroy', $event->id) }}">
        @csrf
        @method('DELETE')

        <button type="submit">Confirmer la suppression</button>
        <a href="{{ route('events.index') }}">Annuler</a>
    </form>
</body>
</html>
