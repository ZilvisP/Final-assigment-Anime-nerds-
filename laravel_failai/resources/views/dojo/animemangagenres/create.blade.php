@extends('layouts.dojo.main')
@section('content')
    <h2>Adding genre to anime/manga</h2>
    <form action="{{route('animemangagenres.store')}}" method="post">
        @csrf
        <input type="text" name="anime_id" placeholder="Anime id" value="{{old('anime_id')}}"
               class="@error('anime_id')is-invalid @enderror"><br>
        <input type="text" name="manga_id" placeholder="Manga id" value="{{old('manga_id')}}"
               class="@error('manga_id')is-invalid @enderror"><br>
        <input type="text" name="genre_id" placeholder="Genre id" value="{{old('genre_id')}}"
               class="@error('genre_id')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Add new">
    </form>
@endsection

