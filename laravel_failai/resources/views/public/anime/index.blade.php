@extends('dashboard')
@section('content')

    <div class="container">
        <div class="anime selection">
            <div class="grid-container">
                @foreach($animecollection as $anime)
                    <div class="grid-item">
                        <div class="anime-thumbnail">
                            {{--                        <img src="{{$anime->thumbnail_image}}" alt="{{$anime->title}}">--}}
                        </div>
                        <p>{{$anime->title}}</p>
{{--                        <p>Genres {{ $anime->genres}}</p>--}}
                        <p>Genres:
                            @foreach($anime->genres as $genre)
                                {{ $genre->name}}
                            @endforeach
                        </p>
{{--                        Status:--}}
                        <p>

                            <x-forms.progressStatus
                                :watchState="$anime->userWatchState"
                                :options="$anime->watchStates()->get()"


                                :animeId="$anime->id"
                            />
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
