<?php

namespace App\Http\Controllers;

use App\Services\Blog\BlogService;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __construct(private BlogService $blog) {}

    public function index(): Response
    {
        $siteUrl = rtrim(config('app.url'), '/');

        $static = [
            route('home', absolute: false),
            route('cv', absolute: false),
            route('projects', absolute: false),
            route('contact', absolute: false),
            route('blog.index', absolute: false),
        ];

        $posts = $this->blog->allPublished();

        $xml = view('seo.sitemap', compact('siteUrl', 'static', 'posts'))->render();

        return response($xml, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
