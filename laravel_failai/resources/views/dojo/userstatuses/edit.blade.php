@extends('dashboard')
@section('content')

    <h2>Edit status users use</h2>
    <form action="{{route('userstatuses.update', $userstatus)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{old('name') ?? $userstatus->name}}"
               class="@error('name')is-invalid @enderror"><br>
        <input type="text" name="category" placeholder="Category" value="{{old('category') ?? $userstatus->category}}"
               class="@error('category')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>

@endsection
