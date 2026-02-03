<?php

namespace App\Services\Blog;

use Carbon\CarbonImmutable;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use DateTimeInterface;

final class BlogService
{
    private CommonMarkConverter $md;
    private Filesystem $fs;

    public function __construct(Filesystem $fs)
    {
        $this->fs = $fs;

        $environment = new Environment([]);
        $environment->addExtension(new CommonMarkCoreExtension());


        $this->md = new CommonMarkConverter([], $environment);
    }

    /** @return Collection<int, Post> */
    public function allPublished(): Collection
    {
        $cacheKey = 'blog.posts.allPublished';
        $ttl = (int) config('blog.cache_seconds', 0);

        $loader = fn() => $this->loadAll()
            ->filter(fn(Post $p) => !$p->draft)
            ->sortByDesc(fn(Post $p) => $p->date->getTimestamp())
            ->values();

        return $ttl > 0 ? Cache::remember($cacheKey, $ttl, $loader) : $loader();
    }

    public function findBySlug(string $slug): ?Post
    {
        return $this->allPublished()->firstWhere('slug', $slug);
    }

    /** @return Collection<int, Post> */
    private function loadAll(): Collection
    {
        $dir = (string) config('blog.content_path');

        if (!$this->fs->isDirectory($dir)) {
            return collect();
        }

        $files = collect($this->fs->files($dir))
            ->filter(fn($f) => str_ends_with($f->getFilename(), '.md'));

        return $files->map(function ($file) {
            $path = $file->getPathname();
            $raw = $this->fs->get($path);

            ['meta' => $meta, 'body' => $body] = FrontMatter::parse($raw);

            $filename = $file->getFilename(); // e.g. 2026-01-27-welcome.md
            $slug = $meta['slug'] ?? $this->slugFromFilename($filename);

            $title = (string) ($meta['title'] ?? $this->titleFromSlug($slug));
            $date = $this->dateFromMetaOrFilename($meta, $filename);
            $excerpt = isset($meta['excerpt']) ? (string) $meta['excerpt'] : null;

            $tags = [];
            if (isset($meta['tags']) && is_array($meta['tags'])) {
                $tags = array_values(array_map('strval', $meta['tags']));
            }

            $draft = (bool) ($meta['draft'] ?? false);

            $html = (string) $this->md->convert($body);

            return new Post(
                slug: $slug,
                title: $title,
                date: $date,
                excerpt: $excerpt,
                tags: $tags,
                html: $html,
                sourcePath: $path,
                draft: $draft,
            );
        })->values();
    }

    private function slugFromFilename(string $filename): string
    {
        $base = preg_replace('/\.md$/', '', $filename);
        // strip leading date prefix "YYYY-MM-DD-"
        $base = preg_replace('/^\d{4}-\d{2}-\d{2}-/', '', $base);
        return trim((string) $base);
    }

    private function titleFromSlug(string $slug): string
    {
        $slug = str_replace(['-', '_'], ' ', $slug);
        return ucwords($slug);
    }

    private function dateFromMetaOrFilename(array $meta, string $filename): CarbonImmutable
    {
        if (isset($meta['date']) && $meta['date'] !== null && $meta['date'] !== '') {
            $date = $meta['date'];

            // 1) YAML could already give a DateTime object
            if ($date instanceof DateTimeInterface) {
                return CarbonImmutable::instance($date);
            }

            // 2) If it's a unix timestamp (int or numeric string)
            if (is_int($date) || (is_string($date) && ctype_digit($date))) {
                return CarbonImmutable::createFromTimestamp((int) $date);
            }

            // 3) Normal string date like "2026-02-02" or "2026-02-02 09:00"
            return CarbonImmutable::parse((string) $date);
        }

        // Fallback: derive from filename prefix YYYY-MM-DD-...
        if (preg_match('/^(\d{4}-\d{2}-\d{2})-/', $filename, $m)) {
            return CarbonImmutable::parse($m[1]);
        }

        // If filename is just YYYY-MM-DD.md, also support that
        if (preg_match('/^(\d{4}-\d{2}-\d{2})\.md$/', $filename, $m)) {
            return CarbonImmutable::parse($m[1]);
        }

        return CarbonImmutable::now();
    }

}
