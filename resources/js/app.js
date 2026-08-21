import './bootstrap';
import 'bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const partnerForm = document.getElementById('partnerInquiryForm');
    const partnerSuccess = document.getElementById('partnerFormSuccess');
    const btnReset = document.getElementById('btnResetPartnerForm');

    if (partnerForm) {
        partnerForm.addEventListener('submit', (e) => {
            e.preventDefault();
            e.stopPropagation();

            if (!partnerForm.checkValidity()) {
                partnerForm.classList.add('was-validated');
                return;
            }

            const btnSubmit = document.getElementById('btnSubmitPartner');
            if (btnSubmit) {
                btnSubmit.disabled = true;
                btnSubmit.innerHTML = `
                    <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                    Submitting...
                `;
            }

            setTimeout(() => {
                partnerForm.classList.remove('was-validated');
                partnerForm.reset();
                partnerForm.classList.add('d-none');
                if (partnerSuccess) {
                    partnerSuccess.classList.remove('d-none');
                }
                if (btnSubmit) {
                    btnSubmit.disabled = false;
                    btnSubmit.innerHTML = `
                        <span>SUBMIT INQUIRY</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-1">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    `;
                }
            }, 600);
        });
    }

    if (btnReset) {
        btnReset.addEventListener('click', () => {
            if (partnerSuccess) {
                partnerSuccess.classList.add('d-none');
            }
            if (partnerForm) {
                partnerForm.classList.remove('d-none');
            }
        });
    }
});
