<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Project;
use App\Models\Service;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::where('status', 1)
            ->take(3)
            ->get();
        $projects = Project::where('status', 1)
            ->get()
            ->shuffle()
            ->values()
            ->take(3);

        return view('pages.home', compact(
            'services',
            'projects'
        ));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function siteMap()
    {
        $filePath = storage_path('app/public/sitemap.xml');
        
        // Cek apakah file sudah ada dan masih fresh (< 24 jam)
        if (file_exists($filePath) && (time() - filemtime($filePath)) < 86400) {
            $xml = file_get_contents($filePath);
        } else {
            $xml = $this->generateSitemap();
            
            // Simpan ke storage
            file_put_contents($filePath, $xml);
        }
        
        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    public function generateSitemap()
    {
        $staticUrls = [
            [
                'loc'           => url('/'),
                'changefreq'    => 'daily',
                'priority'      => '1.0',
            ],
            [
                'loc'           => url('/about'),
                'changefreq'    => 'monthly',
                'priority'      => '0.8',
            ],
            [
                'loc'           => url('/contact'),
                'changefreq'    => 'monthly',
                'priority'      => '0.8',
            ],
            [
                'loc'           => url('/projects'),
                'changefreq'    => 'monthly',
                'priority'      => '0.5',
            ],
            [
                'loc'           => url('/services'),
                'changefreq'    => 'monthly',
                'priority'      => '0.5',
            ],
            [
                'loc'           => url('/services'),
                'changefreq'    => 'monthly',
                'priority'      => '0.5',
            ],
        ];

        $projects = Project::where('status', 1)->get();
        $services = Service::where('status', 1)->get();
        $medias = Media::where('status', 1)->get();

        return view('sitemap', compact(
            'staticUrls',
            'projects',
            'services',
            'medias'
        ))->render();
    }
}
