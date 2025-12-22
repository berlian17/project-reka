@extends('layouts.app')

@section('title', 'Media')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/media.css') }}">
@endpush

@section('content')
    <section class="media-hero min-h-[60vh] flex items-center justify-center pt-20">
        <div class="container mx-auto px-4 lg:px-8 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h1 class="hero-title text-5xl md:text-6xl font-bold mb-6 leading-tight fade-in-up">
                    Our Media & News
                </h1>
                <div class="w-[15%] h-1 bg-secondary mx-auto mb-8 fade-in-up" style="animation-delay: 0.2s;"></div>
                <p class="text-xl text-white! fade-in-up" style="animation-delay: 0.3s;">
                    Stay informed about our latest projects, innovations, and industry insights
                </p>
            </div>
        </div>
    </section>

    {{-- Latest --}}
    <section class="pt-38 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="card latest-media-card max-w-6xl mx-auto rounded-3xl shadow-2xl overflow-hidden border border-gray-100 lg:h-[380px] fade-in-up" data-delay="0">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 h-full">
                    <div class="relative h-full overflow-hidden">
                        <img src="{{ env('CMS_URL') . $latestMedia->cover_img }}" alt="latest-media-img" class="w-full h-full object-cover">
                        <div class="absolute top-6 left-6">
                            @if ($latestMedia->category === 'News')
                                <span class="inline-block bg-secondary text-white px-4 py-2 rounded-full font-semibold">
                                    {{ $latestMedia->category }}
                                </span>
                            @elseif ($latestMedia->category === 'Blogs')
                                <span class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full font-semibold">
                                    {{ $latestMedia->category }}
                                </span>
                            @elseif ($latestMedia->category === 'Events')
                                <span class="inline-block bg-purple-600 text-white px-4 py-2 rounded-full font-semibold">
                                    {{ $latestMedia->category }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="p-8 flex flex-col h-full">
                        <div>
                            <div class="flex items-center gap-4 font-semibold mb-4">
                                <span class="flex items-center gap-2">
                                    <i class="fas fa-calendar"></i>
                                    {{ date('F d, Y', strtotime($latestMedia->created_at)) }}
                                </span>
                                <span class="flex items-center gap-2">
                                    <i class="fas fa-user"></i>
                                    {{ ucfirst($latestMedia->author) }}
                                </span>
                            </div>
                            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6 leading-tight">
                                {{ $latestMedia->title }}
                            </h2>
                            <p class="mb-8 leading-relaxed">
                                {{ Str::limit($latestMedia->excerpt, 250, '...') }}
                            </p>
                        </div>
                        <a href="{{ route('media.show', $latestMedia->slug) }}" class="btn-primary rounded-lg font-semibold inline-flex items-center gap-2 group w-fit mt-auto">
                            Read More
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Filter & Search --}}
    <section id="medias" class="py-12 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex flex-col md:flex-row max-w-6xl mx-auto justify-between items-center gap-6 fade-in-up" data-delay="0">
                {{-- Filter Buttons --}}
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('media.index', ['category' => 'All']) }}#medias"
                        class="filter-btn {{ !request('category') || request('category') == 'All' ? 'active' : '' }} px-6 py-3 rounded-lg font-semibold text-sm border border-gray-200">
                        All Media
                    </a>
                    <a href="{{ route('media.index', ['category' => 'News']) }}#medias"
                        class="filter-btn {{ request('category') == 'News' ? 'active' : '' }} px-6 py-3 rounded-lg font-semibold text-sm border border-gray-200">
                        News
                    </a>
                    <a href="{{ route('media.index', ['category' => 'Events']) }}#medias"
                        class="filter-btn {{ request('category') == 'Events' ? 'active' : '' }} px-6 py-3 rounded-lg font-semibold text-sm border border-gray-200">
                        Events
                    </a>
                    <a href="{{ route('media.index', ['category' => 'Blogs']) }}#medias"
                        class="filter-btn {{ request('category') == 'Blogs' ? 'active' : '' }} px-6 py-3 rounded-lg font-semibold text-sm border border-gray-200">
                        Blogs
                    </a>
                </div>

                <!-- Search -->
                <form action="{{ route('media.index') }}" method="GET" class="relative w-full md:w-auto">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    <input 
                        type="text" 
                        id="searchInput"
                        data-url="{{ route('media.index') }}"
                        data-category="{{ request('category') }}"
                        value="{{ request('search') }}"
                        placeholder="Search media..." 
                        class="w-full md:w-80 pl-12 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none transition"
                    >
                    <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </form>
            </div>
        </div>
    </section>

    <section class="pb-38 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div id="loadingOverlay" class="hidden absolute inset-0 bg-white/90 flex items-center justify-center z-50">
                <div class="flex flex-col items-center gap-3">
                    <svg class="animate-spin h-8 w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 font-medium">Loading data...</span>
                </div>
            </div>

            <div id="tableWrapper" class="overflow-x-auto">
                @include('pages.media.partials.list')
            </div>
        </div>
    </section>
@endsection
