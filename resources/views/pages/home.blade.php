@extends('layouts.app')

@section('title', 'Guardian Health USA — Pharmaceutical & Nutraceutical Contract Manufacturing')

@section('content')
<!-- ========================================
     Hero Section with Background Carousel & Foreground Content
======================================== -->
<section class="gh-hero position-relative overflow-hidden">
    
    <!-- Background Carousel -->
    <div id="heroCarousel" class="carousel slide carousel-fade gh-hero-bg-carousel" data-bs-ride="carousel" data-bs-interval="6000" data-bs-pause="hover">
        
        <!-- Carousel Indicators -->
        <div class="carousel-indicators gh-carousel-indicators mb-0">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carousel Slides (Background Images) -->
        <div class="carousel-inner h-100">
            <!-- Slide 1: Hydrate Elite Electrolyte Sticks & Fruit Splash -->
            <div class="carousel-item active h-100">
                <div class="gh-hero-bg-slide h-100">
                    <img src="{{ asset('assets/images/hero/hero-slide-01.jpg') }}" alt="Hydrate Elite Electrolyte Packaging" class="gh-hero-bg-img" fetchpriority="high">
                    <div class="gh-hero-bg-overlay"></div>
                </div>
            </div>

            <!-- Slide 2: Precision Manufacturing & Blister Packaging -->
            <div class="carousel-item h-100">
                <div class="gh-hero-bg-slide h-100">
                    <img src="{{ asset('assets/images/hero/hero-slide-02.jpg') }}" alt="Turnkey Blister Packaging & Cleanroom Facility" class="gh-hero-bg-img" loading="lazy">
                    <div class="gh-hero-bg-overlay"></div>
                </div>
            </div>

            <!-- Slide 3: Functional Beverage Cans & Luxury Skincare Serums -->
            <div class="carousel-item h-100">
                <div class="gh-hero-bg-slide h-100">
                    <img src="{{ asset('assets/images/hero/hero-slide-03.jpg') }}" alt="Functional Beverage & Skincare Contract Packaging" class="gh-hero-bg-img" loading="lazy">
                    <div class="gh-hero-bg-overlay"></div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev gh-carousel-btn" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Previous Slide">
            <span class="gh-carousel-btn-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </span>
        </button>
        <button class="carousel-control-next gh-carousel-btn" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Next Slide">
            <span class="gh-carousel-btn-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </span>
        </button>
    </div>

    <!-- Foreground Hero Content (Positioned over the Carousel) -->
    <div class="gh-container position-relative gh-hero-foreground-container">
        <div class="row align-items-center gh-hero-content-row">
            <!-- Left Text Content Column -->
            <div class="col-lg-8 col-xl-7 gh-hero-col-text">
                <h1 class="gh-hero-title">
                    <span class="d-block text-gh-navy">NUTRITION.</span>
                    <span class="d-block text-gh-blue">HYDRATION.</span>
                    <span class="d-block text-gh-green">PERFORMANCE.</span>
                </h1>
                
                <p class="gh-hero-description">
                    Innovative science-backed solutions designed to fuel your body, support wellness, and elevate everyday lives.
                </p>

                <!-- Feature Metric Icons -->
                <div class="gh-hero-features d-flex flex-wrap align-items-center">
                    <div class="gh-feature-item">
                        <div class="gh-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                            </svg>
                        </div>
                        <div class="gh-feature-label">
                            <span>FAST</span>
                            <span>HYDRATION</span>
                        </div>
                    </div>

                    <div class="gh-feature-item">
                        <div class="gh-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <div class="gh-feature-label">
                            <span>IMMUNE</span>
                            <span>SUPPORT</span>
                        </div>
                    </div>

                    <div class="gh-feature-item">
                        <div class="gh-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                            </svg>
                        </div>
                        <div class="gh-feature-label">
                            <span>CLEAN</span>
                            <span>ENERGY</span>
                        </div>
                    </div>

                    <div class="gh-feature-item">
                        <div class="gh-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 3h12l4 6-10 12L2 9z"/>
                            </svg>
                        </div>
                        <div class="gh-feature-label">
                            <span>ELECTROLYTE</span>
                            <span>BALANCE</span>
                        </div>
                    </div>
                </div>

                <!-- CTA Button Row -->
                <div class="gh-hero-actions d-flex align-items-center flex-wrap">
                    <a href="#" class="btn-gh btn-gh-primary">
                        Explore Products
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <button type="button" class="btn-gh btn-gh-outline" data-bs-toggle="modal" data-bs-target="#partnerModal">
                        Partner With Us
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Trust / Value Strip (Exact Reference Design)
======================================== -->
<section class="gh-trust-strip">
    <div class="gh-container">
        <div class="row g-2 g-md-3 g-xl-0 justify-content-between align-items-center gh-trust-row">
            
            <!-- Item 1: WOMEN OWNED -->
            <div class="col-6 col-md-4 col-lg gh-trust-col">
                <div class="gh-trust-item d-flex align-items-center">
                    <div class="gh-trust-icon">
                        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="7.5" r="3.5" />
                            <circle cx="12" cy="7.5" r="1.2" fill="#FFFFFF" />
                            <path d="M5 20.5c0-4 3.1-6.5 7-6.5s7 2.5 7 6.5" />
                            <path d="M9 14c1 .8 2 1 3 1s2-.2 3-1" />
                        </svg>
                    </div>
                    <div class="gh-trust-content">
                        <span class="gh-trust-title">WOMEN<br>OWNED</span>
                        <span class="gh-trust-desc">Proud Women<br>Owned Business</span>
                    </div>
                </div>
            </div>

            <!-- Divider 1 -->
            <div class="d-none d-lg-block gh-trust-divider"></div>

            <!-- Item 2: cGMP MANUFACTURING -->
            <div class="col-6 col-md-4 col-lg gh-trust-col">
                <div class="gh-trust-item d-flex align-items-center">
                    <div class="gh-trust-icon">
                        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2.2l2.2 2.4 3.2-.2.9 3.1 3.1.9-.2 3.2 2.4 2.2-2.4 2.2.2 3.2-3.1.9-.9 3.1-3.2-.2L12 21.8l-2.2-2.4-3.2.2-.9-3.1-3.1-.9.2-3.2-2.4-2.2 2.4-2.2-.2-3.2 3.1-.9.9-3.1 3.2.2z" />
                            <circle cx="12" cy="12" r="4.5" />
                            <circle cx="12" cy="12" r="2" />
                        </svg>
                    </div>
                    <div class="gh-trust-content">
                        <span class="gh-trust-title">cGMP<br>MANUFACTURING</span>
                        <span class="gh-trust-desc">Quality You Can<br>Trust</span>
                    </div>
                </div>
            </div>

            <!-- Divider 2 -->
            <div class="d-none d-lg-block gh-trust-divider"></div>

            <!-- Item 3: ADVANCED FORMULATIONS -->
            <div class="col-6 col-md-4 col-lg gh-trust-col">
                <div class="gh-trust-item d-flex align-items-center">
                    <div class="gh-trust-icon">
                        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3.5" />
                            <circle cx="12" cy="4" r="1.3" fill="#FFFFFF" />
                            <circle cx="17.65" cy="6.35" r="1.3" fill="#FFFFFF" />
                            <circle cx="20" cy="12" r="1.3" fill="#FFFFFF" />
                            <circle cx="17.65" cy="17.65" r="1.3" fill="#FFFFFF" />
                            <circle cx="12" cy="20" r="1.3" fill="#FFFFFF" />
                            <circle cx="6.35" cy="17.65" r="1.3" fill="#FFFFFF" />
                            <circle cx="4" cy="12" r="1.3" fill="#FFFFFF" />
                            <circle cx="6.35" cy="6.35" r="1.3" fill="#FFFFFF" />
                            <line x1="12" y1="7.5" x2="12" y2="5.3" />
                            <line x1="14.5" y1="9.5" x2="16.2" y2="7.8" />
                            <line x1="16.5" y1="12" x2="18.7" y2="12" />
                            <line x1="14.5" y1="14.5" x2="16.2" y2="16.2" />
                            <line x1="12" y1="16.5" x2="12" y2="18.7" />
                            <line x1="9.5" y1="14.5" x2="7.8" y2="16.2" />
                            <line x1="7.5" y1="12" x2="5.3" y2="12" />
                            <line x1="9.5" y1="9.5" x2="7.8" y2="7.8" />
                        </svg>
                    </div>
                    <div class="gh-trust-content">
                        <span class="gh-trust-title">ADVANCED<br>FORMULATIONS</span>
                        <span class="gh-trust-desc">Science. Quality.<br>Results.</span>
                    </div>
                </div>
            </div>

            <!-- Divider 3 -->
            <div class="d-none d-lg-block gh-trust-divider"></div>

            <!-- Item 4: RELIABLE PARTNER -->
            <div class="col-6 col-md-4 col-lg gh-trust-col">
                <div class="gh-trust-item d-flex align-items-center">
                    <div class="gh-trust-icon">
                        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="5.5" r="2.2" />
                            <circle cx="6" cy="17" r="1.6" fill="#FFFFFF" />
                            <circle cx="18" cy="17" r="1.6" fill="#FFFFFF" />
                            <circle cx="12" cy="12.5" r="1.2" fill="#FFFFFF" />
                            <path d="M12 7.7v4.8" />
                            <path d="M8 20.5l4-8 4 8" />
                            <line x1="9" y1="13.5" x2="6" y2="17" />
                            <line x1="15" y1="13.5" x2="18" y2="17" />
                        </svg>
                    </div>
                    <div class="gh-trust-content">
                        <span class="gh-trust-title">RELIABLE<br>PARTNER</span>
                        <span class="gh-trust-desc">Your Success Is<br>Our Mission</span>
                    </div>
                </div>
            </div>

            <!-- Divider 4 -->
            <div class="d-none d-lg-block gh-trust-divider"></div>

            <!-- Item 5: MADE IN THE USA (Official US Flag) -->
            <div class="col-12 col-md-4 col-lg gh-trust-col d-flex justify-content-center">
                <div class="gh-trust-item d-flex align-items-center">
                    <div class="gh-trust-flag">
                        <svg width="36" height="24" viewBox="0 0 60 36" style="border-radius: 2px; box-shadow: 0 1px 4px rgba(0,0,0,0.35); display: block;">
                            <rect width="60" height="36" fill="#B22234"/>
                            <path d="M0 2.77h60M0 8.31h60M0 13.85h60M0 19.38h60M0 24.92h60M0 30.46h60" stroke="#FFFFFF" stroke-width="2.77"/>
                            <rect width="25" height="19.38" fill="#3C3B6E"/>
                            <g fill="#FFFFFF" transform="scale(0.8) translate(1.5, 1.5)">
                                <polygon points="4,1 5,3.5 7.5,3.5 5.5,5 6.5,7.5 4,6 1.5,7.5 2.5,5 0.5,3.5 3,3.5" transform="scale(0.6) translate(2,2)"/>
                                <polygon points="4,1 5,3.5 7.5,3.5 5.5,5 6.5,7.5 4,6 1.5,7.5 2.5,5 0.5,3.5 3,3.5" transform="scale(0.6) translate(10,2)"/>
                                <polygon points="4,1 5,3.5 7.5,3.5 5.5,5 6.5,7.5 4,6 1.5,7.5 2.5,5 0.5,3.5 3,3.5" transform="scale(0.6) translate(18,2)"/>
                                <polygon points="4,1 5,3.5 7.5,3.5 5.5,5 6.5,7.5 4,6 1.5,7.5 2.5,5 0.5,3.5 3,3.5" transform="scale(0.6) translate(26,2)"/>
                                <polygon points="4,1 5,3.5 7.5,3.5 5.5,5 6.5,7.5 4,6 1.5,7.5 2.5,5 0.5,3.5 3,3.5" transform="scale(0.6) translate(6,8)"/>
                                <polygon points="4,1 5,3.5 7.5,3.5 5.5,5 6.5,7.5 4,6 1.5,7.5 2.5,5 0.5,3.5 3,3.5" transform="scale(0.6) translate(14,8)"/>
                                <polygon points="4,1 5,3.5 7.5,3.5 5.5,5 6.5,7.5 4,6 1.5,7.5 2.5,5 0.5,3.5 3,3.5" transform="scale(0.6) translate(22,8)"/>
                                <polygon points="4,1 5,3.5 7.5,3.5 5.5,5 6.5,7.5 4,6 1.5,7.5 2.5,5 0.5,3.5 3,3.5" transform="scale(0.6) translate(2,14)"/>
                                <polygon points="4,1 5,3.5 7.5,3.5 5.5,5 6.5,7.5 4,6 1.5,7.5 2.5,5 0.5,3.5 3,3.5" transform="scale(0.6) translate(10,14)"/>
                                <polygon points="4,1 5,3.5 7.5,3.5 5.5,5 6.5,7.5 4,6 1.5,7.5 2.5,5 0.5,3.5 3,3.5" transform="scale(0.6) translate(18,14)"/>
                                <polygon points="4,1 5,3.5 7.5,3.5 5.5,5 6.5,7.5 4,6 1.5,7.5 2.5,5 0.5,3.5 3,3.5" transform="scale(0.6) translate(26,14)"/>
                            </g>
                        </svg>
                    </div>
                    <div class="gh-trust-content">
                        <span class="gh-trust-title">MADE IN<br>THE USA</span>
                        <span class="gh-trust-desc">Manufactured in<br>Our U.S. Facility</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================
     About Us Section (Manufacturing Excellence. Healthier Futures.)
