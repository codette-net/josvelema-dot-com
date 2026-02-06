@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="mx-auto max-w-5xl space-y-14">

        <!-- HERO -->
        <section class="relative overflow-hidden rounded-3xl border border-zinc-200 bg-white px-6 py-10 dark:border-zinc-800 dark:bg-zinc-950 md:px-10 md:py-14">
            <!-- translucent SVG background -->
            <img
                src="/images/swan_on_white.svg"
                alt=""
                class="pointer-events-none absolute inset-0 h-full w-full object-cover opacity-40 dark:opacity-20"
            />

            <div class="relative grid gap-10 md:grid-cols-12 md:items-center">

                <!-- Text -->
                <div class="md:col-span-7 space-y-5">
                    <div class="space-y-2">
                        <h1 class="text-4xl font-semibold tracking-tight text-zinc-900 dark:text-zinc-100 md:text-5xl">
                            Jos Velema
                            <span class="text-zinc-500 dark:text-zinc-400">.com</span>
                        </h1>
                        <p class="text-lg font-medium text-zinc-700 dark:text-zinc-300">
                            Full stack web developer (PHP / Laravel) — building useful things with clean code.
                        </p>
                    </div>

                    <p class="text-sm leading-6 text-zinc-700 dark:text-zinc-300 md:text-base">
                        Hi! I’m Jos, a web developer based in France, originally from the Netherlands.
                        I love all things code and tech, and I’m always looking to improve people’s lives by making a positive impact.
                        If you’re looking for help on a project — or just want to chat — feel free to reach out.
                    </p>

                    <!-- CTAs -->
                    <div class="flex flex-wrap gap-3 pt-2">
                        <a href="{{ route('projects') }}"
                           class="rounded-lg bg-zinc-900 px-5 py-2 text-sm font-medium text-white hover:bg-black dark:bg-white dark:text-black dark:hover:bg-zinc-200">
                            View projects
                        </a>

                        <a href="{{ route('contact') }}"
                           class="rounded-lg border border-zinc-200 px-5 py-2 text-sm font-medium hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900">
                            Contact
                        </a>

                        <a href="{{ route('blog.index') }}"
                           class="rounded-lg border border-zinc-200 px-5 py-2 text-sm font-medium hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900">
                            Read the blog
                        </a>
                    </div>

                    <!-- Socials -->
                    <div class="flex flex-wrap items-center gap-3 pt-2 text-sm">
                        <a class="rounded-lg border border-zinc-200 px-3 py-1.5 hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900"
                           href="https://github.com/codette-net" target="_blank" rel="noopener">
                            GitHub
                        </a>
                        <a class="rounded-lg border border-zinc-200 px-3 py-1.5 hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900"
                           href="https://github.com/josvelema" target="_blank" rel="noopener">
                            GitHub (legacy)
                        </a>
                        <a class="rounded-lg border border-zinc-200 px-3 py-1.5 hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900"
                           href="https://www.linkedin.com/in/JosVelema/" target="_blank" rel="noopener">
                            LinkedIn
                        </a>
                    </div>
                </div>

                <!-- Profile -->
                <div class="md:col-span-5">
                    <div class="mx-auto w-full max-w-sm">
                        <div class="aspect-square overflow-hidden rounded-3xl border border-zinc-200 bg-zinc-100 shadow-sm dark:border-zinc-800 dark:bg-zinc-900">
                            <img
                                src="/images/josprofiel.jpg"
                                alt="Portrait of Jos Velema"
                                class="h-full w-full object-cover"
                                loading="lazy"
                            />
                        </div>
                        <p class="mt-3 text-center text-xs text-zinc-500 dark:text-zinc-400">
                            Based in France • originally NL
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- LATEST POST -->
        <section class="grid gap-6 md:grid-cols-12 md:items-start">
            <div class="md:col-span-5 space-y-2">
                <h2 class="text-xl font-semibold">Latest post</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400">
                    Short devlog updates while building this site.
                </p>
            </div>

            <div class="md:col-span-7">
                @if(!empty($latestPost))
                    <article class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-950">
                        <div class="flex items-center gap-2 text-xs text-zinc-500 dark:text-zinc-400">
                            <time datetime="{{ $latestPost->date->toDateString() }}">
                                {{ $latestPost->date->format('F j, Y') }}
                            </time>
                            <span>•</span>
                            <span>{{ $latestPost->readingTime ?? 1 }} min read</span>
                        </div>

                        <h3 class="mt-2 text-lg font-semibold leading-snug">
                            <a href="{{ route('blog.show', $latestPost->slug) }}"
                               class="hover:underline decoration-zinc-400 underline-offset-4">
                                {{ $latestPost->title }}
                            </a>
                        </h3>

                        @if($latestPost->excerpt)
                            <p class="mt-2 text-sm leading-relaxed text-zinc-700 dark:text-zinc-300">
                                {{ $latestPost->excerpt }}
                            </p>
                        @endif

                        <div class="mt-4 flex flex-wrap gap-3">
                            <a href="{{ route('blog.show', $latestPost->slug) }}"
                               class="rounded-lg bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-black dark:bg-white dark:text-black dark:hover:bg-zinc-200">
                                Read post
                            </a>
                            <a href="{{ route('blog.index') }}"
                               class="rounded-lg border border-zinc-200 px-4 py-2 text-sm font-medium hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900">
                                All posts
                            </a>
                        </div>
                    </article>
                @else
                    <div class="rounded-2xl border border-zinc-200 bg-white p-6 text-sm text-zinc-600 dark:border-zinc-800 dark:bg-zinc-950 dark:text-zinc-400">
                        No posts yet — check back soon.
                    </div>
                @endif
            </div>
        </section>

    </div>
@endsection
