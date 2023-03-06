@extends('layouts.dojo.main')
@section('content')
    <div class="row">
        <div class="col s12"></div>
        <h1>Genres</h1>
        <a href="{{route('genres.create')}}" class="btn btn-primary">Add new</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($genres as $genre)
                <tr>
                    <td>{{$genre->id}}</td>
                    <td>{{$genre->name}}</td>
                    <td>
                        <x-forms.buttons.action :model="$genre" mainRoute="genres" />
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
