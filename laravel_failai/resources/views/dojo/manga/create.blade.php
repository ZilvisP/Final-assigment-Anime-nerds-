@extends('dashboard')
@section('content')
    <h2>Creating manga</h2>
    <form action="{{route('manga.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" name="title" placeholder="Title" value="{{old('title')}}"
                   size="50" class="@error('title')is-invalid @enderror"><br>
        </div>
        <div class="form-group">
             <textarea  name="description" placeholder="Description"
                       class="@error('description')is-invalid @enderror">{{old('description')}}</textarea><br>
        </div>
        <div class="form-group">
            <input type="text" name="volumes" placeholder="Volumes released" value="{{old('volumes')}}"
                   class="@error('volumes')is-invalid @enderror"><br>
        </div>
        <div class="form-group">
            <input type="text" name="chapters" placeholder="Chapters released" value="{{old('chapters')}}"
                   class="@error('chapters')is-invalid @enderror"><br>
        </div>
        <div class="form-group">
            <label for="release_date">Release date:</label>
            <input type="date" name="release_date" placeholder="Release date" value="{{old('release_date')}}"
                   class="@error('release_date')is-invalid @enderror"><br>
        </div>
        <div class="form-group">
            <label for="finish_date">Finish date:</label>
            <input type="date" name="finish_date" placeholder="Finish date" value="{{old('finish_date')}}"
                   class="@error('finish_date')is-invalid @enderror"><br>
        </div>
        <div class="form-group">
            <input type="file" name="file" class="form-control-file" id="image">
        </div>
        <div class="form-group">
            <input type="text" name="status_id" placeholder="Status id" value="{{old('status_id')}}"
                   class="@error('status_id')is-invalid @enderror"><br>
        </div>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Add new">
    </form>
@endsection

