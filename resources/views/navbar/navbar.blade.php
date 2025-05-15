
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