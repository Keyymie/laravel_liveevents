@extends('layouts.app2')

@section('title', 'Nos Partenaires')

@section('content')
<link rel="stylesheet" href="{{ asset('css/partners.css') }}">

<h1>Nos Partenaires</h1>

<div class="partner">
    <img src="{{ asset('assets/img/logo.png') }}" alt="SonicSoul Productions">
    <div>
        <h2>SonicSoul Productions</h2>
        <p>Une société de production audiovisuelle spécialisée dans les événements en direct...</p>
    </div>
</div>

<div class="partner">
    <img src="{{ asset('assets/img/logo2.png') }}" alt="Nature's Bounty Co.">
    <div>
        <h2>Nature's Bounty Co.</h2>
        <p>Une entreprise engagée dans la promotion d'un mode de vie sain et durable...</p>
    </div>
</div>
<!-- Partenaire 3 -->
<div class="partner">
    <img src="../../../assets/img/logo3.png" alt="Adventure Seekers Travel Agency">
    <h2>Adventure Seekers Travel Agency</h2>
    <p>Une agence de voyage spécialisée dans les voyages d'aventure et les expériences uniques, offrant des forfaits spéciaux pour les participants du festival qui souhaitent prolonger leur séjour et explorer la région.</p>
</div>

<!-- Partenaire 4 -->
<div class="partner">
    <img src="../../../assets/img/logo4.png" alt="Eclectic Eats Catering">
    <h2>Eclectic Eats Catering</h2>
    <p>Un service de restauration offrant une cuisine éclectique et créative pour satisfaire les papilles des festivaliers, avec un accent sur les ingrédients locaux et de saison.</p>
</div>

<!-- Partenaire 5 -->
<div class="partner">
    <img src="../../../assets/img/logo5.png" alt="Harmony Health & Wellness">
    <h2>Harmony Health & Wellness</h2>
    <p>Une entreprise axée sur le bien-être offrant des services de relaxation, de méditation et de yoga pour aider les participants à se ressourcer et à se recentrer pendant le festival.</p>
</div>

<!-- Répète pour les autres partenaires -->
@endsection
