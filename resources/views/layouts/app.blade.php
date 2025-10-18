<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Saudi Tim Limo - Premium Transportation Worldwide')</title>
    <meta name="description" content="@yield('description', 'Saudi Tim Limo sets the benchmark for premium travel worldwide, offering VIP meet & greet, private jet services, corporate transportation, and airport transfers.')">
    <meta name="author" content="Saudi Tim Limo">
    
    <meta property="og:title" content="@yield('og_title', 'Saudi Tim Limo - Premium Transportation Worldwide')">
    <meta property="og:description" content="@yield('og_description', 'Experience unmatched elegance, comfort, and personalized service with our premium chauffeur and transportation services across the world.')">
    <meta property="og:type" content="website">
    <meta property="og:image" content="@yield('og_image', '')">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@sauditimlimo">
    <meta name="twitter:image" content="@yield('twitter_image', '')">
    
    <link rel="stylesheet" href="{{ asset('public/assets/css/styles.css') }}">
    @yield('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('website.index') }}" class="logo">SAUDI TIM LIMO</a>
            
            <div class="nav-links" id="navLinks">
                <a href="{{ route('website.index') }}" class="nav-link {{ request()->routeIs('website.index') ? 'active' : '' }}">Home</a>
                <a href="{{ route('website.about') }}" class="nav-link {{ request()->routeIs('website.about') ? 'active' : '' }}">About</a>
                <a href="{{ route('website.services') }}" class="nav-link {{ request()->routeIs('website.services') ? 'active' : '' }}">Services</a>
                <a href="{{ route('website.fleet') }}" class="nav-link {{ request()->routeIs('website.fleet') ? 'active' : '' }}">Fleet</a>
                <a href="{{ route('website.locations') }}" class="nav-link {{ request()->routeIs('website.locations') ? 'active' : '' }}">Locations</a>
                <a href="{{ route('website.contact') }}" class="btn btn-accent {{ request()->routeIs('website.contact') ? 'active' : '' }}">Contact Us</a>
            </div>
            
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="{{ route('website.index') }}" class="mobile-nav-link">Home</a>
        <a href="{{ route('website.about') }}" class="mobile-nav-link">About</a>
        <a href="{{ route('website.services') }}" class="mobile-nav-link">Services</a>
        <a href="{{ route('website.fleet') }}" class="mobile-nav-link">Fleet</a>
        <a href="{{ route('website.locations') }}" class="mobile-nav-link">Locations</a>
        <a href="{{ route('website.contact') }}" class="mobile-nav-link">Contact Us</a>
    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3 class="footer-logo">SAUDI TIM LIMO</h3>
                    <p class="footer-text">Setting the benchmark for premium travel worldwide with unmatched elegance and personalized service.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a>
                        <a href="#" aria-label="LinkedIn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('website.index') }}">Home</a></li>
                        <li><a href="{{ route('website.about') }}">About Us</a></li>
                        <li><a href="{{ route('website.services') }}">Services</a></li>
                        <li><a href="{{ route('website.fleet') }}">Our Fleet</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('website.services') }}#vip-meet-greet">VIP Meet & Greet</a></li>
                        <li><a href="{{ route('website.services') }}#private-jet">Private Jet Services</a></li>
                        <li><a href="{{ route('website.services') }}#corporate-transport">Corporate Transportation</a></li>
                        <li><a href="{{ route('website.services') }}#airport-transfers">Airport Transfers</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <ul class="footer-contact">
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            Riyadh, Saudi Arabia
                        </li>
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            +966 555 096 118
                        </li>
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            bookings@sauditimlimo.com
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 Saudi Tim Limo Services. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('public/assets/js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>