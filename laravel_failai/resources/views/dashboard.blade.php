<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime and Manga</title>
    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/home.css"/>
    <link rel="stylesheet" href="/css/table.css"/>
    <link rel="stylesheet" href="/assets/fontawesome-free-6.3.0-web/css/all.css">
    <script src="/js/home.js" defer></script>
    <script src="/js/stars.js" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<div class="logo">
    @include('components.application-sidelogo')
</div>
<body>
    @include('layouts.header')
<main>
    <div class="sidebar">
        @include('layouts.dojo.sidebar_navigation')
    </div>
    <div class="main-content">
        @yield('content')
    </div>
</main>
    <footer>
    @include('layouts.footer')
    </footer>
</body>
</html>
