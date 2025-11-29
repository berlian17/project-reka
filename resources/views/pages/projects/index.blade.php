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

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 max-w-6xl mx-auto">
                <a href="{{ route('project.show', 1) }}" class="card project-card rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col fade-in-up" data-delay="0">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=500&h=400&fit=crop" 
                             alt="Project" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-primary/95 via-primary/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                Water & Waste Water Treatment (EPC)
                            </span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="text-sm mb-2 font-semibold">
                            <i class="fas fa-calendar mr-2"></i>October 21, 2025
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                            Reverse Osmosis 50 m3/hour
                        </h3>
                        <p class="mb-4 leading-relaxed flex-1">
                            Lorem ipsum dolor sit amet, consectetu adipiscing elit, varius tellus. Fusce a eros ullamcorper sapien diam pretium eget...
                        </p>
                        <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                            Read More 
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="card project-card rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col fade-in-up" data-delay="300">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=500&h=400&fit=crop" 
                             alt="Project" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-primary/95 via-primary/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                Chemical Solutions
                            </span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="text-sm mb-2 font-semibold">
                            <i class="fas fa-calendar mr-2"></i>October 21, 2025
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                            Reverse Osmosis 192 m3/day
                        </h3>
                        <p class="mb-4 leading-relaxed flex-1">
                            Lorem ipsum dolor sit amet, consectetu adipiscing elit, varius tellus. Fusce a eros ullamcorper sapien diam pretium eget...
                        </p>
                        <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                            Read More 
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="card project-card rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col fade-in-up" data-delay="600">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=500&h=400&fit=crop" 
                             alt="Project" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-primary/95 via-primary/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                Surface Treatment
                            </span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="text-sm mb-2 font-semibold">
                            <i class="fas fa-calendar mr-2"></i>October 21, 2025
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                            Sewage Treatment Plant FTI 24 m3/day
                        </h3>
                        <p class="mb-4 leading-relaxed flex-1">
                            Lorem ipsum dolor sit amet, consectetu adipiscing elit, varius tellus. Fusce a eros ullamcorper sapien diam pretium eget...
                        </p>
                        <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                            Read More 
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </div>
                </a>

                <a href="{{ route('project.show', 1) }}" class="card project-card rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col fade-in-up" data-delay="0">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=500&h=400&fit=crop" 
                             alt="Project" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-primary/95 via-primary/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                Water & Waste Water Treatment (EPC)
                            </span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="text-sm mb-2 font-semibold">
                            <i class="fas fa-calendar mr-2"></i>October 21, 2025
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                            Reverse Osmosis 50 m3/hour
                        </h3>
                        <p class="mb-4 leading-relaxed flex-1">
                            Lorem ipsum dolor sit amet, consectetu adipiscing elit, varius tellus. Fusce a eros ullamcorper sapien diam pretium eget...
                        </p>
                        <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                            Read More 
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="card project-card rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col fade-in-up" data-delay="300">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=500&h=400&fit=crop" 
                             alt="Project" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-primary/95 via-primary/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                Chemical Solutions
                            </span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="text-sm mb-2 font-semibold">
                            <i class="fas fa-calendar mr-2"></i>October 21, 2025
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                            Reverse Osmosis 192 m3/day
                        </h3>
                        <p class="mb-4 leading-relaxed flex-1">
                            Lorem ipsum dolor sit amet, consectetu adipiscing elit, varius tellus. Fusce a eros ullamcorper sapien diam pretium eget...
                        </p>
                        <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                            Read More 
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="card project-card rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col fade-in-up" data-delay="600">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=500&h=400&fit=crop" 
                             alt="Project" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-primary/95 via-primary/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                Surface Treatment
                            </span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="text-sm mb-2 font-semibold">
                            <i class="fas fa-calendar mr-2"></i>October 21, 2025
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                            Sewage Treatment Plant FTI 24 m3/day
                        </h3>
                        <p class="mb-4 leading-relaxed flex-1">
                            Lorem ipsum dolor sit amet, consectetu adipiscing elit, varius tellus. Fusce a eros ullamcorper sapien diam pretium eget...
                        </p>
                        <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                            Read More 
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </div>
                </a>

                <a href="{{ route('project.show', 1) }}" class="card project-card rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col fade-in-up" data-delay="0">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=500&h=400&fit=crop" 
                             alt="Project" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-primary/95 via-primary/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                Water & Waste Water Treatment (EPC)
                            </span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="text-sm mb-2 font-semibold">
                            <i class="fas fa-calendar mr-2"></i>October 21, 2025
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                            Reverse Osmosis 50 m3/hour
                        </h3>
                        <p class="mb-4 leading-relaxed flex-1">
                            Lorem ipsum dolor sit amet, consectetu adipiscing elit, varius tellus. Fusce a eros ullamcorper sapien diam pretium eget...
                        </p>
                        <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                            Read More 
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="card project-card rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col fade-in-up" data-delay="300">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=500&h=400&fit=crop" 
                             alt="Project" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-primary/95 via-primary/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                Chemical Solutions
                            </span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="text-sm mb-2 font-semibold">
                            <i class="fas fa-calendar mr-2"></i>October 21, 2025
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                            Reverse Osmosis 192 m3/day
                        </h3>
                        <p class="mb-4 leading-relaxed flex-1">
                            Lorem ipsum dolor sit amet, consectetu adipiscing elit, varius tellus. Fusce a eros ullamcorper sapien diam pretium eget...
                        </p>
                        <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                            Read More 
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="card project-card rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col fade-in-up" data-delay="600">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=500&h=400&fit=crop" 
                             alt="Project" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-primary/95 via-primary/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                Surface Treatment
                            </span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="text-sm mb-2 font-semibold">
                            <i class="fas fa-calendar mr-2"></i>October 21, 2025
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                            Sewage Treatment Plant FTI 24 m3/day
                        </h3>
                        <p class="mb-4 leading-relaxed flex-1">
                            Lorem ipsum dolor sit amet, consectetu adipiscing elit, varius tellus. Fusce a eros ullamcorper sapien diam pretium eget...
                        </p>
                        <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                            Read More 
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </div>
                </a>
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
                        <img src="#" alt="approach" 
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
                    <a href="{{ route('contact') }}" class="btn-primary text-lg rounded-lg font-semibold inline-flex items-center justify-center px-12 py-5">
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
