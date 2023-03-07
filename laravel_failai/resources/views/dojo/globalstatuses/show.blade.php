@extends('guest')
@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-content">
                    <div>ID: {{$globalstatus->id}}</div>
                    <p>City: {{$globalstatus->name}}</p>
                    <p>Street: {{$globalstatus->category}}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$globalstatus" mainRoute="globalstatuses"/>
                </div>
            </div>
        </div>
    </div>
@endsection
