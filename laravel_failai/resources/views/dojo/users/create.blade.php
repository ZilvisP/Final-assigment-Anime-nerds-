@extends('dashboard')
@section('content')
    <h2>Creating user</h2>
        <form action="{{route('users.store')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Name" value="{{old('name')}}"
                   class="@error('name')is-invalid @enderror"><br>
            <input type="text" name="email" placeholder="Email" value="{{old('email')}}"
                   class="@error('email')is-invalid @enderror"><br>
            <div class="form-group">
                <label for="email_verified_at">Verified email date:</label>
                <input type="date" name="email_verified_at"
                       value="{{old('email_verified_at')}}"><br>
            </div>
{{--            <input type="text" name="password" placeholder="Password" value="{{old('password')}}"--}}
{{--                   class="@error('password')is-invalid @enderror"><br>--}}
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')"/>

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="new-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation" required autocomplete="new-password"/>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
            </div>
            <x-forms.select field="role" :options="\App\Models\User::ROLES"/>
            <hr>
            <input type="submit" class="waves-effect waves-light btn" value="Add new">
        </form>

@endsection
