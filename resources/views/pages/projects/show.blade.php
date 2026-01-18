@extends('layouts.app')

@section('title', 'Reverse Osmosis 50 m3/hour')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/project.css') }}">
@endpush

@section('content')
    {{-- Project Header --}}
    <section class="pt-32 pb-8 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">

                <div class="mb-8 fade-in-up" data-delay="0">
                    <h1 class="text-4xl md:text-5xl font-bold text-primary mb-4 leading-tight">
                        {{ $project->title }}
                    </h1>

                    <div class="flex flex-col sm:flex-row sm:items-center sm:gap-4 mb-4">
                        <span class="bg-secondary text-white px-4 py-2 rounded-full text-sm font-semibold mb-2 sm:mb-0">
                            {{ $project->service_name }}
                        </span>

                        <div class="flex items-center gap-4 sm:flex sm:items-center sm:gap-4">
                            <p class="flex items-center gap-2">
                                <i class="fas fa-calendar"></i>
                                {{ date('F d, Y', strtotime($project->completion_date)) }}
                            </p>
                            <p class="flex items-center gap-2">
                                <i class="fas fa-location-dot"></i>
                                {{ $project->location }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative rounded-3xl shadow-2xl overflow-hidden mb-8 fade-in-up" data-delay="0">
                    <img src="{{ config('app.cms_url') . $project->cover_img }}" alt="project-img" class="w-full h-[450px] object-cover">
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
                    @if ($project->description)
                        <div class="card rounded-3xl shadow-2xl p-8 md:p-12 {{ $project->galleries->count() > 0 ? 'mb-8' : '' }}">
                            <div class="project-content">
                                <h3>Project Overview</h3>
                                {!! clean($project->description) !!}
                            </div>
                        </div>
                    @endif

                    {{-- Project Gallery --}}
                    @if ($project->galleries->count() > 0)
                        <div class="card rounded-3xl shadow-2xl p-8 md:p-12">
                            <h2 class="text-3xl font-bold text-primary mb-6">Project Gallery</h2>
                            <div class="grid grid-cols-2 gap-4">
                                @foreach ($project->galleries as $item)
                                    <div class="project-img relative h-48 overflow-hidden group">
                                        <img src="{{ config('app.cms_url') . $item->image }}" alt="gallery" class="w-full h-full object-cover rounded-lg transform cursor-pointer">
                                        <div class="absolute inset-0 bg-linear-to-t from-primary/80 to-transparent opacity-0 md:group-hover:opacity-100 transition-opacity rounded-lg"></div>

                                        {{-- Zoom Icon --}}
                                        <div class="absolute inset-0 flex items-center justify-center md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-500">
                                            <button class="w-12 h-12 md:w-16 md:h-16 bg-primary/90 hover:bg-primary active:scale-95 backdrop-blur-sm rounded-full flex items-center justify-center transition-all">
                                                <i class="fas fa-search-plus text-white text-lg md:text-2xl"></i>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Project Info --}}
                <div class="lg:col-span-1 fade-in-up" data-delay="300">
                    <div class="card rounded-3xl shadow-2xl p-8 sticky top-24">
                        <h3 class="text-2xl font-bold text-primary mb-6">Project Information</h3>
                        <div class="space-y-4">
                            <div class="pb-4 border-b border-gray-300">
                                <div class="flex items-center gap-3 mb-2">
                                    <i class="fas fa-user-tie text-secondary"></i>
                                    <span class="font-semibold text-primary">Client</span>
                                </div>
                                <p class="text-sm">{{ $project->client_name }}</p>
                            </div>
                            <div class="pb-4 border-b border-gray-300">
                                <div class="flex items-center gap-3 mb-2">
                                    <i class="fas fa-location-dot text-secondary"></i>
                                    <span class="font-semibold text-primary">Location</span>
                                </div>
                                <p class="text-sm">{{ $project->location }}</p>
                            </div>
                            <div class="pb-4 border-b border-gray-300">
                                <div class="flex items-center gap-3 mb-2">
                                    <i class="fas fa-calendar text-secondary"></i>
                                    <span class="font-semibold text-primary">Completion Date</span>
                                </div>
                                <p class="text-sm">{{ date('F d, Y', strtotime($project->completion_date)) }}</p>
                            </div>
                            <div class="pb-4 border-b border-gray-300">
                                <div class="flex items-center gap-3 mb-2">
                                    <i class="fas fa-clock text-secondary"></i>
                                    <span class="font-semibold text-primary">Duration</span>
                                </div>
                                <p class="text-sm">{{ $project->duration }} Days</p>
                            </div>
                            <div>
                                <div class="flex items-center gap-3 mb-2">
                                    <i class="fas fa-industry text-secondary"></i>
                                    <span class="font-semibold text-primary">Industry</span>
                                </div>
                                <p class="text-sm">{{ $project->industrial_type }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal Image Viewer --}}
    <div id="imageModal" class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center opacity-0 invisible transition-all duration-300 z-500">
        <div class="relative max-w-4xl w-full">
            <button id="closeImageModal"
                    class="absolute -top-10 right-0 text-white text-4xl hover:text-secondary transition">
                &times;
            </button>

            <img id="modalImage"
                src=""
                class="w-full max-h-[90vh] object-contain rounded-2xl shadow-xl transition-transform duration-300 scale-95">
        </div>
    </div>

    {{-- Projects --}}
    @if ($relatedProjects->count() > 0)
        <section class="py-38 bg-white">
            <div class="container mx-auto px-4 lg:px-8">
                <div class="text-center mb-16 fade-in-up" data-delay="0">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                        Related Projects
                    </h2>
                    <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                    <p class="max-w-2xl mx-auto leading-relaxed">
                        Explore more of our completed projects
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 max-w-6xl mx-auto">
                    @foreach($relatedProjects as $relatedProject)
                        <a href="{{ route('project.show', $relatedProject->slug) }}" class="card project-card rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col fade-in-up" data-delay="0">
                            <div class="relative h-52 overflow-hidden">
                                <img src="{{ config('app.cms_url') . $relatedProject->cover_img }}" alt="project-img" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-linear-to-t from-primary/95 via-primary/50 to-transparent"></div>
                                <div class="absolute bottom-4 left-6">
                                    <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                        {{ $relatedProject->service_name }}
                                    </span>
                                </div>
                            </div>
                            <div class="p-8 flex flex-col flex-1">
                                <div class="text-sm mb-2 font-semibold">
                                    <i class="fas fa-calendar mr-2"></i>{{ date('F d, Y', strtotime($relatedProject->completion_date)) }}
                                </div>
                                <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                                    {{ $relatedProject->title }}
                                </h3>
                                <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                                    Read More
                                    <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- CTA --}}
    <section class="py-38 {{ ($relatedProjects->count() > 0) ? 'bg-light' : 'bg-white' }}">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center max-w-4xl mx-auto fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight mb-2">
                    Ready to Start Your Project?
                </h2>
                <p class="text-lg mb-8 leading-relaxed max-w-2xl mx-auto">
                    Our team of experts is ready to help you achieve your operational goals
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact.index') }}" class="btn-primary text-lg rounded-lg font-semibold inline-flex items-center justify-center px-12 py-5">
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/pages/project.js') }}"></script>
@endpush
