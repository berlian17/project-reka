@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endpush

@section('content')
    <section class="relative min-h-screen overflow-hidden">
        <div id="heroCarousel" class="relative w-full h-screen">
            <div class="hero-slide absolute inset-0 opacity-100 transition-opacity duration-700 flex items-center justify-center text-center text-white" id="hero-slide-1">
                <div class="z-10 container mx-auto px-4 lg:px-8">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight fade-in-up">
                        PT. REKA INTERNATIONAL SERVICES
                    </h1>
                    <p class="text-xl font-bold md:text-2xl max-w-3xl mx-auto mb-6 fade-in-up" style="animation-delay: 0.2s;">
                        Care to Green Environment
                    </p>
                    <p class="max-w-3xl mx-auto mb-8 fade-in-up" style="animation-delay: 0.3s;">
                        Leading provider of comprehensive Water and Wastewater Treatment solutions across Indonesia. Delivering excellence in Engineering, Procurement, and Construction services since 2007.
                    </p>

                    <div class="flex flex-col sm:flex-row justify-center gap-4 fade-in-up" style="animation-delay: 0.4s;">
                        <a href="#" class="btn-primary !text-white rounded-xl font-semibold inline-flex items-center justify-center gap-2 group">
                            Explore Services
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="bg-white/10 text-white backdrop-blur-sm border-2 border-white hover:bg-white hover:text-primary hover:scale-105 px-10 py-4 rounded-xl font-semibold transition inline-flex items-center justify-center gap-2 group">
                            <i class="fas fa-phone"></i>
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>

            <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-700 flex items-center justify-center text-center text-white" id="hero-slide-2">
                <div class="z-10 container mx-auto px-4 lg:px-8">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                        Engineering Excellence
                    </h1>
                    <p class="text-xl font-bold md:text-2xl max-w-3xl mx-auto mb-6">
                        Trusted partner in Water Treatment System across Indonesia.
                    </p>
                    <p class="max-w-3xl mx-auto mb-8">
                        Providing innovative Engineering, Procurement, and Construction solutions.
                    </p>
                </div>
            </div>
            
            <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-700 flex items-center justify-center text-center text-white" id="hero-slide-2">
                <div class="z-10 container mx-auto px-4 lg:px-8">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                        Sustainable Future
                    </h1>
                    <p class="text-xl font-bold md:text-2xl max-w-3xl mx-auto mb-6">
                        Building eco-friendly water & wastewater systems.
                    </p>
                    <p class="max-w-3xl mx-auto mb-8 fade-in-up">
                        Dedicated to environmental sustainability since 2007.
                    </p>
                </div>
            </div>
        </div>

        <button id="prevHero" class="absolute top-1/2 left-6 -translate-y-1/2 text-white text-2xl hover:rounded-full hover:scale-110 z-20">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button id="nextHero" class="absolute top-1/2 right-6 -translate-y-1/2 text-white text-2xl hover:rounded-full hover:scale-110 z-20">
            <i class="fas fa-chevron-right"></i>
        </button>

        <a href="#statistics" class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white scroll-indicator cursor-pointer z-10">
            <div class="flex flex-col items-center animate-bounce">
                <i class="fas fa-angles-right text-2xl rotate-90"></i>
            </div>
        </a>
    </section>

    {{-- Statistics --}}
    <section id="statistics" class="py-32 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="stat-card text-white p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl fade-in-up" data-delay="0">
                    <div class="bricolage-font text-6xl md:text-7xl font-bold text-secondary mb-4">18+</div>
                    <p class="!text-white text-xl font-semibold mb-2">Years Experience</p>
                    <p class="!text-white text-sm opacity-80">Serving industrial clients</p>
                </div>
                
                <div class="stat-card text-white p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl fade-in-up" data-delay="0">
                    <div class="bricolage-font text-6xl md:text-7xl font-bold text-secondary mb-4">14+</div>
                    <p class="!text-white text-xl font-semibold mb-2">Projects Completed</p>
                    <p class="!text-white text-sm opacity-80">Successful implementations</p>
                </div>
                
                <div class="stat-card text-white p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl fade-in-up" data-delay="0">
                    <div class="bricolage-font text-6xl md:text-7xl font-bold text-secondary mb-4">19+</div>
                    <p class="!text-white text-xl font-semibold mb-2">Industries Served</p>
                    <p class="!text-white text-sm opacity-80">Diverse sectors</p>
                </div>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section class="py-38 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 max-w-6xl mx-auto items-center">
                <div class="order-2 lg:order-1 fade-in-up" data-delay="0">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                        Complete Solution to Your Challenges
                    </h2>
                    <div class="w-[25%] h-1 bg-secondary mt-2 mb-8"></div>
                    <p class="leading-relaxed mb-6">
                        <strong>PT. REKA INTERNATIONAL SERVICES</strong>, established on May 10, 2007, is an Engineering, Procurement, and Construction (EPC) company providing comprehensive Water and Wastewater Treatment solutions for Industrial clients across Indonesia.
                    </p>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-secondary text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold !text-primary mb-1">Quality Assured</p>
                                <p>International standards compliance and rigorous quality control</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-leaf text-secondary text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary mb-1">Environmental Focus</h4>
                                <p>Green technologies for sustainable operations</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('about') }}" class="btn-primary text-white rounded-lg font-semibold inline-flex items-center gap-2 group">
                        Learn More
                        <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>

                <div class="order-1 lg:order-2 mt-auto fade-in-up" data-delay="300">
                    <div class="relative">
                        <div class="absolute -top-4 -left-4 w-full h-full bg-secondary/10 rounded-2xl"></div>
                        <img src="" alt="about us" 
                            class="relative w-full h-[450px] object-cover rounded-2xl shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="py-38 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                    Our Services
                </h2>
                <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                <p class="max-w-2xl mx-auto leading-relaxed">
                    Comprehensive Solutions for Your Industrial Needs
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 max-w-6xl mx-auto fade-in-up" data-delay="0">
                <a href="#" class="card p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl border border-gray-100 flex flex-col items-center">
                    <div class="bg-primary w-28 h-28 icon-circle rounded-full flex items-center justify-center mb-8">
                        <i class="fa-solid fa-flask text-white text-5xl"></i>
                    </div>
                    <p class="!text-primary text-xl font-semibold mb-2">
                        Chemical Solutions
                    </p>
                    <p class="mb-8 leading-relaxed">
                        High-quality chemical solutions specifically formulated for industrial water and wastewater treatment applications.
                    </p>
                    <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                        Learn More 
                        <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </div>
                </a>

                <a href="#" class="card p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl border border-gray-100 flex flex-col items-center">
                    <div class="bg-primary w-28 h-28 icon-circle rounded-full flex items-center justify-center mb-8">
                        <i class="fa-solid fa-wrench text-white text-5xl"></i>
                    </div>
                    <p class="!text-primary text-xl font-semibold mb-2">
                        MPS (Welder, Mechanic, Technician)
                    </p>
                    <p class="mb-8 leading-relaxed">
                        Expert mechanical, piping, and technical services delivering reliable solutions for various industrial requirements.
                    </p>
                    <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                        Learn More 
                        <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </div>
                </a>

                <a href="#" class="card p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl border border-gray-100 flex flex-col items-center">
                    <div class="bg-primary w-28 h-28 icon-circle rounded-full flex items-center justify-center mb-8">
                        <i class="fa-solid fa-microscope text-white text-5xl"></i>
                    </div>
                    <p class="!text-primary text-xl font-semibold mb-2">
                        Non-Destructive Test (NDT)
                    </p>
                    <p class="mb-8 leading-relaxed">
                        Inspection of material and weld quality without damaging the tested part.
                    </p>
                    <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                        Learn More 
                        <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </div>
                </a>
            </div>

            <div class="flex flex-col sm:flex-row justify-center fade-in-up" data-delay="0">
                <a href="#" class="btn-primary text-white rounded-lg font-semibold inline-flex items-center justify-center">
                    View All Services
                </a>
            </div>
        </div>
    </section>

    {{-- Benefits --}}
    <section class="py-38 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                    Why Choose REKA
                </h2>
                <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                <p class="max-w-2xl mx-auto leading-relaxed">
                    Discover what makes us the preferred partner
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="card p-8 rounded-3xl shadow-2xl relative border border-gray-100 fade-in-up" data-delay="0">
                    <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-people-group text-white text-3xl"></i>
                    </div>
                    <p class="!text-primary text-xl font-bold mb-4">
                        Experienced Team
                    </p>
                    <p class="leading-relaxed">
                        18+ years of expertise in delivering innovative industrial solutions.
                    </p>
                </div>

                <div class="card p-8 rounded-3xl shadow-2xl relative border border-gray-100 fade-in-up" data-delay="0">
                    <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-cogs text-white text-3xl"></i>
                    </div>
                    <p class="!text-primary text-xl font-bold mb-4">
                        Complete Solutions
                    </p>
                    <p class="leading-relaxed">
                        End-to-end services from design to maintenance, covering all aspects of water treatment.
                    </p>
                </div>

                <div class="card p-8 rounded-3xl shadow-2xl relative border border-gray-100 fade-in-up" data-delay="0">
                    <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-certificate text-white text-3xl"></i>
                    </div>
                    <p class="!text-primary text-xl font-bold mb-4">
                        Quality Assured
                    </p>
                    <p class="leading-relaxed">
                        International standards compliance with rigorous quality control processes.
                    </p>
                </div>

                <div class="card p-8 rounded-3xl shadow-2xl relative border border-gray-100 fade-in-up" data-delay="0">
                    <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-dollar-sign text-white text-3xl"></i>
                    </div>
                    <p class="!text-primary text-xl font-bold mb-4">
                        Cost Effective
                    </p>
                    <p class="leading-relaxed">
                        Optimized solutions that significantly reduce operational costs while maintaining quality.
                    </p>
                </div>

                <div class="card p-8 rounded-3xl shadow-2xl relative border border-gray-100 fade-in-up" data-delay="0">
                    <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-leaf text-white text-3xl"></i>
                    </div>
                    <p class="!text-primary text-xl font-bold mb-4">
                        Environmental Focus
                    </p>
                    <p class="leading-relaxed">
                        Green technologies for truly sustainable and environmentally responsible operations.
                    </p>
                </div>

                <div class="card p-8 rounded-3xl shadow-2xl relative border border-gray-100 fade-in-up" data-delay="0">
                    <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-headset text-white text-3xl"></i>
                    </div>
                    <p class="!text-primary text-xl font-bold mb-4">
                        After Sales Support
                    </p>
                    <p class="leading-relaxed">
                        Comprehensive maintenance and technical support services for long-term success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Clients --}}
    <section class="py-38 bg-primary">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 fade-in-up" data-delay="0">
                <h2 class="text-white text-4xl md:text-5xl font-bold leading-tight">
                    Our Clients
                </h2>
                <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                <p class="!text-white max-w-2xl mx-auto leading-relaxed">
                    Trusted by leading industrial companies
                </p>
            </div>

            <div class="carousel-container relative overflow-hidden max-w-6xl mx-auto fade-in-up" data-delay="0">
                <div class="flex animate-scroll">
                    <div class="flex items-center justify-center flex-shrink-0 px-4 w-64">
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 w-full h-32 flex items-center justify-center">
                            <img src="#" alt="client logo" class="max-w-full max-h-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
                        </div>
                    </div>
                    <div class="flex items-center justify-center flex-shrink-0 px-4 w-64">
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 w-full h-32 flex items-center justify-center">
                            <img src="#" alt="client logo" class="max-w-full max-h-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
                        </div>
                    </div>
                    <div class="flex items-center justify-center flex-shrink-0 px-4 w-64">
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 w-full h-32 flex items-center justify-center">
                            <img src="#" alt="client logo" class="max-w-full max-h-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
                        </div>
                    </div>
                    <div class="flex items-center justify-center flex-shrink-0 px-4 w-64">
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 w-full h-32 flex items-center justify-center">
                            <img src="#" alt="client logo" class="max-w-full max-h-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
                        </div>
                    </div>
                    <div class="flex items-center justify-center flex-shrink-0 px-4 w-64">
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 w-full h-32 flex items-center justify-center">
                            <img src="#" alt="client logo" class="max-w-full max-h-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
                        </div>
                    </div>
                    <div class="flex items-center justify-center flex-shrink-0 px-4 w-64">
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 w-full h-32 flex items-center justify-center">
                            <img src="#" alt="client logo" class="max-w-full max-h-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
                        </div>
                    </div>
                    <div class="flex items-center justify-center flex-shrink-0 px-4 w-64">
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 w-full h-32 flex items-center justify-center">
                            <img src="#" alt="client logo" class="max-w-full max-h-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
                        </div>
                    </div>
                    <div class="flex items-center justify-center flex-shrink-0 px-4 w-64">
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 w-full h-32 flex items-center justify-center">
                            <img src="#" alt="client logo" class="max-w-full max-h-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Projects --}}
    <section class="py-38 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                    Our Projects
                </h2>
                <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                <p class="max-w-2xl mx-auto leading-relaxed">
                    Explore our successful implementations across various industries
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 max-w-6xl mx-auto fade-in-up" data-delay="0">
                <a href="{{ route('project.show') }}" class="card project-card rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col fade-in-up" data-delay="0">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=500&h=400&fit=crop" 
                             alt="Project" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/95 via-primary/50 to-transparent"></div>
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
                            Lorem ipsum dolor sit amet, consectetu adipiscing elit, varius tellus. Fusce a eros ullamcorper sapien diam pretium eget erat non magna sit luctus et ultri...
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
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/95 via-primary/50 to-transparent"></div>
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
                            Lorem ipsum dolor sit amet, consectetu adipiscing elit, varius tellus. Fusce a eros ullamcorper sapien diam pretium eget erat non magna sit luctus et ultri...
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
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/95 via-primary/50 to-transparent"></div>
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
                            Lorem ipsum dolor sit amet, consectetu adipiscing elit, varius tellus....
                        </p>
                        <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                            Read More 
                            <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="flex flex-col sm:flex-row justify-center fade-in-up" data-delay="0">
                <a href="#" class="btn-primary text-white rounded-lg font-semibold inline-flex items-center justify-center">
                    View All Projects
                </a>
            </div>
        </div>
    </section>

    {{-- Media --}}
    {{-- <section class="py-38 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                    Latest News
                </h2>
                <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                <p class="max-w-2xl mx-auto leading-relaxed">
                    Get the latest updates on our projects, innovations, and industry developments
                </p>
            </div>

            <div class="flex flex-col sm:flex-row justify-center fade-in-up" data-delay="0">
                <a href="#" class="btn-primary text-white rounded-lg font-semibold inline-flex items-center justify-center">
                    View All
                </a>
            </div>
        </div>
    </section> --}}

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
                    <a href="{{ route('contact') }}" class="btn-primary text-white text-lg rounded-lg font-semibold inline-flex items-center justify-center px-12 py-5">
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/pages/home.js') }}"></script>
@endpush