======================================== -->
<section class="gh-about-section" id="about-us">
    <div class="gh-container">
        <div class="row g-4 g-lg-5 align-items-center gh-about-row">
            
            <!-- Left Column: Manufacturing Facility Image -->
            <div class="col-12 col-lg-5 gh-about-img-col">
                <div class="gh-about-img-wrap">
                    <img src="{{ asset('assets/images/about/about-us-manufacturing.webp') }}" 
                         alt="Guardian Health USA cGMP Manufacturing Facility" 
                         class="gh-about-img" 
                         loading="lazy">
                </div>
            </div>

            <!-- Right Column: About Us Content -->
            <div class="col-12 col-lg-7 gh-about-content-col">
                <div class="gh-about-content">
                    
                    <!-- Section Eyebrow / Label -->
                    <div class="gh-about-eyebrow-wrap">
                        <span class="gh-about-eyebrow">ABOUT US</span>
                        <div class="gh-about-eyebrow-bar"></div>
                    </div>

                    <!-- Main Heading -->
                    <h2 class="gh-about-title">
                        Manufacturing Excellence.<br>
                        Healthier Futures.
                    </h2>

                    <!-- Introductory Paragraph -->
                    <p class="gh-about-intro">
                        We are a cGMP-certified manufacturing partner committed to producing high-quality health and wellness products. Our focus is simple—deliver science-backed solutions, with consistency, care, and integrity.
                    </p>

                    <!-- Key Value Points (5 Items with Subtle Separator Lines) -->
                    <div class="gh-about-points">
                        
                        <!-- Point 1: Advanced Science -->
                        <div class="gh-about-point-item">
                            <span class="gh-about-bullet"></span>
                            <div class="gh-about-point-text">
                                <strong class="gh-about-point-title">Advanced Science</strong>
                                <span class="gh-about-point-sep">|</span>
                                <span class="gh-about-point-desc">Research-driven formulations using premium, clinically relevant ingredients.</span>
                            </div>
                        </div>

                        <!-- Point 2: Quality You Can Trust -->
                        <div class="gh-about-point-item">
                            <span class="gh-about-bullet"></span>
                            <div class="gh-about-point-text">
                                <strong class="gh-about-point-title">Quality You Can Trust</strong>
                                <span class="gh-about-point-sep">|</span>
                                <span class="gh-about-point-desc">cGMP-certified facility with rigorous testing and quality controls at every step.</span>
                            </div>
                        </div>

                        <!-- Point 3: Flexible Solutions -->
                        <div class="gh-about-point-item">
                            <span class="gh-about-bullet"></span>
                            <div class="gh-about-point-text">
                                <strong class="gh-about-point-title">Flexible Solutions</strong>
                                <span class="gh-about-point-sep">|</span>
                                <span class="gh-about-point-desc">Custom formulations and scalable manufacturing to support brands of all sizes.</span>
                            </div>
                        </div>

                        <!-- Point 4: Packaging Expertise -->
                        <div class="gh-about-point-item">
                            <span class="gh-about-bullet"></span>
                            <div class="gh-about-point-text">
                                <strong class="gh-about-point-title">Packaging Expertise</strong>
                                <span class="gh-about-point-sep">|</span>
                                <span class="gh-about-point-desc">Wide range of packaging formats including stick packs, blister packs, bottles, and more.</span>
                            </div>
                        </div>

                        <!-- Point 5: Built for Partnership -->
                        <div class="gh-about-point-item">
                            <span class="gh-about-bullet"></span>
                            <div class="gh-about-point-text">
                                <strong class="gh-about-point-title">Built for Partnership</strong>
                                <span class="gh-about-point-sep">|</span>
                                <span class="gh-about-point-desc">Transparent communication, dependable execution, and long-term partnership approach.</span>
                            </div>
                        </div>

                    </div>

                    <!-- CTA Button -->
                    <div class="gh-about-action">
                        <button type="button" class="btn-gh-about" data-bs-toggle="modal" data-bs-target="#partnerModal">
                            <span>LEARN MORE</span>
                            <span class="btn-gh-arrow">→</span>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================
     Our Product Portfolio (Science. Quality. Results.)
