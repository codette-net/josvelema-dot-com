<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Services\Blog\BlogService;

class PageController extends Controller
{
    public function home(Blogservice $blog): View
    {
        $latestPost = $blog->allPublished()->first();
        return view('pages.home', compact('latestPost'));
    }

    public function cv(): View
    {
        return view('pages.cv');
    }

    public function projects(): View
    {
      // hardcoded example projects, replace with dynamic data on later stage
        $projects = [
            [
                'title' => 'Unitedsound.systems',
                'subtitle' => 'E-commerce platform for an underground techno label',
                'image' => '/images/swan_on_white.png',
                'alt' => 'Screenshot of Unitedsound.systems',
                'stack' => ['PHP', 'Laravel', 'MySQL', 'Tailwind'],
                'links' => [
                    ['label' => 'Live', 'url' => 'https://unitedsound.systems'],
                ],
                'featured' => true,
            ],
            [
                'title' => 'UndergroundSound.cloud',
                'subtitle' => 'Open source music platform (in development)',
                'image' => '/images/swan_on_white.png',
                'alt' => 'Screenshot of UndergroundSound.cloud',
                'stack' => ['Laravel', 'API', 'Queues', 'S3'],
                'links' => [
                    ['label' => 'Website', 'url' => 'https://undergroundsound.cloud'],
                    ['label' => 'GitHub', 'url' => 'https://github.com/codette-net'],
                ],
                'featured' => true,
            ],
            [
                'title' => 'Klimaathelpdesk',
                'subtitle' => 'Volunteer dev work on a Django/Wagtail platform',
                'image' => '/images/swan_on_white.png',
                'alt' => 'Screenshot of Klimaathelpdesk',
                'stack' => ['Python', 'Django', 'Wagtail', 'PostgreSQL'],
                'links' => [
                    ['label' => 'Project', 'url' => 'https://klimaathelpdesk.org'],
                ],
                'featured' => false,
            ],
        ];


        return view('pages.projects', compact('projects'));
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}
