<footer id="contact" class="bg-linear-to-br from-primary to-blue-950 text-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 py-18">
            <div class="md:col-span-5">
                <div class="flex mb-6">
                    <img src="{{ config('app.cms_url') . $appSettings->logo2 }}" alt="Reka International Services" class="h-14 w-auto" />
                </div>
                <p class="text-white! mb-6 max-w-sm">
                    Providing reliable engineering, procurement, and construction solutions for water and wastewater treatment since 2007.
                </p>
                <p class="text-secondary! font-bold text-xl mb-6">{{ $appSettings->tagline }}</p>
                
                <div class="flex gap-3">
                    <a href="{{ $appSettings->linkedin ?? '#' }}" target="_blank" class="w-11 h-11 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-secondary hover:scale-110 transition-all">
                        <i class="fab fa-linkedin-in text-lg"></i>
                    </a>
                    <a href="{{ $appSettings->facebook ?? '#' }}" target="_blank" class="w-11 h-11 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-secondary hover:scale-110 transition-all">
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    <a href="{{ $appSettings->instagram ?? '#' }}" target="_blank" class="w-11 h-11 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-secondary hover:scale-110 transition-all">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="{{ $appSettings->twitter ?? '#' }}" target="_blank" class="w-11 h-11 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-secondary hover:scale-110 transition-all">
                        <i class="fab fa-x-twitter text-lg"></i>
                    </a>
                </div>
            </div>
            
            <div class="md:col-span-4">
                <h3 class="text-xl font-bold mb-2 leading-tight">Our Services</h3>
                <div class="w-[15%] h-1 bg-secondary mb-6"></div>
                <ul class="space-y-3">
                    @foreach ($appServices as $item)
                        <li style="list-style: none">
                            <a href="{{ route('service.show', $item->slug) }}" class="hover:text-secondary transition flex items-center gap-2 group">
                                <i class="fas fa-chevron-right text-xs transition-transform group-hover:translate-x-1"></i>
                                {{ $item->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            
            <div class="md:col-span-3">
                <h3 class="text-xl font-bold mb-2 leading-tight">Contact Info</h3>
                <div class="w-[15%] h-1 bg-secondary mb-6"></div>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-map-marker-alt text-secondary mt-1 shrink-0"></i>
                        <span class="leading-relaxed">{{ $appSettings->address }}</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-phone text-secondary"></i>
                        <a href="#" 
                            onclick="window.open('https://api.whatsapp.com/send?phone={{ $appSettings->whatsapp }}&text=Hello,%20I%20would%20like%20to%20inquire%20further%20about%20your%20services.', '_blank'); return false;" 
                            class="hover:text-secondary transition">
                            {{ preg_replace('/^(\d{2})(\d{3})(\d{4})(\d+)$/', '+$1 $2-$3-$4', $appSettings->whatsapp) }}
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-envelope text-secondary"></i>
                        <a href="mailto:{{ $appSettings->email }}" class="hover:text-secondary transition">{{ $appSettings->email }}</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-white py-6 flex justify-center text-sm">
            <p class="text-white!">&copy; {{ date('Y') }} PT. Reka International Services. All Rights Reserved.</p>
        </div>
    </div>
</footer>