======================================== -->
<section class="gh-product-portfolio py-5">
    <div class="gh-container py-lg-4">
        
        <!-- Section Heading -->
        <div class="text-center mb-4 mb-lg-5 gh-portfolio-header">
            <span class="gh-portfolio-eyebrow">OUR PRODUCT PORTFOLIO</span>
            <h2 class="gh-portfolio-title">Science. <span class="gh-portfolio-underline">Quality.</span> Results.</h2>
        </div>

        <!-- Product Cards (5-Card Unified Horizontal Showcase) -->
        <div class="row g-2 g-md-3 g-lg-3 g-xl-4 justify-content-center gh-portfolio-row">
            
            <!-- CARD 1: HYDRATE ELITE™ -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-portfolio-col">
                <div class="gh-portfolio-card">
                    <div class="gh-portfolio-card-image">
                        <img src="{{ asset('assets/images/products/hydrate-elite.jpg') }}" alt="HYDRATE ELITE™" class="gh-portfolio-img" loading="lazy">
                    </div>
                    <div class="gh-portfolio-content">
                        <h3 class="gh-portfolio-card-title">HYDRATE ELITE™</h3>
                        <p class="gh-portfolio-card-desc">
                            Advanced electrolyte hydration for performance and everyday wellness.
                        </p>
                        <button type="button" class="btn-gh-portfolio">
                            <span>View Products</span>
                            <span class="btn-gh-arrow">→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- CARD 2: IGNITE™ ENERGY DRINK -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-portfolio-col">
                <div class="gh-portfolio-card">
                    <div class="gh-portfolio-card-image">
                        <img src="{{ asset('assets/images/products/ignite-energy.jpg') }}" alt="IGNITE™ ENERGY DRINK" class="gh-portfolio-img" loading="lazy">
                    </div>
                    <div class="gh-portfolio-content">
                        <h3 class="gh-portfolio-card-title">IGNITE™<br>ENERGY DRINK</h3>
                        <p class="gh-portfolio-card-desc">
                            Clean energy. Smart nutrition. Total wellness.
                        </p>
                        <button type="button" class="btn-gh-portfolio">
                            <span>View Products</span>
                            <span class="btn-gh-arrow">→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- CARD 3: ROYAL™ SKINCARE -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-portfolio-col">
                <div class="gh-portfolio-card">
                    <div class="gh-portfolio-card-image">
                        <img src="{{ asset('assets/images/products/royal-skincare.jpg') }}" alt="ROYAL™ SKINCARE" class="gh-portfolio-img" loading="lazy">
                    </div>
                    <div class="gh-portfolio-content">
                        <h3 class="gh-portfolio-card-title">ROYAL™<br>SKINCARE</h3>
                        <p class="gh-portfolio-card-desc">
                            Luxury skincare. Visible results. Advanced science for radiant skin.
                        </p>
                        <button type="button" class="btn-gh-portfolio">
                            <span>View Products</span>
                            <span class="btn-gh-arrow">→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- CARD 4: PAINEX™ PAIN RELIEVER -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-portfolio-col">
                <div class="gh-portfolio-card">
                    <div class="gh-portfolio-card-image">
                        <img src="{{ asset('assets/images/products/painex-pain-reliever.jpg') }}" alt="PAINEX™ PAIN RELIEVER" class="gh-portfolio-img" loading="lazy">
                    </div>
                    <div class="gh-portfolio-content">
                        <h3 class="gh-portfolio-card-title">PAINEX™<br>PAIN RELIEVER</h3>
                        <p class="gh-portfolio-card-desc">
                            Fast relief you can trust. Pain reliever · Fever reducer (NSAID)
                        </p>
                        <button type="button" class="btn-gh-portfolio">
                            <span>View Products</span>
                            <span class="btn-gh-arrow">→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- CARD 5: CONTRACT MANUFACTURING -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-portfolio-col">
                <div class="gh-portfolio-card">
                    <div class="gh-portfolio-card-image">
                        <img src="{{ asset('assets/images/products/contract-manufacturing.jpg') }}" alt="CONTRACT MANUFACTURING" class="gh-portfolio-img" loading="lazy">
                    </div>
                    <div class="gh-portfolio-content">
                        <h3 class="gh-portfolio-card-title">CONTRACT<br>MANUFACTURING</h3>
                        <p class="gh-portfolio-card-desc">
                            End-to-end solutions for your brand.
                        </p>
                        <button type="button" class="btn-gh-portfolio" data-bs-toggle="modal" data-bs-target="#partnerModal">
                            <span>Learn More</span>
                            <span class="btn-gh-arrow">→</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================
     Hydrate Elite™ Packaging Options
