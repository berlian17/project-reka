// Hero Slide
const heroSlides = document.querySelectorAll('.hero-slide');
const nextBtn = document.getElementById('nextHero');
const prevBtn = document.getElementById('prevHero');
let index = 0;

function showSlide(i) {
    heroSlides.forEach((slide, idx) => {
        slide.style.opacity = (idx === i) ? '1' : '0';
    });
}

nextBtn.addEventListener('click', () => {
    index = (index + 1) % heroSlides.length;
    showSlide(index);
});

prevBtn.addEventListener('click', () => {
    index = (index - 1 + heroSlides.length) % heroSlides.length;
    showSlide(index);
});

// Auto slide
setInterval(() => {
    index = (index + 1) % heroSlides.length;
    showSlide(index);
}, 8000); // 8 detik

showSlide(index);
