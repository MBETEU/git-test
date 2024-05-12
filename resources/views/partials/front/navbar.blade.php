<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-orange" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">E Blood</a>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button> --}}

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">A propos</a></li>
                <li class="nav-item"><a href="{{ route('causes') }}" class="nav-link">Causes</a></li>
                <li class="nav-item"><a href="{{ route('donate') }}" class="nav-link">Offres</a></li>
                <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link">Gallérie</a></li>
                <li class="nav-item"><a href="{{ route('event') }}" class="nav-link">Evènements</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