======================================== -->
<section class="gh-packaging-section py-4 py-lg-5">
    <div class="gh-container">
        
        <!-- Section Header -->
        <div class="text-center mb-3 mb-lg-4 gh-packaging-header">
            <h2 class="gh-packaging-title">HYDRATE ELITE™ PACKAGING OPTIONS</h2>
            <p class="gh-packaging-subtitle">Retail-ready formats for every lifestyle and channel.</p>
        </div>

        <!-- Packaging Options (5-Card Unified Horizontal Showcase) -->
        <div class="row g-2 g-md-3 g-lg-2 g-xl-3 justify-content-center gh-packaging-row">
            
            <!-- OPTION 01: STICK PACK -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-packaging-col">
                <div class="gh-packaging-card">
                    <div class="gh-packaging-card-header">
                        <h3 class="gh-packaging-card-title">STICK PACK</h3>
                        <p class="gh-packaging-card-desc">8.5 g Single Serve</p>
                    </div>
                    <div class="gh-packaging-card-image">
                        <img src="{{ asset('assets/images/packaging/hydrate-elite-stick-pack.webp') }}" alt="STICK PACK - 8.5 g Single Serve" class="gh-packaging-img" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- OPTION 02: STAND-UP POUCH (10 STICKS) -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-packaging-col">
                <div class="gh-packaging-card">
                    <div class="gh-packaging-card-header">
                        <h3 class="gh-packaging-card-title">STAND-UP POUCH</h3>
                        <p class="gh-packaging-card-desc">10 STICKS</p>
                    </div>
                    <div class="gh-packaging-card-image">
                        <img src="{{ asset('assets/images/packaging/hydrate-elite-standup-pouch-10-sticks.webp') }}" alt="STAND-UP POUCH - 10 STICKS" class="gh-packaging-img" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- OPTION 03: STAND-UP POUCH (30 STICKS) -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-packaging-col">
                <div class="gh-packaging-card">
                    <div class="gh-packaging-card-header">
                        <h3 class="gh-packaging-card-title">STAND-UP POUCH</h3>
                        <p class="gh-packaging-card-desc">30 STICKS</p>
                    </div>
                    <div class="gh-packaging-card-image">
                        <img src="{{ asset('assets/images/packaging/hydrate-elite-standup-pouch-30-sticks.webp') }}" alt="STAND-UP POUCH - 30 STICKS" class="gh-packaging-img" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- OPTION 04: PDQ DISPLAY CARTON (15 STICKS) -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-packaging-col">
                <div class="gh-packaging-card">
                    <div class="gh-packaging-card-header">
                        <h3 class="gh-packaging-card-title">PDQ DISPLAY CARTON</h3>
                        <p class="gh-packaging-card-desc">15 STICKS</p>
                    </div>
                    <div class="gh-packaging-card-image">
                        <img src="{{ asset('assets/images/packaging/hydrate-elite-pdq-display-15-sticks.webp') }}" alt="PDQ DISPLAY CARTON - 15 STICKS" class="gh-packaging-img" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- OPTION 05: PDQ DISPLAY CARTON (30 STICKS) -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-packaging-col">
                <div class="gh-packaging-card">
                    <div class="gh-packaging-card-header">
                        <h3 class="gh-packaging-card-title">PDQ DISPLAY CARTON</h3>
                        <p class="gh-packaging-card-desc">30 STICKS</p>
                    </div>
                    <div class="gh-packaging-card-image">
                        <img src="{{ asset('assets/images/packaging/hydrate-elite-pdq-display-30-sticks.webp') }}" alt="PDQ DISPLAY CARTON - 30 STICKS" class="gh-packaging-img" loading="lazy">
                    </div>
                </div>
            </div>

        </div>

        <!-- Centered CTA -->
        <div class="gh-packaging-cta-wrap text-center mt-3 mt-lg-4">
            <button type="button" class="btn-gh-green-cta">
                <span>View All Hydrate Elite™ Products</span>
                <span class="btn-gh-arrow">→</span>
            </button>
        </div>

    </div>
