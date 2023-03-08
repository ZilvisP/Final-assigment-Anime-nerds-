@extends('dashboard')
@section('content')
    <h2>Creating manga</h2>
    <form action="{{route('manga.store')}}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{old('title')}}"
               class="@error('title')is-invalid @enderror"><br>
        <input type="text" name="description" placeholder="Description" value="{{old('description')}}"
               class="@error('description')is-invalid @enderror"><br>
        <input type="date" name="release_date" placeholder="Release date" value="{{old('release_date')}}"
               class="@error('release_date')is-invalid @enderror"><br>

        {{--        <input type="file" name="image" placeholder="Image" value="{{old('image')}}"--}}
        {{--               class="@error('image')is-invalid @enderror"><br>--}}

        <input type="text" name="status_id" placeholder="Status id" value="{{old('status_id')}}"
               class="@error('status_id')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Add new">
    </form>
@endsection

