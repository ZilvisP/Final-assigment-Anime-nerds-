@extends('dashboard')
@section('content')
    <h2>Creating anime</h2>
    <form action="{{route('anime.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" name="title" placeholder="Title" value="{{old('title')}}"
                   size="50" class="@error('title')is-invalid @enderror"><br>
        </div>
        <div class="form-group">
             <textarea type="text" name="description" placeholder="Description"
                   class="@error('description')is-invalid @enderror">{{old('description')}}</textarea><br>
        </div>

        <div class="form-group">
            <input type="date" name="release_date" placeholder="Release date" value="{{old('release_date')}}"
                   class="@error('release_date')is-invalid @enderror"><br>
        </div>

        <div class="form-group">
            <input type="file" name="file" class="form-control-file" id="image">
        </div>

{{--        accept="image/*"--}}

        <div class="form-group">
            <input type="text" name="status_id" placeholder="Status id" value="{{old('status_id')}}"
                   class="@error('status_id')is-invalid @enderror"><br>
        </div>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Add new">
    </form>
@endsection
