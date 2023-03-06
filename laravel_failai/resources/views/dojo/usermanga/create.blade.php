@extends('layouts.dojo.main')
@section('content')
    <h2>User manga</h2>
    <form action="{{route('usermanga.store')}}" method="post">
        @csrf
        <input type="text" name="user_id" placeholder="User id" value="{{old('user_id')}}"
               class="@error('user_id')is-invalid @enderror"><br>
        <input type="text" name="manga_id" placeholder="Manga id" value="{{old('manga_id')}}"
               class="@error('manga_id')is-invalid @enderror"><br>
        <input type="text" name="status_id" placeholder="Status id" value="{{old('status_id')}}"
               class="@error('status_id')is-invalid @enderror"><br>
        <input type="text" name="rating" placeholder="Rating" value="{{old('rating')}}"
               class="@error('rating')is-invalid @enderror"><br>
        <input type="date" name="date_voted" placeholder="Date voted" value="{{old('date_voted')}}"
               class="@error('date_voted')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Add new">
    </form>
@endsection

