@extends('layouts.app2')

@section('title', 'Créer une notification')

@section('content')
    <h1>Ajouter une Notification</h1>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('notifications.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titre :</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        </div>

        <div>
            <label for="message">Message :</label>
            <textarea name="message" id="message" required>{{ old('message') }}</textarea>
        </div>

        <div>
            <label for="type">Type :</label>
            <select name="type" id="type" required>
                <option value="">-- Sélectionner un type --</option>
                <option value="important">Important</option>
                <option value="general">Général</option>
                <option value="normal">Normal</option>
            </select>
        </div>

        <div>
            <button type="submit">Ajouter Notification</button>
        </div>
    </form>
@endsection
