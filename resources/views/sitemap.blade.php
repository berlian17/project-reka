<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($staticUrls as $url)
    <url>
        <loc>{{ $url['loc'] }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>{{ $url['changefreq'] }}</changefreq>
        <priority>{{ $url['priority'] }}</priority>
    </url>
    @endforeach

    @foreach ($projects as $project)
    <url>
        <loc>{{ url('projects/' . $project->slug) }}</loc>
        <lastmod>{{ $project->updated_at->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach

    @foreach ($services as $service)
    <url>
        <loc>{{ url('service/' . $service->slug) }}</loc>
        <lastmod>{{ $service->updated_at->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach

    @foreach ($medias as $media)
    <url>
        <loc>{{ url('media/' . $media->slug) }}</loc>
        <lastmod>{{ $media->updated_at->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
</urlset>
