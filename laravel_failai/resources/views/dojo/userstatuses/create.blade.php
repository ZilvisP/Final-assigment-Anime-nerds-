@extends('guest')
@section('content')
    <h2>Creating status users use</h2>
    <form action="{{route('userstatuses.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{old('name')}}"
               class="@error('name')is-invalid @enderror"><br>
        <input type="text" name="category" placeholder="Category" value="{{old('category')}}"
               class="@error('category')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Add new">
    </form>
@endsection
