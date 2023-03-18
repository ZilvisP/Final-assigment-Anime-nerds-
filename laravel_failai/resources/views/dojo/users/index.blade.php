@extends('dashboard')
@section('content')
<div class="row">
    <div class="col s12"></div>
    <h2>Users</h2>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>{{__('Name')}}</th>
            <th>{{__('Role')}}</th>
            <th>{{__('Email')}}</th>
            <th>{{__('Email verified at')}}</th>
            <th>{{__('User created at')}}</th>
            <th>{{__('user updated at')}}</th>
            <th>{{__('Actions')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->email_verified_at}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td>
                    <x-forms.buttons.action :model="$user" mainRoute="users" />
                    <a href="{{route('users.create')}}" class="a-button" >Add new</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
