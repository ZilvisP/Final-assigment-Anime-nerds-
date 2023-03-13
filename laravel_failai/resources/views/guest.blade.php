<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/guest.css">
</head>
<body>
<header>
    @include('layouts.header')
</header>
<main>
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
    </div>
    <div class="content-container">
        <div class="logo-container">
            @include('components.application-logo')
            <div class="main-content">
                @yield('content', 'Default content')
            </div>
        </div>
</main>
<footer>
    @include('layouts.footer')
</footer>
</body>
</html>
