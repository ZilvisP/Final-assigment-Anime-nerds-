@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col s12"></div>
        <h2>Genres to anime/manga</h2>
        <a href="{{route('animemangagenres.create')}}" class="btn btn-primary">Add new</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Anime id</th>
                <th>Manga id</th>
                <th>Genre id</th>
            </tr>
            </thead>
            <tbody>
            @foreach($animemangagenres as $animemangagenre)
                <tr>
                    <td>{{$animemangagenre->id}}</td>
                    <td>{{$animemangagenre->anime_id}}</td>
                    <td>{{$animemangagenre->manga_id}}</td>
                    <td>{{$animemangagenre->genre_id}}</td>
                    <td>
                        <x-forms.buttons.action :model="$animemangagenre" mainRoute="animemangagenres"/>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
