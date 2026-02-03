<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'josvelema.com')</title>
</head>
<body>
<nav style="display:flex;gap:12px; padding:16px; border-bottom:1px solid #ddd;">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('cv') }}">CV</a>
    <a href="{{ route('projects') }}">Projects</a>
    <a href="{{ route('blog.index') }}">Blog</a>
    <a href="{{ route('contact') }}">Contact</a>
</nav>

<main style="max-width: 820px; margin: 0 auto; padding: 24px;">
    @yield('content')
</main>
</body>
</html>
