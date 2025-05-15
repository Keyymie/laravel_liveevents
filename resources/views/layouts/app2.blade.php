<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Live Events')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    {{-- Inclut ta navbar --}}
    @include('navbar.navbar')

    {{-- Contenu de la page --}}
    <main>
        @yield('content')
    </main>
</body>
</html>
