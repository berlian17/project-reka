@extends('layouts.app')

@section('title', 'Projects')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/project.css') }}">
@endpush

@section('content')
    <section class="project-hero min-h-[60vh] flex items-center justify-center pt-20">
        <div class="container mx-auto px-4 lg:px-8 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h1 class="hero-title text-5xl md:text-6xl font-bold mb-6 leading-tight fade-in-up">
                    Our Projects
                </h1>
                <div class="w-[15%] h-1 bg-secondary mx-auto mb-8 fade-in-up" style="animation-delay: 0.2s;"></div>
                <p class="text-xl text-white! fade-in-up" style="animation-delay: 0.3s;">
                    Our documented projects from various industries showcasing excellence and innovation
                </p>
            </div>
        </div>
    </section>

    {{-- Projects --}}
    <section class="py-38 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                    Showcasing Our Commitment to Excellence
                </h2>
                <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                <p class="max-w-2xl mx-auto leading-relaxed">
                    Each project reflects our dedication to quality, safety, and innovation – delivering reliable results for clients across various industries
                </p>
            </div>

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
                @include('pages.projects.partials.list')
            </div>
        </div>
    </section>

    {{-- Approach --}}
    <section class="py-38 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 max-w-6xl mx-auto items-center">
                <div class="order-2 lg:order-1 fade-in-up" data-delay="0">
                    <span class="text-secondary font-semibold text-sm uppercase tracking-wider">How We Work</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                        Our Approach
                    </h2>
                    <div class="w-[25%] h-1 bg-secondary mt-2 mb-8"></div>
                    <p class="leading-relaxed mb-6">
                        We believe in partnership through expertise. Our experienced team works closely with you to analyze, design, and supervise projects in water and wastewater treatment.
                    </p>
                    <ul class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center shrink-0">
                                <i class="fas fa-chart-line text-secondary text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-primary! mb-1">Analysis & Planning</p>
                                <p>Comprehensive project assessment and strategic planning</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center shrink-0">
                                <i class="fas fa-drafting-compass text-secondary text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-primary! mb-1">Design & Engineering</p>
                                <p>Innovative solutions tailored to your requirements</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center shrink-0">
                                <i class="fas fa-tasks text-secondary text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-primary! mb-1">Supervision & Quality Control</p>
                                <p>Rigorous oversight ensuring excellence at every stage</p>
                            </div>
                        </div>
                    </ul>
                </div>

                <div class="order-1 lg:order-2 fade-in-up" data-delay="300">
                    <div class="relative">
                        <div class="absolute -top-4 -right-4 w-full h-full bg-secondary/10 rounded-2xl"></div>
                        <img src="{{ asset('images/pages/projects-page-1.webp') }}" alt="approach"
                            class="relative w-full h-[450px] object-cover rounded-2xl shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-38 bg-white">
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
