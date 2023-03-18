@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col s12"></div>
        <h2>User Manga</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>User id</th>
                <th>Manga id</th>
                <th>Status id</th>
                <th>Rating</th>
                <th>Date voted</th>
            </tr>
            </thead>
            <tbody>
            @foreach($usermangacollection as $usermanga)
                <tr>
                    <td>{{$usermanga->id}}</td>
                    <td>{{$usermanga->user_id}}</td>
                    <td>{{$usermanga->manga_id}}</td>
                    <td>{{$usermanga->status_id}}</td>
                    <td>{{$usermanga->rating}}</td>
                    <td>{{$usermanga->date_voted}}</td>
                    <td>
                        <x-forms.buttons.action :model="$usermanga" mainRoute="usermanga"/>
                        <a href="{{route('usermanga.create')}}" class="a-button" >Add new</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
