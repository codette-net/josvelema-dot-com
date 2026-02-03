<?php

namespace App\Services\Blog;

use Carbon\CarbonImmutable;

final class Post
{
    public function __construct(
        public string $slug,
        public string $title,
        public CarbonImmutable $date,
        public ?string $excerpt,
        public array $tags,
        public string $html,
        public string $sourcePath,
        public bool $draft,
    ) {}
}
