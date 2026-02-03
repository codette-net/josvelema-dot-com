@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>

    @if($posts->isEmpty())
        <p>Nog geen posts.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li style="margin-bottom:16px;">
                    <div><small>{{ $post->date->format('Y-m-d') }}</small></div>
                    <a href="{{ route('blog.show', $post->slug) }}">
                        <strong>{{ $post->title }}</strong>
                    </a>
                    @if($post->excerpt)
                        <div>{{ $post->excerpt }}</div>
                    @endif
                    @if(!empty($post->tags))
                        <div><small>Tags: {{ implode(', ', $post->tags) }}</small></div>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
@endsection
