@extends('layouts.app2')

@section('title', 'Ajouter un concert')

@section('content')
    <h1>Ajouter un concert</h1>

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

        <label>Nom de l'artiste :</label><br>
        <input type="text" name="artiste_name" value="{{ old('artiste_name') }}"><br><br>

        <label>Date (AAAA-MM-JJ) :</label><br>
        <input type="date" name="date" value="{{ old('date') }}"><br><br>

        <label>Scène :</label><br>
        <input type="text" name="scene" value="{{ old('scene') }}"><br><br>

        <label>Description :</label><br>
        <textarea name="description">{{ old('description') }}</textarea><br><br>

        <label>Horaire :</label><br>
        <input type="text" name="horaire" value="{{ old('horaire') }}"><br><br>

        {{-- Catégorie cachée --}}
        <input type="hidden" name="category_id" value="{{ $concertCategory->id }}">

        <input type="submit" value="Ajouter le concert">
    </form>
@endsection
