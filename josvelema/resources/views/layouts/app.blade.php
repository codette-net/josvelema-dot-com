<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" type="application/rss+xml" title="josvelema.com RSS" href="{{ route('feed.rss') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        (function () {
            const stored = localStorage.getItem('theme'); // 'light' | 'dark' | null
            const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            const theme = stored ? stored : (prefersDark ? 'dark' : 'light');

            if (theme === 'dark') document.documentElement.classList.add('dark');
            else document.documentElement.classList.remove('dark');
        })();
    </script>

    @vite(['resources/css/app.css','resources/css/rj-styles.css', 'resources/js/app.js'])
    <title>@yield('title', 'josvelema.com') - JosVelema.com</title>
</head>
<body class="bg-white text-zinc-900 dark:bg-zinc-950 dark:text-zinc-100 rj-gradient-smokey-white">
@php
    function nav_is_active(string $pattern): bool {
        return request()->routeIs($pattern);
    }

    function nav_link_attrs(string $pattern): string {
        return nav_is_active($pattern) ? 'aria-current="page"' : '';
    }

    function nav_classes(string $pattern): string {
        $base = 'text-sm transition-colors rounded-md px-1 py-1 focus:outline-none focus-visible:ring-2 focus-visible:ring-zinc-400 dark:focus-visible:ring-zinc-600';
        $active = 'text-zinc-900 font-semibold dark:text-white';
        $inactive = 'text-zinc-700 hover:text-zinc-900 dark:text-zinc-300 dark:hover:text-white';

        return nav_is_active($pattern) ? "$base $active" : "$base $inactive";
    }

    function nav_mobile_classes(string $pattern): string {
        $base = 'rounded-md px-2 py-2 text-sm transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-zinc-400 dark:focus-visible:ring-zinc-600';
        $active = 'bg-zinc-100 text-zinc-900 font-semibold dark:bg-zinc-900 dark:text-white';
        $inactive = 'text-zinc-700 hover:bg-zinc-50 dark:text-zinc-200 dark:hover:bg-zinc-900';

        return nav_is_active($pattern) ? "$base $active" : "$base $inactive";
    }
@endphp


<nav class="border-b border-zinc-200 bg-white dark:border-zinc-800 dark:bg-zinc-950">
    <div class="mx-auto max-w-5xl px-4">
        <div class="flex h-14 items-center justify-between">
            <!-- Brand -->
            <a href="{{ route('home') }}" class="font-semibold text-zinc-900 dark:text-zinc-100">
                josvelema.com
            </a>

            <!-- Desktop links -->
            <div class="hidden items-center gap-6 md:flex">
                <a {!! nav_link_attrs('cv') !!} class="{{ nav_classes('cv') }}" href="{{ route('cv') }}">CV</a>
                <a {!! nav_link_attrs('projects') !!} class="{{ nav_classes('projects') }}" href="{{ route('projects') }}">Projects</a>
                <a {!! nav_link_attrs('blog.*') !!} class="{{ nav_classes('blog.*') }}" href="{{ route('blog.index') }}">Blog</a>
                <a {!! nav_link_attrs('contact') !!} class="{{ nav_classes('contact') }}" href="{{ route('contact') }}">Contact</a>



                <!-- Theme toggle -->
                <button
                    id="themeToggle"
                    type="button"
                    class="rounded-lg border border-zinc-200 px-3 py-1.5 text-sm text-zinc-700 hover:bg-zinc-50 dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900"
                    aria-label="Toggle dark mode"
                >
                    <span class="hidden dark:inline">🌙 Dark</span>
                    <span class="dark:hidden">☀️ Light</span>
                </button>
            </div>

            <!-- Mobile buttons -->
            <div class="flex items-center gap-2 md:hidden">
                <button
                    id="themeToggleMobile"
                    type="button"
                    class="rounded-lg border border-zinc-200 px-3 py-1.5 text-sm text-zinc-700 hover:bg-zinc-50 dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900"
                    aria-label="Toggle dark mode"
                >
                    <span class="hidden dark:inline">🌙</span>
                    <span class="dark:hidden">☀️</span>
                </button>

                <button
                    id="navToggle"
                    type="button"
                    class="rounded-lg border border-zinc-200 p-2 text-zinc-700 hover:bg-zinc-50 dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900"
                    aria-controls="mobileNav"
                    aria-expanded="false"
                    aria-label="Open menu"
                >
                    <!-- hamburger -->
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 5h14a1 1 0 010 2H3a1 1 0 010-2zm0 6h14a1 1 0 010 2H3a1 1 0 010-2zm0 6h14a1 1 0 010 2H3a1 1 0 010-2z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobileNav" class="hidden pb-4 md:hidden">
            <div class="flex flex-col gap-2">
                <a {!! nav_link_attrs('cv') !!} class="{{ nav_mobile_classes('cv') }}" href="{{ route('cv') }}">CV</a>
                <a {!! nav_link_attrs('projects') !!} class="{{ nav_mobile_classes('projects') }}" href="{{ route('projects') }}">Projects</a>
                <a {!! nav_link_attrs('blog.*') !!} class="{{ nav_mobile_classes('blog.*') }}" href="{{ route('blog.index') }}">Blog</a>
                <a {!! nav_link_attrs('contact') !!} class="{{ nav_mobile_classes('contact') }}" href="{{ route('contact') }}">Contact</a>


            </div>
        </div>
    </div>
</nav>


<main class="mx-auto max-w-5xl px-4 py-8">
    @yield('content')
</main>
</body>
</html>
