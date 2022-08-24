<header class="container">
    <!-- Header - Logo -->
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo">
        </a>
    </div>

    <!-- Header - Main Menu -->
    <nav>
        <ul class="main-menu">
            <li><a href="">Characters</a></li>
            <li><a class="current" href="{{ route('comics') }}">Comics</a></li>
            <li><a href="">Movies</a></li>
            <li><a href="">Tv</a></li>
            <li><a href="">Games</a></li>
            <li><a href="">Collectibles</a></li>
            <li><a href="">Videos</a></li>
            <li><a href="">Fans</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Shop</a></li>
        </ul>
    </nav>
</header>