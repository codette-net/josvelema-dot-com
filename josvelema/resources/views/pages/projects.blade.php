@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div class="mx-auto max-w-5xl space-y-10">

        <header class="space-y-2">
            <h1 class="text-3xl font-semibold tracking-tight">Projects</h1>
            <p class="text-zinc-600 dark:text-zinc-400">
                A selection of projects I built, maintained, or contributed to.
            </p>
        </header>

        @php
            $featured = collect($projects)->filter(fn($p) => !empty($p['featured']))->values();
            $others = collect($projects)->filter(fn($p) => empty($p['featured']))->values();
        @endphp

        @if($featured->isNotEmpty())
            <section class="space-y-4">
                <h2 class="text-lg font-semibold">Featured</h2>

                <div class="grid gap-6 lg:grid-cols-2">
                    @foreach($featured as $project)
                        <article class="overflow-hidden rounded-2xl border border-zinc-200 bg-white dark:border-zinc-800 dark:bg-zinc-950">
                            <div class="aspect-[16/9] w-full overflow-hidden bg-zinc-100 dark:bg-zinc-900">
                                <img
                                    src="{{ $project['image'] }}"
                                    alt="{{ $project['alt'] ?? $project['title'] }}"
                                    class="h-full w-full object-cover"
                                    loading="lazy"
                                />
                            </div>

                            <div class="space-y-4 p-5">
                                <div class="space-y-1">
                                    <h3 class="text-lg font-semibold leading-snug">{{ $project['title'] }}</h3>
                                    <p class="text-sm leading-relaxed text-zinc-600 dark:text-zinc-400">
                                        {{ $project['subtitle'] ?? '' }}
                                    </p>
                                </div>

                                @if(!empty($project['stack']))
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($project['stack'] as $tag)
                                            <span class="rounded-md bg-zinc-100 px-2 py-1 text-xs text-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">
                                            {{ $tag }}
                                        </span>
                                        @endforeach
                                    </div>
                                @endif

                                @if(!empty($project['links']))
                                    <div class="flex flex-wrap gap-2 pt-1">
                                        @foreach($project['links'] as $link)
                                            <a
                                                href="{{ $link['url'] }}"
                                                target="_blank"
                                                rel="noopener"
                                                class="inline-flex items-center rounded-lg border border-zinc-200 px-3 py-1.5 text-sm hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900"
                                            >
                                                {{ $link['label'] }}
                                                <span class="ml-2 text-zinc-400">↗</span>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif

        @if($others->isNotEmpty())
            <section class="space-y-4">
                <h2 class="text-lg font-semibold">More projects</h2>

                <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                    @foreach($others as $project)
                        <article class="overflow-hidden rounded-2xl border border-zinc-200 bg-white dark:border-zinc-800 dark:bg-zinc-950">
                            <div class="aspect-[16/9] w-full overflow-hidden bg-zinc-100 dark:bg-zinc-900">
                                <img
                                    src="{{ $project['image'] }}"
                                    alt="{{ $project['alt'] ?? $project['title'] }}"
                                    class="h-full w-full object-cover"
                                    loading="lazy"
                                />
                            </div>

                            <div class="space-y-3 p-5">
                                <div class="space-y-1">
                                    <h3 class="font-semibold">{{ $project['title'] }}</h3>
                                    <p class="text-sm text-zinc-600 dark:text-zinc-400">
                                        {{ $project['subtitle'] ?? '' }}
                                    </p>
                                </div>

                                @if(!empty($project['stack']))
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($project['stack'] as $tag)
                                            <span class="rounded-md bg-zinc-100 px-2 py-1 text-xs text-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">
                                            {{ $tag }}
                                        </span>
                                        @endforeach
                                    </div>
                                @endif

                                @if(!empty($project['links']))
                                    <div class="flex flex-wrap gap-2 pt-1">
                                        @foreach($project['links'] as $link)
                                            <a
                                                href="{{ $link['url'] }}"
                                                target="_blank"
                                                rel="noopener"
                                                class="text-sm text-zinc-700 underline decoration-zinc-300 underline-offset-4 hover:text-zinc-900 dark:text-zinc-300 dark:hover:text-white"
                                            >
                                                {{ $link['label'] }} ↗
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif

    </div>
@endsection
