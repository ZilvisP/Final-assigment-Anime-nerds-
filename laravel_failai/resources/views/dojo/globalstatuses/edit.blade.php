@extends('layouts.dojo.main')
@section('content')

    <h2>Edit global status</h2>
    <form action="{{route('globalstatuses.update', $globalstatus)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{old('name') ?? $globalstatus->name}}"
               class="@error('name')is-invalid @enderror"><br>
        <input type="text" name="category" placeholder="Category" value="{{old('category') ?? $globalstatus->category}}"
               class="@error('category')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>

@endsection
