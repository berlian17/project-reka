<nav id="navbar" class="bg-primary text-white fixed w-full top-0 z-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between py-4">
            <!-- Logo -->
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/REKA-INTERNATIONAL-SERVICES_LOGO-2.png') }}" alt="Reka International Services"
                    data-light="{{ asset('images/REKA-INTERNATIONAL-SERVICES_LOGO-1.png') }}"
                    data-dark="{{ asset('images/REKA-INTERNATIONAL-SERVICES_LOGO-2.png') }}"
                    class="h-8 w-auto" id="nav-logo" 
                />
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-2 font-bold">
                <a href="{{ route('home') }}" class="nav-link relative px-4 py-2 transition hover:text-secondary {{ request()->routeIs('home') ? '!text-secondary active' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" class="nav-link relative px-4 py-2 transition hover:text-secondary {{ request()->routeIs('about') ? '!text-secondary active' : '' }}">
                    About
                </a>
                
                <!-- Services Dropdown -->
                <div class="dropdown-container relative group">
                    <button class="nav-link dropdown-toggle flex items-center gap-1 px-4 py-2 transition hover:text-secondary {{ request()->routeIs('services*') ? 'text-secondary active' : '' }}">
                        Services
                        <i class="fas fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                    </button>
                    
                    <div class="dropdown-menu absolute left-0 top-full w-80 bg-white rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        <div class="p-4">                      
                            <a href="#" class="dropdown-item flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition group/item">
                                <div class="text-primary font-semibold text-sm group-hover/item:text-secondary transition">
                                    Chemical Solutions
                                </div>
                            </a>
                            <a href="#" class="dropdown-item flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition group/item">
                                <div class="text-primary font-semibold text-sm group-hover/item:text-secondary transition">
                                    MPS (Welder, Mechanic, Technician)
                                </div>
                            </a>
                            <a href="#" class="dropdown-item flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition group/item">
                                <div class="text-primary font-semibold text-sm group-hover/item:text-secondary transition">
                                    Non-Destructive Test (NDT)
                                </div>
                            </a>
                            <a href="#" class="dropdown-item flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition group/item">
                                <div class="text-primary font-semibold text-sm group-hover/item:text-secondary transition">
                                    Steel Construction
                                </div>
                            </a>
                            <a href="#" class="dropdown-item flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition group/item">
                                <div class="text-primary font-semibold text-sm group-hover/item:text-secondary transition">
                                    Surface Treatment
                                </div>
                            </a>
                            <a href="#" class="dropdown-item flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition group/item">
                                <div class="text-primary font-semibold text-sm group-hover/item:text-secondary transition">
                                    Water & Waste Water Treatment (EPC)
                                </div>
                            </a>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <a href="#" class="flex items-center justify-center gap-2 text-secondary font-semibold text-sm hover:gap-3 transition-all">
                                    View All Services
                                    <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('project.index') }}" class="nav-link relative px-4 py-2 transition hover:text-secondary {{ request()->routeIs('project*') ? 'text-secondary active' : '' }}">
                    Projects
                </a>
                <a href="#" class="nav-link relative px-4 py-2 transition hover:text-secondary {{ request()->routeIs('media*') ? 'text-secondary active' : '' }}">
                    Media
                </a>
                <a href="{{ route('contact') }}" class="btn-primary !text-white rounded-lg transition shadow-lg hover:shadow-xl transform ml-2">
                    Contact
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden focus:outline-none mobile-menu-icon">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden pb-4">
            <div class="space-y-1">
                <a href="{{ route('home') }}" class="block px-4 py-3 hover:bg-white/10 rounded-lg transition {{ request()->routeIs('home') ? 'bg-white/10 text-secondary' : '' }}">
                    Home
                </a>                
                <a href="{{ route('about') }}" class="block px-4 py-3 hover:bg-white/10 rounded-lg transition {{ request()->routeIs('about') ? 'bg-white/10 text-secondary' : '' }}">
                    about
                </a>
                
                <!-- Services Mobile Accordion -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-toggle w-full flex items-center justify-between px-4 py-3 hover:bg-white/10 rounded-lg transition {{ request()->routeIs('services*') ? 'bg-white/10 text-secondary' : '' }}">
                        Services
                        <i class="fas fa-chevron-down text-sm transition-transform"></i>
                    </button>
                    <div class="mobile-dropdown-content pl-4 mt-1 space-y-1">
                        <a href="#chemical" class="block px-4 py-2 text-sm hover:bg-white/10 rounded-lg transition">
                            Chemical Solutions
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-white/10 rounded-lg transition">
                            MPS (Welder, Mechanic, Technician)
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-white/10 rounded-lg transition">
                            Non-Destructive Test (NDT)
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-white/10 rounded-lg transition">
                            Steel Construction
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-white/10 rounded-lg transition">
                            Surface Treatment
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-white/10 rounded-lg transition">
                            Water & Waste Water Treatment (EPC)
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-secondary font-semibold hover:bg-white/10 rounded-lg transition">
                            View All Services
                        </a>
                    </div>
                </div>
                
                <a href="{{ route('project.index') }}" class="block px-4 py-3 hover:bg-white/10 rounded-lg transition {{ request()->routeIs('project*') ? 'bg-white/10 text-secondary' : '' }}">
                    Projects
                </a>
                <a href="#" class="block px-4 py-3 hover:bg-white/10 rounded-lg transition {{ request()->routeIs('media*') ? 'bg-white/10 text-secondary' : '' }}">
                    Media
                </a>
                <a href="{{ route('contact') }}" class="block px-4 py-3 hover:bg-white/10 rounded-lg transition {{ request()->routeIs('contact') ? 'bg-white/10 text-secondary' : '' }}">
                    Contact
                </a>
            </div>
        </div>
    </div>
</nav>