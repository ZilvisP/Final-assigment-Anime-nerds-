@extends('dashboard')
@section('content')
<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
                <div>ID: {{$genre->id}}</div>
                <p>Name: {{$genre->name}}</p>
            </div>
            <div class="card-action">
                <x-forms.buttons.action :model="$genre" mainRoute="genres" />
            </div>
        </div>
    </div>
</div>
@endsection
