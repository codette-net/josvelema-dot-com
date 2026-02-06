<?php

namespace App\Services\Blog;

use Carbon\CarbonImmutable;

final class Post
{
    public string $slug;
    public string $title;
    public CarbonImmutable $date;
    public ?string $excerpt;
    public array $tags;
    public string $html;
    public string $sourcePath;
    public bool $draft;

    public int $readingTime;

    public function __construct(
        string $slug,
        string $title,
        CarbonImmutable $date,
        ?string $excerpt,
        array $tags,
        string $html,
        string $sourcePath,
        bool $draft
    ) {
        $this->slug = $slug;
        $this->title = $title;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->tags = $tags;
        $this->html = $html;
        $this->sourcePath = $sourcePath;
        $this->draft = $draft;

        $this->readingTime = $this->calculateReadingTime($html);
    }

    private function calculateReadingTime(string $html): int
    {
        $text = trim(strip_tags($html));

        if ($text === '') {
            return 1;
        }

        $words = str_word_count($text);

        return max(1, (int) ceil($words / 200));
    }
}
