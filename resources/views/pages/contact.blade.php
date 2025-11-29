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
                                        Jl. R. Suprapto No. 505 Cijengkol Setu Kabupaten Bekasi, 17520
                                    </p>
                                </div>
                            </div>
                        </div>

                        <a href="tel:021-8355317">
                            <div class="card info-card rounded-2xl p-6 mb-5 border border-gray-300 hover:border-secondary">
                                <div class="flex items-start gap-4">
                                    <div class="icon-box w-14 h-14 rounded-xl flex items-center justify-center shrink-0 my-auto">
                                        <i class="fas fa-phone text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="icon-title">Phone</p>
                                        <p class="text-sm leading-relaxed">
                                            021-8355317
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="mailto:marketing@rekaindo.com">
                            <div class="card info-card rounded-2xl p-6 mb-5 border border-gray-300 hover:border-secondary">
                                <div class="flex items-start gap-4">
                                    <div class="icon-box w-14 h-14 rounded-xl flex items-center justify-center shrink-0 my-auto">
                                        <i class="fas fa-envelope text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="icon-title">Email</p>
                                        <p class="text-sm leading-relaxed">
                                            marketing@rekaindo.com
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

                        <form id="contactForm" action="" class="space-y-6" method="POST">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block font-semibold text-primary mb-2">
                                        Full Name <span class="text-secondary">*</span>
                                    </label>
                                    <input type="text" name="fullName"
                                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none"
                                        placeholder="John Doe" required
                                    >
                                </div>
                                <div>
                                    <label class="block font-semibold text-primary mb-2">
                                        Company Name <span class="text-secondary">*</span>
                                    </label>
                                    <input 
                                        type="text" name="companyName"
                                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none"
                                        placeholder="Your Company" required
                                    >
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block font-semibold text-primary mb-2">
                                        Email Address <span class="text-secondary">*</span>
                                    </label>
                                    <input 
                                        type="email" name="email"
                                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none"
                                        placeholder="john@company.com" required
                                    >
                                </div>
                                <div>
                                    <label class="block font-semibold text-primary mb-2">
                                        Topic <span class="text-secondary">*</span>
                                    </label>
                                    <select name="topic" class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none" required>
                                        <option value="">Select a topic</option>
                                        <option value="quotation">Request Quotation</option>
                                        <option value="technical">Technical Support</option>
                                        <option value="partnership">Partnership</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block font-semibold text-primary mb-2">
                                    Subject <span class="text-secondary">*</span>
                                </label>
                                <input 
                                    type="text" name="subject"
                                    class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none"
                                    placeholder="Brief description" required
                                >
                            </div>
                            <div>
                                <label class="block font-semibold text-primary mb-2">
                                    Message <span class="text-secondary">*</span>
                                </label>
                                <textarea 
                                    name="message" rows="6"
                                    class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none resize-none"
                                    placeholder="Tell us more about your requirements..." required
                                ></textarea>
                            </div>

                            {{-- Submit --}}
                            <button 
                                type="submit" 
                                class="btn-primary w-full rounded-lg font-semibold text-lg shadow-2xl hover:shadow-3xl flex items-center justify-center gap-3 group"
                            >
                                <i class="fas fa-paper-plane text-xl"></i>
                                Send Message
                            </button>

                            <p class="text-sm text-center">
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
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2087479287744!2d107.00959931476897!3d-6.361089995407474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699c5e7e9e7e9d%3A0x1a1a1a1a1a1a1a1a!2sJl.%20R.%20Suprapto%20No.505%2C%20Cjengkel%20Setu%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat%2017520!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    class="rounded-3xl"
                ></iframe>
            </div>
        </div>
    </section>
@endsection
