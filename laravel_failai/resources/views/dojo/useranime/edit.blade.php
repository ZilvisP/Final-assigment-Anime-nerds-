@extends('dashboard')
@section('content')

    <h2>Edit user anime</h2>
    <form action="{{route('useranime.update', $useranime)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="user_id" placeholder="User id" value="{{old('user_id') ?? $useranime->user_id}}"
               class="@error('user_id')is-invalid @enderror"><br>
        <input type="text" name="anime_id" placeholder="Anime id" value="{{old('anime_id') ?? $useranime->anime_id}}"
               class="@error('anime_id')is-invalid @enderror"><br>
        <input type="text" name="status_id" placeholder="Status id"
               value="{{old('status_id') ?? $useranime->status_id}}"
               class="@error('status_id')is-invalid @enderror"><br>
        <input type="text" name="rating" placeholder="rating" value="{{old('rating') ?? $useranime->rating}}"
               class="@error('rating')is-invalid @enderror"><br>
        <input type="date" name="date_voted" placeholder="Date voted"
               value="{{old('date_voted') ?? $useranime->date_voted}}"
               class="@error('date_voted')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>

@endsection
