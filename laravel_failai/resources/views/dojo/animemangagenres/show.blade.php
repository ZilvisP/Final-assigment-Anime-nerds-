@extends('dashboard')
@section('content')
<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
                <div>ID: {{$animemangagenre->id}}</div>
                <p>City: {{$animemangagenre->anime_id}}</p>
                <p>Street: {{$animemangagenre->manga_id}}</p>
                <p>Post code: {{$animemangagenre->genre_id}}</p>
            </div>
            <div class="card-action">
                <x-forms.buttons.action :model="$animemangagenre" mainRoute="animemangagenres" />
            </div>
        </div>
    </div>
</div>
@endsection
