@extends('dashboard')
@section('content')

    <div class="container">
        <div class="anime selection">
            <div class="grid-container">
                @foreach($animecollection as $anime)
                    <div class="grid-item">
                        <div class="anime-thumbnail">
                            {{--                        <img src="{{$anime->thumbnail_image}}" alt="{{$product->title}}">--}}
                        </div>
                        <p>{{$anime->title}}</p>
{{--                        <p>Genres {{ $anime->genres}}</p>--}}
                        <p>Genres:
                            @foreach($anime->genres as $genre)
                                {{ $genre->name}}
                            @endforeach
                        </p>
                        {{--               TODO select status dropbox "watched want to watch etc.. TABLE user_anime   clmn status_id   <p></p>--}}
                        {{--                    <x-forms.buttons.action :model="$manga" mainRoute="manga"/>--}}

                        {{--               TODO next weak rate 5 stars     <p></p>--}}


                        {{--               TODO after course episodes select     --}}
                        {{--                    @include('components.forms.add-to-cart-form')--}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
{{--                    @foreach($anime->genres as $genre)--}}
{{--                        {{$genre->name}},--}}
{{--                    @endforeach--}}
