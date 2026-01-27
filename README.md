# josvelema.com

Personal website built with Laravel: CV + Projects + Markdown blog (frontmatter-based).

## Features
- Static pages: Home / CV / Projects / Contact
- Blog powered by Markdown files in `content/posts`
- YAML frontmatter for metadata: title/date/tags/excerpt/draft
- Markdown rendered with League CommonMark

## Requirements
- PHP 8.2+
- Composer

## Local setup
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
