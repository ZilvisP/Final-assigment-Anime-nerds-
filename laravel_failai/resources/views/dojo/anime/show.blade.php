@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{$anime->cover_image}}" alt="{{$anime->title}}"><br>
                    <h2><span class="card-title" style="color: #2f2f2f">{{$anime->title}}</span></h2>
                </div>
                <div class="card-content">
                    @if(auth()->check() && Auth::user()->fromDojo())
                        <div><span style="color: #2f2f2f; font-weight: bold;">ID:</span>{{$anime->id}}</div>
                    @endif
                    <p><span style="color: #2f2f2f; font-weight: bold;">Title:</span>{{$anime->title}}</p>
                    <p><span style="color: #2f2f2f; font-weight: bold;">Description:</span>{{$anime->description}}</p>
                    <p><span style="color: #2f2f2f; font-weight: bold;">Episodes:</span>{{$anime->episodes}}</p>
                    <p><span style="color: #2f2f2f; font-weight: bold;">Release date:</span>{{$anime->release_date}}</p>
                    <p><span style="color: #2f2f2f; font-weight: bold;">Finish date:</span>{{$anime->finish_date}}</p>
                    <p><span style="color: #2f2f2f; font-weight: bold;">Status:</span>{{$anime->globalStatus->name}}</p>
                        <p><span style="color: #2f2f2f; font-weight: bold;">Genres:</span>
                            @foreach($anime->genres as $index => $genre)
                                {{$genre->name}}
                                @if($index != count($anime->genres) - 1)
                                    |
                                @endif
                            @endforeach</p>
                        @if(auth()->check() && Auth::user()->fromDojo())
                            <p><span style="color: #2f2f2f; font-weight: bold;">Cover image path:</span>{{$anime->cover_image}}</p>
                            <p><span style="color: #2f2f2f; font-weight: bold;">Thumbnail image path:</span>{{$anime->thumbnail_image}}</p>

                            <p><span style="color: #2f2f2f; font-weight: bold;">Added at:</span>{{$anime->created_at}}</p>
                        <p><span style="color: #2f2f2f; font-weight: bold;">Updated at:</span>{{$anime->updated_at}}</p>
                    @endif
                </div>
                @if(auth()->check())
                    <p>
                        <x-forms.progressStatus
{{-- relation call from model as watchstate--}}
                            :userProgressState="$anime->userWatchState"
                            :options="$anime->watchStates()->get()"
                            :mediaId="$anime->id"
                            mediaType="anime"
                        />
                    </p>
                @endif
                <div class="admin-buttons-show">
                    <x-forms.buttons.action :model="$anime" mainRoute="anime"/>
                </div>
                <div class="show-back">
                <x-forms.buttons.previous />
                </div>
            </div>
        </div>
    </div>
@endsection
