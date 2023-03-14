@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col s12"></div>
        <h2>Manga</h2>
        <a href="{{route('manga.create')}}" class="btn btn-primary">Add new</a>
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
            @foreach($mangacollection as $manga)
                <tr>
                    <td>{{$manga->id}}</td>
                    <td>{{$manga->title}}</td>
                    <td>{{$manga->description}}</td>
                    <td>{{$manga->release_date}}</td>
                    <td>{{$manga->cover_image}}</td>
                    <td>{{$manga->thumbnail_image}}</td>
                    <td>{{$manga->status_id}}</td>
                    <td>
                        <x-forms.buttons.action :model="$manga" mainRoute="manga"/>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
