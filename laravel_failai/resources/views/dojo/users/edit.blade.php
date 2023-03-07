@extends('guest')
@section('content')

    <h2>Edit User</h2>
    <form action="{{route('users.update', $user)}}" method="post">
        @method('PUT')
        @csrf
        {{--    <input type="file" name="foto" placeholder="Image" value="{{old('foto')}}"--}}
        {{--           class="@error('foto')is-invalid @enderror"><br>--}}

        <input type="text" name="name" placeholder="name" value="{{old('name') ?? $user->name}}"
               class="@error('name')is-invalid @enderror"><br>
        <input type="text" name="email" placeholder="email" value="{{old('email') ?? $user->email}}"
               class="@error('email')is-invalid @enderror"><br>
        <input type="text" name="password" placeholder="password"
               class="@error('password')is-invalid @enderror"><br>
        <x-forms.select field="role" :model="$user" :options="\App\Models\User::ROLES"/>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>

@endsection
