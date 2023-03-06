@extends('layouts.home.pagrindinis')

@section('content')
    <div class="container mx-auto py-8">
        <h2 class="text-4xl font-medium mb-8">Popular Anime</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
            @foreach ($popularAnime as $anime)
                <div class="flex flex-col justify-between items-center">
                    <div class="flex justify-center items-center">
                        <img src="{{ $anime->cover_image }}" alt="{{ $anime->title }}" class="w-40 h-40">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <p class="font-medium text-base leading-4 text-gray-800">{{ $anime->title }}</p>
                        <p class="font-normal text-sm leading-3 text-gray-600">{{ $anime->rating }} /
                            5</p>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="text-4xl font-medium my-8">Newest Anime</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
            @foreach ($newestAnime as $anime)
                <div class="flex flex-col justify-between items-center">
                    <div class="flex justify-center items-center">
                        <img src="{{ $anime->cover_image }}" alt="{{ $anime->title }}" class="w-40 h-40">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <p class="font-medium text-base leading-4 text-gray-800">{{ $anime->title }}</p>
                        <p class="font-normal text-sm leading-3 text-gray-600">{{ $anime->rating }} /
                            5</p>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="text-4xl font-medium my-8">Popular Manga</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
            @foreach ($popularManga as $manga)
                <div class="flex flex-col justify-between items-center">
                    <div class="flex justify-center items-center">
                        <img src="{{ $manga->cover_image }}" alt="{{ $manga->title }}" class="w-40 h-40">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <p class="font-medium text-base leading-4 text-gray-800">{{ $manga->title }}</p>
                        <p class="font-normal text-sm leading-3 text-gray-600">{{ $manga->rating }} /
                            5</p>
                    </div>
                </div>
            @endforeach
        </div>
        <h2 class="text-4xl font-medium my-8">Newest Manga</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
            @foreach ($newestManga as $manga)
                <div class="flex flex-col justify-between items-center">
                    <div class="flex justify-center items-center">
                        <img src="{{ $manga->cover_image }}" alt="{{ $manga->title }}" class="w-40 h-40">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <p class="font-medium text-base leading-4 text-gray-800">{{ $manga->title }}</p>
                        <p class="font-normal text-sm leading-3 text-gray-600">{{ $manga->rating }} /
                            5</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
