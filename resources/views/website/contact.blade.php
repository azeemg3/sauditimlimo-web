@extends('layouts.app')

@section('title', 'Contact Us - Saudi Tim Limo Services')
@section('description', 'Get in touch with Saudi Tim Limo Services. Contact us for bookings, inquiries, or 24/7 emergency assistance.')

@section('content')
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We're here to assist you 24/7</p>
        </div>
    </section>

    <!-- Contact Content -->
    <main class="page-content">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form-section">
                    <h2>Send Us a Message</h2>
                    
                    @if(session('success'))
                        <div class="form-message success" style="margin-bottom: 1rem;">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if($errors->any())
                        <div class="form-message error" style="margin-bottom: 1rem;">
                            <ul style="margin: 0; padding-left: 1rem;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ route('website.contact.submit') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="service">Service Interested In</label>
                            <select id="service" name="service">
                                <option value="">Select a service</option>
                                <option value="vip-meet-greet" {{ old('service') == 'vip-meet-greet' ? 'selected' : '' }}>VIP Meet & Greet</option>
                                <option value="private-jet" {{ old('service') == 'private-jet' ? 'selected' : '' }}>Private Jet Services</option>
                                <option value="corporate-transport" {{ old('service') == 'corporate-transport' ? 'selected' : '' }}>Corporate Transportation</option>
                                <option value="airport-transfers" {{ old('service') == 'airport-transfers' ? 'selected' : '' }}>Airport Transfers</option>
                                <option value="other" {{ old('service') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-accent">Send Message</button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="contact-info-section">
                    <h2>Get in Touch</h2>
                    
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <h3>Our Location</h3>
                            <p>Riyadh, Saudi Arabia</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3>Phone</h3>
                            <p><a href="tel:+966555096118">+966 555 096 118</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <p><a href="mailto:bookings@sauditimlimo.com">bookings@sauditimlimo.com</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h3>Business Hours</h3>
                            <p>24/7 - We never close</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emergency Contact -->
            <section class="emergency-section">
                <h2>Need Emergency Assistance?</h2>
                <p>Our team is available 24/7 for urgent bookings and assistance</p>
                <a href="tel:+966555096118" class="btn btn-accent">Call Emergency Line</a>
            </section>
        </div>
    </main>
@endsection