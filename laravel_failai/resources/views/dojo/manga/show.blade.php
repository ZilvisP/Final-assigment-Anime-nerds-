@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{$manga->cover_image}}" alt="{{$manga->title}}"><br>
                    <h2><span class="card-title" style="color: #c57f29">{{$manga->title}}</span></h2>
                </div>
                <div class="card-content">
                    <div>ID: {{$manga->id}}</div>
                    <p>Title: {{$manga->title}}</p>
                    <p>Description: {{$manga->description}}</p>
                    <p>Release date: {{$manga->release_date}}</p>
                    <p>Status: {{$manga->status_id}}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$manga" mainRoute="manga"/>
                </div>
            </div>
        </div>
    </div>
@endsection
