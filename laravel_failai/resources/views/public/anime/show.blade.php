@extends('guest')
@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{$anime->cover_image}}" alt="{{$anime->title}}"><br>
                    <h2><span class="card-title" style="color: #c57f29">{{$anime->title}}</span></h2>
                </div>
                <div class="card-content">
                    <div>ID: {{$anime->id}}</div>
                    <p>Title: {{$anime->title}}</p>
                    <p>Description: {{$anime->description}}</p>
                    <p>Release date: {{$anime->release_date}}</p>
                    <p>Status: {{$anime->globalStatus->title}}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$anime" mainRoute="anime"/>
                </div>
            </div>
        </div>
    </div>
@endsection
