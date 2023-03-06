@extends('layouts.dojo.main')
@section('content')

    <h2>Edit genres for anime/manga</h2>
    <form action="{{route('animemangagenres.update', $animemangagenre)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="anime_id" placeholder="Anime id" value="{{old('anime_id') ?? $animemangagenre->anime_id}}"
               class="@error('anime_id')is-invalid @enderror"><br>
        <input type="text" name="manga_id" placeholder="Manga id" value="{{old('manga_id') ?? $animemangagenre->manga_id}}"
               class="@error('manga_id')is-invalid @enderror"><br>
        <input type="text" name="genre_id" placeholder="genre_id" value="{{old('Genre id') ?? $animemangagenre->genre_id}}"
               class="@error('genre_id')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>

@endsection
