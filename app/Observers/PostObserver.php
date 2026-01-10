<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        $this->generateSitemap();
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        $this->generateSitemap();
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        $this->generateSitemap();
    }

    /**
     * Generate the sitemap XML file.
     */
    protected function generateSitemap(): void
    {
        $posts = Post::published()->latest('updated_at')->get();

        $urls = [];

        // Static Pages
        $urls[] = [
            'loc' => url('/'),
            'lastmod' => now()->toAtomString(),
            'changefreq' => 'daily',
            'priority' => '1.0'
        ];

        $urls[] = [
            'loc' => route('blog.index'),
            'lastmod' => $posts->first() ? $posts->first()->updated_at->toAtomString() : now()->toAtomString(),
            'changefreq' => 'daily',
            'priority' => '0.8'
        ];

        // Posts
        foreach ($posts as $post) {
            $urls[] = [
                'loc' => route('blog.show', $post->slug),
                'lastmod' => $post->updated_at->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.6'
            ];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . $url['loc'] . '</loc>';
            $xml .= '<lastmod>' . $url['lastmod'] . '</lastmod>';
            $xml .= '<changefreq>' . $url['changefreq'] . '</changefreq>';
            $xml .= '<priority>' . $url['priority'] . '</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        File::put(public_path('index-sitemap.xml'), $xml);
    }
}
