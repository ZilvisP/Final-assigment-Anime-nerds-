@extends('guest')
@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-content">
                    <div>ID: {{$useranime->id}}</div>
                    <p>City: {{$useranime->user_id}}</p>
                    <p>Street: {{$useranime->anime_id}}</p>
                    <p>Post code: {{$useranime->status_id}}</p>
                    <p>Post code: {{$useranime->rating}}</p>
                    <p>Post code: {{$useranime->date_voted}}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$useranime" mainRoute="useranime"/>
                </div>
            </div>
        </div>
    </div>
@endsection
