<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
    <nav class="navbar">
            <a href="{{ asset('/') }}"><img src="{{ asset('img/lelogo2.png') }}" class="logo"></a>
            <div class="nav-links">
                <ul>
                    <li class="active"><a href="{{ asset('/') }}">General</a></li>
                    <li><a href="{{ route('events.index') }}">Programme</a></li>
                    <li><a href="{{ route('events.concerts') }}">Concerts</a></li>
                    <li><a href="{{ route('partenaires.index') }}">Partenaires</a></li>
                    <li><a href="{{ route('faq.index') }}">FAQ</a></li>
                    <li><a href="{{ route('register') }}"><img src="{{ asset('img/user.png') }}" alt="userProfile" id="imgNavUser"></a></li>
            <!--  <link rel="stylesheet" href="{{ asset('img/') }}"> -->
                    <!-- 
            <a class="ml-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                     -->
                </ul>
            </div>
            <img src="{{ asset('img/menu-btn.png') }}" alt="menu en burger" class="menu-burger">
    </nav>
    <script src="{{ asset('js/mobile-menu.js') }}"></script>
    </header>


    <main class="mainHome">
<!-- Section -->
<section class="section-full-width-image">
    <img src="{{ asset('img/ambiance2.jpeg') }}" alt="Image pleine largeur" class="full-width-image">
    <div class="overlay-text">
        <h2>Bienvenue au Festival Live Events</h2>
        <p>Rejoignez-nous pour des moments inoubliables !</p>
    </div>
</section>

    <!-- Section -->
    <section class="section-image-right-text">
        <div class="text-right">
            <h2 class="section-title">Notre Programme</h2>
            <p class="section-paragraph">Ne manquez pas les événements phares de cette édition avec des concerts inédits et des spectacles époustouflants.</p>
        </div>
        <img src="{{ asset('img/image-droite.jpg') }}" alt="Programme du festival" class="image-right">
    </section>

    <!-- Section -->
    <section class="section-image-left-text">
        <img src="{{ asset('img/ambiance.webp') }}" alt="Ambiance du festival" class="image-left">
        <div class="text-left">
            <h2 class="section-title">Vivez l'Ambiance</h2>
            <p class="section-paragraph">Plongez dans l'ambiance électrique et festive avec des moments de partage, de musique et de bonheur.</p>
        </div>
    </section>
    </main>

    <footer>
    <div >
        <p class="le_footer">Live Events</p>
    </div>
    <div>
        <a href="https://twitter.com/votrecompte" target="_blank"><i class="fab fa-twitter">&nbsp;Twitter</i></a>
        <a href="https://www.instagram.com/votrecompte" target="_blank"><i class="fab fa-instagram">&nbsp;Instagram</i></a>
        <a href="https://www.facebook.com/votrepage" target="_blank"><i class="fab fa-facebook">&nbsp;Facebook</i></a>
    </div>
    <div>
        <p class="le_footer">Mentions légales</p>
    </div>
</footer>
</body>
