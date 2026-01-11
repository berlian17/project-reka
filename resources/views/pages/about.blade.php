@extends('layouts.app')

@section('title', 'About')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/about.css') }}">
@endpush

@section('content')
    <section class="about-hero min-h-[60vh] flex items-center justify-center pt-20">
        <div class="container mx-auto px-4 lg:px-8 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h1 class="hero-title text-5xl md:text-6xl font-bold mb-6 leading-tight fade-in-up">
                    About Us
                </h1>
                <div class="w-[15%] h-1 bg-secondary mx-auto mb-8 fade-in-up" style="animation-delay: 0.2s;"></div>
                <p class="text-xl text-white! fade-in-up" style="animation-delay: 0.2s;">
                    Leading Water & Waste treatment Solutions Provider
                </p>
            </div>
        </div>
    </section>

    {{-- Company Overview --}}
    <section class="py-38 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 max-w-6xl mx-auto items-center">
                <div class="order-2 lg:order-1 fade-in-up" data-delay="0">
                    <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Our Story</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                        Building a Sustainable Future
                    </h2>
                    <div class="w-[25%] h-1 bg-secondary mt-2 mb-8"></div>
                    <p class="leading-relaxed mb-4">
                        <strong>PT. Reka International Services (REKA)</strong> is an Engineering, Procurement, and Construction (EPC) company established in 2007, providing integrated engineering and industrial solutions for clients across Indonesia, with core expertise in Water and Wastewater Treatment.
                    </p>
                    <p class="leading-relaxed mb-4">
                        Originally operating in the chemical sector, REKA has grown into a comprehensive EPC provider offering end-to-end services covering engineering design, procurement, fabrication, construction, installation, commissioning, and maintenance. These capabilities are strengthened by solid expertise in Civil, Mechanical, Electrical, Piping, and Instrumentation (CMEPI) works, as well as expansion into the automotive manufacturing sector.
                    </p>
                    <p class="leading-relaxed">
                        REKA is led by professional and highly qualified engineers with extensive multinational project experience and is supported by modern workshop facilities, reliable equipment, and strong partnerships with leading local and international suppliers. Our strong commitment to quality, innovation, safety, and environmental responsibility enables us to deliver cost-effective, reliable, and sustainable solutions, meeting international standards while building long-term partnerships with our clients.
                    </p>
                </div>

                <div class="order-1 lg:order-2 fade-in-up" data-delay="300">
                    <div class="relative">
                        <div class="absolute -top-4 -right-4 w-full h-full bg-secondary/10 rounded-2xl"></div>
                        <img src="{{ asset('images/pages/about-us-page-1.webp') }}" alt="about us"
                             class="relative w-full h-[450px] object-cover rounded-2xl shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Statistics --}}
    <section class="py-28 bg-primary">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="text-white p-8 text-center fade-in-up" data-delay="0">
                    <div class="bricolage-font text-6xl md:text-7xl font-bold text-secondary float-animation mb-4">{{ $statisticYears }}+</div>
                    <p class="text-white! text-xl font-semibold mb-2">Years Experience</p>
                    <p class="text-white! text-sm opacity-80">Serving industrial clients</p>
                </div>
                
                <div class="text-white p-8 text-center fade-in-up" data-delay="0">
                    <div class="bricolage-font text-6xl md:text-7xl font-bold text-secondary float-animation mb-4">50+</div>
                    <p class="text-white! text-xl font-semibold mb-2">Projects Completed</p>
                    <p class="text-white! text-sm opacity-80">Successful implementations</p>
                </div>
                
                <div class="text-white p-8 text-center fade-in-up" data-delay="0">
                    <div class="bricolage-font text-6xl md:text-7xl font-bold text-secondary float-animation mb-4">{{ $statisticIndustries }}+</div>
                    <p class="text-white! text-xl font-semibold mb-2">Industries Served</p>
                    <p class="text-white! text-sm opacity-80">Diverse sectors</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Vision & Mission --}}
    <section class="py-38 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 max-w-6xl mx-auto">
                {{-- Vision --}}
                <div class="bg-white p-12 rounded-3xl shadow-2xl border-t-4 border-secondary fade-in-up" data-delay="0">
                    <div class="flex items-center gap-6 mb-6">
                        <div class="w-20 h-20 bg-secondary/10 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-eye text-secondary text-4xl"></i>
                        </div>

                        <h2 class="text-3xl font-bold text-primary">
                            Our Vision
                        </h2>
                    </div>
                    <p class="text-lg leading-relaxed">
                        To become a company that is highly competitive both in Quality and Quantity by always Attention to <strong>“Customer Satisfaction”</strong>.
                    </p>
                    <div class="mt-10 pt-8 border-t border-gray-200">
                        <p class="italic text-sm font-semibold">PT. Reka International Services</p>
                    </div>
                </div>
                
                {{-- Mission --}}
                <div class="bg-white p-12 rounded-3xl shadow-2xl border-t-4 border-primary fade-in-up" data-delay="300">
                    <div class="flex items-center gap-6 mb-6">
                        <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-bullseye text-primary text-4xl"></i>
                        </div>

                        <h2 class="text-3xl font-bold text-primary">
                            Our Mission
                        </h2>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center shrink-0 my-auto">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <p class="leading-relaxed">
                                Delivering the best customer concern in Cost, Quality, Logistics, and delivery
                            </p>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center shrink-0 my-auto">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <p class="leading-relaxed">
                                Continuous improvement of our resources to achieve the most effective and efficient in works
                            </p>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center shrink-0 my-auto">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <p class="leading-relaxed">
                                Best serve to our valued Customers, Employees, and Shareholders
                            </p>
                        </li>
                    </ul>
                </div>
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
                    <p class="text-primary! text-xl font-bold mb-4">
                        Experienced Team
                    </p>
                    <p class="leading-relaxed">
                        {{ $statisticIndustries }}+ years of expertise in delivering innovative industrial solutions.
                    </p>
                </div>

                <div class="card p-8 rounded-3xl shadow-2xl relative border border-gray-100 fade-in-up" data-delay="0">
                    <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-cogs text-white text-3xl"></i>
                    </div>
                    <p class="text-primary! text-xl font-bold mb-4">
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
                    <p class="text-primary! text-xl font-bold mb-4">
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
                    <p class="text-primary! text-xl font-bold mb-4">
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
                    <p class="text-primary! text-xl font-bold mb-4">
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
                    <p class="stext-primary! text-xl font-bold mb-4">
                        After Sales Support
                    </p>
                    <p class="leading-relaxed">
                        Comprehensive maintenance and technical support services for long-term success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ISO Certification --}}
    <section class="py-38 bg-white">
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                    Our Certifications
                </h2>
                <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                <p class="max-w-3xl mx-auto leading-relaxed">
                    Committed to international quality standards and continuous improvement in all our services
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div class="certification-card rounded-3xl shadow-2xl overflow-hidden border border-gray-200 group hover:shadow-3xl fade-in-up" data-delay="0">
                    <div class="relative h-[500px] overflow-hidden bg-white pt-8 px-8">
                        <div class="relative w-full h-full flex items-center justify-center">
                            <img src="{{ asset('images/certificate/CERT ISO - ISO 14001-2015.webp') }}"
                                 alt="ISO certificate"
                                 class="max-w-full max-h-full object-contain rounded-lg transform cursor-pointer">
                            <div class="absolute inset-0 bg-linear-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity rounded-lg"></div>

                            {{-- Zoom Icon --}}
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <button class="w-16 h-16 bg-primary hover:scale-110 backdrop-blur-sm rounded-full flex items-center justify-center">
                                    <i class="fas fa-search-plus text-white text-2xl"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-8 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center">
                                <i class="fas fa-award text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-primary">ISO 14001:2015</h3>
                                <p>Environmental Management System</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="certification-card rounded-3xl shadow-2xl overflow-hidden border border-gray-200 group hover:shadow-3xl fade-in-up" data-delay="0">
                    <div class="relative h-[500px] overflow-hidden bg-white pt-8 px-8">
                        <div class="relative w-full h-full flex items-center justify-center">
                            <img src="{{ asset('images/certificate/CERT ISO - ISO 9001-2015.webp') }}"
                                 alt="ISO certificate"
                                 class="max-w-full max-h-full object-contain rounded-lg transform cursor-pointer">
                            <div class="absolute inset-0 bg-linear-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity rounded-lg"></div>

                            {{-- Zoom Icon --}}
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <button class="w-16 h-16 bg-primary hover:scale-110 backdrop-blur-sm rounded-full flex items-center justify-center">
                                    <i class="fas fa-search-plus text-white text-2xl"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-8 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center">
                                <i class="fas fa-award text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-primary">ISO 9001:2015</h3>
                                <p>Quality Management System</p>
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

    {{-- CTA --}}
    <section class="py-38 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center max-w-4xl mx-auto fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight mb-2">
                    Ready to Partner with Us?
                </h2>
                <p class="text-lg mb-8 leading-relaxed max-w-2xl mx-auto">
                    Let's discuss how we can help you achieve your goals with our innovative and sustainable solutions
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
    <script src="{{ asset('js/pages/about.js') }}"></script>
@endpush
