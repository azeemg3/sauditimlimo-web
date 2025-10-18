@extends('layouts.app')

@section('title', 'Our Services - Saudi Tim Limo Services')
@section('description', 'Explore our premium transportation services including VIP meet & greet, private jet services, corporate transportation, and airport transfers.')

@section('content')
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <h1>Our Premium Services</h1>
            <p>Tailored luxury transportation solutions for every need</p>
        </div>
    </section>

    <!-- Services Content -->
    <main class="page-content">
        <div class="container">
            <!-- VIP Meet & Greet -->
            <section class="service-detail" id="vip-meet-greet">
                <div class="service-detail-grid">
                    <div class="service-detail-content">
                        <h2>Corporate Meetings & Events</h2>
                        <p>Does your company have employees or clients who frequently rent in the Los Angeles area? Setting up a corporate account allowsus to pre-deliver vehicles to hotels, offices, residences.</p>
                        <h3>Features Include:</h3>
                        <ul class="feature-list">
                            <li>Personal meet at aircraft or arrival gate</li>
                            <li>Fast-track immigration and customs clearance</li>
                            <li>Baggage collection assistance</li>
                            <li>VIP lounge access</li>
                            <li>Direct escort to your chauffeur or terminal</li>
                            <li>Multilingual assistance available</li>
                        </ul>
                    </div>
                    <div class="service-detail-image">
                        <img src="{{ asset('public/assets/vip-meet-greet.jpg') }}" alt="VIP Meet & Greet Services">
                    </div>
                </div>
            </section>

            <!-- Private Jet Services -->
            <section class="service-detail" id="private-jet">
                <div class="service-detail-grid reverse">
                    <div class="service-detail-content">
                        <h2>Tours With Private Taxi Service</h2>
                        <p>Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades. Free maintenance.  We offer amazing deals on car rental rates. Give us a call we make it easy and affordable.</p>
                        <h3>Features Include:</h3>
                        <ul class="feature-list">
                            <li>Access to premium private aircraft</li>
                            <li>Flexible departure times and routes</li>
                            <li>Personalized in-flight catering</li>
                            <li>Complete privacy and confidentiality</li>
                            <li>Ground transportation coordination</li>
                            <li>24/7 concierge support</li>
                        </ul>
                    </div>
                    <div class="service-detail-image">
                        <img src="{{ asset('public/assets/images/service_img_4.jpg') }}" alt="Private Jet Services">
                    </div>
                </div>
            </section>

            <!-- Corporate Transportation -->
            <section class="service-detail" id="corporate-transport">
                <div class="service-detail-grid">
                    <div class="service-detail-content">
                        <h2>Corporate Transportation</h2>
                        <p>Reliable and professional chauffeur services designed for business executives and corporate events. Our experienced drivers ensure punctual, discreet, and comfortable transportation for all your business needs.</p>
                        <h3>Features Include:</h3>
                        <ul class="feature-list">
                            <li>Professional, experienced chauffeurs</li>
                            <li>Executive-class vehicles</li>
                            <li>Flexible hourly and daily rates</li>
                            <li>Corporate account management</li>
                            <li>Event and conference transportation</li>
                            <li>Real-time booking and tracking</li>
                        </ul>
                    </div>
                    <div class="service-detail-image">
                        <img src="{{ asset('public/assets/corporate-transport.jpg') }}" alt="Corporate Transportation">
                    </div>
                </div>
            </section>

            <!-- Airport Transfers -->
            <section class="service-detail" id="airport-transfers">
                <div class="service-detail-grid reverse">
                    <div class="service-detail-content">
                        <h2>Airport Transfers</h2>
                        <p>Punctual and comfortable airport transfer services ensuring you reach your destination on time, every time. Our professional chauffeurs monitor flight times and adjust pickup schedules accordingly.</p>
                        <h3>Features Include:</h3>
                        <ul class="feature-list">
                            <li>Flight monitoring and tracking</li>
                            <li>Meet and greet at arrivals</li>
                            <li>Complimentary waiting time</li>
                            <li>Child seats available on request</li>
                            <li>Luggage assistance</li>
                            <li>Fixed competitive pricing</li>
                        </ul>
                    </div>
                    <div class="service-detail-image">
                        <img src="{{ asset('public/assets/airport-transfers.jpg') }}" alt="Airport Transfers">
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="cta-section">
                <h2>Ready to Experience Premium Travel?</h2>
                <p>Contact us today to book your luxury transportation service</p>
                <a href="{{ route('website.contact') }}" class="btn btn-accent">Get in Touch</a>
            </section>
        </div>
    </main>
@endsection