</section>

<!-- ========================================
     PROMOTIONAL SHOWCASE SECTION (4 CARDS)
     IGNITE+™ | ROYAL™ | PAINEX™ | MANUFACTURING & PRIVATE LABEL
======================================== -->
<section class="gh-promo-section py-4 py-lg-5" id="promotions">
    <div class="gh-container">
        <div class="row g-2 g-sm-3 g-xl-4 gh-promo-row">
            
            <!-- CARD 01: IGNITE+™ ENERGY DRINK -->
            <div class="col-6 col-sm-6 col-lg-3 gh-promo-col">
                <div class="gh-promo-card gh-promo-card-ignite">
                    <div class="gh-promo-card-body">
                        <div class="gh-promo-text-wrap">
                            <h3 class="gh-promo-title">IGNITE+<sup>™</sup></h3>
                            <h4 class="gh-promo-subtitle">ENERGY DRINK</h4>
                            <p class="gh-promo-desc">
                                Clean Energy.<br>
                                Smart Nutrition.<br>
                                Total Wellness.
                            </p>
                        </div>
                        <div class="gh-promo-btn-wrap">
                            <button type="button" class="btn-gh-promo">
                                <span>Explore Ignite+™</span>
                                <span class="gh-promo-arrow">→</span>
                            </button>
                        </div>
                    </div>
                    <div class="gh-promo-img-wrap">
                        <img src="{{ asset('assets/images/promotions/ignite-energy-drink.webp') }}" alt="IGNITE+™ ENERGY DRINK" class="gh-promo-img" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- CARD 02: ROYAL™ SKINCARE -->
            <div class="col-6 col-sm-6 col-lg-3 gh-promo-col">
                <div class="gh-promo-card gh-promo-card-royal">
                    <div class="gh-promo-card-body">
                        <div class="gh-promo-text-wrap">
                            <h3 class="gh-promo-title">ROYAL<sup>™</sup></h3>
                            <h4 class="gh-promo-subtitle">SKINCARE</h4>
                            <p class="gh-promo-desc">
                                Luxury Skincare.<br>
                                Visible Results.<br>
                                Advanced Science.
                            </p>
                        </div>
                        <div class="gh-promo-btn-wrap">
                            <button type="button" class="btn-gh-promo">
                                <span>Explore Royal™</span>
                                <span class="gh-promo-arrow">→</span>
                            </button>
                        </div>
                    </div>
                    <div class="gh-promo-img-wrap">
                        <img src="{{ asset('assets/images/promotions/royal-skincare.webp') }}" alt="ROYAL™ SKINCARE" class="gh-promo-img" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- CARD 03: PAINEX™ PAIN RELIEVER -->
            <div class="col-6 col-sm-6 col-lg-3 gh-promo-col">
                <div class="gh-promo-card gh-promo-card-painex">
                    <div class="gh-promo-card-body">
                        <div class="gh-promo-text-wrap">
                            <h3 class="gh-promo-title">PAINEX<sup>™</sup></h3>
                            <h4 class="gh-promo-subtitle">PAIN RELIEVER</h4>
                            <p class="gh-promo-desc">
                                Fast Relief.<br>
                                You Can Trust.
                            </p>
                        </div>
                        <div class="gh-promo-btn-wrap">
                            <button type="button" class="btn-gh-promo">
                                <span>Explore PainEx™</span>
                                <span class="gh-promo-arrow">→</span>
                            </button>
                        </div>
                    </div>
                    <div class="gh-promo-img-wrap">
                        <img src="{{ asset('assets/images/promotions/painex-pain-reliever.webp') }}" alt="PAINEX™ PAIN RELIEVER" class="gh-promo-img" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- CARD 04: MANUFACTURING & PRIVATE LABEL -->
            <div class="col-6 col-sm-6 col-lg-3 gh-promo-col">
                <div class="gh-promo-card gh-promo-card-mfg">
                    <div class="gh-promo-card-body">
                        <div class="gh-promo-text-wrap">
                            <h3 class="gh-promo-title">MANUFACTURING<br>&amp; PRIVATE LABEL</h3>
                            <p class="gh-promo-desc mt-1">
                                End-to-end solutions<br>
                                built for your brand.
                            </p>
                        </div>
                        <div class="gh-promo-btn-wrap">
                            <button type="button" class="btn-gh-promo" data-bs-toggle="modal" data-bs-target="#partnerModal">
                                <span>Learn More</span>
                                <span class="gh-promo-arrow">→</span>
                            </button>
                        </div>
                    </div>
                    <div class="gh-promo-img-wrap">
                        <img src="{{ asset('assets/images/promotions/manufacturing-private-label.webp') }}" alt="MANUFACTURING & PRIVATE LABEL" class="gh-promo-img" loading="lazy">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================
     INDUSTRIES WE SERVE SECTION (5-Card Unified Row)
