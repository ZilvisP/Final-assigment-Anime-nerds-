<header>
    <nav class="navbar">
        <div class="navbar-start">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{route('anime.index')}}">{{ __('Anime') }}</a></li>
                <li><a href="{{route('manga.index')}}">{{ __('Manga') }}</a></li>
                @if (!Auth::check())
                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @else
                    <li><a href="{{ route('logout') }}">{{ __('logout') }}</a></li>
                @endif
                <li>
                    @if (app()->getLocale() == 'en')
                        <a href="{{url()->current()}}?lang=en">EN</a>
                    @else
                        <a href="{{url()->current()}}?lang=lt">LT</a>
                    @endif
                </li>
                <li><a href="{{route('profile.edit')}}">{{ __('Edit profile') }}</a></li>
            </ul>
        </div>
    </nav>
</header>
