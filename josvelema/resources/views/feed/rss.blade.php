{!! '<' . '?xml version="1.0" encoding="UTF-8"?>' !!}
<rss version="2.0">
    <channel>
        <title><![CDATA[{{ $siteTitle }}]]></title>
        <link>{{ $siteUrl }}</link>
        <description><![CDATA[Devlog & notes]]></description>
        <language>nl</language>
        <lastBuildDate>{{ $now }}</lastBuildDate>
        <atom:link xmlns:atom="http://www.w3.org/2005/Atom" href="{{ $feedUrl }}" rel="self" type="application/rss+xml" />

        @foreach($posts as $post)
            <item>
                <title><![CDATA[{{ $post->title }}]]></title>
                <link>{{ $siteUrl . route('blog.show', $post->slug, false) }}</link>
                <guid isPermaLink="true">{{ $siteUrl . route('blog.show', $post->slug, false) }}</guid>
                <pubDate>{{ $post->date->toRfc2822String() }}</pubDate>

                @if($post->excerpt)
                    <description><![CDATA[{!! e($post->excerpt) !!}]]></description>
                @else
                    <description><![CDATA[New post]]></description>
                @endif
            </item>
        @endforeach
    </channel>
</rss>
