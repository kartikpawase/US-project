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
                    <button type="button" class="btn-gh btn-gh-primary" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                        EXPLORE PRODUCTS
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                    <button type="button" class="btn-gh btn-gh-outline" data-bs-toggle="modal" data-bs-target="#partnerModal">
                        PARTNER WITH US
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
            <div class="col-6 col-md-4 col-lg gh-trust-col">
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
                        <button type="button" class="btn-gh-about" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
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
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-portfolio-col">
                <div class="gh-portfolio-card">
                    <div class="gh-portfolio-card-image">
                        <img src="{{ asset('assets/images/products/hydrate-elite.jpg') }}" alt="HYDRATE ELITE™" class="gh-portfolio-img" loading="lazy">
                    </div>
                    <div class="gh-portfolio-content">
                        <h3 class="gh-portfolio-card-title">HYDRATE ELITE™</h3>
                        <p class="gh-portfolio-card-desc">
                            Advanced electrolyte hydration for performance and everyday wellness.
                        </p>
                        <button type="button" class="btn-gh-portfolio" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                            <span>VIEW PRODUCTS</span>
                            <span class="btn-gh-arrow">→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- CARD 2: IGNITE™ ENERGY DRINK -->
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-portfolio-col">
                <div class="gh-portfolio-card">
                    <div class="gh-portfolio-card-image">
                        <img src="{{ asset('assets/images/products/ignite-energy.jpg') }}" alt="IGNITE™ ENERGY DRINK" class="gh-portfolio-img" loading="lazy">
                    </div>
                    <div class="gh-portfolio-content">
                        <h3 class="gh-portfolio-card-title">IGNITE™<br>ENERGY DRINK</h3>
                        <p class="gh-portfolio-card-desc">
                            Clean energy. Smart nutrition. Total wellness.
                        </p>
                        <button type="button" class="btn-gh-portfolio" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                            <span>VIEW PRODUCTS</span>
                            <span class="btn-gh-arrow">→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- CARD 3: ROYAL™ SKINCARE -->
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-portfolio-col">
                <div class="gh-portfolio-card">
                    <div class="gh-portfolio-card-image">
                        <img src="{{ asset('assets/images/products/royal-skincare.jpg') }}" alt="ROYAL™ SKINCARE" class="gh-portfolio-img" loading="lazy">
                    </div>
                    <div class="gh-portfolio-content">
                        <h3 class="gh-portfolio-card-title">ROYAL™<br>SKINCARE</h3>
                        <p class="gh-portfolio-card-desc">
                            Luxury skincare. Visible results. Advanced science for radiant skin.
                        </p>
                        <button type="button" class="btn-gh-portfolio" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                            <span>VIEW PRODUCTS</span>
                            <span class="btn-gh-arrow">→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- CARD 4: PAINEX™ PAIN RELIEVER -->
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-portfolio-col">
                <div class="gh-portfolio-card">
                    <div class="gh-portfolio-card-image">
                        <img src="{{ asset('assets/images/products/painex-pain-reliever.jpg') }}" alt="PAINEX™ PAIN RELIEVER" class="gh-portfolio-img" loading="lazy">
                    </div>
                    <div class="gh-portfolio-content">
                        <h3 class="gh-portfolio-card-title">PAINEX™<br>PAIN RELIEVER</h3>
                        <p class="gh-portfolio-card-desc">
                            Fast relief you can trust. Pain reliever · Fever reducer (NSAID)
                        </p>
                        <button type="button" class="btn-gh-portfolio" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                            <span>VIEW PRODUCTS</span>
                            <span class="btn-gh-arrow">→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- CARD 5: CONTRACT MANUFACTURING -->
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-portfolio-col">
                <div class="gh-portfolio-card">
                    <div class="gh-portfolio-card-image">
                        <img src="{{ asset('assets/images/products/contract-manufacturing.jpg') }}" alt="CONTRACT MANUFACTURING" class="gh-portfolio-img" loading="lazy">
                    </div>
                    <div class="gh-portfolio-content">
                        <h3 class="gh-portfolio-card-title">CONTRACT<br>MANUFACTURING</h3>
                        <p class="gh-portfolio-card-desc">
                            End-to-end solutions for your brand.
                        </p>
                        <button type="button" class="btn-gh-portfolio" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
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
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-packaging-col">
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
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-packaging-col">
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
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-packaging-col">
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
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-packaging-col">
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
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-packaging-col">
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
        <div class="gh-packaging-cta-wrap">
            <button type="button" class="btn-gh-green-cta" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                <span>VIEW ALL HYDRATE ELITE™ PRODUCTS</span>
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
        <div class="row g-3 g-xl-4 gh-promo-row">
            
            <!-- CARD 01: IGNITE+™ ENERGY DRINK -->
            <div class="col-12 col-sm-6 col-lg-3 gh-promo-col">
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
                            <button type="button" class="btn-gh-promo" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                                <span>EXPLORE IGNITE+™</span>
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
            <div class="col-12 col-sm-6 col-lg-3 gh-promo-col">
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
                            <button type="button" class="btn-gh-promo" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                                <span>EXPLORE ROYAL™</span>
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
            <div class="col-12 col-sm-6 col-lg-3 gh-promo-col">
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
                            <button type="button" class="btn-gh-promo" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                                <span>EXPLORE PAINEX™</span>
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
            <div class="col-12 col-sm-6 col-lg-3 gh-promo-col">
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
                            <button type="button" class="btn-gh-promo" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                                <span>LEARN MORE</span>
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
<section class="gh-industries-section py-5" id="industries-we-serve">
    <div class="gh-container py-lg-2">
        
        <!-- Section Header -->
        <div class="text-center gh-industries-header mb-4 mb-lg-5">
            <h2 class="gh-industries-title">INDUSTRIES WE SERVE</h2>
            <div class="gh-industries-divider"></div>
            <p class="gh-industries-intro">
                We partner with brands across a variety of industries to create science-backed products that inspire health and well-being.
            </p>
        </div>

        <!-- 5 Industry Cards in 1 Row on Desktop -->
        <div class="row g-3 g-xl-4 justify-content-center gh-industries-row mb-4 mb-lg-5">
            
            <!-- CARD 1: NUTRACEUTICALS -->
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-industries-col">
                <div class="gh-industry-card">
                    <div class="gh-industry-icon-wrap">
                        <svg width="56" height="56" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="gh-industry-svg">
                            <!-- Bottle Cap & Neck -->
                            <rect x="22" y="8" width="16" height="5" rx="1.5" stroke="#0B103A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Bottle Body -->
                            <path d="M25 13V17H19C16.8 17 15 18.8 15 21V46C15 48.2 16.8 50 19 50H37C39.2 50 41 48.2 41 46V21C41 18.8 39.2 17 37 17H31V13" stroke="#0B103A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Green Leaf Accent on Bottle -->
                            <path d="M28 26C34 26 35 32 35 36C31 36 25 35 25 29C25 27 26.5 26 28 26Z" fill="#EBF6EC" stroke="#2E7032" stroke-width="2.2" stroke-linejoin="round"/>
                            <path d="M26 34C29 31 32 29 35 28" stroke="#2E7032" stroke-width="2" stroke-linecap="round"/>
                            <!-- Angled Capsule on Right -->
                            <g transform="translate(36, 32) rotate(35)">
                                <rect x="0" y="0" width="12" height="24" rx="6" stroke="#0B103A" stroke-width="2.2"/>
                                <line x1="0" y1="12" x2="12" y2="12" stroke="#2E7032" stroke-width="2.2"/>
                                <path d="M0 6C0 2.7 2.7 0 6 0C9.3 0 12 2.7 12 6V12H0V6Z" fill="#EBF6EC" stroke="none"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="gh-industry-card-title">NUTRACEUTICALS</h3>
                    <div class="gh-industry-card-divider"></div>
                    <p class="gh-industry-card-desc">
                        Premium supplements and functional nutrition products for everyday wellness.
                    </p>
                </div>
            </div>

            <!-- CARD 2: BEAUTY & COSMETICS -->
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-industries-col">
                <div class="gh-industry-card">
                    <div class="gh-industry-icon-wrap">
                        <svg width="56" height="56" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="gh-industry-svg">
                            <!-- Cream swirl -->
                            <path d="M24 22C24 16 32 12 34 16C37 13 42 16 41 22" stroke="#0B103A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Jar lid rim -->
                            <rect x="18" y="22" width="28" height="6" rx="2" stroke="#0B103A" stroke-width="2.5" stroke-linejoin="round"/>
                            <!-- Jar container base -->
                            <path d="M19 28H45C45 28 44 46 32 46C20 46 19 28 19 28Z" stroke="#0B103A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Botanical Green Leaf -->
                            <path d="M37 31C47 28 51 37 49 46C41 47 34 42 37 31Z" fill="#EBF6EC" stroke="#2E7032" stroke-width="2.2" stroke-linejoin="round"/>
                            <path d="M39 42C43 38 46 35 49 34" stroke="#2E7032" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="gh-industry-card-title">BEAUTY &amp; COSMETICS</h3>
                    <div class="gh-industry-card-divider"></div>
                    <p class="gh-industry-card-desc">
                        Science-driven beauty solutions that support confidence and natural well-being.
                    </p>
                </div>
            </div>

            <!-- CARD 3: SPORTS NUTRITION -->
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-industries-col">
                <div class="gh-industry-card">
                    <div class="gh-industry-icon-wrap">
                        <svg width="56" height="56" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="gh-industry-svg">
                            <!-- Muscular Arm Outline -->
                            <path d="M17 43C17 36 21 31 26 27C28 24 30 17 26 14C22 11 18 15 18 20" stroke="#0B103A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17 43C17 48 23 51 32 50C39 49 44 43 44 36C44 32 40 30 35 29C32 28 27 28 26 27" stroke="#0B103A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M26 14C31 15 36 19 35 26" stroke="#0B103A" stroke-width="2.5" stroke-linecap="round"/>
                            <!-- Green Cross Plus Symbol -->
                            <g transform="translate(37, 27)">
                                <rect x="0" y="0" width="16" height="16" rx="4" fill="#EBF6EC" stroke="#2E7032" stroke-width="2"/>
                                <path d="M8 3.5V12.5M3.5 8H12.5" stroke="#2E7032" stroke-width="2.5" stroke-linecap="round"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="gh-industry-card-title">SPORTS NUTRITION</h3>
                    <div class="gh-industry-card-divider"></div>
                    <p class="gh-industry-card-desc">
                        High-performance products designed to fuel athletes and active lifestyles.
                    </p>
                </div>
            </div>

            <!-- CARD 4: HEALTH & WELLNESS -->
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-industries-col">
                <div class="gh-industry-card">
                    <div class="gh-industry-icon-wrap">
                        <svg width="56" height="56" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="gh-industry-svg">
                            <!-- Heart Outline -->
                            <path d="M30 48C17 38 12 28 12 20C12 14 16.5 10 22 10C26 10 29.5 12.5 31 15C32.5 12.5 36 10 40 10C45.5 10 50 14 50 20C50 25 47 31 42 36" stroke="#0B103A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- ECG Pulse Line in Green -->
                            <path d="M17 23H23L26 18L30 30L34 21L37 25H43" stroke="#2E7032" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Green Cross Plus Symbol -->
                            <g transform="translate(37, 34)">
                                <rect x="0" y="0" width="16" height="16" rx="4" fill="#EBF6EC" stroke="#2E7032" stroke-width="2"/>
                                <path d="M8 3.5V12.5M3.5 8H12.5" stroke="#2E7032" stroke-width="2.5" stroke-linecap="round"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="gh-industry-card-title">HEALTH &amp; WELLNESS</h3>
                    <div class="gh-industry-card-divider"></div>
                    <p class="gh-industry-card-desc">
                        Holistic wellness products that promote better health and quality of life.
                    </p>
                </div>
            </div>

            <!-- CARD 5: PHARMACEUTICAL -->
            <div class="col-12 col-sm-6 col-md-4 col-lg gh-industries-col">
                <div class="gh-industry-card">
                    <div class="gh-industry-icon-wrap">
                        <svg width="56" height="56" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="gh-industry-svg">
                            <!-- Handle -->
                            <path d="M25 18V13C25 11.5 26.5 10 28 10H36C37.5 10 39 11.5 39 13V18" stroke="#0B103A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Briefcase Box Body -->
                            <rect x="14" y="18" width="36" height="30" rx="5" stroke="#0B103A" stroke-width="2.5" stroke-linejoin="round"/>
                            <!-- Green Cross Symbol -->
                            <g transform="translate(24, 25)">
                                <path d="M5 2H11V5H14V11H11V14H5V11H2V5H5V2Z" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.8" stroke-linejoin="round"/>
                                <path d="M8 3.5V12.5M3.5 8H12.5" stroke="#2E7032" stroke-width="2.2" stroke-linecap="round"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="gh-industry-card-title">PHARMACEUTICAL</h3>
                    <div class="gh-industry-card-divider"></div>
                    <p class="gh-industry-card-desc">
                        cGMP-compliant manufacturing for quality, safety, and regulatory excellence.
                    </p>
                </div>
            </div>

        </div>

        <!-- Center CTA Button -->
        <div class="text-center gh-industries-cta-wrap">
            <button type="button" class="btn-gh-industry-cta" data-bs-toggle="modal" data-bs-target="#partnerModal">
                <span>LET'S PARTNER</span>
                <span class="btn-gh-arrow">→</span>
            </button>
        </div>

    </div>
