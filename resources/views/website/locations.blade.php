@extends('layouts.app')

@section('title', 'Service Locations - Saudi Tim Limo Services')
@section('description', 'We operate in major cities across Saudi Arabia and the Gulf region including Riyadh, Jeddah, Dammam, Dubai, and more. Premium transportation services wherever you need us.')

@section('content')
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <h1>Service Locations</h1>
            <p>We operate in major cities across Saudi Arabia and the Gulf region, providing premium transportation services wherever you need us</p>
        </div>
    </section>

    <!-- Locations Content -->
    <main class="page-content">
        <div class="container">
            <!-- Saudi Arabia -->
            <section class="location-region">
                <h2 class="region-title">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    Saudi Arabia
                </h2>
                <div class="location-grid">
                    <div class="location-card">
                        <h3>Riyadh</h3>
                        <p>Premium airport and corporate transfers, VIP services</p>
                    </div>
                    <div class="location-card">
                        <h3>Jeddah</h3>
                        <p>Luxury chauffeur services and executive transportation</p>
                    </div>
                    <div class="location-card">
                        <h3>Dammam</h3>
                        <p>Business travel and airport transfer services</p>
                    </div>
                    <div class="location-card">
                        <h3>Mecca</h3>
                        <p>Specialized religious pilgrimage transportation</p>
                    </div>
                    <div class="location-card">
                        <h3>Medina</h3>
                        <p>VIP services for religious and business travelers</p>
                    </div>
                    <div class="location-card">
                        <h3>Khobar</h3>
                        <p>Corporate and leisure transportation services</p>
                    </div>
                </div>
            </section>

            <!-- Gulf Region -->
            <section class="location-region">
                <h2 class="region-title">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    Gulf Cooperation Council (GCC)
                </h2>
                <div class="location-grid">
                    <div class="location-card">
                        <h3>Dubai, UAE</h3>
                        <p>Premium airport and corporate transfers</p>
                    </div>
                    <div class="location-card">
                        <h3>Abu Dhabi, UAE</h3>
                        <p>VIP services and executive transportation</p>
                    </div>
                    <div class="location-card">
                        <h3>Doha, Qatar</h3>
                        <p>Airport meet and greet services</p>
                    </div>
                    <div class="location-card">
                        <h3>Kuwait City, Kuwait</h3>
                        <p>Business and diplomatic transportation</p>
                    </div>
                    <div class="location-card">
                        <h3>Manama, Bahrain</h3>
                        <p>Luxury chauffeur services</p>
                    </div>
                    <div class="location-card">
                        <h3>Muscat, Oman</h3>
                        <p>Executive and leisure transportation</p>
                    </div>
                </div>
            </section>

            <!-- International Partnerships -->
            <section class="location-region">
                <h2 class="region-title">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    International Partnerships
                </h2>
                <div class="location-grid">
                    <div class="location-card">
                        <h3>London, UK</h3>
                        <p>Executive and corporate transportation</p>
                    </div>
                    <div class="location-card">
                        <h3>Paris, France</h3>
                        <p>Premium city transfers</p>
                    </div>
                    <div class="location-card">
                        <h3>New York, USA</h3>
                        <p>Corporate and VIP services</p>
                    </div>
                    <div class="location-card">
                        <h3>Singapore</h3>
                        <p>Comprehensive transfer services</p>
                    </div>
                </div>
            </section>

            <!-- Global Coverage -->
            <section class="global-coverage">
                <h2>Global Coverage</h2>
                <p>While we operate primarily in Saudi Arabia and the Gulf region, through our international partnerships we can arrange premium transportation services in virtually any major city worldwide. Contact us for service availability in your destination.</p>
                
                <div class="coverage-features" style="margin-top: 2rem;">
                    <div class="coverage-feature">
                        <h4>24/7 Support</h4>
                        <p>Round-the-clock customer service for bookings and assistance</p>
                    </div>
                    <div class="coverage-feature">
                        <h4>Local Expertise</h4>
                        <p>Experienced local teams in each service location</p>
                    </div>
                    <div class="coverage-feature">
                        <h4>Consistent Quality</h4>
                        <p>Same high standards across all our service locations</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection