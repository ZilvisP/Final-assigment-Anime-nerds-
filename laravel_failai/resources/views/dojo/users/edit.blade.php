@extends('dashboard')
@section('content')

    <h2>Edit User</h2>
    <form action="{{route('users.update', $user)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{old('name') ?? $user->name}}"
               class="@error('name')is-invalid @enderror"><br>
        <input type="text" name="email" placeholder="email" value="{{old('email') ?? $user->email}}"
               class="@error('email')is-invalid @enderror"><br>
        <div class="form-group">
            <label for="email_verified_at">Verified email date:</label>
            <input type="date" name="email_verified_at"
                   value="{{old('email_verified_at') ?? $user->email_verified_at}}"><br>
        </div>

        <x-forms.select field="role" :options="\App\Models\User::ROLES"/>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>

@endsection
