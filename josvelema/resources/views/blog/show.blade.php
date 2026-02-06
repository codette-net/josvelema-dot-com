@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <article class="mx-auto max-w-3xl">

        <!-- Header -->
        <header class="mb-8 space-y-4">

            <div class="flex items-center gap-3 text-sm text-zinc-500 dark:text-zinc-400">
                <time datetime="{{ $post->date->toDateString() }}">
                    {{ $post->date->format('F j, Y') }}
                </time>

                <span>•</span>

                <span>{{ $post->readingTime }} min read</span>
            </div>


            <h1 class="text-3xl font-semibold leading-tight tracking-tight">
                {{ $post->title }}
            </h1>

            @if(!empty($post->tags))
                <div class="flex flex-wrap gap-2 pt-2">
                    @foreach($post->tags as $tag)
                        <span class="rounded-md bg-zinc-100 px-2 py-1 text-xs text-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            @endif

        </header>

        <!-- Markdown content -->
        <div class="prose prose-zinc max-w-none dark:prose-invert
                prose-headings:font-semibold
                prose-a:decoration-zinc-400
                prose-a:underline-offset-4
                prose-pre:rounded-xl
                prose-pre:border prose-pre:border-zinc-200 dark:prose-pre:border-zinc-800">

            {!! $post->html !!}

        </div>

        <!-- Footer -->
        <footer class="mt-12 border-t border-zinc-200 pt-6 text-sm dark:border-zinc-800">
            <a href="{{ route('blog.index') }}"
               class="text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">
                ← Back to blog
            </a>
        </footer>

    </article>
@endsection
