@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <div class="mx-auto max-w-4xl space-y-10">

        <header class="space-y-2">
            <h1 class="text-3xl font-semibold tracking-tight">Blog</h1>
            <p class="text-zinc-600 dark:text-zinc-400">
                Devlog, experiments and notes while building and learning.
            </p>
        </header>

        @if($posts->isEmpty())
            <p class="text-zinc-600 dark:text-zinc-400">No posts yet.</p>
        @else
            <div class="grid gap-6 sm:grid-cols-2">

                @foreach($posts as $post)
                    <article class="group rounded-2xl border border-zinc-200 bg-white p-5 transition hover:shadow-sm dark:border-zinc-800 dark:bg-zinc-950">

                        <!-- Date and reading time-->
                        <div class="flex items-center gap-2 text-xs text-zinc-500 dark:text-zinc-400">
                            <time>{{ $post->date->format('F j, Y') }}</time>
                            <span>•</span>
                            <span>{{ $post->readingTime }} min</span>
                        </div>

                        <!-- Title -->
                        <h2 class="mt-2 text-lg font-semibold leading-snug">
                            <a href="{{ route('blog.show', $post->slug) }}"
                               class="hover:underline decoration-zinc-400 underline-offset-4">
                                {{ $post->title }}
                            </a>
                        </h2>

                        <!-- Excerpt -->
                        @if($post->excerpt)
                            <p class="mt-2 text-sm leading-relaxed text-zinc-700 dark:text-zinc-300">
                                {{ $post->excerpt }}
                            </p>
                        @endif

                        <!-- Tags -->
                        @if(!empty($post->tags))
                            <div class="mt-4 flex flex-wrap gap-2">
                                @foreach($post->tags as $tag)
                                    <span class="rounded-md bg-zinc-100 px-2 py-1 text-xs text-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">
                                    {{ $tag }}
                                </span>
                                @endforeach
                            </div>
                        @endif

                    </article>
                @endforeach

            </div>
        @endif

    </div>
@endsection