======================================== -->
<!-- ========================================
     INDUSTRIES WE SERVE SECTION (5-Card Unified Row)
======================================== -->
<section class="gh-industries-section py-5" id="industries-we-serve">
    <div class="gh-container py-lg-2">
        
        <!-- Section Header -->
        <div class="text-center gh-industries-header mb-4 mb-lg-5">
            <span class="badge bg-gh-green-subtle text-gh-green text-uppercase px-3 py-1 mb-2 fw-bold tracking-wider fs-7 d-inline-block">OUR MARKETS &amp; CAPABILITIES</span>
            <h2 class="gh-industries-title">INDUSTRIES WE SERVE</h2>
            <div class="gh-industries-divider"></div>
            <p class="gh-industries-intro">
                We partner with brands across health, wellness, nutrition, beauty, and pharmaceutical markets to develop and manufacture science-backed products built for performance, quality, and growth.
            </p>
        </div>

        <!-- 5 Industry Cards in 1 Row on Desktop -->
        <div class="row g-3 g-xl-4 justify-content-center gh-industries-row mb-4 mb-lg-5">
            
            <!-- CARD 1: NUTRACEUTICALS -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-industries-col">
                <div class="gh-industry-card">
                    <div class="gh-industry-img-wrap mb-3">
                        <img src="{{ asset('assets/images/industries/nutraceuticals.webp') }}" alt="Nutraceutical products" class="gh-industry-img img-fluid" loading="lazy">
                    </div>
                    <h3 class="gh-industry-card-title">NUTRACEUTICALS</h3>
                    <div class="gh-industry-card-divider"></div>
                    <p class="gh-industry-card-desc">
                        Premium supplements and functional nutrition products designed for everyday wellness, including vitamins, minerals, powders, and specialized formulations.
                    </p>
                </div>
            </div>

            <!-- CARD 2: BEAUTY & COSMETICS -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-industries-col">
                <div class="gh-industry-card">
                    <div class="gh-industry-img-wrap mb-3">
                        <img src="{{ asset('assets/images/industries/beauty-cosmetics.webp') }}" alt="Beauty and cosmetics products" class="gh-industry-img img-fluid" loading="lazy">
                    </div>
                    <h3 class="gh-industry-card-title">BEAUTY &amp; COSMETICS</h3>
                    <div class="gh-industry-card-divider"></div>
                    <p class="gh-industry-card-desc">
                        Science-driven beauty and personal-care solutions designed around quality ingredients, advanced formulations, and consumer confidence.
                    </p>
                </div>
            </div>

            <!-- CARD 3: SPORTS NUTRITION -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-industries-col">
                <div class="gh-industry-card">
                    <div class="gh-industry-img-wrap mb-3">
                        <img src="{{ asset('assets/images/industries/sports-nutrition.webp') }}" alt="Sports nutrition products" class="gh-industry-img img-fluid" loading="lazy">
                    </div>
                    <h3 class="gh-industry-card-title">SPORTS NUTRITION</h3>
                    <div class="gh-industry-card-divider"></div>
                    <p class="gh-industry-card-desc">
                        High-performance products supporting active lifestyles, including hydration, electrolytes, protein, energy, recovery, and performance nutrition.
                    </p>
                </div>
            </div>

            <!-- CARD 4: HEALTH & WELLNESS -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-industries-col">
                <div class="gh-industry-card">
                    <div class="gh-industry-img-wrap mb-3">
                        <img src="{{ asset('assets/images/industries/health-wellness.webp') }}" alt="Health and wellness products" class="gh-industry-img img-fluid" loading="lazy">
                    </div>
                    <h3 class="gh-industry-card-title">HEALTH &amp; WELLNESS</h3>
                    <div class="gh-industry-card-divider"></div>
                    <p class="gh-industry-card-desc">
                        Functional products created to support everyday health, hydration, energy, wellness, and modern consumer lifestyles.
                    </p>
                </div>
            </div>

            <!-- CARD 5: PHARMACEUTICALS -->
            <div class="col-6 col-sm-6 col-md-4 col-lg gh-industries-col">
                <div class="gh-industry-card">
                    <div class="gh-industry-img-wrap mb-3">
                        <img src="{{ asset('assets/images/industries/pharmaceuticals.webp') }}" alt="Pharmaceutical products" class="gh-industry-img img-fluid" loading="lazy">
                    </div>
                    <h3 class="gh-industry-card-title">PHARMACEUTICALS</h3>
                    <div class="gh-industry-card-divider"></div>
                    <p class="gh-industry-card-desc">
                        cGMP-focused manufacturing and packaging solutions for OTC pharmaceutical products, healthcare products, and regulated applications.
                    </p>
                </div>
            </div>

        </div>

        <!-- Center CTA Button (GREEN) -->
        <div class="text-center gh-industries-cta-wrap mt-4 mt-lg-5">
            <button type="button" class="btn-gh-green-cta shadow-sm" data-bs-toggle="modal" data-bs-target="#partnerModal">
                <span>Let's Partner</span>
                <span class="btn-gh-arrow ms-1">→</span>
            </button>
        </div>

    </div>
