@extends('dashboard')

@section('content')
    <div class="container">
        <h2>Popular Anime</h2>
        <div class="grid">
            @foreach ($popularAnime as $anime)
                <div class="flex">
                    <div class="home-image">
                        <a href="{{ route('PublicAnime.show', $anime) }}">
                        <img src="{{ $anime->cover_image }}" alt="{{ $anime->title }}" class="w-40 h-40">
                        </a>
                    </div>
                    <div class="home-title">
                        <p>{{ $anime->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <h2>Newest Anime</h2>
        <div class="grid">
            @foreach ($newestAnime as $anime)
                <div class="flex">
                    <div class="home-image">
                        <a href="{{ route('PublicAnime.show', $anime) }}">
                        <img src="{{ $anime->cover_image }}" alt="{{ $anime->title }}" class="w-40 h-40">
                        </a>
                    </div>
                    <div class="home-title">
                        <p >{{ $anime->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <h2>Popular Manga</h2>
        <div class="grid">
            @foreach ($popularManga as $manga)
                <div class="flex ">
                    <div class="home-image">
                        <a href="{{ route('PublicManga.show', $manga) }}">
                        <img src="{{ $manga->cover_image }}" alt="{{ $manga->title }}" class="w-40 h-40">
                        </a>
                    </div>
                    <div class="home-title">
                        <p>{{ $manga->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <h2>Newest Manga</h2>
        <div class="grid">
            @foreach ($newestManga as $manga)
                <div class="flex">
                    <div class="home-image">
                        <a href="{{ route('PublicManga.show', $manga) }}">
                        <img src="{{ $manga->cover_image }}" alt="{{ $manga->title }}" class="w-40 h-40">
                        </a>
                    </div>
                    <div class="home-title">
                        <p>{{ $manga->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
