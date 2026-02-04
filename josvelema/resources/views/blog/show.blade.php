@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <p><small>{{ $post->date->format('Y-m-d') }}</small></p>

        <div class="prose prose-zinc max-w-none">
            {!! $post->html !!}
        </div>

        @if(!empty($post->tags))
            <p><small>Tags: {{ implode(', ', $post->tags) }}</small></p>
        @endif
    </article>
@endsection
