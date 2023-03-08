@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col s12"></div>
        <h2>Anime</h2>
        <a href="{{route('anime.create')}}" class="btn btn-primary">Add new</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Release_date</th>
                <th>Cover image</th>
                <th>Thumbnail image</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($animecollection as $anime)
                <tr>
                    <td>{{$anime->id}}</td>
                    <td>{{$anime->title}}</td>
                    <td>{{$anime->description}}</td>
                    <td>{{$anime->release_date}}</td>
                    <td>{{$anime->cover_image}}</td>
                    <td>{{$anime->thumbnail_image}}</td>
                    <td>{{$anime->status_id}}</td>
                    <td>
                        <x-forms.buttons.action :model="$anime" mainRoute="anime"/>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
