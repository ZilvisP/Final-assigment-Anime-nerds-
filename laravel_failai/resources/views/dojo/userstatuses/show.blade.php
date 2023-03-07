@extends('guest')
@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-content">
                    <div>ID: {{$userstatus->id}}</div>
                    <p>Name: {{$userstatus->name}}</p>
                    <p>Category: {{$userstatus->category}}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$userstatus" mainRoute="userstatuses"/>
                </div>
            </div>
        </div>
    </div>
@endsection
