@extends('layouts.app')

@section('title', 'Services')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/service.css') }}">
@endpush

@section('content')
    <section class="service-hero min-h-[60vh] flex items-center justify-center pt-20">
        <div class="container mx-auto px-4 lg:px-8 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h1 class="hero-title text-5xl md:text-6xl font-bold mb-6 leading-tight fade-in-up">
                    Our Services
                </h1>
                <div class="w-[15%] h-1 bg-secondary mx-auto mb-8 fade-in-up" style="animation-delay: 0.2s;"></div>
                <p class="text-xl text-white! fade-in-up" style="animation-delay: 0.3s;">
                    Comprehensive solutions for your industrial needs - Engineering, Procurement, and Construction services tailored to deliver excellence in water and wastewater treatment
                </p>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="py-38 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                    Comprehensive Industrial Solutions
                </h2>
                <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                <p class="max-w-2xl mx-auto leading-relaxed">
                    We combine expertise, innovation, and commitment to deliver value-driven services that empower your business to grow sustainably
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 max-w-6xl mx-auto">
                <a href="{{ route('service.show', 'Chemical-Solutions') }}" class="card p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl border border-gray-100 flex flex-col items-center fade-in-up" data-delay="0">
                    <div class="bg-primary w-28 h-28 icon-circle rounded-full flex items-center justify-center mb-8">
                        <i class="fa-solid fa-flask text-white text-5xl"></i>
                    </div>
                    <p class="text-primary! text-xl font-semibold mb-2">
                        Chemical Solutions
                    </p>
                    <p class="mb-4 leading-relaxed">
                        High-quality chemical solutions specifically formulated for industrial water and wastewater treatment applications.
                    </p>
                    <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                        Learn More
                        <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </div>
                </a>

                <a href="#" class="card p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl border border-gray-100 flex flex-col items-center fade-in-up" data-delay="300">
                    <div class="bg-primary w-28 h-28 icon-circle rounded-full flex items-center justify-center mb-8">
                        <i class="fa-solid fa-wrench text-white text-5xl"></i>
                    </div>
                    <p class="text-primary! text-xl font-semibold mb-2">
                        MPS (Welder, Mechanic, Technician)
                    </p>
                    <p class="mb-4 leading-relaxed">
                        Expert mechanical, piping, and technical services delivering reliable solutions for various industrial requirements.
                    </p>
                    <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                        Learn More
                        <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </div>
                </a>

                <a href="#" class="card p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl border border-gray-100 flex flex-col items-center fade-in-up" data-delay="600">
                    <div class="bg-primary w-28 h-28 icon-circle rounded-full flex items-center justify-center mb-8">
                        <i class="fa-solid fa-microscope text-white text-5xl"></i>
                    </div>
                    <p class="text-primary! text-xl font-semibold mb-2">
                        Non-Destructive Test (NDT)
                    </p>
                    <p class="mb-4 leading-relaxed">
                        Inspection of material and weld quality without damaging the tested part.
                    </p>
                    <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                        Learn More
                        <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </div>
                </a>

                <a href="#" class="card p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl border border-gray-100 flex flex-col items-center fade-in-up" data-delay="0">
                    <div class="bg-primary w-28 h-28 icon-circle rounded-full flex items-center justify-center mb-8">
                        <i class="fa-solid fa-hard-hat text-white text-5xl"></i>
                    </div>
                    <p class="text-primary! text-xl font-semibold mb-2">
                        Steel Construction
                    </p>
                    <p class="mb-4 leading-relaxed">
                        Fabrication and installation of steel structures and pipelines for industrial applications.
                    </p>
                    <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                        Learn More
                        <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </div>
                </a>

                <a href="#" class="card p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl border border-gray-100 flex flex-col items-center fade-in-up" data-delay="300">
                    <div class="bg-primary w-28 h-28 icon-circle rounded-full flex items-center justify-center mb-8">
                        <i class="fa-solid fa-cog text-white text-5xl"></i>
                    </div>
                    <p class="text-primary! text-xl font-semibold mb-2">
                        Surface Treatment
                    </p>
                    <p class="mb-4 leading-relaxed">
                       Metal finishing services such as plating, coating, and black oxide for corrosion protection.
                    </p>
                    <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                        Learn More
                        <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </div>
                </a>

                <a href="#" class="card p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl border border-gray-100 flex flex-col items-center fade-in-up" data-delay="600">
                    <div class="bg-primary w-28 h-28 icon-circle rounded-full flex items-center justify-center mb-8">
                        <i class="fa-solid fa-water text-white text-5xl"></i>
                    </div>
                    <p class="text-primary! text-xl font-semibold mb-2">
                       Water & Waste Water Treatment (EPC)
                    </p>
                    <p class="mb-4 leading-relaxed">
                        Design and construction of efficient water and wastewater treatment systems for industrial facilities.
                    </p>
                    <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                        Learn More
                        <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section class="py-38 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                    Our Process
                </h2>
                <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                <p class="max-w-2xl mx-auto leading-relaxed">
                    A systematic approach to ensure project success from consultation to completion
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 my-16 max-w-6xl mx-auto fade-in-up" data-delay="0">
                <div class="process-step-primary mb-4 sm:mb-0 text-center">
                    <div class="w-20 h-20 bg-secondary rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl">
                        <span class="text-white font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3">Consultation</h3>
                    <p class="leading-relaxed">
                        Understanding your needs and challenges through detailed discussion
                    </p>
                </div>

                <div class="process-step-secondary mb-4 sm:mb-0 text-center">
                    <div class="w-20 h-20 bg-primary rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl">
                        <span class="text-white font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3">Planning</h3>
                    <p class="leading-relaxed">
                        Developing comprehensive solutions and project timeline
                    </p>
                </div>

                <div class="process-step-primary mb-4 sm:mb-0 text-center">
                    <div class="w-20 h-20 bg-secondary rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl">
                        <span class="text-white font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3">Execution</h3>
                    <p class="leading-relaxed">
                        Implementing solutions with quality control and safety standards
                    </p>
                </div>

                <div class="process-step-secondary text-center">
                    <div class="w-20 h-20 bg-primary rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl">
                        <span class="text-white font-bold text-2xl">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3">Support</h3>
                    <p class="leading-relaxed">
                        Providing ongoing maintenance and technical assistance
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Industries Served --}}
    <section class="py-38 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                    Industries We Serve
                </h2>
                <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                <p class="max-w-2xl mx-auto leading-relaxed">
                    Delivering specialized solutions across 19+ diverse industrial sectors
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                <div class="bg-linear-to-br from-gray-100 to-white p-8 rounded-2xl border border-gray-200 hover:border-secondary transition-all hover:shadow-xl text-center fade-in-up" data-delay="0">
                    <i class="fas fa-industry text-primary text-4xl mb-4"></i>
                    <h4 class="font-bold text-primary">Manufacturing</h4>
                </div>
                <div class="bg-linear-to-br from-gray-100 to-white p-8 rounded-2xl border border-gray-200 hover:border-secondary transition-all hover:shadow-xl text-center fade-in-up" data-delay="150">
                    <i class="fas fa-car text-primary text-4xl mb-4"></i>
                    <h4 class="font-bold text-primary">Automotive</h4>
                </div>
                <div class="bg-linear-to-br from-gray-100 to-white p-8 rounded-2xl border border-gray-200 hover:border-secondary transition-all hover:shadow-xl text-center fade-in-up" data-delay="300">
                    <i class="fas fa-flask text-primary text-4xl mb-4"></i>
                    <h4 class="font-bold text-primary">Chemical</h4>
                </div>
                <div class="bg-linear-to-br from-gray-100 to-white p-8 rounded-2xl border border-gray-200 hover:border-secondary transition-all hover:shadow-xl text-center fade-in-up" data-delay="450">
                    <i class="fas fa-oil-can text-primary text-4xl mb-4"></i>
                    <h4 class="font-bold text-primary">Oil & Gas</h4>
                </div>
                <div class="bg-linear-to-br from-gray-100 to-white p-8 rounded-2xl border border-gray-200 hover:border-secondary transition-all hover:shadow-xl text-center fade-in-up" data-delay="600">
                    <i class="fas fa-utensils text-primary text-4xl mb-4"></i>
                    <h4 class="font-bold text-primary">Food & Beverage</h4>
                </div>
                <div class="bg-linear-to-br from-gray-100 to-white p-8 rounded-2xl border border-gray-200 hover:border-secondary transition-all hover:shadow-xl text-center fade-in-up" data-delay="750">
                    <i class="fas fa-capsules text-primary text-4xl mb-4"></i>
                    <h4 class="font-bold text-primary">Pharmaceutical</h4>
                </div>
                <div class="bg-linear-to-br from-gray-100 to-white p-8 rounded-2xl border border-gray-200 hover:border-secondary transition-all hover:shadow-xl text-center fade-in-up" data-delay="900">
                    <i class="fas fa-tshirt text-primary text-4xl mb-4"></i>
                    <h4 class="font-bold text-primary">Textile</h4>
                </div>
                <div class="bg-linear-to-br from-gray-100 to-white p-8 rounded-2xl border border-gray-200 hover:border-secondary transition-all hover:shadow-xl text-center fade-in-up" data-delay="1050">
                    <i class="fas fa-microchip text-primary text-4xl mb-4"></i>
                    <h4 class="font-bold text-primary">Electronics</h4>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-38 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center max-w-4xl mx-auto fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight mb-2">
                    Need Our Services?
                </h2>
                <p class="text-lg mb-8 leading-relaxed max-w-2xl mx-auto">
                    Contact us today for a consultation and discover how we can help achieve your goals with our comprehensive industrial solutions
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
