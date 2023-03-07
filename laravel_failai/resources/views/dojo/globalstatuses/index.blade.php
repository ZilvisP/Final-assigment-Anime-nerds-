@extends('guest')
@section('content')
    <div class="row">
        <div class="col s12"></div>
        <h1>Global statuses</h1>
        <a href="{{route('globalstatuses.create')}}" class="btn btn-primary">Add new</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
            </tr>
            </thead>
            <tbody>
            @foreach($globalstatuses as $globalstatus)
                <tr>
                    <td>{{$globalstatus->id}}</td>
                    <td>{{$globalstatus->name}}</td>
                    <td>{{$globalstatus->category}}</td>
                    <td>
                        <x-forms.buttons.action :model="$globalstatus" mainRoute="globalstatuses"/>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
