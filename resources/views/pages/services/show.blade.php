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
                    {{ $service->title }}
                </h1>
                <div class="w-[15%] h-1 bg-secondary mx-auto mb-8 fade-in-up" style="animation-delay: 0.2s;"></div>
                <p class="text-xl text-white! fade-in-up" style="animation-delay: 0.3s;">
                    {{ $service->excerpt }}
                </p>
            </div>
        </div>
    </section>

    {{-- Service Content --}}
    <section class="py-24 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-6xl mx-auto">
                {{-- Services --}}
                <div class="lg:col-span-1 order-2 lg:order-1 fade-in-up" data-delay="300">
                    <div class="card rounded-3xl shadow-2xl p-8 sticky top-24">
                        <h3 class="text-2xl font-bold text-primary mb-6">Other Services</h3>
                        <div class="space-y-4">
                            @foreach ($appServices as $item)
                                <div class="{{ !$loop->last ? 'pb-4 border-b border-gray-300' : '' }}">
                                    <a href="{{ route('service.show', $item->slug) }}" class="service-item flex items-center gap-3 p-4 rounded-xl hover:bg-gray-50 transition group/item {{ request()->route('slug') === $item->slug ? 'bg-gray-100 active' : '' }}">
                                        <i class="{{ $item->icon }} text-secondary"></i>
                                        <span class="font-semibold text-primary">{{ $item->title }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Main Content --}}
                @if ($service->long_desc)
                    <div class="lg:col-span-2 order-1 lg:order-2 fade-in-up" data-delay="0">
                        <div class="card rounded-3xl shadow-2xl p-8 md:p-12">
                            <div class="service-content">
                                <h3>Service Overview</h3>
                                {!! clean($service->long_desc) !!}
                            </div>
                        </div>
                    </div>
                @endif
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
                    <a href="{{ route('contact.index') }}" class="btn-primary text-lg rounded-lg font-semibold inline-flex items-center justify-center px-12 py-5">
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
