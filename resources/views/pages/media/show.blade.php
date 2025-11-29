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
                        REKA Wins Environmental Excellence Award
                    </h1>

                    <div class="flex flex-col sm:flex-row sm:items-center sm:gap-4 mb-4">
                        <span class="bg-secondary text-white px-4 py-2 rounded-full text-sm font-semibold mb-2 sm:mb-0">
                            News
                        </span>

                        <div class="flex items-center gap-4 sm:flex sm:items-center sm:gap-4">
                            <p class="flex items-center gap-2">
                                <i class="fas fa-calendar"></i>
                                October 21, 2025
                            </p>
                            <p class="flex items-center gap-2">
                                <i class="fas fa-user"></i>
                                Admin
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative rounded-3xl shadow-2xl overflow-hidden mb-8 fade-in-up" data-delay="0">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=1200&h=600&fit=crop" 
                         alt="Media banner" 
                         class="w-full h-[450px] object-cover">
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
                            <p>
                                PT. REKA INTERNATIONAL SERVICES, consectetur adipiscing elit. Fusce sed enim sed ante efficitur aliquet non a minus. Nulla pharetra eget mauris a pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>

                            <h3>Environmental Commitment</h3>
                            <p>
                                Our commitment to environmental sustainability has been recognized by industry leaders. This award represents years of dedication to implementing green technologies and sustainable practices across all our operations. We believe that protecting the environment is not just a responsibility, but an opportunity to innovate and lead.
                            </p>

                            <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=1000&h=600&fit=crop"  alt="Media image">

                            <h3>Key Achievements</h3>
                            <ul class="list-disc">
                                <li>Reduced water consumption by 40% through advanced treatment systems</li>
                                <li>Implemented zero-waste policies across all project sites</li>
                                <li>Achieved carbon neutrality in our operations</li>
                                <li>Developed innovative wastewater treatment solutions</li>
                                <li>Trained over 500 engineers in sustainable practices</li>
                            </ul>

                            <blockquote>
                                "This award is a testament to our team's unwavering dedication to environmental excellence. We will continue to push the boundaries of what's possible in sustainable water treatment." - CEO, PT. Reka International Services
                            </blockquote>

                            <h3>Innovation in Water Treatment</h3>
                            <p>
                                Our innovative approach combines cutting-edge technology with proven methodologies. We've developed proprietary treatment systems that not only meet but exceed international environmental standards. These systems have been successfully implemented across various industries, from manufacturing to automotive sectors.
                            </p>

                            <h3>Future Plans</h3>
                            <p>
                                Looking ahead, we are committed to further expanding our sustainable solutions portfolio. Our research and development team is currently working on next-generation treatment technologies that promise even greater environmental benefits while maintaining cost-effectiveness for our clients.
                            </p>

                            <ol class="list-decimal">
                                <li>Expansion of renewable energy integration in our treatment plants</li>
                                <li>Development of AI-powered monitoring systems</li>
                                <li>Launch of circular economy initiatives</li>
                                <li>Partnerships with international research institutions</li>
                                <li>Training programs for the next generation of environmental engineers</li>
                            </ol>

                            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=1000&h=600&fit=crop" alt="Media image">

                            <h3>Industry Impact</h3>
                            <p>
                                This recognition highlights the importance of sustainable practices in the industrial sector. As industries face increasing pressure to reduce their environmental footprint, our solutions provide a pathway to compliance while maintaining operational efficiency. We're proud to be at the forefront of this transformation.
                            </p>
                            <p>
                                The award ceremony, attended by government officials, industry leaders, and environmental advocates, showcased the collective effort required to address today's environmental challenges. It serves as a reminder that with innovation, dedication, and collaboration, we can create a more sustainable future for all.
                            </p>
                        </div>

                        {{-- Tags --}}
                        <div class="mt-12 pt-8 border-t border-gray-200">
                            <h4 class="font-bold text-primary mb-4">Tags:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-4 py-2 bg-gray-100 rounded-lg text-sm">Environment</span>
                                <span class="px-4 py-2 bg-gray-100 rounded-lg text-sm">Award</span>
                                <span class="px-4 py-2 bg-gray-100 rounded-lg text-sm">Sustainability</span>
                                <span class="px-4 py-2 bg-gray-100 rounded-lg text-sm">Innovation</span>
                                <span class="px-4 py-2 bg-gray-100 rounded-lg text-sm">Water Treatment</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="lg:col-span-1 fade-in-up" data-delay="300">
                    <div class="card rounded-3xl shadow-2xl p-8 sticky top-24">
                        <h3 class="text-2xl font-bold text-primary mb-6">Recent Posts</h3>
                        <div class="space-y-4">
                            <a href="#" class="block group">
                                <div class="flex gap-4">
                                    <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0">
                                        <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=200&h=200&fit=crop" 
                                            alt="Recent" 
                                            class="w-full h-full object-cover group-hover:scale-110 transition">
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-primary! group-hover:text-secondary! transition mb-2 line-clamp-2">
                                            New Water Treatment Facility Opens
                                        </p>
                                        <span class="text-xs flex items-center gap-1">
                                            <i class="fas fa-calendar"></i>
                                            Oct 15, 2025
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="block group">
                                <div class="flex gap-4">
                                    <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0">
                                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=200&h=200&fit=crop" 
                                            alt="Recent" 
                                            class="w-full h-full object-cover group-hover:scale-110 transition">
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-primary! group-hover:text-secondary! transition mb-2 line-clamp-2">
                                            New Water Treatment Facility Opens
                                        </p>
                                        <span class="text-xs flex items-center gap-1">
                                            <i class="fas fa-calendar"></i>
                                            Oct 15, 2025
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="block group">
                                <div class="flex gap-4">
                                    <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0">
                                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=200&h=200&fit=crop" 
                                            alt="Recent" 
                                            class="w-full h-full object-cover group-hover:scale-110 transition">
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-primary! group-hover:text-secondary! transition mb-2 line-clamp-2">
                                            New Water Treatment Facility Opens
                                        </p>
                                        <span class="text-xs flex items-center gap-1">
                                            <i class="fas fa-calendar"></i>
                                            Oct 15, 2025
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="block group">
                                <div class="flex gap-4">
                                    <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0">
                                        <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=200&h=200&fit=crop" 
                                            alt="Recent" 
                                            class="w-full h-full object-cover group-hover:scale-110 transition">
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-primary! group-hover:text-secondary! transition mb-2 line-clamp-2">
                                            New Water Treatment Facility Opens
                                        </p>
                                        <span class="text-xs flex items-center gap-1">
                                            <i class="fas fa-calendar"></i>
                                            Oct 15, 2025
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="block group">
                                <div class="flex gap-4">
                                    <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0">
                                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=200&h=200&fit=crop" 
                                            alt="Recent" 
                                            class="w-full h-full object-cover group-hover:scale-110 transition">
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-primary! group-hover:text-secondary! transition mb-2 line-clamp-2">
                                            New Water Treatment Facility Opens
                                        </p>
                                        <span class="text-xs flex items-center gap-1">
                                            <i class="fas fa-calendar"></i>
                                            Oct 15, 2025
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
