<!-- Coming Soon Modal -->
<div class="modal fade" id="comingSoonModal" tabindex="-1" aria-labelledby="comingSoonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 16px; overflow: hidden;">
            <div class="modal-header border-0 bg-light px-4 pt-4 pb-2">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge" style="background-color: var(--gh-blue); color: white; font-weight: 700; font-size: 0.75rem;">COMING SOON</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 py-3 text-center">
                <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background-color: rgba(10, 110, 255, 0.08); color: var(--gh-blue);">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <h4 class="modal-title fw-bold text-gh-navy mb-2" id="comingSoonModalLabel">Page Under Construction</h4>
                <p class="text-muted small mb-4">
                    We are actively expanding our digital portal. Detailed specifications, product catalogs, and partnership tools will be available here shortly.
                </p>
                <div class="d-grid gap-2">
                    <button type="button" class="btn-gh btn-gh-primary w-100 justify-content-center" data-bs-dismiss="modal">
                        BACK TO HOME
                    </button>
                </div>
            </div>
            <div class="modal-footer border-0 bg-light px-4 py-2 justify-content-center">
                <span class="text-muted" style="font-size: 0.75rem;">Guardian Health USA &copy; {{ date('Y') }}</span>
            </div>
        </div>
    </div>
</div>