</section>

<!-- ========================================
     QUALITY YOU CAN TRUST & PARTNERSHIP
======================================== -->
<section class="gh-quality-trust-section py-4 py-lg-5" id="quality-trust">
    <div class="gh-container">
        <div class="row g-4 align-items-stretch">
            
            <!-- LEFT COLUMN: QUALITY YOU CAN TRUST -->
            <div class="col-12 col-lg-6 gh-quality-col">
                <div class="gh-quality-card h-100 d-flex flex-column justify-content-between p-3 p-sm-4 p-xl-5 rounded-4 bg-white shadow-sm border border-light-subtle">
                    <div>
                        <h2 class="gh-quality-title fw-bold text-gh-navy mb-2">QUALITY YOU CAN TRUST</h2>
                        <p class="gh-quality-desc text-muted mb-3 mb-sm-4">
                            We are committed to the highest quality standards in every product we create, enforcing cGMP regulations and continuous lab validation.
                        </p>
                    </div>

                    <!-- 6 Quality Badges Grid (2 cols on mobile, 3 cols on tablet/desktop) -->
                    <div class="row g-2 g-sm-3 my-2">
                        <!-- 1. cGMP CERTIFIED -->
                        <div class="col-6 col-sm-4">
                            <div class="gh-quality-badge-item text-center p-2 p-sm-3 rounded-3 bg-light h-100 border border-light-subtle d-flex flex-column align-items-center justify-content-center">
                                <div class="gh-quality-badge-icon mb-1 mb-sm-2 text-gh-green">
                                    <span class="material-symbols-outlined fs-2">verified_user</span>
                                </div>
                                <span class="gh-quality-badge-label d-block fw-bold small text-gh-navy">cGMP<br>CERTIFIED</span>
                            </div>
                        </div>

                        <!-- 2. REGISTERED FACILITY -->
                        <div class="col-6 col-sm-4">
                            <div class="gh-quality-badge-item text-center p-2 p-sm-3 rounded-3 bg-light h-100 border border-light-subtle d-flex flex-column align-items-center justify-content-center">
                                <div class="gh-quality-badge-icon mb-1 mb-sm-2 text-gh-blue">
                                    <span class="material-symbols-outlined fs-2">domain_verification</span>
                                </div>
                                <span class="gh-quality-badge-label d-block fw-bold small text-gh-navy">REGISTERED<br>FACILITY*</span>
                            </div>
                        </div>

                        <!-- 3. QUALITY ASSURANCE -->
                        <div class="col-6 col-sm-4">
                            <div class="gh-quality-badge-item text-center p-2 p-sm-3 rounded-3 bg-light h-100 border border-light-subtle d-flex flex-column align-items-center justify-content-center">
                                <div class="gh-quality-badge-icon mb-1 mb-sm-2 text-gh-green">
                                    <span class="material-symbols-outlined fs-2">fact_check</span>
                                </div>
                                <span class="gh-quality-badge-label d-block fw-bold small text-gh-navy">QUALITY<br>ASSURANCE</span>
                            </div>
                        </div>

                        <!-- 4. RIGOROUSLY TESTED -->
                        <div class="col-6 col-sm-4">
                            <div class="gh-quality-badge-item text-center p-2 p-sm-3 rounded-3 bg-light h-100 border border-light-subtle d-flex flex-column align-items-center justify-content-center">
                                <div class="gh-quality-badge-icon mb-1 mb-sm-2 text-gh-blue">
                                    <span class="material-symbols-outlined fs-2">biotech</span>
                                </div>
                                <span class="gh-quality-badge-label d-block fw-bold small text-gh-navy">RIGOROUSLY<br>TESTED</span>
                            </div>
                        </div>

                        <!-- 5. ON-TIME DELIVERY -->
                        <div class="col-6 col-sm-4">
                            <div class="gh-quality-badge-item text-center p-2 p-sm-3 rounded-3 bg-light h-100 border border-light-subtle d-flex flex-column align-items-center justify-content-center">
                                <div class="gh-quality-badge-icon mb-1 mb-sm-2 text-gh-orange">
                                    <span class="material-symbols-outlined fs-2">schedule</span>
                                </div>
                                <span class="gh-quality-badge-label d-block fw-bold small text-gh-navy">ON-TIME<br>DELIVERY</span>
                            </div>
                        </div>

                        <!-- 6. SUSTAINABLE PACKAGING -->
                        <div class="col-6 col-sm-4">
                            <div class="gh-quality-badge-item text-center p-2 p-sm-3 rounded-3 bg-light h-100 border border-light-subtle d-flex flex-column align-items-center justify-content-center">
                                <div class="gh-quality-badge-icon mb-1 mb-sm-2 text-gh-green">
                                    <span class="material-symbols-outlined fs-2">recycling</span>
                                </div>
                                <span class="gh-quality-badge-label d-block fw-bold small text-gh-navy">SUSTAINABLE<br>PACKAGING</span>
                            </div>
                        </div>
                    </div>

                    <div class="gh-quality-footnote micro-text text-muted mt-2 mt-sm-3">
                        *Facility registration &amp; compliance documentation available upon request.
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: LET'S BUILD SUCCESS TOGETHER -->
            <div class="col-12 col-lg-6 gh-partnership-col">
                <div class="gh-partnership-card h-100 p-3 p-sm-4 p-xl-5 rounded-4 bg-white shadow-sm border border-light-subtle d-flex flex-column justify-content-between">
                    <div>
                        <h2 class="gh-partnership-title fw-bold text-gh-navy mb-2">LET'S BUILD SUCCESS TOGETHER</h2>
                        <p class="gh-partnership-desc text-muted mb-3">
                            Partner with Guardian Health USA for innovative products, reliable manufacturing, and shared growth.
                        </p>
                    </div>

                    <!-- Partnership Content & Handshake Image Row -->
                    <div class="row g-3 g-md-4 align-items-center my-1">
                        <!-- Left: Checklist -->
                        <div class="col-12 col-md-7">
                            <ul class="gh-partnership-list list-unstyled mb-0">
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="flex-shrink-0">
                                        <circle cx="12" cy="12" r="10" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.8"/>
                                        <path d="M7.5 12 L10.5 15 L16.5 9" fill="none" stroke="#2E7032" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span class="fw-semibold text-dark small">Distributors &amp; Resellers</span>
                                </li>
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="flex-shrink-0">
                                        <circle cx="12" cy="12" r="10" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.8"/>
                                        <path d="M7.5 12 L10.5 15 L16.5 9" fill="none" stroke="#2E7032" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span class="fw-semibold text-dark small">Private Label Partnerships</span>
                                </li>
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="flex-shrink-0">
                                        <circle cx="12" cy="12" r="10" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.8"/>
                                        <path d="M7.5 12 L10.5 15 L16.5 9" fill="none" stroke="#2E7032" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span class="fw-semibold text-dark small">Contract Manufacturing</span>
                                </li>
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="flex-shrink-0">
                                        <circle cx="12" cy="12" r="10" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.8"/>
                                        <path d="M7.5 12 L10.5 15 L16.5 9" fill="none" stroke="#2E7032" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span class="fw-semibold text-dark small">Custom Formulation</span>
                                </li>
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="flex-shrink-0">
                                        <circle cx="12" cy="12" r="10" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.8"/>
                                        <path d="M7.5 12 L10.5 15 L16.5 9" fill="none" stroke="#2E7032" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span class="fw-semibold text-dark small">Co-Development Opportunities</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Right / Bottom: Handshake photo -->
                        <div class="col-12 col-md-5">
                            <div class="gh-handshake-img-wrap rounded-3 overflow-hidden shadow-sm">
                                <img src="{{ asset('assets/images/partnership/business-handshake.webp') }}" alt="B2B Business Partnership" class="gh-handshake-img img-fluid" loading="lazy">
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="gh-partnership-cta pt-3">
                        <button type="button" class="btn-gh-partnership w-100 justify-content-center shadow-sm" data-bs-toggle="modal" data-bs-target="#partnerModal">
                            <span>Partner With Us</span>
                            <span class="btn-gh-arrow ms-1">&rarr;</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
