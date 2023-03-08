@extends('dashboard')
@section('content')

    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{$user->avatar}}" alt="{{ $user->avatar }}"><br>
                </div>
                <div class="card-content">
                    <div>ID: {{$user->id}}</div>
                    <p>User name: {{$user->name}}</p>
                    <p>Email: {{$user->email}}</p>
                    <p>Email verified: {{$user->email_verified_at}}</p>
                    <p>User status: {{$user->status_id}}</p>
                    <p>User created at: {{$user->created_at}}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$user" mainRoute="users"/>
                </div>
            </div>
        </div>
    </div>

@endsection
