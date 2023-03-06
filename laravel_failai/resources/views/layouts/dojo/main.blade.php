<!DOCTYPE html>
<html lang="en">
{{--<head>--}}
{{--    --}}
{{--</head>--}}
<body>

<div class="main_grid">
    @include('layouts.home.header')
</div>
<div class="sidebar">
    @include('layouts.dojo.sidebar_navigation')
</div>
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content', 'Default content')

    <br>
    @include('layouts.dojo.footer')
</div>
</body>
</html>
