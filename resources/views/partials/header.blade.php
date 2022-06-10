<header id="site_header">
    <div class="header-top">
        <div class="container">
            <div class="links d-flex justify-content-end">
                <a href="">DC POWER VISA</a>
                <a href="">ADDITIONAL DC SITES</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="site_nav" class="d-flex justify-content-between align-items-center">
            <a href="{{ route('homepage') }}">
                <img src="{{ asset('img/dc-logo.png') }}" alt="" style="max-width:80px">
            </a>

            <nav class="d-flex">
                <a href="{{ route('characters') }}" class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">characters</a>
                <a href="{{ route('comics.comics') }}" class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">comics</a>
                <a href="{{ route('movies') }}" class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">movies</a>
                <a href="{{ route('tv') }}" class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">tv</a>
                <a href="{{ route('games') }}" class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">games</a>
                <a href="{{ route('collectibles') }}" class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">collectibles</a>
                <a href="{{ route('videos') }}" class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">videos</a>
                <a href="{{ route('fans') }}" class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">fans</a>
                <a href="{{ route('news') }}" class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">news</a>
                <a href="{{ route('shop') }}" class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">shop</a>
            </nav>

            <input type="search" placeholder="Search">
        </div>
    </div>
    <div class="jumbo"></div>
</header>
