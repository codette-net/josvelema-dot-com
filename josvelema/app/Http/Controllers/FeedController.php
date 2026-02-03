<?php

namespace App\Http\Controllers;

use App\Services\Blog\BlogService;
use Illuminate\Http\Response;

class FeedController extends Controller
{
    public function __construct(private BlogService $blog) {}

    public function rss(): Response
    {
        $posts = $this->blog->allPublished()->take(20);

        $siteTitle = config('app.name', 'josvelema.com');
        $siteUrl = rtrim(config('app.url'), '/');
        $feedUrl = $siteUrl . route('feed.rss', absolute: false);

        $now = now()->toRfc2822String();

        $xml = view('feed.rss', compact('posts', 'siteTitle', 'siteUrl', 'feedUrl', 'now'))->render();

        return response($xml, 200)
            ->header('Content-Type', 'application/rss+xml; charset=UTF-8');
    }
}
