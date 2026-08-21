<!-- Partner With Us Modal -->
<div class="modal fade gh-modal" id="partnerModal" tabindex="-1" aria-labelledby="partnerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content gh-modal-content border-0 shadow-lg">
            
            <!-- Modal Header -->
            <div class="modal-header gh-modal-header border-0 pb-0 px-4 pt-4 position-relative">
                <div class="d-flex align-items-center gap-3">
                    <div class="gh-modal-header-icon d-flex align-items-center justify-content-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div>
                        <span class="gh-modal-badge">PARTNERSHIP INQUIRY</span>
                        <h4 class="modal-title gh-modal-title fw-bold" id="partnerModalLabel">Partner With Guardian Health USA</h4>
                    </div>
                </div>
                <button type="button" class="btn-close gh-modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Subtitle -->
            <div class="px-4 pt-2">
                <p class="gh-modal-subtitle text-muted mb-0">
                    Connect with our manufacturing &amp; distribution team. Fill out the details below and we will get in touch within 24 business hours.
                </p>
            </div>

            <!-- Modal Body / Form -->
            <div class="modal-body px-4 py-4">
                
                <!-- Success Message Container (Hidden by default) -->
                <div id="partnerFormSuccess" class="alert alert-success d-none border-0 shadow-sm p-4 text-center" role="alert">
                    <div class="mb-3 d-inline-flex p-3 rounded-circle bg-success text-white">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <h5 class="fw-bold text-success mb-2">Inquiry Submitted Successfully!</h5>
                    <p class="small text-muted mb-3">
                        Thank you for reaching out. Our business development team has received your details and will contact you promptly.
                    </p>
                    <button type="button" class="btn btn-sm btn-outline-success px-4" id="btnResetPartnerForm">
                        Submit Another Inquiry
                    </button>
                </div>

                <!-- Main Form -->
                <form id="partnerInquiryForm" class="gh-partner-form needs-validation" novalidate>
                    
                    <div class="row g-3">
                        
                        <!-- 1. Full Name (Required) -->
                        <div class="col-12 col-md-6">
                            <label for="partnerName" class="form-label gh-form-label">
                                Full Name <span class="text-danger">*</span>
                            </label>
                            <div class="input-group gh-input-group">
                                <span class="input-group-text gh-input-icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </span>
                                <input type="text" class="form-control gh-form-control" id="partnerName" name="name" placeholder="e.g. Michael Smith" required>
                                <div class="invalid-feedback">Please enter your full name.</div>
                            </div>
                        </div>

                        <!-- 2. Email Address (Required) -->
                        <div class="col-12 col-md-6">
                            <label for="partnerEmail" class="form-label gh-form-label">
                                Email Address <span class="text-danger">*</span>
                            </label>
                            <div class="input-group gh-input-group">
                                <span class="input-group-text gh-input-icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </span>
                                <input type="email" class="form-control gh-form-control" id="partnerEmail" name="email" placeholder="e.g. michael@company.com" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                        </div>

                        <!-- 3. Mobile Number (Required) -->
                        <div class="col-12 col-md-6">
                            <label for="partnerPhone" class="form-label gh-form-label">
                                Mobile Number <span class="text-danger">*</span>
                            </label>
                            <div class="input-group gh-input-group">
                                <span class="input-group-text gh-input-icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                </span>
                                <input type="tel" class="form-control gh-form-control" id="partnerPhone" name="phone" placeholder="e.g. +1 (732) 823-7099" required>
                                <div class="invalid-feedback">Please provide your phone/mobile number.</div>
                            </div>
                        </div>

                        <!-- 4. Company Name (Optional) -->
                        <div class="col-12 col-md-6">
                            <label for="partnerCompany" class="form-label gh-form-label">
                                Company Name <span class="text-muted fw-normal">(Optional)</span>
                            </label>
                            <div class="input-group gh-input-group">
                                <span class="input-group-text gh-input-icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg>
                                </span>
                                <input type="text" class="form-control gh-form-control" id="partnerCompany" name="company" placeholder="e.g. Apex Wellness LLC">
                            </div>
                        </div>

                        <!-- 5. Physical / Business Address (Required) -->
                        <div class="col-12">
                            <label for="partnerAddress" class="form-label gh-form-label">
                                Address <span class="text-danger">*</span>
                            </label>
                            <div class="input-group gh-input-group">
                                <span class="input-group-text gh-input-icon align-items-start pt-2">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                </span>
                                <textarea class="form-control gh-form-control" id="partnerAddress" name="address" rows="2" placeholder="e.g. Street Address, City, State, Zip Code, Country" required></textarea>
                                <div class="invalid-feedback">Please enter your address.</div>
                            </div>
                        </div>

                    </div>

                    <!-- Trust Note & Submit Action -->
                    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3 mt-4 pt-2 border-top">
                        <div class="d-flex align-items-center gap-2 text-muted small">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#2E7D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <span>Information is strictly confidential.</span>
                        </div>
                        
                        <button type="submit" class="btn-gh btn-gh-green w-100 w-sm-auto justify-content-center px-4" id="btnSubmitPartner">
                            <span>SUBMIT INQUIRY</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-1">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>
                    </div>

                </form>

            </div>

            <!-- Modal Footer -->
            <div class="modal-footer gh-modal-footer border-0 bg-light py-2 px-4 justify-content-between">
                <span class="text-muted" style="font-size: 0.75rem;">Guardian Health USA &copy; 2004</span>
                <span class="text-muted" style="font-size: 0.75rem;">Direct: 732-823-7099 | info@guardianhealth.net</span>
            </div>

        </div>
    </div>
</div>
