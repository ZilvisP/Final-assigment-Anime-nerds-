@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col s12"></div>
        <h2>Users anime</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>User id</th>
                <th>Anime id</th>
                <th>Status id</th>
                <th>Rating</th>
                <th>Date voted</th>
            </tr>
            </thead>
            <tbody>
            @foreach($useranimecollection as $useranime)
                <tr>
                    <td>{{$useranime->id}}</td>
                    <td>{{$useranime->user_id}}</td>
                    <td>{{$useranime->anime_id}}</td>
                    <td>{{$useranime->status_id}}</td>
                    <td>{{$useranime->rating}}</td>
                    <td>{{$useranime->date_voted}}</td>
                    <td>
                        <x-forms.buttons.action :model="$useranime" mainRoute="useranime"/>
                        <a href="{{route('useranime.create')}}" class="a-button" >Add new</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
