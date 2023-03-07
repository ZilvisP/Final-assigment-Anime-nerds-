<header>
    <link rel="stylesheet" href="/css/navigation.top.css"/>
    <nav class="navbar">
        <div class="navbar-start">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{route('anime.index')}}">{{ __('Anime') }}</a></li>
                <li><a href="{{route('manga.index')}}">{{ __('Manga') }}</a></li>

                @if (!Auth::check())
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                @else
                    <li><a href="{{route('profile.edit')}}">{{ __('Profile') }}</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">{{ __('LOGOUT') }}</button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
