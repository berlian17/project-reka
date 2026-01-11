@extends('layouts.app')

@section('title', 'REKA Wins Environmental Excellence Award')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/media.css') }}">
@endpush

@section('content')
    {{-- Project Header --}}
    <section class="pt-38 pb-8 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">

                <div class="mb-8 fade-in-up" data-delay="0">
                    <h1 class="text-4xl md:text-5xl font-bold text-primary mb-4 leading-tight">
                        {{ $media->title }}
                    </h1>

                    <div class="flex flex-col sm:flex-row sm:items-center sm:gap-4 mb-4">
                        @if ($media->category === 'News')
                            <span class="bg-secondary text-white px-4 py-2 rounded-full text-sm font-semibold mb-2 sm:mb-0">
                                {{ $media->category }}
                            </span>
                        @elseif ($media->category === 'Blogs')
                            <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-2 sm:mb-0">
                                {{ $media->category }}
                            </span>
                        @elseif ($media->category === 'Events')
                            <span class="bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-2 sm:mb-0">
                                {{ $media->category }}
                            </span>
                        @endif

                        <div class="flex items-center gap-4 sm:flex sm:items-center sm:gap-4">
                            <p class="flex items-center gap-2">
                                <i class="fas fa-calendar"></i>
                                {{ date('F d, Y', strtotime($media->created_at)) }}
                            </p>
                            <p class="flex items-center gap-2">
                                <i class="fas fa-user"></i>
                                {{ ucfirst($media->author) }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative rounded-3xl shadow-2xl overflow-hidden mb-8 fade-in-up" data-delay="0">
                    <img src="{{ config('app.cms_url') . $media->cover_img }}" alt="media-img" class="w-full h-[450px] object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- Project Content --}}
    <section class="pb-24 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-6xl mx-auto">
                {{-- Main Content --}}
                <div class="lg:col-span-2 fade-in-up" data-delay="0">
                    <div class="card rounded-3xl shadow-2xl p-8 md:p-12">
                        <div class="article-content">
                            {!! clean($media->description) !!}
                        </div>

                        {{-- Tags --}}
                        @if ($media->mediaTags->count() > 0)
                            <div class="mt-12 pt-8 border-t border-gray-200">
                                <h4 class="font-bold text-primary mb-4">Tags:</h4>
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($media->mediaTags as $media)
                                        <span class="px-4 py-2 bg-gray-100 rounded-lg text-sm">{{ $media->tag->name }}</span>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="lg:col-span-1 fade-in-up" data-delay="300">
                    <div class="card rounded-3xl shadow-2xl p-8 sticky top-24">
                        <h3 class="text-2xl font-bold text-primary mb-6">Recent Posts</h3>
                        <div class="space-y-4">
                            @if ($recentMedias->count() > 0)
                                @foreach ($recentMedias as $item)
                                    <a href="{{ route('media.show', $item->slug) }}" class="block group">
                                        <div class="flex gap-4">
                                            <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0">
                                                <img src="{{ config('app.cms_url') . $item->cover_img }}" alt="recent-media-img" class="w-full h-full object-cover group-hover:scale-110 transition">
                                            </div>
                                            <div>
                                                <p class="text-sm font-semibold text-primary! group-hover:text-secondary! transition mb-2 line-clamp-2">
                                                    {{ $item->title }}
                                                </p>
                                                <span class="text-xs flex items-center gap-1">
                                                    <i class="fas fa-calendar"></i>
                                                    {{ date('F d, Y', strtotime($item->created_at)) }}
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <a href="{{ route('media.show', $media->slug) }}" class="block group">
                                    <div class="flex gap-4">
                                        <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0">
                                            <img src="{{ config('app.cms_url') . $media->cover_img }}" alt="recent-media-img" class="w-full h-full object-cover group-hover:scale-110 transition">
                                        </div>
                                        <div>
                                            <p class="text-sm font-semibold text-primary! group-hover:text-secondary! transition mb-2 line-clamp-2">
                                                {{ $media->title }}
                                            </p>
                                            <span class="text-xs flex items-center gap-1">
                                                <i class="fas fa-calendar"></i>
                                                {{ date('F d, Y', strtotime($media->created_at)) }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
