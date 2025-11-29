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
            <div class="card latest-media-card max-w-6xl mx-auto rounded-3xl shadow-2xl overflow-hidden border border-gray-100 fade-in-up" data-delay="0">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                    <div class="relative h-auto overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&h=600&fit=crop" 
                            alt="Latest News" 
                            class="w-full h-full object-cover">
                        <div class="absolute top-6 left-6">
                            <span class="inline-block bg-secondary text-white px-4 py-2 rounded-full font-semibold">
                                News
                            </span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col justify-center">
                        <div class="flex items-center gap-4 font-semibold mb-4">
                            <span class="flex items-center gap-2">
                                <i class="fas fa-calendar"></i>
                                October 21, 2025
                            </span>
                            <span class="flex items-center gap-2">
                                <i class="fas fa-user"></i>
                                Admin
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6 leading-tight">
                            REKA Wins Environmental Excellence Award
                        </h2>
                        <p class="mb-8 leading-relaxed">
                            PT. REKA INTERNATIONAL SERVICES, consectetur adipiscing elit. Fusce sed enim sed ante efficitur aliquet non a minus. Nulla pharetra eget mauris a pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque et augue placerat nunc porta sodales. Sed a felis et...
                        </p>
                        <a href="{{ route('media.show', 1) }}" class="btn-primary rounded-lg font-semibold inline-flex items-center gap-2 group w-fit">
                            Read More
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter & Search -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex flex-col md:flex-row max-w-6xl mx-auto justify-between items-center gap-6 fade-in-up" data-delay="0">
                <!-- Filter Buttons -->
                <div class="flex flex-wrap gap-3">
                    <button class="filter-btn {{ !request('category') || request('category') == 'all' ? 'active' : '' }} px-6 py-3 rounded-lg font-semibold text-sm border border-gray-200"
                            data-category="all">
                        All Media
                    </button>
                    <button class="filter-btn {{ request('category') == 'news' ? 'active' : '' }} px-6 py-3 rounded-lg font-semibold text-sm border border-gray-200"
                            data-category="news">
                        News
                    </button>
                    <button class="filter-btn {{ request('category') == 'events' ? 'active' : '' }} px-6 py-3 rounded-lg font-semibold text-sm border border-gray-200"
                            data-category="events">
                        Events
                    </button>
                    <button class="filter-btn {{ request('category') == 'blogs' ? 'active' : '' }} px-6 py-3 rounded-lg font-semibold text-sm border border-gray-200"
                            data-category="blogs">
                        Blogs
                    </button>
                </div>

                <!-- Search -->
                <div class="relative w-full md:w-auto">
                    <input 
                        type="text" 
                        id="search-input"
                        placeholder="Search articles..."
                        value="{{ request('search') }}"
                        class="w-full md:w-80 pl-12 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none transition"
                    >
                    <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-38 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <a href="{{ route('media.show', 1) }}" class="card latest-media-card max-w-6xl mx-auto rounded-3xl shadow-2xl overflow-hidden border border-gray-100 fade-in-up" data-delay="0">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
                        <div class="relative h-auto overflow-hidden lg:col-span-1">
                            <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=500&h=400&fit=crop" 
                                alt="Media" 
                                class="w-full h-full object-cover">
                            <div class="absolute top-6 left-6">
                                <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                    News
                                </span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-1 lg:col-span-2">
                            <div class="flex items-center gap-4 font-semibold mb-2">
                                <div class="text-sm mb-2 font-semibold">
                                    <i class="fas fa-calendar mr-2"></i>October 21, 2025
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                                Capitalize on low hanging fruit to identify
                            </h3>
                            <p class="mb-4 leading-relaxed flex-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, varius tellus. Fusce a...
                            </p>
                            <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                                Read More 
                                <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card latest-media-card max-w-6xl mx-auto rounded-3xl shadow-2xl overflow-hidden border border-gray-100 fade-in-up" data-delay="0">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
                        <div class="relative h-auto overflow-hidden lg:col-span-1">
                            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=600&h=400&fit=crop" 
                                alt="Media" 
                                class="w-full h-full object-cover">
                            <div class="absolute top-6 left-6">
                                <span class="inline-block bg-blue-600 text-white text-xs px-4 py-2 rounded-full font-semibold">
                                    Blogs
                                </span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-1 lg:col-span-2">
                            <div class="flex items-center gap-4 font-semibold mb-2">
                                <div class="text-sm mb-2 font-semibold">
                                    <i class="fas fa-calendar mr-2"></i>October 21, 2025
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                                Capitalize on low hanging fruit to identify
                            </h3>
                            <p class="mb-4 leading-relaxed flex-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, varius tellus. Fusce a...
                            </p>
                            <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                                Read More 
                                <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card latest-media-card max-w-6xl mx-auto rounded-3xl shadow-2xl overflow-hidden border border-gray-100 fade-in-up" data-delay="0">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
                        <div class="relative h-auto overflow-hidden lg:col-span-1">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop" 
                                alt="Media" 
                                class="w-full h-full object-cover">
                            <div class="absolute top-6 left-6">
                                <span class="inline-block bg-purple-600 text-white text-xs px-4 py-2 rounded-full font-semibold">
                                    Events
                                </span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-1 lg:col-span-2">
                            <div class="flex items-center gap-4 font-semibold mb-2">
                                <div class="text-sm mb-2 font-semibold">
                                    <i class="fas fa-calendar mr-2"></i>October 21, 2025
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                                Capitalize on low hanging fruit to identify
                            </h3>
                            <p class="mb-4 leading-relaxed flex-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, varius tellus. Fusce a...
                            </p>
                            <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                                Read More 
                                <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('media.show', 1) }}" class="card latest-media-card max-w-6xl mx-auto rounded-3xl shadow-2xl overflow-hidden border border-gray-100 fade-in-up" data-delay="0">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
                        <div class="relative h-auto overflow-hidden lg:col-span-1">
                            <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=500&h=400&fit=crop" 
                                alt="Media" 
                                class="w-full h-full object-cover">
                            <div class="absolute top-6 left-6">
                                <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                    News
                                </span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-1 lg:col-span-2">
                            <div class="flex items-center gap-4 font-semibold mb-2">
                                <div class="text-sm mb-2 font-semibold">
                                    <i class="fas fa-calendar mr-2"></i>October 21, 2025
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                                Capitalize on low hanging fruit to identify
                            </h3>
                            <p class="mb-4 leading-relaxed flex-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, varius tellus. Fusce a...
                            </p>
                            <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                                Read More 
                                <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card latest-media-card max-w-6xl mx-auto rounded-3xl shadow-2xl overflow-hidden border border-gray-100 fade-in-up" data-delay="0">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
                        <div class="relative h-auto overflow-hidden lg:col-span-1">
                            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=600&h=400&fit=crop" 
                                alt="Media" 
                                class="w-full h-full object-cover">
                            <div class="absolute top-6 left-6">
                                <span class="inline-block bg-blue-600 text-white text-xs px-4 py-2 rounded-full font-semibold">
                                    Blogs
                                </span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-1 lg:col-span-2">
                            <div class="flex items-center gap-4 font-semibold mb-2">
                                <div class="text-sm mb-2 font-semibold">
                                    <i class="fas fa-calendar mr-2"></i>October 21, 2025
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                                Capitalize on low hanging fruit to identify
                            </h3>
                            <p class="mb-4 leading-relaxed flex-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, varius tellus. Fusce a...
                            </p>
                            <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                                Read More 
                                <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card latest-media-card max-w-6xl mx-auto rounded-3xl shadow-2xl overflow-hidden border border-gray-100 fade-in-up" data-delay="0">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
                        <div class="relative h-auto overflow-hidden lg:col-span-1">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop" 
                                alt="Media" 
                                class="w-full h-full object-cover">
                            <div class="absolute top-6 left-6">
                                <span class="inline-block bg-purple-600 text-white text-xs px-4 py-2 rounded-full font-semibold">
                                    Events
                                </span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-1 lg:col-span-2">
                            <div class="flex items-center gap-4 font-semibold mb-2">
                                <div class="text-sm mb-2 font-semibold">
                                    <i class="fas fa-calendar mr-2"></i>October 21, 2025
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                                Capitalize on low hanging fruit to identify
                            </h3>
                            <p class="mb-4 leading-relaxed flex-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, varius tellus. Fusce a...
                            </p>
                            <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                                Read More 
                                <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
