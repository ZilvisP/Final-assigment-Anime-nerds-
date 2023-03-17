@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{$manga->cover_image}}" alt="{{$manga->title}}"><br>
                    <h2><span class="card-title" style="color: #2f2f2f">{{$manga->title}}</span></h2>
                </div>
                <div class="card-content">
                    @if(auth()->check() && Auth::user()->fromDojo())
                    <div><span style="color: #2f2f2f; font-weight: bold;">ID:</span>{{$manga->id}}</div>
                    @endif
                        <p><span style="color: #2f2f2f; font-weight: bold;">Title:</span>{{$manga->title}}</p>
                        <p><span style="color: #2f2f2f; font-weight: bold;">Description:</span>{{$manga->description}}</p>
                    <p><span style="color: #2f2f2f; font-weight: bold;">Volumes:</span>{{$manga->volumes}}</p>
                    <p><span style="color: #2f2f2f; font-weight: bold;">Chapters:</span>{{$manga->chapters}}</p>
                        <p><span style="color: #2f2f2f; font-weight: bold;">Release date:</span>{{$manga->release_date}}</p>
                        <p><span style="color: #2f2f2f; font-weight: bold;">Finish date:</span>{{$manga->finish_date}}</p>
                        <p><span style="color: #2f2f2f; font-weight: bold;">Status:</span>{{$manga->globalStatus->name}}</p>
                        <p><span style="color: #2f2f2f; font-weight: bold;">Genres:</span>
                            @foreach($manga->genres as $index => $genre)
                                {{$genre->name}}
                                @if($index != count($manga->genres) - 1)
                                    |
                                @endif
                            @endforeach</p>
                        @if(auth()->check() && Auth::user()->fromDojo())
                            <p><span style="color: #2f2f2f; font-weight: bold;">Cover image path:</span>{{$manga->cover_image}}</p>
                            <p><span style="color: #2f2f2f; font-weight: bold;">Thumbnail image path:</span>{{$manga->thumbnail_image}}</p>
                        <p><span style="color: #2f2f2f; font-weight: bold;">Added at:</span>{{$manga->created_at}}</p>
                            <p><span style="color: #2f2f2f; font-weight: bold;">Updated at:</span>{{$manga->updated_at}}</p>
                    @endif
                </div>
                @if(auth()->check())
                    <p>
                        <x-forms.progressStatus
                            {{--relation call from model as watchstate--}}
                            :userProgressState="$manga->userReadState"
                            :options="$manga->userReadStates()->get()"
                            :mediaId="$manga->id"
                            mediaType="manga"
                        />
                    </p>
                @endif
                <div class="admin-buttons-show">
                    <x-forms.buttons.action :model="$manga" mainRoute="manga"/>
                </div>

                <div class="show-back">
                    <x-forms.buttons.previous />
                </div>
            </div>
        </div>
    </div>
@endsection
