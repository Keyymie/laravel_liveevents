@extends('layouts.app2')

@section('title', 'Concerts')

@section('content')
<h1>Événements : Concerts</h1>

@auth
    @if (Auth::user()->type === 'admin')
        <p>
            <a href="{{ route('notifications.create') }}" style="color: blue; font-weight: bold;">
                + Créer une notification
            </a>
        </p>
    @endif
@endauth

{{-- Notifications Importantes --}}
@if ($importantNotifs->isNotEmpty())
    <div class="notification-block">
        <div class="notifications-container" id="important-notifs">
            @foreach ($importantNotifs as $notif)
                <div class="notification-item important">
                    <h3>{{ $notif->title }}</h3>
                    <p>{{ $notif->message }}</p>
                    <p><small>Date : {{ $notif->date }}</small></p>
                    
                    @auth
                        @if (Auth::user()->type === 'admin')
                            <a href="{{ route('notifications.edit', $notif->id) }}">[Modifier]</a>
                        @endif
                    @endauth
                </div>
            @endforeach
        </div>
    </div>
@endif

{{-- Liste des concerts --}}
@if ($category && $category->events->isNotEmpty())
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
@else
    <p>Aucun événement de type "Concert" trouvé.</p>
@endif

@auth
    @if (Auth::user()->type === 'admin')
        <p>
            <a href="{{ route('events.concertsCreate') }}" style="color: green; font-weight: bold;">
                + Ajouter un événement concert
            </a>
        </p>
    @endif
@endauth

{{-- Notifications Générales --}}
@if ($generalNotifs->isNotEmpty())
    <div class="notification-block">
        <div class="notifications-container" id="general-notifs">
            @foreach ($generalNotifs as $notif)
                <div class="notification-item general">
                    <h3>{{ $notif->title }}</h3>
                    <p>{{ $notif->message }}</p>
                    <p><small>Date : {{ $notif->date }}</small></p>
                    
                    @auth
                        @if (Auth::user()->type === 'admin')
                            <a href="{{ route('notifications.edit', $notif->id) }}">[Modifier]</a>
                        @endif
                    @endauth
                </div>
            @endforeach
        </div>
    </div>
@endif

<div id="map" style="width: 100%; height: 500px;"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-3mksMCm7o6kY3YCzzA1GZDJjAzGFcf8&callback=initMap"></script>
<script>
    window.mapPoints = @json($points);
</script>
<script src="{{ asset('js/map.js') }}" defer></script>

{{-- Inclure les fichiers CSS et JS --}}
<link rel="stylesheet" href="{{ asset('css/notifications.css') }}">
<script src="{{ asset('js/notifications.js') }}" defer></script>
<script src="{{ asset('js/map.js') }}" defer></script>
@endsection
