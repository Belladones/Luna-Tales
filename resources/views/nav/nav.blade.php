<link rel="stylesheet" href="{{asset('assets/css/nav.css')}}">

<nav id="scroll-detect" class="global">
    <img src="/assets/img/logo.svg">

    <div class="nav">
        <ul>
            <li><a class="nav-a" href="{{route('app_home')}}">Accueil</a></li>
            <li><a class="nav-a" href="{{route('app_catalogue')}}">Catalogue</a></li>
            <li><a class="nav-a" href="{{route('app_library')}}">Bibliothèque</a></li>
            <li><a class="nav-a" href="{{route('app_clubs')}}">Clubs</a></li>
        </ul>
        @guest
            <a class="button" href="{{route('login')}}">Se connecter</a>
        @endguest

        @auth
            <span class="vide"></span>
            <label for="show-menu" class="menu-button"><h1>{{ Auth::user()->name }}</h1></label>

            <input type="checkbox" id="show-menu" checked />
            <ul class="menu-content">
                <li><a  href="/profile" class="nav-a">Profile</a></li>
                <li><a class="nav-a" href="{{route('app-logout')}}">Déconnexion</a></li>
            </ul>


<!--
            <a href="#"> {{ Auth::user()->name }} </a>
            <a href="{{route('app-logout')}}">Déconnexion</a> -->
        @endauth


    </div>

    <div class="hidden-nav">


        <nav id="navMenu" class="hidden">
            <ul class="hidden-list">
                <li><a class="nav-a" href="{{route('app_home')}}">Accueil</a></li>
                <li><a class="nav-a" href="{{route('app_catalogue')}}">Catalogue</a></li>
                <li><a class="nav-a" href="{{route('app_library')}}">Bibliothèque</a></li>
                <li><a class="nav-a" href="{{route('app_clubs')}}">Clubs</a></li>

                @guest
                    <a id="button" class="button" href="{{route('login')}}">Se connecter</a>
                @endguest

                @auth
                    <a class="nav-a" href="{{route('app-logout')}}">Déconnexion</a>
                @endauth
            </ul>

        </nav>

        <button class="menu"
                onClick="this.classList.toggle('opened'); this.setAttribute('aria-expanded', this.classList.contains('opened')); document.getElementById('navMenu').classList.toggle('hidden');"
                aria-label="Main Menu">
            <svg width="50" height="50" viewBox="0 0 100 100">
                <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                <path class="line line2" d="M 20,50 H 80" />
                <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
            </svg>
        </button>

    </div>


</nav>

<script>
    window.onscroll = function() {
        var monElement = document.getElementById("scroll-detect");
        if (window.scrollY > 100) {
            monElement.classList.add("scroll");
        } else {
            monElement.classList.remove("scroll");
        }
    };



</script>


