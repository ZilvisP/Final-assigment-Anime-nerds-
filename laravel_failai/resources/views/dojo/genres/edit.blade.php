@extends('layouts.dojo.main')
@section('content')

    <h2>Edit Genre</h2>
    <form action="{{route('genres.update', $genre)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{old('name') ?? $genre->name}}"
               class="@error('name')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>

@endsection
