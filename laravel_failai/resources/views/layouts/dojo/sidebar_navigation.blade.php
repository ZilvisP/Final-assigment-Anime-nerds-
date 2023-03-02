
@section('sidebar')
    <aside class="menu">
        <ul class="menu-list">
            <li><a href="/">Home</a></li>
            @if (Auth::check() && Auth::user()->fromDojo())
                <li><a href="{{route('anime.index')}}">Anime</a></li>
                <li><a href="{{route('manga.index')}}">Manga</a></li>
                <li><a href="{{route('genres.index')}}">Genres</a></li>
                <li><a href="{{route('animemangagenre.index')}}">Anime Manga - Genres</a></li>
                <li><a href="{{route('globalstatuses.index')}}">Statuses</a></li>
                <li><a href="{{route('useranime.index')}}">User Anime</a></li>
                <li><a href="{{route('usermanga.index')}}">User Manga</a></li>
                <li><a href="{{route('users.index')}}">Users</a></li>
                <li><a href="{{route('userstatuses.index')}}">Users statuses</a></li>
            @endif
        </ul>
    </aside>
@endsection
