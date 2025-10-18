@extends('layouts.app')

@section('title', 'Our Fleet - Saudi Tim Limo Services')
@section('description', 'Discover our premium fleet of luxury vehicles including sedans, SUVs, limousines, and executive vans for your transportation needs.')

@section('content')
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <h1>Our Luxury Fleet</h1>
            <p>Premium vehicles for every occasion</p>
        </div>
    </section>

    <!-- Fleet Content -->
    <main class="page-content">
        <div class="container">
            <div class="fleet-grid">
                <!-- Luxury Sedans -->
                <div class="fleet-card">
                    {{-- Demo image: replace with your vehicle photo at public/assets/images/fleet-sedan.jpg --}}
                    <img src="https://www.saudivipcars.com/assets/images/BMW.png" alt="Luxury Sedan" class="fleet-image">
                    <div class="fleet-category">BMW 7 Series or similar </div>
                   
                    <ul class="fleet-features">
                        <li>uniformed English Speaking Driver</li>
                        <li>Climate control</li>
                        <li>WiFi available</li>
                        <li>Complimentary refreshments</li>
                    </ul>
                    <div class="card-actions" style="margin-top:1rem;">
                        <a href="{{ route('website.contact') }}" class="btn btn-book-now">Book Now</a>
                    </div>
                </div>
                <div class="fleet-card">
                    {{-- Demo image: replace with your vehicle photo at public/assets/images/fleet-sedan.jpg --}}
                    <img src="https://www.saudivipcars.com/assets/images/Toyota-Coaster.png" alt="Luxury Sedan" class="fleet-image">
                    <div class="fleet-category">28 Seats Toyota Coaster or similar</div>

                    <ul class="fleet-features">
                        <li>uniformed English Speaking Driver</li>
                        <li>Climate control</li>
                        <li>WiFi available</li>
                        <li>Complimentary refreshments</li>
                    </ul>
                    <div class="card-actions" style="margin-top:1rem;">
                        <a href="{{ route('website.contact') }}" class="btn btn-book-now">Book Now</a>
                    </div>
                </div>
                <div class="fleet-card">
                    {{-- Demo image: replace with your vehicle photo at public/assets/images/fleet-sedan.jpg --}}
                    <img src="https://www.saudivipcars.com/assets/images/Mercedes.png" alt="Luxury Sedan" class="fleet-image">
                    <div class="fleet-category">Mercedes S Class or similar</div>

                    <ul class="fleet-features">
                        <li>uniformed English Speaking Driver</li>
                        <li>Climate control</li>
                        <li>WiFi available</li>
                        <li>Complimentary refreshments</li>
                    </ul>
                    <div class="card-actions" style="margin-top:1rem;">
                        <a href="{{ route('website.contact') }}" class="btn btn-book-now">Book Now</a>
                    </div>
                </div>
                <div class="fleet-card">
                    {{-- Demo image: replace with your vehicle photo at public/assets/images/fleet-sedan.jpg --}}
                    <img src="https://www.saudivipcars.com/assets/images/Ford-Taurus--similar.png" alt="Luxury Sedan" class="fleet-image">
                    <div class="fleet-category">Ford Taurus or similar</div>

                    <ul class="fleet-features">
                        <li>uniformed English Speaking Driver</li>
                        <li>Climate control</li>
                        <li>WiFi available</li>
                        <li>Complimentary refreshments</li>
                    </ul>
                    <div class="card-actions" style="margin-top:1rem;">
                        <a href="{{ route('website.contact') }}" class="btn btn-book-now">Book Now</a>
                    </div>
                </div>
                <div class="fleet-card">
                    {{-- Demo image: replace with your vehicle photo at public/assets/images/fleet-sedan.jpg --}}
                    <img src="https://www.saudivipcars.com/assets/images/GMC-Yukun-similar.png" alt="Luxury Sedan" class="fleet-image">
                    <div class="fleet-category">GMC Yukun or similar</div>

                    <ul class="fleet-features">
                        <li>uniformed English Speaking Driver</li>
                        <li>Climate control</li>
                        <li>WiFi available</li>
                        <li>Complimentary refreshments</li>
                    </ul>
                    <div class="card-actions" style="margin-top:1rem;">
                        <a href="{{ route('website.contact') }}" class="btn btn-book-now">Book Now</a>
                    </div>
                </div>
            </div>


            <!-- CTA Section -->
            <section class="cta-section">
                <h2>Need Help Choosing the Right Vehicle?</h2>
                <p>Our team is ready to assist you in selecting the perfect vehicle for your needs</p>
                <a href="{{ route('website.contact') }}" class="btn btn-accent">Contact Us</a>
            </section>
        </div>
    </main>
    <script>
        // Add .image-loaded when each fleet image finishes loading (handles cached images too)
        (function() {
            function markLoaded(img) {
                if (!img.classList.contains('image-loaded')) {
                    // small delay to make sequence feel nicer
                    setTimeout(function() { img.classList.add('image-loaded'); }, 60);
                }
            }

            function revealCards() {
                var cards = document.querySelectorAll('.fleet-card');
                var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                if (prefersReduced) {
                    cards.forEach(function(c) { c.classList.add('card-visible'); });
                    return;
                }
                var baseDelay = 80; // ms per card (moderate speed)
                cards.forEach(function(card, idx) {
                    setTimeout(function() { card.classList.add('card-visible'); }, baseDelay * idx);
                });
            }

            document.addEventListener('DOMContentLoaded', function() {
                // image load handling
                var imgs = document.querySelectorAll('.fleet-image');
                imgs.forEach(function(img) {
                    if (img.complete && img.naturalWidth !== 0) {
                        markLoaded(img);
                    } else {
                        img.addEventListener('load', function() { markLoaded(img); });
                        img.addEventListener('error', function() { img.classList.add('image-loaded'); });
                    }
                });

                // reveal fleet cards with stagger
                // small timeout to allow images to start loading and avoid a visual jump
                setTimeout(revealCards, 120);
            });
        })();
    </script>
@endsection