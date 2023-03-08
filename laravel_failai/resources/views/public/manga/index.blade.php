@extends('dashboard')
@section('content')

    <div class="container">
        <div class="anime selection">
            <div class="grid-container">
                @foreach($mangacollection as $manga)
                    <div class="grid-item">
                        <div class="manga-thumbnail">
                            {{--                        <img src="{{$anime->thumbnail_image}}" alt="{{$product->title}}">--}}
                        </div>
                        <p>{{$manga->title}}</p>
                        <p>Genres:
                            @foreach($manga->genres as $genre)
                                {{$genre->name}}
                                @if (!$loop->last)
                                    {{' '}}
                                @endif
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
