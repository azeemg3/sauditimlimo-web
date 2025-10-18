@extends('layouts.app')

@section('title', 'Saudi Tim Limo - Premium Transportation Worldwide')
@section('description', 'Saudi Tim Limo sets the benchmark for premium travel worldwide, offering VIP meet & greet, private jet services, corporate transportation, and airport transfers.')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Luxury Car Rental Service with Driver in Saudi Arabia</h1>

            {{-- Inline fallback CSS & JS so hero text animates even when assets aren't built --}}
            <style>
                /* scoped minimal styles for hero-title word animation */
                .hero-title .word{display:inline-block;opacity:0;transform:translateY(18px) rotateX(6deg) scale(.995);} 
                .hero-title .word.is-visible{animation:wordIn 700ms cubic-bezier(.2,.9,.25,1) forwards}
                @keyframes wordIn{to{opacity:1;transform:translateY(0) rotateX(0) scale(1)}}

                /* hero buttons slow reveal after page load */
                .hero-buttons .btn{opacity:0;transform:translateY(14px) scale(.995);transition:transform 1.4s cubic-bezier(.2,.9,.25,1),opacity 1.4s cubic-bezier(.2,.9,.25,1)}
                .hero-buttons.buttons-animate .btn{opacity:1;transform:translateY(0) scale(1)}
                /* gentle stagger for the two buttons */
                .hero-buttons.buttons-animate .btn:nth-child(1){transition-delay:.28s}
                .hero-buttons.buttons-animate .btn:nth-child(2){transition-delay:.58s}
            </style>

            <script>
                (function(){
                    // avoid double-run if compiled assets also do this
                    if (window.__heroWordsSplit) return; window.__heroWordsSplit = true;
                    function splitAndAnimate(){
                        var hero = document.querySelector('.hero-title');
                        if(!hero) return;
                        var text = hero.textContent.trim();
                        if(!text) return;
                        var words = text.split(/\s+/);
                        hero.innerHTML = words.map(function(w){ return '<span class="word">'+w+'</span>'; }).join(' ');
                        var els = hero.querySelectorAll('.word');
                        Array.prototype.forEach.call(els, function(el, i){
                            setTimeout(function(){ el.classList.add('is-visible'); }, 90*i + 80);
                        });
                    }
                    function animateButtonsOnLoad(){
                        if (window.__heroButtonsAnimated) return; window.__heroButtonsAnimated = true;
                        var btnWrap = document.querySelector('.hero-buttons');
                        if(!btnWrap) return;
                        // small delay after load to make animation feel intentional
                        setTimeout(function(){ btnWrap.classList.add('buttons-animate'); }, 260);
                    }
                    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', splitAndAnimate); else splitAndAnimate();
                    if (document.readyState === 'complete') { animateButtonsOnLoad(); } else { window.addEventListener('load', animateButtonsOnLoad); }
                })();
            </script>
            <p class="hero-subtitle">Luxury Car Rental Service with Driver in Saudi Arabia — Full Day Chauffeur Drive with Luxury Cars.</p>
            <div class="hero-buttons">
                <a href="{{ route('website.services') }}" class="btn btn-accent">Explore Our Services</a>
                <a href="{{ route('website.contact') }}" class="btn btn-outline">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title">Our Premium Services</h2>
            <p class="section-subtitle">Experience luxury and professionalism in every journey</p>
            
            <div class="services-slider-container">
                <div class="services-slider">
                    <div class="services-slide">
                        <div class="service-card float-slow">
                            <img src="{{asset('public/assets/images/nearest-airport-deals.jpg')}}" alt="Nearest  Airport Deals">
                            <h3>Nearest  Airport Deals</h3>
                            <p>Budget Prices for Long Term Rentals</p>
                            <a href="{{ route('website.services') }}#vip-meet-greet" class="read-more">Read more →</a>
                        </div>
                        
                        <div class="service-card float-slow">
                            <img src="{{ asset('public/assets/images/online-reservation.jpg') }}" alt="Private Jet Services">
                            <h3>Online Reservations</h3>
                            <p>Search Prices and Special Offers</p>
                            <a href="{{ route('website.services') }}#private-jet" class="read-more">Read more →</a>
                        </div>
                        
                        <div class="service-card float-slow">
                            <img src="{{ asset('public/assets/images/road-assistance.jpg') }}" alt="Corporate Transportation">
                            <h3>24/7 Road Assistance</h3>
                            <p>Road Assistance & Car Replacement</p>
                            <a href="{{ route('website.services') }}#corporate-transport" class="read-more">Read more →</a>
                        </div>
                        
                        <div class="service-card float-slow">
                            <img src="{{ asset('public/assets/airport-transfers.jpg') }}" alt="Airport Transfers">
                            <h3>Airport Transfers</h3>
                            <p>24 Hours Airport Transfer Services</p>
                            <a href="{{ route('website.services') }}#airport-transfers" class="read-more">Read more →</a>
                        </div>
                    </div>
                    
                    <!-- Duplicate slide for seamless loop -->
                    <div class="services-slide">
                        <div class="service-card float-slow">
                            <img src="{{asset('public/assets/images/nearest-airport-deals.jpg')}}" alt="Nearest  Airport Deals">
                            <h3>Nearest  Airport Deals</h3>
                            <p>Budget Prices for Long Term Rentals</p>
                            <a href="{{ route('website.services') }}#vip-meet-greet" class="read-more">Read more →</a>
                        </div>
                        
                        <div class="service-card float-slow">
                            <img src="{{ asset('public/assets/images/online-reservation.jpg') }}" alt="Private Jet Services">
                            <h3>Online Reservations</h3>
                            <p>Search Prices and Special Offers</p>
                            <a href="{{ route('website.services') }}#private-jet" class="read-more">Read more →</a>
                        </div>
                        
                        <div class="service-card float-slow">
                            <img src="{{ asset('public/assets/images/road-assistance.jpg') }}" alt="Corporate Transportation">
                            <h3>24/7 Road Assistance</h3>
                            <p>Road Assistance & Car Replacement</p>
                            <a href="{{ route('website.services') }}#corporate-transport" class="read-more">Read more →</a>
                        </div>
                        
                        <div class="service-card float-slow">
                            <img src="{{ asset('public/assets/airport-transfers.jpg') }}" alt="Airport Transfers">
                            <h3>Airport Transfers</h3>
                            <p>24 Hours Airport Transfer Services</p>
                            <a href="{{ route('website.services') }}#airport-transfers" class="read-more">Read more →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Slider Controls -->
                <div class="slider-controls">
                    <button class="slider-btn prev-btn" aria-label="Previous slide">‹</button>
                    <button class="slider-btn next-btn" aria-label="Next slide">›</button>
                </div>
                
                <!-- Slider Indicators -->
                <div class="slider-indicators">
                    <span class="indicator active" data-slide="0"></span>
                    <span class="indicator" data-slide="1"></span>
                </div>
            </div>
            
            <div class="text-center" style="margin-top: 3rem;">
                <a href="{{ route('website.services') }}" class="btn btn-primary">View All Services</a>
            </div>
        </div>
    </section>
@endsection