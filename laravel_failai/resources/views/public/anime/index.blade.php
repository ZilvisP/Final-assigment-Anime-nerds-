@extends('dashboard')
@section('content')

    <div class="container">
        <div class="selection">
            <div class="grid-container">

{{--<a href="?genre=action">veiksmo</a>--}}

                @foreach($animecollection as $anime)
                    <div class="grid-item">
                        <div class="anime-thumbnail">
{{-- thumbnails leads to show anime route--}}
                            <a href="{{ route('PublicAnime.show', $anime) }}">
                                <img src="{{$anime->thumbnail_image}}" alt="{{$anime->title}}">
                            </a>
                        </div>
                        <p>{{$anime->title}}</p>
                        <p>Genres:
                            @foreach($anime->genres as $index => $genre)
                                {{$genre->name}}
                                @if($index != count($anime->genres) - 1)
                                    |
                                @endif
                            @endforeach
                        </p>
                        {{--so normal humans can visit site without errors no id--}}
                        @if(Auth::check())
                            <p>
<!-- Use the rating component here, passing in the anime object and media type for reuse purpose-->

                                <x-forms.star-rating :mediaId="$anime->id"
                                                     {{--                                                     :rating = "$anime->userRating()"--}}
                                                     mediaType="anime"
                                                     :rating="$anime->userRating ? $anime->userRating->rating : null"
                                />
                            </p>

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
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
