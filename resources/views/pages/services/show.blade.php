@extends('layouts.app')

@section('title', 'Chemical Solutions')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/service.css') }}">
@endpush

@section('content')
    <section class="service-hero min-h-[60vh] flex items-center justify-center pt-20">
        <div class="container mx-auto px-4 lg:px-8 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h1 class="hero-title text-5xl md:text-6xl font-bold mb-6 leading-tight fade-in-up">
                    Chemical Solutions
                </h1>
                <div class="w-[15%] h-1 bg-secondary mx-auto mb-8 fade-in-up" style="animation-delay: 0.2s;"></div>
                <p class="text-xl text-white! fade-in-up" style="animation-delay: 0.3s;">
                    High-quality chemical solutions specifically formulated for industrial water and wastewater treatment applications.
                </p>
            </div>
        </div>
    </section>

    {{-- Service Content --}}
    <section class="py-24 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-6xl mx-auto">
                {{-- Services --}}
                <div class="lg:col-span-1 fade-in-up" data-delay="300">
                    <div class="card rounded-3xl shadow-2xl p-8 sticky top-24">
                        <h3 class="text-2xl font-bold text-primary mb-6">Other Services</h3>
                        <div class="space-y-4">
                            <div class="pb-4 border-b border-gray-300">
                                <a href="{{ route('service.show', 'Chemical-Solutions') }}" class="service-item flex items-center gap-3 p-4 rounded-xl hover:bg-gray-50 transition group/item {{ request()->slug == 'Chemical-Solutions' ? 'bg-gray-100 active' : '' }}">
                                    <i class="fa-solid fa-flask text-secondary"></i>
                                    <span class="font-semibold text-primary">Chemical Solutions</span>
                                </a>
                            </div>
                            <div class="pb-4 border-b border-gray-300">
                                <a href="#" class="service-item flex items-center gap-3 p-4 rounded-xl hover:bg-gray-50 transition group/item">
                                    <i class="fa-solid fa-wrench text-secondary"></i>
                                    <span class="font-semibold text-primary">MPS (Welder, Mechanic, Technician)</span>
                                </a>
                            </div>
                            <div class="pb-4 border-b border-gray-300">
                                <a href="#" class="service-item flex items-center gap-3 p-4 rounded-xl hover:bg-gray-50 transition group/item">
                                    <i class="fa-solid fa-microscope text-secondary"></i>
                                    <span class="font-semibold text-primary">Non-Destructive Test (NDT)</span>
                                </a>
                            </div>
                            <div class="pb-4 border-b border-gray-300">
                                <a href="#" class="service-item flex items-center gap-3 p-4 rounded-xl hover:bg-gray-50 transition group/item">
                                    <i class="fas fa-hard-hat text-secondary"></i>
                                    <span class="font-semibold text-primary">Steel Construction</span>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="service-item flex items-center gap-3 p-4 rounded-xl hover:bg-gray-50 transition group/item">
                                    <i class="fas fa-water text-secondary"></i>
                                    <span class="font-semibold text-primary">Water & Waste Water Treatment (EPC)</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Main Content --}}
                <div class="lg:col-span-2 fade-in-up" data-delay="0">
                    <div class="card rounded-3xl shadow-2xl p-8 md:p-12">
                        <div class="service-content">
                            <h3>Service Overview</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod nec erat sed sollicitudin. Nullam vestibulum ante ac commodo finibus. Aenean in ex suscipit, euismod neque bibendum, dictum velit. Mauris auctor consectetur purus in molestie. Donec pulvinar nunc orci, nec tempor orci malesuada vel. Etiam pellentesque porta risus, nec luctus augue finibus id. Morbi pulvinar ex et nisi fringilla, vitae pulvinar mauris dignissim. Integer auctor purus vehicula nulla faucibus volutpat.
                            </p>
                            <p>
                                Ut blandit, tellus eget iaculis feugiat, ipsum est lacinia odio, et scelerisque tellus urna et neque. Nulla at neque iaculis, bibendum risus et, mollis nisi. Mauris odio purus, malesuada nec imperdiet eget, ornare quis orci. Maecenas sit amet rhoncus turpis, eget mattis diam. Duis blandit neque dolor, id cursus lacus lobortis sed. Phasellus at porttitor dolor, pretium porta mi. Nulla mattis eros non libero convallis porttitor. Fusce laoreet massa massa, eu ullamcorper nisl egestas in. Phasellus quis metus imperdiet, hendrerit erat eu, volutpat mauris. Aliquam eu massa eget dui venenatis tempor id quis arcu. Nullam ac fermentum ipsum. Proin ut consequat nisl. Aliquam eu nibh ut augue pellentesque tincidunt ac id nisi. Aliquam elementum in nunc eget dictum. Suspendisse et nisl vel nunc convallis efficitur id in nisl.
                            </p>

                            <h3>Key Features</h3>
                            <ul class="list-disc">
                                <li>High-efficiency reverse osmosis membranes with 99% rejection rate</li>
                                <li>Automated control system with real-time monitoring</li>
                                <li>Energy recovery system reducing power consumption by 40%</li>
                                <li>Pre-treatment system including multimedia filters and carbon filters</li>
                                <li>Chemical dosing system for optimal performance</li>
                                <li>Comprehensive safety features and redundancy systems</li>
                            </ul>

                            <h3>Scope of Work</h3>
                            <p>
                                The project scope encompassed the following phases:
                            </p>
                            <ol class="list-decimal">
                                <li>Detailed engineering and design based on water quality analysis</li>
                                <li>Equipment procurement from certified international suppliers</li>
                                <li>Site preparation and civil works</li>
                                <li>Mechanical and piping installation</li>
                                <li>Electrical and instrumentation integration</li>
                                <li>System commissioning and performance testing</li>
                                <li>Operator training and documentation</li>
                                <li>Post-installation support and maintenance</li>
                            </ol>
                        </div>
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
