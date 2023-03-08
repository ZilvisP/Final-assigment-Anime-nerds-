@extends('dashboard')
@section('content')
<div class="row">
    <div class="col s12"></div>
    <h2>Person list</h2>
    <a href="{{route('users.create')}}" class="btn btn-primary">Add new</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>{{__('users.name')}}</th>
            <th>{{__('users.email')}}</th>
            <th>{{__('users.email_verified_at')}}</th>
            <th>{{__('general.created_at')}}</th>
            <th>{{__('general.updated_at')}}</th>
            <th>{{__('general.actions')}}</th>
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
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
