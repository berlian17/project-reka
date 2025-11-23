document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navbar');
    const logo = document.getElementById('nav-logo');
    const backToTop = document.getElementById('backToTop');

    const handleScroll = () => {
        const st = window.scrollY;

        // Navbar effect
        if (st > 100) {
            navbar.classList.add('scrolled');
            navbar.classList.remove('bg-primary');
            logo.src = logo.dataset.light;
            backToTop.classList.remove('opacity-0', 'invisible');
        } else {
            navbar.classList.remove('scrolled');
            navbar.classList.add('bg-primary');
            logo.src = logo.dataset.dark;
            backToTop.classList.add('opacity-0', 'invisible');
        }

        // Close all mobile dropdowns on big scroll
        if (Math.abs(st - handleScroll.lastScroll || 0) > 50) {
            mobileDropdowns.forEach(dropdown => {
                dropdown.querySelector('.mobile-dropdown-toggle')?.classList.remove('active');
                dropdown.querySelector('.mobile-dropdown-content')?.classList.remove('active');
            });
        }

        handleScroll.lastScroll = st;
    };

    window.addEventListener('scroll', handleScroll);

    // MOBILE MENU TOGGLE
    const mobileMenuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    mobileMenuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });

    // MOBILE DROPDOWN — Menggunakan class 'active'
    const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
    mobileDropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.mobile-dropdown-toggle');
        const content = dropdown.querySelector('.mobile-dropdown-content');

        if (!toggle || !content) return;

        toggle.addEventListener('click', (e) => {
            e.preventDefault();

            // Close other dropdowns
            mobileDropdowns.forEach(other => {
                if (other !== dropdown) {
                    other.querySelector('.mobile-dropdown-toggle')?.classList.remove('active');
                    other.querySelector('.mobile-dropdown-content')?.classList.remove('active');
                }
            });

            // Toggle current dropdown
            toggle.classList.toggle('active');
            content.classList.toggle('active');
        });
    });

    // CLICK OUTSIDE TO CLOSE MOBILE MENU
    document.addEventListener('click', (e) => {
        if (!mobileMenu || !mobileMenuBtn) return;

        const clickedOutside =
            !mobileMenu.contains(e.target) &&
            !mobileMenuBtn.contains(e.target);

        if (!clickedOutside) return;
        if (mobileMenu.classList.contains('hidden')) return;

        // Close menu
        mobileMenu.classList.add('hidden');

        const icon = mobileMenuBtn.querySelector('i');
        icon.classList.add('fa-bars');
        icon.classList.remove('fa-times');
    });

    // INTERSECTION OBSERVER (Fade-in)
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const delay = parseInt(entry.target.dataset.delay) || 0;
                setTimeout(() => {
                    entry.target.classList.add('show'); // trigger animasi
                }, delay);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    });

    document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));

    // HIGHLIGHT ACTIVE DROPDOWN (Desktop)
    const currentPath = window.location.pathname;
    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
        const dropdownMenu = toggle.nextElementSibling;
        if (!dropdownMenu) return;

        dropdownMenu.querySelectorAll('a').forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                toggle.classList.add('text-secondary');
            }
        });
    });

    // Back to top
    if (backToTop) {
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                mobileMenu.classList.add('hidden');
            }
        });
    });
});