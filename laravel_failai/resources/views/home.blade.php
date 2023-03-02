<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Anime and Manga Site</title>
        <link rel="stylesheet" href="/css/navigation.top.css"/>
        <script src="/js/home.js" defer></script>
        <script
            src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
            crossorigin="anonymous"></script>
</head>
<body>
<header>
    @include('layouts.header')
</header>
<main>
    @yield('content')
</main>
<footer>

</footer>

</body>
</html>
