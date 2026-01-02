<?php
// Footer Component - Jan Suraksha Portal
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    margin: 0;
}

footer.footer-main {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 999;
    transform: translateY(100%);
    opacity: 0;
    transition: transform 0.35s ease, opacity 0.35s ease;
    pointer-events: none;
}

footer.footer-main.visible {
    transform: translateY(0);
    opacity: 1;
    pointer-events: auto;
}

.footer-bg {
    width: 100%;
    background: radial-gradient(circle at top, #2563eb 0%, #0f172a 55%, #020617 100%);
}

.footer-inner {
    max-width: 1700px;
    margin: auto;
    padding: 1.5rem 1rem;
    position: relative;
}

.bg-white {
    border-radius: 1.25rem 1.25rem 0 0;
}

@media (max-width: 576px) {
    .footer-inner {
        padding: 1rem 0.75rem;
    }
}

/* Scroll Buttons Container - Fixed Position */
.scroll-btn-container {
    pointer-events: auto;
    position: fixed;
    bottom: 30px;
    right: 20px;
    display: flex;
    gap: 8px;
    flex-direction: column;
    z-index: 1002;
}

.scroll-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 50%, #1e40af 100%) !important;
    color: white !important;
    border: 2px solid rgba(255, 255, 255, 0.2) !important;
    font-size: 18px;
    font-weight: 600;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4), 0 2px 8px rgba(0, 0, 0, 0.15);
    cursor: pointer;
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(10px);
}

.scroll-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.5s;
}

.scroll-btn:hover::before {
    left: 100%;
}

.scroll-btn:hover {
    transform: translateY(-3px) scale(1.08);
    background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 50%, #1e293b 100%) !important;
    border-color: rgba(255, 255, 255, 0.4) !important;
    box-shadow: 0 12px 30px rgba(37, 99, 235, 0.6), 0 4px 12px rgba(0, 0, 0, 0.2);
}

.scroll-btn:active {
    transform: translateY(-1px) scale(1.02);
}

.scroll-btn.scroll-top {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 50%, #1d4ed8 100%) !important;
    box-shadow: 0 6px 20px rgba(59, 130, 246, 0.5), 0 2px 8px rgba(0, 0, 0, 0.15);
}

.scroll-btn.scroll-top:hover {
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 50%, #1e40af 100%) !important;
    box-shadow: 0 12px 30px rgba(59, 130, 246, 0.7), 0 4px 12px rgba(0, 0, 0, 0.2);
}

.scroll-btn.scroll-bottom {
    background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 50%, #2563eb 100%) !important;
    box-shadow: 0 6px 20px rgba(96, 165, 250, 0.5), 0 2px 8px rgba(0, 0, 0, 0.15);
}

.scroll-btn.scroll-bottom:hover {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 50%, #1d4ed8 100%) !important;
    box-shadow: 0 12px 30px rgba(96, 165, 250, 0.7), 0 4px 12px rgba(0, 0, 0, 0.2);
}

.scroll-btn.show {
    opacity: 1;
    visibility: visible;
    animation: slideInUp 0.3s ease;
}

@keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .scroll-btn-container {
        right: 15px;
        gap: 6px;
        bottom: 25px;
    }
    .scroll-btn {
        width: 45px;
        height: 45px;
        font-size: 16px;
    }
}

@media (max-width: 480px) {
    .scroll-btn-container {
        flex-direction: row;
        bottom: 20px;
        right: 20px;
    }
}
</style>

