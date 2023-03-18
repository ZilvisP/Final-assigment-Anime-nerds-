@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col s12"></div>
        <h2>Global statuses</h2>

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
                        <a href="{{route('globalstatuses.create')}}" class="a-button" >Add new</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
