@extends('layouts.app')

@section('title', 'About Us - Saudi Tim Limo Services')
@section('description', 'Learn about Saudi Tim Limo Services, our commitment to excellence, and our mission to provide premium transportation worldwide.')

@section('content')
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <h1>About Saudi Tim Limo Services</h1>
            <p>Excellence in Motion, Luxury in Every Detail</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="page-content">
        <div class="container">
            <!-- Our Story -->
            <section class="content-section story-section">
                <div class="section-panel">
                    <h2>Our Story</h2>
                    <p>Founded with a vision to redefine premium transportation, Saudi Tim Limo Services has established itself as a regional leader in luxury travel solutions. Our journey began with a simple yet powerful commitment: to provide unparalleled service that exceeds expectations at every turn.</p>
                    <p>Today, we operate across major cities in Saudi Arabia and the Gulf region, serving discerning clients who demand nothing but the best. From corporate executives to leisure travelers, we've built our reputation on reliability, elegance, and personalized attention to detail.</p>
                </div>
            </section>

            <!-- Our Values -->
            <section class="content-section values-section">
                <div class="section-panel">
                    <h2>Our Values</h2>
                    <div class="values-grid">
                        <div class="value-card">
                            <div class="value-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                    <path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path>
                                </svg>
                            </div>
                            <h3>Excellence</h3>
                            <p>We strive for perfection in every aspect of our service, ensuring each journey meets the highest standards of quality and comfort.</p>
                        </div>
                        
                        <div class="value-card">
                            <div class="value-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <h3>Reliability</h3>
                            <p>Our commitment to punctuality and dependability ensures you reach your destination on time, every time.</p>
                        </div>
                        
                        <div class="value-card">
                            <div class="value-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h3>Personalized Service</h3>
                            <p>We understand that every client is unique, and we tailor our services to meet your specific needs and preferences.</p>
                        </div>
                        
                        <div class="value-card">
                            <div class="value-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                            </div>
                            <h3>Safety & Security</h3>
                            <p>Your safety is our top priority. All our vehicles and chauffeurs undergo rigorous checks to ensure maximum security.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Mission -->
            <section class="content-section mission-section mission-bg">
                <div class="section-panel">
                    <h2>Our Mission</h2>
                    <p class="mission-text">To set the regional standard for premium transportation by delivering exceptional service that combines luxury, reliability, and personalized care. We are committed to making every journey a memorable experience, wherever in Saudi Arabia and the Gulf region you travel.</p>
                </div>
            </section>

            <!-- Why Choose Section (matches attached design) -->
            <section class="content-section why-choose-section" aria-labelledby="why-choose-heading">
                <div class="why-choose-bg"></div>
                <div class="why-choose-inner container">
                    <h2 id="why-choose-heading">Why Choose Saudi Vip Car</h2>
                    <p class="section-subtitle">Committed to give customer a delightful renting experience</p>

                    <div class="why-grid">
                        <div class="why-item">
                            <div class="why-icon">✓</div>
                            <div class="why-body">
                                <h3>Express pick-up service available</h3>
                                <p>Visit your selected locations with ease and at your pace with a cheap rental car in KSA.</p>
                            </div>
                        </div>

                        <div class="why-item">
                            <div class="why-icon">✓</div>
                            <div class="why-body">
                                <h3>Short and long term car rental</h3>
                                <p>Whether you're looking for a short-term rental to tour KSA or a month-long rent-a-car solution.</p>
                            </div>
                        </div>

                        <div class="why-item">
                            <div class="why-icon">✓</div>
                            <div class="why-body">
                                <h3>New, comfortable rental car fleet</h3>
                                <p>Visit your selected locations with ease and at your pace with a cheap rental car in KSA.</p>
                            </div>
                        </div>

                        <div class="why-item">
                            <div class="why-icon">✓</div>
                            <div class="why-body">
                                <h3>Award winning car rental company</h3>
                                <p>There's definitely no reason to beg, and borrow or steal a car when renting a car in the KSA.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    /* Why choose section styles (scoped) */
                    .why-choose-section{position:relative;padding:6rem 0;color:#fff}
                    .why-choose-bg{position:absolute;inset:0;background-image:url('/assets/images/about-why-bg.jpg');background-size:cover;background-position:center;z-index:0}
                    /* layered dark gradient + vignette for legibility */
                    .why-choose-bg::before{content:'';position:absolute;inset:0;background:linear-gradient(180deg, rgba(6,8,15,0.72) 10%, rgba(6,8,15,0.6) 40%, rgba(6,8,15,0.6) 60%, rgba(6,8,15,0.78) 100%);mix-blend-mode:multiply}
                    .why-choose-bg::after{content:'';position:absolute;inset:0;background:radial-gradient(60% 60% at 50% 20%, rgba(0,0,0,0) 0%, rgba(0,0,0,0.28) 40%, rgba(0,0,0,0.6) 100%);pointer-events:none}
                    .why-choose-inner{position:relative;z-index:2;text-align:center}
                    .why-choose-inner h2{font-size:3rem;margin-bottom:.4rem;color:#fff;text-shadow:0 6px 18px rgba(8,10,20,0.6)}
                    .why-choose-inner .section-subtitle{color:#b6c0ff;margin-bottom:3rem;text-shadow:0 3px 10px rgba(6,8,15,0.45)}
                    .why-grid{display:grid;grid-template-columns:1fr 1fr;gap:3rem;max-width:1100px;margin:0 auto;text-align:left}
                    .why-item{display:flex;gap:1.25rem;align-items:flex-start;opacity:0;transform:translateY(18px);transition:opacity .9s ease,transform .9s ease}
                    .why-item .why-icon{flex:0 0 64px;height:64px;border-radius:12px;background:linear-gradient(135deg, rgba(111,125,255,0.14), rgba(137,125,255,0.12));display:flex;align-items:center;justify-content:center;font-size:28px;color:#9aa7ff;box-shadow:0 6px 20px rgba(12,14,24,0.45)}
                    .why-item h3{font-size:1.3rem;margin:0 0 .4rem;color:#fff;text-shadow:0 3px 10px rgba(0,0,0,0.45)}
                    .why-item p{margin:0;color:rgba(255,255,255,0.9)}
                    .why-item.visible{opacity:1;transform:translateY(0)}
                    @media (max-width:900px){.why-grid{grid-template-columns:1fr;gap:1.5rem}.why-choose-inner h2{font-size:2rem}}
                </style>
                <script>
                    // reveal why items on DOMContentLoaded with a small stagger
                    (function(){
                        function reveal(){
                            var items = document.querySelectorAll('.why-item');
                            Array.prototype.forEach.call(items, function(it, i){
                                setTimeout(function(){ it.classList.add('visible'); }, i*140 + 180);
                            });
                        }
                        if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', reveal); else reveal();
                    })();
                </script>
                <style>
                    /* Backgrounds for Story / Values / Mission sections */
                    .story-section{position:relative;padding:4.5rem 0 3rem;color:#fff}
                    .story-section::before{content:'';position:absolute;inset:0;background-image:url('/assets/images/about-story-bg.jpg');background-size:cover;background-position:center;filter:brightness(.26) contrast(.95);z-index:0}
                    .story-section > *{position:relative;z-index:2}

                    .values-section{position:relative;padding:3.5rem 0;color:#fff}
                    .values-section::before{content:'';position:absolute;inset:0;background-image:url('/assets/images/about-values-bg.jpg');background-size:cover;background-position:center;filter:brightness(.24) contrast(.95);z-index:0}
                    .values-grid{position:relative;z-index:2;display:grid;grid-template-columns:repeat(4,1fr);gap:2rem;align-items:start}
                    .value-card{display:flex;flex-direction:column;gap:.75rem;padding:1.25rem;height:100%;justify-content:flex-start}
                    .value-card .value-icon{flex:0 0 auto;margin-bottom:.25rem;background:linear-gradient(135deg, rgba(111,125,255,0.14), rgba(137,125,255,0.12));width:64px;height:64px;border-radius:12px;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 20px rgba(12,14,24,0.45)}
                    .value-card h3{margin-top:0;color:#fff}

                    .mission-bg{position:relative;padding:4rem 0}
                    .mission-bg::before{content:'';position:absolute;inset:0;background-image:url('/assets/images/about-mission-bg.jpg');background-size:cover;background-position:center;filter:brightness(.2) contrast(.95);z-index:0}
                    .mission-section > *{position:relative;z-index:2;color:#fff}

                    /* panels to guarantee readability */
                    .section-panel{background:rgba(8,10,18,0.56);backdrop-filter:blur(6px);padding:2rem;border-radius:12px;max-width:1100px;margin:0 auto}
                    .values-grid .value-card{background:linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0.02));backdrop-filter:blur(4px);padding:1.25rem;border-radius:12px}
                    .values-grid .value-card .value-icon{background:transparent}

                    /* small responsive tweaks */
                    @media (max-width:1200px){ .values-grid{grid-template-columns:repeat(2,1fr)} }
                    @media (max-width:700px){ .values-grid{grid-template-columns:1fr} .story-section, .values-section, .mission-bg { padding-left:1rem;padding-right:1rem } }
                </style>
            </section>
        </div>
    </main>
@endsection