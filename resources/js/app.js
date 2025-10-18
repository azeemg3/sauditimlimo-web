import './bootstrap';

// Simple slider controller for services slider
document.addEventListener('DOMContentLoaded', function () {
	const slider = document.querySelector('.services-slider');
	if (!slider) return;

	const slides = Array.from(document.querySelectorAll('.services-slide'));
	const indicators = Array.from(document.querySelectorAll('.indicator'));
	const prevBtn = document.querySelector('.prev-btn');
	const nextBtn = document.querySelector('.next-btn');
	let index = 0;

	function showSlide(i) {
		index = (i + slides.length) % slides.length;
		const slideWidth = slides[0].getBoundingClientRect().width + 24; // include gap approx
		slider.style.transform = `translateX(${-(slideWidth * index)}px)`;
		indicators.forEach((ind, idx) => ind.classList.toggle('active', idx === index));
	}

	prevBtn && prevBtn.addEventListener('click', () => showSlide(index - 1));
	nextBtn && nextBtn.addEventListener('click', () => showSlide(index + 1));

	indicators.forEach((ind) => {
		ind.addEventListener('click', () => showSlide(parseInt(ind.dataset.slide, 10) || 0));
	});

	// Auto-play
	let autoplay = setInterval(() => showSlide(index + 1), 5000);
	[prevBtn, nextBtn, ...indicators].forEach(el => el && el.addEventListener('mouseenter', () => clearInterval(autoplay)));
	[prevBtn, nextBtn, ...indicators].forEach(el => el && el.addEventListener('mouseleave', () => autoplay = setInterval(() => showSlide(index + 1), 5000)));

	// small entry animation for hero elements already handled via CSS keyframes; add float class for subtle motion
	document.querySelectorAll('.service-card').forEach((c, i) => {
		c.style.animation = `cardIn .7s cubic-bezier(.2,.9,.25,1) ${i * 80}ms both`;
	});

	// split hero title into word spans and stagger them
	const heroTitle = document.querySelector('.hero-title');
	if (heroTitle) {
		const text = heroTitle.textContent.trim();
		const words = text.split(/\s+/);
		heroTitle.innerHTML = words.map(w => `<span class="word">${w}</span>`).join(' ');
		// reveal words with stagger
		const wordEls = Array.from(heroTitle.querySelectorAll('.word'));
		wordEls.forEach((el, i) => {
			setTimeout(() => el.classList.add('is-visible'), 90 * i + 80);
		});
	}
});

/* Additional keyframes injected via JS for broad compatibility */
const style = document.createElement('style');
style.innerHTML = `@keyframes cardIn { from { opacity: 0; transform: translateY(18px) scale(.995); } to { opacity: 1; transform: translateY(0) scale(1); } }`;
document.head.appendChild(style);
