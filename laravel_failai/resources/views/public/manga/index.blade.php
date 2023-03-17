@extends('dashboard')
@section('content')

    <div class="container">
        <div class="selection">
            <div class="grid-container">

                @foreach($mangacollection as $manga)
                    <div class="grid-item">
                        <div class="manga-thumbnail">
                            {{--thumbnails leads to show anime route--}}
                            <a href="{{ route('PublicManga.show', $manga) }}">
                                <img src="{{$manga->thumbnail_image}}" alt="{{$manga->title}}">
                            </a>
                        </div>
                        <p>{{$manga->title}}</p>
                        <p>Genres:
                            @foreach($manga->genres as $index => $genre)
                                {{$genre->name}}
                                @if($index != count($manga->genres) - 1)
                                    |
                                @endif
                            @endforeach
                        </p>
                        {{--so normal mortals can visit site without errors no id--}}
                        @if(Auth::check())
                            <p>
                                <!-- Use the x-star-rating component here, passing in the anime object and media type for reuse purpose-->
                                <x-forms.star-rating :mediaId="$manga->id"
                                                     mediaType="manga"
                                                     {{--grazina reitinga userio per modelio relation, jeigul turi, jei ne null--}}
                                                     :rating="$manga->userRating ? $manga->userRating->rating : null"
                                />
                            </p>
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
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
