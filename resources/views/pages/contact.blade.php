@extends('layouts.app')

@section('title', 'Contact')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/contact.css') }}">
@endpush

@section('content')
    <section class="contact-hero min-h-[60vh] flex items-center justify-center pt-20">
        <div class="container mx-auto px-4 lg:px-8 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h1 class="hero-title text-5xl md:text-6xl font-bold mb-6 leading-tight fade-in-up">
                    Contact Us
                </h1>
                <div class="w-[15%] h-1 bg-secondary mx-auto mb-8 fade-in-up" style="animation-delay: 0.2s;"></div>
                <p class="text-xl text-white! fade-in-up" style="animation-delay: 0.2s;">
                    Have a question or need assistance? We're here to help! Get in touch with our team today
                </p>
            </div>
        </div>
    </section>

    {{-- Information --}}
    <section class="py-38 bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                    Get In Touch
                </h2>
                <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                <p class="max-w-2xl mx-auto leading-relaxed">
                    Have a question or need assistance? We're here to help!
                </p>
            </div>

            {{-- Toast Container --}}
            <div id="toast-container" class="max-w-6xl fixed top-20 right-6 z-50 space-y-4">
                @if (session('error'))
                    <div class="toast flex items-start gap-3 bg-red-500 text-white px-5 py-4 rounded-xl shadow-xl transform transition-all duration-500 opacity-0 translate-x-10"
                        data-timeout="5000">
                        <i class="fas fa-triangle-exclamation mt-1 text-lg"></i>
                        <span class="text-sm leading-relaxed">
                            {{ session('error') }}
                        </span>
                    </div>
                @endif

                @if (session('success'))
                    <div class="toast flex items-start gap-3 bg-green-500 text-white px-5 py-4 rounded-xl shadow-xl transform transition-all duration-500 opacity-0 translate-x-10"
                        data-timeout="5000">
                        <i class="fas fa-check-circle mt-1 text-lg"></i>
                        <span class="text-sm leading-relaxed">
                            {{ session('success') }}
                        </span>
                    </div>
                @endif
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto fade-in-up" data-delay="0">
                {{-- Contact Information --}}
                <div class="lg:col-span-1">
                    <div class="card rounded-3xl shadow-2xl p-8 border border-gray-100">
                        <h3 class="text-2xl font-bold text-primary mb-6">Contact Information</h3>
                        <p class="leading-relaxed mb-6">
                            Contact us for a free consultation, quotation, or any other questions. Our team is ready to assist you.
                        </p>

                        <div class="card info-card rounded-2xl p-6 mb-5 border border-gray-300 hover:border-secondary">
                            <div class="flex items-start gap-4">
                                <div class="icon-box w-14 h-14 rounded-xl flex items-center justify-center shrink-0 my-auto">
                                    <i class="fas fa-location-dot text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="icon-title">Head Office</p>
                                    <p class="text-sm leading-relaxed">
                                        {{ $appSettings->address }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="text-sm leading-relaxed"
                            onclick="window.open('https://api.whatsapp.com/send?phone={{ $appSettings->whatsapp }}&text=Hello,%20I%20would%20like%20to%20inquire%20further%20about%20your%20services.', '_blank'); return false;">
                            <div class="card info-card rounded-2xl p-6 mb-5 border border-gray-300 hover:border-secondary">
                                <div class="flex items-start gap-4">
                                    <div class="icon-box w-14 h-14 rounded-xl flex items-center justify-center shrink-0 my-auto">
                                        <i class="fas fa-phone text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="icon-title">Phone</p>
                                        <p class="text-sm leading-relaxed">
                                            {{ preg_replace('/^(\d{2})(\d{3})(\d{4})(\d+)$/', '+$1 $2-$3-$4', $appSettings->whatsapp) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="mailto:{{ $appSettings->email }}">
                            <div class="card info-card rounded-2xl p-6 mb-7 border border-gray-300 hover:border-secondary">
                                <div class="flex items-start gap-4">
                                    <div class="icon-box w-14 h-14 rounded-xl flex items-center justify-center shrink-0 my-auto">
                                        <i class="fas fa-envelope text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="icon-title">Email</p>
                                        <p class="text-sm leading-relaxed">
                                            {{ $appSettings->email }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        {{-- Business Hours --}}
                        <div class="bg-primary rounded-2xl p-6 text-white">
                            <h4 class="font-bold text-lg mb-4 flex items-center gap-2">
                                <i class="fas fa-clock"></i>
                                Business Hours
                            </h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2">
                                    <span class="text-sm font-semibold">Monday - Friday</span>
                                    <span class="text-sm">8:00 AM - 5:00 PM</span>
                                </div>
                                <div class="flex justify-between items-center py-2">
                                    <span class="text-sm font-semibold">Saturday</span>
                                    <span class="text-sm">9:00 AM - 4:00 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div class="lg:col-span-2">
                    <div class="card rounded-3xl shadow-2xl p-8 border border-gray-100">
                        <h3 class="text-2xl font-bold text-primary mb-6">Send Us a Message</h3>
                        <p class="leading-relaxed mb-8">
                            Fill out the form below and our team will contact you soon.
                        </p>

                        <form id="contactForm" action="{{ route('contact.send') }}" class="space-y-6" method="POST">
                            @csrf

                            {{-- Honeypot Field (hidden from users, visible to bots) --}}
                            <input type="text" name="website" class="hidden" tabindex="-1" autocomplete="off">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block font-semibold text-primary mb-2">
                                        Full Name <span class="text-secondary">*</span>
                                    </label>
                                    <input type="text" name="fullName"
                                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('fullName') border-red-500 @enderror"
                                        placeholder="John Doe" value="{{ old('fullName') }}"
                                        maxlength="100" required
                                    >
                                    @error('fullName')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div>
                                    <label class="block font-semibold text-primary mb-2">
                                        Company Name <span class="text-secondary">*</span>
                                    </label>
                                    <input type="text" name="companyName"
                                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('companyName') border-red-500 @enderror"
                                        placeholder="Your Company" value="{{ old('companyName') }}" 
                                        maxlength="100" required
                                    >
                                    @error('companyName')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block font-semibold text-primary mb-2">
                                        Email Address <span class="text-secondary">*</span>
                                    </label>
                                    <input type="email" name="email"
                                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                                        placeholder="john@company.com" value="{{ old('email') }}" 
                                        maxlength="255" required
                                    >
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div>
                                    <label class="block font-semibold text-primary mb-2">
                                        Topic <span class="text-secondary">*</span>
                                    </label>
                                    <select name="topic" 
                                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('topic') border-red-500 @enderror" 
                                        required
                                    >
                                        <option value="">Select a topic</option>
                                        <option value="quotation" {{ old('topic') == 'quotation' ? 'selected' : '' }}>Request Quotation</option>
                                        <option value="technical" {{ old('topic') == 'technical' ? 'selected' : '' }}>Technical Support</option>
                                        <option value="partnership" {{ old('topic') == 'partnership' ? 'selected' : '' }}>Partnership</option>
                                    </select>
                                    @error('topic')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block font-semibold text-primary mb-2">
                                    Subject <span class="text-secondary">*</span>
                                </label>
                                <input type="text" name="subject"
                                    class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('subject') border-red-500 @enderror"
                                    placeholder="Brief description" value="{{ old('subject') }}" 
                                    maxlength="200" required
                                >
                                @error('subject')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block font-semibold text-primary mb-2">
                                    Message <span class="text-secondary">*</span>
                                </label>
                                <textarea name="message" rows="6"
                                    class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none @error('message') border-red-500 @enderror"
                                    placeholder="Tell us more about your requirements..." 
                                    minlength="10" maxlength="2000" required
                                >{{ old('message') }}</textarea>
                                <div class="flex justify-between mt-1">
                                    @error('message')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @else
                                        <p class="text-gray-500 text-xs">Minimum 10 characters</p>
                                    @enderror
                                    <p class="text-gray-500 text-xs" id="charCount">0 / 2000</p>
                                </div>
                            </div>

                            {{-- Submit --}}
                            <button type="submit" id="submitBtn"
                                class="btn-primary w-full rounded-lg font-semibold text-lg shadow-2xl hover:shadow-3xl flex items-center justify-center gap-3 group disabled:opacity-50 disabled:cursor-not-allowed"
                            >
                                <i class="fas fa-paper-plane text-xl"></i>
                                <span id="btnText">Send Message</span>
                            </button>

                            <p class="text-sm text-center text-gray-600">
                                <i class="fas fa-lock mr-1"></i>
                                Your information is secure and will not be shared with third parties.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Location --}}
    <section class="py-38 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 fade-in-up" data-delay="0">
                <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                    Our Location
                </h2>
                <div class="w-[10%] h-1 bg-secondary mx-auto mt-2 mb-8"></div>
                <p class="max-w-2xl mx-auto leading-relaxed">
                    Find us on the map and plan your visit to our office
                </p>
            </div>

            <div class="map-container max-w-6xl mx-auto fade-in-up rounded-3xl shadow-2xl" data-delay="0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1983.0828802728715!2d106.9919152!3d-6.241873!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698df8b061b851%3A0xb9711644dcdbc1f!2sDJARCO%20REKA%20RASA%20INDONESIA.%20PT!5e0!3m2!1sid!2sid!4v1764665026978!5m2!1sid!2sid" 
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen="true"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="rounded-3xl"
                ></iframe>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if (session('error'))
                const contactForm = document.getElementById('contactForm');
                if (contactForm) {
                    contactForm.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            @endif

            const messageField = document.querySelector('textarea[name="message"]');
            const charCount = document.getElementById('charCount');
            if (messageField && charCount) {
                const updateCount = () => {
                    charCount.textContent = `${messageField.value.length} / 2000`;
                };

                messageField.addEventListener('input', updateCount);
                updateCount(); // initial
            }

            const form = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            if (form && submitBtn && btnText) {
                form.addEventListener('submit', function () {
                    submitBtn.disabled = true;
                    btnText.textContent = 'Sending...';

                    const icon = submitBtn.querySelector('i');
                    if (icon) {
                        icon.className = 'fas fa-spinner fa-spin text-xl';
                    }
                });
            }


            const toasts = document.querySelectorAll('.toast');
            toasts.forEach(toast => {
                const timeout = parseInt(toast.dataset.timeout || 5000);

                // Show
                setTimeout(() => {
                    toast.classList.remove('opacity-0', 'translate-x-10');
                    toast.classList.add('opacity-100', 'translate-x-0');
                }, 100);

                // Hide
                setTimeout(() => {
                    toast.classList.add('opacity-0', 'translate-x-10');
                    setTimeout(() => {
                        toast.remove();
                    }, 500);
                }, timeout);
            });
        });
    </script>
@endpush