</section>

<!-- ========================================
     QUALITY YOU CAN TRUST & PARTNERSHIP
======================================== -->
<section class="gh-quality-trust-section" id="quality-trust">
    <div class="container gh-container">
        <div class="row g-4 align-items-stretch">
            
            <!-- LEFT COLUMN: QUALITY YOU CAN TRUST -->
            <div class="col-12 col-lg-6 gh-quality-col pe-lg-4">
                <div class="gh-quality-content h-100 d-flex flex-column justify-content-between">
                    <div>
                        <h2 class="gh-quality-title">QUALITY YOU CAN TRUST</h2>
                        <p class="gh-quality-desc">
                            We are committed to the highest quality standards in every product we create.
                        </p>
                    </div>

                    <!-- 6 Quality Icons Row -->
                    <div class="gh-quality-badges-row my-auto">
                        <!-- 1. cGMP CERTIFIED -->
                        <div class="gh-quality-badge-item">
                            <div class="gh-quality-badge-icon">
                                <span class="material-symbols-outlined gh-google-icon">verified_user</span>
                            </div>
                            <span class="gh-quality-badge-label">cGMP<br>CERTIFIED</span>
                        </div>

                        <!-- 2. REGISTERED FACILITY -->
                        <div class="gh-quality-badge-item">
                            <div class="gh-quality-badge-icon">
                                <span class="material-symbols-outlined gh-google-icon">domain_verification</span>
                            </div>
                            <span class="gh-quality-badge-label">REGISTERED<br>FACILITY*</span>
                        </div>

                        <!-- 3. QUALITY ASSURANCE -->
                        <div class="gh-quality-badge-item">
                            <div class="gh-quality-badge-icon">
                                <span class="material-symbols-outlined gh-google-icon">fact_check</span>
                            </div>
                            <span class="gh-quality-badge-label">QUALITY<br>ASSURANCE</span>
                        </div>

                        <!-- 4. MICROBIOLOGY / RIGOROUSLY TESTED -->
                        <div class="gh-quality-badge-item">
                            <div class="gh-quality-badge-icon">
                                <span class="material-symbols-outlined gh-google-icon">biotech</span>
                            </div>
                            <span class="gh-quality-badge-label">RIGOROUSLY<br>TESTED</span>
                        </div>

                        <!-- 5. ON-TIME DELIVERY -->
                        <div class="gh-quality-badge-item">
                            <div class="gh-quality-badge-icon">
                                <span class="material-symbols-outlined gh-google-icon">schedule</span>
                            </div>
                            <span class="gh-quality-badge-label">ON-TIME<br>DELIVERY</span>
                        </div>

                        <!-- 6. SUSTAINABLE PACKAGING -->
                        <div class="gh-quality-badge-item">
                            <div class="gh-quality-badge-icon">
                                <span class="material-symbols-outlined gh-google-icon">recycling</span>
                            </div>
                            <span class="gh-quality-badge-label">SUSTAINABLE<br>PACKAGING</span>
                        </div>
                    </div>

                    <div class="gh-quality-footnote">
                        *Facility registration available upon request.
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: LET'S BUILD SUCCESS TOGETHER -->
            <div class="col-12 col-lg-6 gh-partnership-col ps-lg-4">
                <div class="row g-3 align-items-stretch h-100">
                    <!-- Left: Checklist & CTA -->
                    <div class="col-12 col-sm-7 d-flex flex-column justify-content-between h-100">
                        <div>
                            <h2 class="gh-partnership-title">LET'S BUILD SUCCESS TOGETHER</h2>
                            <p class="gh-partnership-desc">
                                Partner with Guardian Health USA for innovative products, reliable manufacturing, and shared growth.
                            </p>
                            
                            <ul class="gh-partnership-list list-unstyled mb-3">
                                <li>
                                    <span class="gh-check-icon">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.8"/>
                                            <path d="M7.5 12 L10.5 15 L16.5 9" fill="none" stroke="#2E7032" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <span>Distributors &amp; Resellers</span>
                                </li>
                                <li>
                                    <span class="gh-check-icon">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.8"/>
                                            <path d="M7.5 12 L10.5 15 L16.5 9" fill="none" stroke="#2E7032" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <span>Private Label Partnerships</span>
                                </li>
                                <li>
                                    <span class="gh-check-icon">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.8"/>
                                            <path d="M7.5 12 L10.5 15 L16.5 9" fill="none" stroke="#2E7032" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <span>Contract Manufacturing</span>
                                </li>
                                <li>
                                    <span class="gh-check-icon">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.8"/>
                                            <path d="M7.5 12 L10.5 15 L16.5 9" fill="none" stroke="#2E7032" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <span>Custom Formulation</span>
                                </li>
                                <li>
                                    <span class="gh-check-icon">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10" fill="#EBF6EC" stroke="#2E7032" stroke-width="1.8"/>
                                            <path d="M7.5 12 L10.5 15 L16.5 9" fill="none" stroke="#2E7032" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <span>Co-Development Opportunities</span>
                                </li>
                            </ul>
                        </div>

                        <div class="gh-partnership-cta pt-1">
                            <button type="button" class="btn-gh-partnership" data-bs-toggle="modal" data-bs-target="#partnerModal">
                                <span>PARTNER WITH US</span>
                                <span class="btn-gh-arrow">→</span>
                            </button>
                        </div>
                    </div>

                    <!-- Right: Handshake photo -->
                    <div class="col-12 col-sm-5 d-flex flex-column">
                        <div class="gh-handshake-img-wrap flex-grow-1">
                            <img src="{{ asset('assets/images/partnership/business-handshake.webp') }}" alt="B2B Business Partnership" class="gh-handshake-img" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
