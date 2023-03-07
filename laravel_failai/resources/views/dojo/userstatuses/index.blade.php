@extends('guest')
@section('content')
    <div class="row">
        <div class="col s12"></div>
        <h1>Statuses users use</h1>
        <a href="{{route('userstatuses.create')}}" class="btn btn-primary">Add new</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
            </tr>
            </thead>
            <tbody>
            @foreach($userstatuses as $userstatus)
                <tr>
                    <td>{{$userstatus->id}}</td>
                    <td>{{$userstatus->name}}</td>
                    <td>{{$userstatus->category}}</td>
                    <td>
                        <x-forms.buttons.action :model="$userstatus" mainRoute="userstatuses"/>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