<footer class="footer-main">
    <div class="footer-bg">
        <div class="footer-inner">
            <div class="bg-white shadow-sm px-4 px-md-5 py-4">
                <div class="row gy-4 text-center text-md-start">
                    <!-- Brand -->
                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                            <img src="logo.png" alt="Jan Suraksha" style="height:48px;border-radius:50%;border:2px solid #2563eb;" class="me-2">
                            <div>
                                <h5 class="fw-bold text-primary mb-0">Jan Suraksha</h5>
                                <small class="text-muted">Aapki Suraksha, Hamari Zimmedari</small>
                            </div>
                        </div>
                        <p class="text-muted mb-0">A public safety & grievance redressal portal to report incidents and track complaints securely.</p>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-md-2">
                        <h6 class="fw-bold text-primary mb-3">Quick Links</h6>
                        <ul class="list-unstyled">
                            <li><a href="file-complaint.php" class="text-muted text-decoration-none"><i class="bi bi-flag-fill me-2 text-primary"></i>File Complaint</a></li>
                            <li><a href="track-status.php" class="text-muted text-decoration-none"><i class="bi bi-search me-2 text-primary"></i>Track Status</a></li>
                            <li><a href="blog.php" class="text-muted text-decoration-none"><i class="bi bi-journal-text me-2 text-primary"></i>Blog</a></li>
                            <li><a href="about-us.php" class="text-muted text-decoration-none"><i class="bi bi-info-circle me-2 text-primary"></i>About Us</a></li>
                        </ul>
                    </div>

                    <!-- Legal -->
                    <div class="col-md-2">
                        <h6 class="fw-bold text-primary mb-3">Legal</h6>
                        <ul class="list-unstyled">
                            <li><a href="privacy.php" class="text-muted text-decoration-none"><i class="bi bi-shield-check me-2 text-primary"></i>Privacy</a></li>
                            <li><a href="terms.php" class="text-muted text-decoration-none"><i class="bi bi-file-earmark-text me-2 text-primary"></i>Terms</a></li>
                            <li><a href="admin/index.php" class="text-muted text-decoration-none"><i class="bi bi-lock-fill me-2 text-primary"></i>Admin</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="col-md-4">
                        <h6 class="fw-bold text-primary mb-3">Contact Us</h6>
                        <ul class="list-unstyled text-muted mb-3">
                            <li><i class="bi bi-geo-alt-fill me-2 text-primary"></i>Mumbai, Maharashtra</li>
                            <li><i class="bi bi-envelope-fill me-2 text-primary"></i>contact@jsuraksha.gov.in</li>
                            <li><i class="bi bi-telephone-fill me-2 text-primary"></i>+91 22 2345 6789</li>
                        </ul>
                        <div class="d-flex justify-content-center justify-content-md-start gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center text-white small mt-2 p-2 bg-dark bg-opacity-50">
                © <?= date('Y') ?> Jan Suraksha Portal. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Buttons - Fixed Position Outside Footer -->
<div class="scroll-btn-container">
    <button class="scroll-btn scroll-top" id="scrollTopBtn" aria-label="Scroll to top" title="Scroll to Top">
        <i class="bi bi-arrow-up"></i>
    </button>
    <button class="scroll-btn scroll-bottom" id="scrollBottomBtn" aria-label="Scroll to bottom" title="Scroll to Bottom">
        <i class="bi bi-arrow-down"></i>
    </button>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const footer = document.querySelector('.footer-main');
    const scrollTopBtn = document.getElementById('scrollTopBtn');
    const scrollBottomBtn = document.getElementById('scrollBottomBtn');
    
    if (!footer || !scrollTopBtn || !scrollBottomBtn) return;

    let isAtTop = true;

    function toggleFooter() {
        const scrollTop = window.scrollY;
        const windowHeight = window.innerHeight;
        const docHeight = document.documentElement.scrollHeight;

        if (scrollTop + windowHeight >= docHeight - 60) {
            footer.classList.add('visible');
        } else {
            footer.classList.remove('visible');
        }
    }

    function adjustBodyPadding() {
        const footerHeight = footer.offsetHeight;
        document.body.style.paddingBottom = footerHeight + 'px';
    }

    function handleScroll() {
        const scrollY = window.scrollY;
        const docHeight = document.documentElement.scrollHeight;
        const windowHeight = window.innerHeight;
        
        toggleFooter();
        
        // ✅ PERFECT LOGIC: Show buttons when NOT at extremes
        // Hide when at top OR bottom, show when in middle
        const atTop = scrollY <= 100;
        const atBottom = (scrollY + windowHeight) >= (docHeight - 100);
        const shouldShow = !atTop && !atBottom;
        
        scrollTopBtn.classList.toggle('show', shouldShow);
        scrollBottomBtn.classList.toggle('show', shouldShow);
        
        // Update state for button icons if needed
        isAtTop = atTop;
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    function scrollToBottom() {
        window.scrollTo({
            top: document.body.scrollHeight,
            behavior: 'smooth'
        });
    }

    // Event listeners
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('resize', () => {
        adjustBodyPadding();
        handleScroll();
    });
    scrollTopBtn.addEventListener('click', scrollToTop);
    scrollBottomBtn.addEventListener('click', scrollToBottom);
    
    // Initial calls
    handleScroll();
    adjustBodyPadding();
});
</script>

</main>
</body>
</html>
