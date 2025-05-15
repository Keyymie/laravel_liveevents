@extends('layouts.app2')

@section('title', 'Catégories')

@section('content')
    <h1>Catégories existantes</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @forelse ($categories as $category)
            <li>
                {{ $category->category_name }}

                @auth
                    @if (Auth::user()->type === 'admin')
                        <a href="{{ route('categories.edit', $category->id) }}" style="color: blue;">[Modifier]</a>
                        <a href="{{ route('categories.delete', $category->id) }}" style="color: red;">[Supprimer]</a>
                    @endif
                @endauth
            </li>
        @empty
            <li>Aucune catégorie pour le moment.</li>
        @endforelse
    </ul>

    @auth
        @if (Auth::user()->type === 'admin')
            <p><a href="{{ route('categories.create') }}" style="color: green; font-weight: bold;">+ Ajouter une nouvelle catégorie</a></p>
        @endif
    @endauth
@endsection
