<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
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
                'title' => 'Project A',
                'description' => 'Korte omschrijving…',
                'url' => 'https://example.com',
                'stack' => ['Laravel', 'MySQL', 'Tailwind'],
            ],
        ];

        return view('pages.projects', compact('projects'));
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}
