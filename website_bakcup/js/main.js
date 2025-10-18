// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mobileMenu = document.getElementById('mobileMenu');

if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
    });
}

// Contact Form Submission
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const formData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            phone: document.getElementById('phone').value,
            service: document.getElementById('service').value,
            message: document.getElementById('message').value
        };
        
        // Simple form handling - display success message
        // In production, you would send this to a server
        document.getElementById('formSuccess').style.display = 'block';
        contactForm.reset();
        
        setTimeout(() => {
            document.getElementById('formSuccess').style.display = 'none';
        }, 5000);
    });
}

// Smooth Scroll for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        }
    });
});

// Services Slider Functionality
class ServicesSlider {
    constructor() {
        this.slider = document.querySelector('.services-slider');
        this.slides = document.querySelectorAll('.services-slide');
        this.indicators = document.querySelectorAll('.indicator');
        this.prevBtn = document.querySelector('.prev-btn');
        this.nextBtn = document.querySelector('.next-btn');
        
        if (!this.slider) return;
        
        this.currentSlide = 0;
        this.totalSlides = this.slides.length;
        this.autoSlideInterval = null;
        this.isTransitioning = false;
        
        this.init();
    }
    
    init() {
        // Set up event listeners
        if (this.prevBtn) {
            this.prevBtn.addEventListener('click', () => this.prevSlide());
        }
        
        if (this.nextBtn) {
            this.nextBtn.addEventListener('click', () => this.nextSlide());
        }
        
        // Indicator clicks
        this.indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => this.goToSlide(index));
        });
        
        // Pause auto-slide on hover
        this.slider.addEventListener('mouseenter', () => this.pauseAutoSlide());
        this.slider.addEventListener('mouseleave', () => this.startAutoSlide());
        
        // Start auto-sliding
        this.startAutoSlide();
        
        // Handle window resize
        window.addEventListener('resize', () => this.handleResize());
    }
    
    goToSlide(slideIndex) {
        if (this.isTransitioning) return;
        
        this.isTransitioning = true;
        this.currentSlide = slideIndex;
        
        const translateX = -slideIndex * 50; // 50% for each slide
        this.slider.style.transform = `translateX(${translateX}%)`;
        
        // Update indicators
        this.updateIndicators();
        
        // Reset transition flag
        setTimeout(() => {
            this.isTransitioning = false;
        }, 500);
    }
    
    nextSlide() {
        const nextSlide = (this.currentSlide + 1) % this.totalSlides;
        this.goToSlide(nextSlide);
    }
    
    prevSlide() {
        const prevSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.goToSlide(prevSlide);
    }
    
    updateIndicators() {
        this.indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === this.currentSlide);
        });
    }
    
    startAutoSlide() {
        this.pauseAutoSlide(); // Clear any existing interval
        this.autoSlideInterval = setInterval(() => {
            this.nextSlide();
        }, 4000); // Change slide every 4 seconds
    }
    
    pauseAutoSlide() {
        if (this.autoSlideInterval) {
            clearInterval(this.autoSlideInterval);
            this.autoSlideInterval = null;
        }
    }
    
    handleResize() {
        // Recalculate slide position on window resize
        const translateX = -this.currentSlide * 50;
        this.slider.style.transform = `translateX(${translateX}%)`;
    }
}

// Initialize slider when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new ServicesSlider();
});