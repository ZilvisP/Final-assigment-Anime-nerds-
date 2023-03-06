@extends('layouts.dojo.main')
@section('content')

    <h2>Edit user manga</h2>
    <form action="{{route('usermanga.update', $usermanga)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="user_id" placeholder="User id" value="{{old('user_id') ?? $usermanga->user_id}}"
               class="@error('user_id')is-invalid @enderror"><br>
        <input type="text" name="manga_id" placeholder="Manga id" value="{{old('manga_id') ?? $usermanga->manga_id}}"
               class="@error('manga_id')is-invalid @enderror"><br>
        <input type="text" name="status_id" placeholder="Status id" value="{{old('status_id') ?? $usermanga->status_id}}"
               class="@error('status_id')is-invalid @enderror"><br>
        <input type="text" name="rating" placeholder="rating" value="{{old('rating') ?? $usermanga->rating}}"
               class="@error('rating')is-invalid @enderror"><br>
        <input type="date" name="date_voted" placeholder="Date voted" value="{{old('date_voted') ?? $usermanga->date_voted}}"
               class="@error('date_voted')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>

@endsection
