{!! '<' . '?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($static as $path)
        <url>
            <loc>{{ $siteUrl . $path }}</loc>
        </url>
    @endforeach

    @foreach($posts as $post)
        <url>
            <loc>{{ $siteUrl . route('blog.show', $post->slug, false) }}</loc>
            <lastmod>{{ $post->date->format('Y-m-d') }}</lastmod>
        </url>
    @endforeach
</urlset>
