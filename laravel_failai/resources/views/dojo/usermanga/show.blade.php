@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-content">
                    <div>ID: {{$usermanga->id}}</div>
                    <p>City: {{$usermanga->user_id}}</p>
                    <p>Street: {{$usermanga->manga_id}}</p>
                    <p>Post code: {{$usermanga->status_id}}</p>
                    <p>Post code: {{$usermanga->rating}}</p>
                    <p>Post code: {{$usermanga->date_voted}}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$usermanga" mainRoute="usermanga"/>
                </div>
            </div>
        </div>
    </div>
@endsection
