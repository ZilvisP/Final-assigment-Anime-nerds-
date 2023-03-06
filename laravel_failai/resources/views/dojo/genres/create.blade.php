@extends('layouts.dojo.main')
@section('content')
    <h2>Creating genre</h2>
    <form action="{{route('genres.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{old('name')}}"
               class="@error('name')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Add new">
    </form>
@endsection

