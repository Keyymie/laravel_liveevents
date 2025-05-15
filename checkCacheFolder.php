<?php

$cacheDir = __DIR__ . '/bootstrap/cache';

echo "🔍 Vérification du dossier : $cacheDir\n";

// 1. Vérifier si le dossier existe
if (!file_exists($cacheDir)) {
    echo "📁 Le dossier n'existe pas. Création en cours...\n";
    if (mkdir($cacheDir, 0775, true)) {
        echo "✅ Dossier créé avec succès.\n";
    } else {
        echo "❌ Échec de la création du dossier.\n";
        exit(1);
    }
} else {
    echo "✅ Le dossier existe déjà.\n";
}

// 2. Vérifier les permissions
if (is_writable($cacheDir)) {
    echo "✅ Le dossier est accessible en écriture.\n";
} else {
    echo "⚠️ Le dossier n'est pas accessible en écriture. Tentative de modification des permissions...\n";
    if (chmod($cacheDir, 0775)) {
        echo "✅ Permissions modifiées. Vérifie à nouveau si Laravel fonctionne.\n";
    } else {
        echo "❌ Échec du changement de permissions. Fais-le manuellement (clic droit > sécurité).\n";
    }
}
