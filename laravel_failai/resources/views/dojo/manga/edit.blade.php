@extends('guest')
@section('content')

    <h2>Edit manga</h2>
    <form action="{{route('manga.update', $manga)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{old('title') ?? $manga->title}}"
               class="@error('title')is-invalid @enderror"><br>
        <input type="text" name="description" placeholder="Description"
               value="{{old('description') ?? $manga->description}}"
               class="@error('description')is-invalid @enderror"><br>
        <input type="text" name="release_date" placeholder="Release date"
               value="{{old('release_date') ?? $manga->release_date}}"
               class="@error('release_date')is-invalid @enderror"><br>

        {{--        <input type="file" name="image" placeholder="Image"--}}
        {{--               class="@error('image')is-invalid @enderror"><br>--}}

        <input type="text" name="status_id" placeholder="Status id" value="{{old('status_id') ?? $manga->status_id}}"
               class="@error('status_id')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>

@endsection
