<?php

namespace App\Services\Blog;

use Symfony\Component\Yaml\Yaml;

final class FrontMatter
{
    /**
     * @return array{meta: array, body: string}
     */
    public static function parse(string $raw): array
    {
        // Frontmatter format:
        // ---
        // title: ...
        // date: 2026-01-27
        // ---
        // markdown body...

        if (!str_starts_with($raw, "---\n")) {
            return ['meta' => [], 'body' => $raw];
        }

        $parts = preg_split("/^---\s*$/m", $raw, 3);
        // preg_split returns: ["", "<yaml>\n", "<body>"] in typical cases
        if (!$parts || count($parts) < 3) {
            return ['meta' => [], 'body' => $raw];
        }

        $yaml = trim($parts[1] ?? '');
        $body = ltrim($parts[2] ?? '');

        $meta = $yaml !== '' ? (Yaml::parse($yaml) ?? []) : [];

        if (!is_array($meta)) {
            $meta = [];
        }

        return ['meta' => $meta, 'body' => $body];
    }
}
