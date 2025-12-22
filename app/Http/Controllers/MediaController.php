<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $category = $request->query('category');

        $latestMedia = Media::where('status', 1)
            ->latest()
            ->first();
        $medias = Media::where('status', 1)
            ->when($search, fn ($q) =>
                $q->where('title', 'like', "%{$search}%")
            )
            ->when($category && $category !== 'All', fn ($q) =>
                $q->where('category', $category)
            )
            ->paginate(6)
            ->withQueryString();

        if ($request->ajax()) {
            return view('pages.media.partials.list', compact('medias'))->render();
        }

        return view('pages.media.index', compact(
            'latestMedia',
            'medias'
        ));
    }

    public function show($slug)
    {
        $media = Media::with('mediaTags', 'mediaTags.tag')
            ->where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();
        $recentMedias = Media::where('status', 1)
            ->where('id', '!=', $media->id)
            ->select('title', 'slug', 'cover_img', 'created_at')
            ->latest()
            ->take(5)
            ->get();

        return view('pages.media.show', compact(
            'media',
            'recentMedias'
        ));
    }
}
