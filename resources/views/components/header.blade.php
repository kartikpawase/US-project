<!-- Guardian Health USA — Header & Navigator -->
<header class="gh-header">
    <!-- Top Information Bar -->
    <div class="gh-top-bar bg-gh-navy text-white">
        <div class="gh-container d-flex justify-content-between align-items-center flex-wrap">
            <!-- Key Feature Indicators -->
            <div class="gh-top-features d-flex align-items-center flex-wrap">
                <span class="gh-top-item d-flex align-items-center">
                    <svg class="gh-top-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                    </svg>
                    ZERO SUGAR
                </span>
                <span class="gh-top-divider">•</span>
                <span class="gh-top-item d-flex align-items-center">
                    <svg class="gh-top-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                    </svg>
                    5 KEY ELECTROLYTES
                </span>
                <span class="gh-top-divider">•</span>
                <span class="gh-top-item d-flex align-items-center">
                    <svg class="gh-top-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                    </svg>
                    ADVANCED HYDRATION
                </span>
                <span class="gh-top-divider">•</span>
                <span class="gh-top-item d-flex align-items-center">
                    <svg class="gh-top-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                    EVERYDAY WELLNESS
                </span>
            </div>

            <!-- Social Media Icons-->
            <div class="gh-top-social d-none d-md-flex align-items-center gap-3">
                <a href="#" class="gh-social-link text-white-50" aria-label="Facebook">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                    </svg>
                </a>
                <a href="#" class="gh-social-link text-white-50" aria-label="Instagram">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                    </svg>
                </a>
                <a href="#" class="gh-social-link text-white-50" aria-label="LinkedIn">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                        <rect x="2" y="9" width="4" height="12"/>
                        <circle cx="4" cy="4" r="2"/>
                    </svg>
                </a>
                <a href="#" class="gh-social-link text-white-50" aria-label="YouTube">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/>
                        <polygon fill="#0B103A" points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-white gh-navbar shadow-sm py-2">
        <div class="gh-container d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between">
            
            <!-- Top Locked Row for Brand Logo & Mobile Toggler -->
            <div class="gh-nav-header-row d-flex align-items-center justify-content-between w-100 w-lg-auto">
                <a class="navbar-brand py-0 my-0 text-decoration-none d-flex align-items-center" href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Guardian Health" class="gh-navbar-logo" height="42">
                </a>

                <!-- Mobile Navbar Toggler -->
                <button class="navbar-toggler border-0 shadow-none p-2" type="button" data-bs-toggle="collapse" data-bs-target="#ghNavbarContent" aria-controls="ghNavbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <!-- Navigation Links & CTA (Expands below top row on mobile) -->
            <div class="collapse navbar-collapse w-100 w-lg-auto" id="ghNavbarContent">
                <ul class="navbar-nav mx-auto align-items-lg-center gap-lg-1 gap-xl-2 py-3 py-lg-0">
                    <li class="nav-item">
                        <a class="nav-link gh-nav-link active" aria-current="page" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item dropdown gh-dropdown">
                        <a class="nav-link gh-nav-link dropdown-toggle d-flex align-items-center gap-1" href="#portfolio" id="navbarProductsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PRODUCTS
                            <svg class="gh-dropdown-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu gh-dropdown-menu shadow-lg border-0" aria-labelledby="navbarProductsDropdown">
                            <li>
                                <a class="dropdown-item gh-dropdown-item d-flex align-items-center gap-2" href="#portfolio">
                                    <span class="gh-dropdown-dot" style="background-color: #0A6EFF;"></span>
                                    <div>
                                        <strong class="d-block gh-dropdown-title">Hydrate Elite™</strong>
                                        <span class="gh-dropdown-subtitle">Advanced Hydration &amp; Electrolytes</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item gh-dropdown-item d-flex align-items-center gap-2" href="#portfolio">
                                    <span class="gh-dropdown-dot" style="background-color: #FF8A00;"></span>
                                    <div>
                                        <strong class="d-block gh-dropdown-title">Ignite™</strong>
                                        <span class="gh-dropdown-subtitle">Clean Energy &amp; Performance</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item gh-dropdown-item d-flex align-items-center gap-2" href="#portfolio">
                                    <span class="gh-dropdown-dot" style="background-color: #B28228;"></span>
                                    <div>
                                        <strong class="d-block gh-dropdown-title">Royal™</strong>
                                        <span class="gh-dropdown-subtitle">Botanical Skincare &amp; Cosmetics</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item gh-dropdown-item d-flex align-items-center gap-2" href="#portfolio">
                                    <span class="gh-dropdown-dot" style="background-color: #990000;"></span>
                                    <div>
                                        <strong class="d-block gh-dropdown-title">Painex™</strong>
                                        <span class="gh-dropdown-subtitle">Fast-Acting Topical Pain Relief</span>
                                    </div>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider my-1"></li>
                            <li>
                                <a class="dropdown-item gh-dropdown-item gh-dropdown-viewall d-flex align-items-center justify-content-between" href="#portfolio">
                                    <span>View All Products</span>
                                    <span>&rarr;</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link gh-nav-link" href="#promotions">
                            PRIVATE LABEL
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link gh-nav-link" href="#industries-we-serve">
                            MANUFACTURING
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link gh-nav-link" href="#quality-trust">
                            QUALITY
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link gh-nav-link" href="#about-us">
                            ABOUT US
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link gh-nav-link" href="#gh-footer">
                            CONTACT US
                        </a>
                    </li>
                </ul>

                <!-- Header CTA Button -->
                <div class="d-flex align-items-center mt-3 mt-lg-0">
                    <button type="button" class="btn-gh btn-gh-green btn-gh-sm w-100 w-lg-auto" data-bs-toggle="modal" data-bs-target="#partnerModal">
                        PARTNER WITH US
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-1">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>
