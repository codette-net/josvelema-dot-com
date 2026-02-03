<?php

namespace App\Http\Controllers;

use App\Services\Blog\BlogService;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    private BlogService $blog;

    public function __construct(
        BlogService $blog
    ) {
        $this->blog = $blog;
    }

    public function index(): View
    {
        $posts = $this->blog->allPublished(); // newest first
        return view('blog.index', compact('posts'));
    }

    public function show(string $slug): View
    {
        $post = $this->blog->findBySlug($slug);

        abort_if(!$post, 404);

        return view('blog.show', compact('post'));
    }
}
