@extends('layouts.app2')

@section('title', 'Liste des événements')

@section('content')
    <h1>Événements par catégorie</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    @forelse ($categories as $category)
        <h2>{{ $category->category_name }}</h2>

        @if ($category->events->isEmpty())
            <p>Aucun événement pour cette catégorie.</p>
        @else
            <ul>
                @foreach ($category->events as $event)
                    <li>
                        <strong>{{ $event->artiste_name }}</strong> - 
                        {{ $event->date }} à {{ $event->horaire }}<br>
                        <em>{{ $event->scene }}</em><br>
                        {{ $event->description }}

                        @auth
                            @if (Auth::user()->type === 'admin')
                                <a href="{{ route('events.edit', $event->id) }}">[Modifier]</a>
                                <a href="{{ route('events.delete', $event->id) }}" style="color: red;">[Supprimer]</a>
                            @endif
                        @endauth
                    </li>
                @endforeach
            </ul>
        @endif
    @empty
        <p>Aucune catégorie disponible.</p>
    @endforelse

    @auth
        @if (Auth::user()->type === 'admin')
            <p><a href="{{ route('events.create') }}">Ajouter un nouvel événement</a></p>
        @endif
    @endauth
@endsection
