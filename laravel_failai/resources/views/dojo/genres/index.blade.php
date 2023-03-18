@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col s12"></div>
        <h2>Genres</h2>

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
                        <x-forms.buttons.action :model="$genre" mainRoute="genres"/>
                   <a href="{{route('genres.create')}}" class="a-button">Add new</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
